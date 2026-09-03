<?php
/**
 * Description of SmsCountryProvidersList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\FromArrayable;
use Illuminate\Support\Collection;

/**
 * @extends Collection<int, SmsCountryProviderDTO>
 * @method SmsCountryProviderDTO[] all()
 * @method SmsCountryProviderDTO|null get($key, $default = null)
 */
class SmsCountryProvidersList extends Collection implements FromArrayable
{
    public static function fromArray(array $data): static
    {
        return new static(
            array_map(
                fn (array $item) => SmsCountryProviderDTO::fromArray($item),
                array_values($data),
            )
        );
    }
}
