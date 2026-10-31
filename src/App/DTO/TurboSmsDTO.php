<?php
/**
 * Description of TurboSmsDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class TurboSmsDTO extends DTO
{
    protected ?string $auth_token = null;
    protected ?string $senderNameViber;
    /**
     * Secret key of the delivery webhook set up in the TurboSMS cabinet (delivery reports by callback).
     */
    protected ?string $webhookSecret = null;

    public function getAuthToken(): ?string
    {
        return $this->auth_token;
    }

    public function getSenderNameViber(): ?string
    {
        return $this->senderNameViber;
    }

    public function getWebhookSecret(): ?string
    {
        return $this->webhookSecret;
    }
}
