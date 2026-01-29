<?php
/**
 * Description of SmsAccountSettingsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsAccountSettingsDTO extends DTO
{
    protected bool $SMSDisabled = true;
    protected ?string $senderProvider;
    protected ?string $fallbackSenderProvider;
    protected ?string $senderNameSms;
    protected string $messageType = MessageType::SMS;
    protected ?float $lowBalanceThreshold = null;

    public function isSMSDisabled(): bool
    {
        return $this->SMSDisabled;
    }

    public function getSenderProvider(): ?string
    {
        return $this->senderProvider;
    }

    public function getFallbackSenderProvider(): ?string
    {
        return $this->fallbackSenderProvider;
    }

    public function getSenderNameSms(): ?string
    {
        return $this->senderNameSms;
    }

    public function getMessageType(): string
    {
        return $this->messageType;
    }

    public function getLowBalanceThreshold(): ?float
    {
        return $this->lowBalanceThreshold;
    }
}
