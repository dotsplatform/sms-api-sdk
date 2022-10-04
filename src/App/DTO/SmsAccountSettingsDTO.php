<?php
/**
 * Description of AccountSmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsAccountSettingsDTO extends DTO
{
    protected bool $SMSDisabled = true;
    protected ?string $senderProvider;
    protected ?string $senderName;

    public function isSMSDisabled(): bool
    {
        return $this->SMSDisabled;
    }

    public function getSenderProvider(): ?string
    {
        return $this->senderProvider;
    }

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }
}
