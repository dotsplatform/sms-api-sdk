<?php
/**
 * Description of SmsDeliveryCountsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO\Statistics;

use Dots\Data\DTO;

/**
 * SMS counts of one external reference.
 *
 * total       = every stored message of the reference;
 * sent        = accepted by the provider (= delivered + failed + pending + notReported);
 * notSent     = rejected by the provider, blacklisted phone or SMS limit reached (= total - sent);
 * delivered   = the provider reported the message delivered;
 * failed      = the provider reported the message undelivered / expired / rejected;
 * pending     = a report is expected (the provider reports delivery) but has not come yet;
 * notReported = the provider does not report delivery, or no report came within 24 hours.
 */
class SmsDeliveryCountsDTO extends DTO
{
    protected string $externalReference;
    protected int $total = 0;
    protected int $sent = 0;
    protected int $notSent = 0;
    protected int $delivered = 0;
    protected int $failed = 0;
    protected int $pending = 0;
    protected int $notReported = 0;

    public function getExternalReference(): string
    {
        return $this->externalReference;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getSent(): int
    {
        return $this->sent;
    }

    public function getNotSent(): int
    {
        return $this->notSent;
    }

    public function getDelivered(): int
    {
        return $this->delivered;
    }

    public function getFailed(): int
    {
        return $this->failed;
    }

    public function getPending(): int
    {
        return $this->pending;
    }

    public function getNotReported(): int
    {
        return $this->notReported;
    }
}
