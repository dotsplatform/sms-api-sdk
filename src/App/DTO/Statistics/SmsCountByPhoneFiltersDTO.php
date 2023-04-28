<?php
/**
 * Description of SmsRequestFileterDTO.php
 *
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO\Statistics;

use Dots\Data\DTO;

class SmsCountByPhoneFiltersDTO extends DTO
{
    protected string $accountId;
    protected int $minSmsCount;
    protected ?int $status = null;

    protected int $dateFrom;
    protected int $dateTo;

    protected int $limit = 50;

    protected int $offset = 0;

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getMinSmsCount(): int
    {
        return $this->minSmsCount;
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

    public function getDateFrom(): ?int
    {
        return $this->dateFrom;
    }

    public function getDateTo(): ?int
    {
        return $this->dateTo;
    }

}
