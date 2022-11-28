<?php
/**
 * Description of SmsTypeDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace App\Services\Sms\DTO;


abstract class MessageType
{
    public const SMS = 'sms';
    public const VIBER = 'viber';
}
