<?php
/**
 * Description of SmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;


use Dots\Data\DTO;

class SmsDTO extends DTO
{
    protected string $id;
    protected string $accountId;
    protected string $providerId;
    protected string $providerType;
    protected string $status;
    protected string $responseMessage;
    protected string $phone;
    protected string $message;
    protected string $sentTime;

    public function getId(): string
    {
        return $this->id;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getProviderId(): string
    {
        return $this->providerId;
    }

    public function getProviderType(): string
    {
        return $this->providerType;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getResponseMessage(): string
    {
        return $this->responseMessage;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getSentTime(): string
    {
        return $this->sentTime;
    }
}