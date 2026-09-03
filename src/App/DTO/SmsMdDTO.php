<?php
/**
 * Description of SmsMdDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsMdDTO extends DTO
{
    protected ?string $apiToken = null;

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }
}
