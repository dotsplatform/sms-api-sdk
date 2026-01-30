<?php
/**
 * Description of SmsService.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms;

use Dotsplatform\Sms\DTO\InfobipDTO;
use Dotsplatform\Sms\DTO\MainSmsDTO;
use Dotsplatform\Sms\DTO\SendPulseDTO;
use Dotsplatform\Sms\DTO\SendPulseViberSenderNamesList;
use Dotsplatform\Sms\DTO\SmsAccountSettingsDTO;
use Dotsplatform\Sms\DTO\SmsList;
use Dotsplatform\Sms\DTO\SmsMessageDTO;
use Dotsplatform\Sms\DTO\SmsProviderType;
use Dotsplatform\Sms\DTO\Statistics\SmsCountByPhoneFiltersDTO;
use Dotsplatform\Sms\DTO\Statistics\SmsCountByPhoneList;
use Dotsplatform\Sms\DTO\StoreAccountDTO;
use Dotsplatform\Sms\DTO\StoreProviderDTO;
use Dotsplatform\Sms\DTO\TurboSmsDTO;
use Dotsplatform\Sms\DTO\SmsFiltersDTO;
use Dotsplatform\Sms\DTO\TwilioDTO;

class SmsService
{
    public function __construct(
        private readonly SmsHttpClient $smsHttpClient,
    ) {
    }

    public function findAccountSettings(string $accountId): ?SmsAccountSettingsDTO
    {
        return $this->smsHttpClient->findAccountSettings($accountId);
    }

    public function findAccountProviderInfobip(string $accountId): InfobipDTO
    {
        $response = $this->smsHttpClient->findAccountProviderByType($accountId, SmsProviderType::INFOBIP);
        return InfobipDTO::fromArray($response['data'] ?? []);
    }

    public function findAccountProviderTurboSms(string $accountId): TurboSmsDTO
    {
        $response = $this->smsHttpClient->findAccountProviderByType($accountId, SmsProviderType::TURBO_SMS);
        return TurboSmsDTO::fromArray($response['data'] ?? []);
    }

    public function findAccountProviderSendPulse(string $accountId): SendPulseDTO
    {
        $response = $this->smsHttpClient->findAccountProviderByType($accountId, SmsProviderType::SEND_PULSE);
        return SendPulseDTO::fromArray($response['data'] ?? []);
    }

    public function findAccountProviderTwilio(string $accountId): TwilioDTO
    {
        $response = $this->smsHttpClient->findAccountProviderByType($accountId, SmsProviderType::TWILIO);
        return TwilioDTO::fromArray($response['data'] ?? []);
    }

    public function findAccountProviderMainSms(string $accountId): MainSmsDTO
    {
        $response = $this->smsHttpClient->findAccountProviderByType($accountId, SmsProviderType::MAIN_SMS);
        return MainSmsDTO::fromArray($response['data'] ?? []);
    }

    public function storeProvider(StoreProviderDTO $dto): void
    {
        $this->smsHttpClient->storeProvider($dto);
    }

    public function storeAccount(StoreAccountDTO $dto): void
    {
        $this->smsHttpClient->storeAccount($dto);
    }

    public function sendSms(SmsMessageDTO $dto): void
    {
        $this->smsHttpClient->sendSms($dto);
    }

    public function getMessages(SmsFiltersDTO $dto): SmsList
    {
        return $this->smsHttpClient->getMessages($dto);
    }

    public function getSmsCountByPhones(SmsCountByPhoneFiltersDTO $dto): SmsCountByPhoneList
    {
        return $this->smsHttpClient->getSmsCountByPhones($dto);
    }

    public function getProviderSendPulseViberSenderNames(string $accountId): SendPulseViberSenderNamesList
    {
        return $this->smsHttpClient->getProviderSendPulseViberSenderNames($accountId);
    }

    public function getProviderBalance(string $accountId, string $providerType): ?float
    {
        return $this->smsHttpClient->getProviderBalance($accountId, $providerType);
    }
}
