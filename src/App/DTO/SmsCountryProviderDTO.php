<?php
/**
 * Description of SmsCountryProviderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsCountryProviderDTO extends DTO
{
    protected string $country;
    protected string $phoneCode;
    protected string $provider;

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPhoneCode(): string
    {
        return $this->phoneCode;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }
}
