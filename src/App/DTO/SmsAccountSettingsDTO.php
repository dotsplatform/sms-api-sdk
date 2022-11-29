<?php
/**
 * Description of AccountSmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use App\Services\Sms\DTO\MessageType;
use Dots\Data\DTO;

class SmsAccountSettingsDTO extends DTO
{
    protected bool $SMSDisabled = true;
    protected ?string $senderProvider;
    protected ?string $senderNameSms;
    protected ?string $senderNameViber;
    protected string $messageType = MessageType::SMS;

    public function isSMSDisabled(): bool
    {
        return $this->SMSDisabled;
    }

    public function getSenderProvider(): ?string
    {
        return $this->senderProvider;
    }

    public function getSenderNameSms(): ?string
    {
        return $this->senderNameSms;
    }

    public function getSenderNameViber(): ?string
    {
        return $this->senderNameViber;
    }

    public function getMessageType(): string
    {
        return $this->messageType;
    }
}
