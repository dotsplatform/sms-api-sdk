<?php
/**
 * Description of SendPulseDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SendPulseDTO extends DTO
{
    protected ?string $clientId = null;
    protected ?string $clientSecret = null;
    protected ?string $viberSenderNameId = null;

    public function getViberSenderNameId(): ?string
    {
        return $this->viberSenderNameId;
    }

    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }
}
