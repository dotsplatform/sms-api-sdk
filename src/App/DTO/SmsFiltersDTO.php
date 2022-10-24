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
    protected int $limit = 50;
    protected int $offset = 0;

    public function getAccountId(): string
    {
        return $this->accountId;
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
