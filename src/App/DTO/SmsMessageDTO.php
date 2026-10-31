<?php
/**
 * Description of SmsMessageDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class SmsMessageDTO extends DTO
{
    protected string $accountId;
    protected string $phone;
    protected string $message;

    /**
     * Optional id of the campaign the message belongs to (e.g. a CRM broadcast token). The sms service stores
     * it with the message and counts deliveries per reference: see SmsService::getDeliveryCountsByReferences().
     */
    protected ?string $externalReference = null;

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
}
