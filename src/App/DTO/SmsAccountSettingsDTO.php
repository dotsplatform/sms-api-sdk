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
    protected ?string $smsSenderName;
    protected ?string $viberSenderName;
    protected string $messageType = MessageType::SMS;

    public function isSMSDisabled(): bool
    {
        return $this->SMSDisabled;
    }

    public function getSenderProvider(): ?string
    {
        return $this->senderProvider;
    }

    public function getSmsSenderName(): ?string
    {
        return $this->smsSenderName;
    }

    public function getViberSenderName(): ?string
    {
        return $this->viberSenderName;
    }

    public function getMessageType(): string
    {
        return $this->messageType;
    }
}
