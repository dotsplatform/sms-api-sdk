<?php
/**
 * Description of MainSmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class MainSmsDTO extends DTO
{
    protected ?string $project = null;
    protected ?string $api_key = null;

    public function getProject(): ?string
    {
        return $this->project;
    }

    public function getApiKey(): ?string
    {
        return $this->api_key;
    }
}
