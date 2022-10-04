<?php
/**
 * Description of TurboSmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class TurboSmsDTO extends DTO
{
    protected ?string $auth_token = null;

    public function getAuthToken(): ?string
    {
        return $this->auth_token;
    }
}
