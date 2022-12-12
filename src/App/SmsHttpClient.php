<?php
/**
 * Description of SmsHttpClient.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms;

use Dotsplatform\Sms\DTO\SendPulseViberSenderNamesList;
use Dotsplatform\Sms\DTO\SmsList;
use Dotsplatform\Sms\Http\HttpClient;
use Exception;
use GuzzleHttp\Exception\ClientException;
use Dotsplatform\Sms\DTO\SmsAccountSettingsDTO;
use Dotsplatform\Sms\DTO\SmsMessageDTO;
use Dotsplatform\Sms\DTO\StoreAccountDTO;
use Dotsplatform\Sms\DTO\StoreProviderDTO;
use Dotsplatform\Sms\DTO\SmsFiltersDTO;

class SmsHttpClient extends HttpClient
{
    private const GET_MESSAGES_URL_TEMPLATE = '/api/accounts/%s/sms';
    private const SEND_SMS_URL_TEMPLATE = '/api/accounts/%s/sms';
    private const STORE_ACCOUNT_URL_TEMPLATE = '/api/accounts';
    private const FIND_ACCOUNT_URL_TEMPLATE = '/api/accounts/%s';
    private const FIND_ACCOUNT_PROVIDER_URL_TEMPLATE = '/api/accounts/%s/providers/%s';
    private const STORE_PROVIDER_SMS_URL_TEMPLATE = '/api/accounts/%s/providers/%s';
    private const GET_PROVIDER_SENDPULSE_VIBER_SENDER_NAMES_URL_TEMPLATE = '/api/accounts/%s/providers/send-pulse/viber-names';


    public function sendSms(SmsMessageDTO $dto): void
    {
        $url = $this->generateSendSmsUrl($dto->getAccountId());
        $body = [
            'phone' => $dto->getPhone(),
            'message' => $dto->getMessage(),
        ];
        $this->post($url, $body);
    }

    public function getMessages(SmsFiltersDTO $dto): SmsList
    {
        $url = $this->generateGetMessagesUrl($dto->getAccountId());
        $params = $dto->toArray();
        unset($params['accountId']);
        try {
            $response = $this->get($url, [
                'query' => $params,
            ]);
            return SmsList::fromArray($response);
        } catch (Exception) {
            return new SmsList();
        }
    }

    public function storeAccount(StoreAccountDTO $dto): void
    {
        $url = $this->generateStoreAccountUrl();
        $body = [
            'id' => $dto->getId(),
            'name' => $dto->getName(),
            'settings' => $dto->getSettings(),
        ];
        try {
            $this->post($url, $body);
        } catch (ClientException) {
            return;
        }
    }

    public function findAccountSettings(string $accountId): ?SmsAccountSettingsDTO
    {
        $url = $this->generateFindAccountUrl($accountId);
        try {
            $response = $this->get($url);
            $settings = $response['settings'] ?? [];
            return SmsAccountSettingsDTO::fromArray($settings);
        } catch (ClientException) {
            return null;
        }
    }

    public function storeProvider(StoreProviderDTO $dto): void
    {
        $url = $this->generateStoreAccountProviderUrl($dto);
        $body = [
            'type' => $dto->getType(),
            'data' => $dto->getData(),
        ];
        try {
            $this->post($url, $body);
        } catch (ClientException) {
            return;
        }
    }

    public function findAccountProviderByType(string $accountId, string $providerType): ?array
    {
        $url = $this->generateFindAccountProviderByType($accountId, $providerType);
        try {
            return $this->get($url);
        } catch (ClientException) {
            return null;
        }
    }

    public function getProviderSendPulseViberSenderNames(string $accountId): SendPulseViberSenderNamesList
    {
        $url = $this->generateProviderSendPulseViberSenderNamesUrl($accountId);
        $response = $this->get($url);
        if (!is_array($response)) {
            return SendPulseViberSenderNamesList::empty();
        }
        return SendPulseViberSenderNamesList::fromArray($response);
    }

    private function generateGetMessagesUrl(string $accountId): string
    {
        return sprintf(self::GET_MESSAGES_URL_TEMPLATE, $accountId);
    }

    private function generateSendSmsUrl(string $accountId): string
    {
        return sprintf(self::SEND_SMS_URL_TEMPLATE, $accountId);
    }

    private function generateStoreAccountUrl(): string
    {
        return self::STORE_ACCOUNT_URL_TEMPLATE;
    }

    private function generateFindAccountUrl(string $accountId): string
    {
        return sprintf(self::FIND_ACCOUNT_URL_TEMPLATE, $accountId);
    }

    private function generateStoreAccountProviderUrl(StoreProviderDTO $dto): string
    {
        return sprintf(
            self::STORE_PROVIDER_SMS_URL_TEMPLATE,
            $dto->getAccountId(),
            $dto->getType(),
        );
    }

    private function generateProviderSendPulseViberSenderNamesUrl(string $accountId): string
    {
        return sprintf(
            self::GET_PROVIDER_SENDPULSE_VIBER_SENDER_NAMES_URL_TEMPLATE,
            $accountId,
        );
    }

    private function generateFindAccountProviderByType(string $accountId, string $providerType): string
    {
        return sprintf(self::FIND_ACCOUNT_PROVIDER_URL_TEMPLATE, $accountId, $providerType);
    }
}
