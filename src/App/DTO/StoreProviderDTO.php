<?php
/**
 * Description of StoreProviderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;


use Dots\Data\DTO;

class StoreProviderDTO extends DTO
{
    protected string $accountId;
    protected string $type;
    protected array $data;

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getData(): array
    {
        return $this->data;
    }
}