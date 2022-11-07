<?php
/**
 * Description of SmsRequestFileterDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsFiltersDTO extends DTO
{
    protected string $accountId;
    protected ?string $provider = null;
    protected ?int $status = null;
    protected ?string $phone;
    protected int $limit = 50;
    protected int $offset = 0;
    protected ?int $dateFrom = null;
    protected ?int $dateTo = null;

    public function getDateFrom(): ?int
    {
        return $this->dateFrom;
    }

    public function getDateTo(): ?int
    {
        return $this->dateTo;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
