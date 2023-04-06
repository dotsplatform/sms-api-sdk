<?php
/**
 * Description of InfoBipDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class TwilioDTO extends DTO
{
    protected ?string $sid = null;
    protected ?string $token = null;
    protected ?string $fromNumber = null;

    public function getSid(): ?string
    {
        return $this->sid;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function getFromNumber(): ?string
    {
        return $this->fromNumber;
    }

}
