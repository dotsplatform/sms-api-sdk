<?php
/**
 * Description of SmsProviderDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

abstract class SmsProviderType
{
    public const INFOBIP = 'infobip';
    public const TURBO_SMS = 'turbo-sms';
    public const MAIN_SMS = 'main-sms';
    public const SEND_PULSE = 'sendpulse';
}
