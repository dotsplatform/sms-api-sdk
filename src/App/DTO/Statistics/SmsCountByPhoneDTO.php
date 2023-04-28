<?php
/**
 * Description of MessagesCountByPhoneList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO\Statistics;

use Dots\Data\DTO;

class SmsCountByPhoneDTO extends DTO
{
    protected string $phone;
    protected int $smsCount;

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getSmsCount(): int
    {
        return $this->smsCount;
    }

}
