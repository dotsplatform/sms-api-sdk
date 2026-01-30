<?php
/**
 * Description of ProviderBalanceDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class ProviderBalanceDTO extends DTO
{
    protected ?float $balance = null;

    protected ?string $currency = null;

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }
}
