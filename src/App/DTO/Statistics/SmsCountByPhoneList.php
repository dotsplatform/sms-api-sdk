<?php
/**
 * Description of MessagesCountByPhoneList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO\Statistics;

use Illuminate\Support\Collection;

/**
 * @method SmsCountByPhoneDTO[] all()
 * @method SmsCountByPhoneDTO|null get($key, $default = null)
 */
class SmsCountByPhoneList extends Collection
{
    public static function fromArray(array $data): static
    {
        return new static(
            array_map(
                fn (array $item) => SmsCountByPhoneDTO::fromArray([
                    'phone' => $item['phone'],
                    'smsCount' => $item['smsCount'],
                ]),
                $data,
            )
        );
    }

    public function phones(): array
    {
        return $this->map(fn (SmsCountByPhoneDTO $item) => $item->getPhone())->toArray();
    }

}
