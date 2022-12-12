<?php
/**
 * Description of SendPulseViberSenderNamesList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;


use Illuminate\Support\Collection;
/**
 * @extends Collection<int, SendPulseViberSenderNameDTO>
 */
class SendPulseViberSenderNamesList extends Collection
{
    public static function fromArray(array $data): static
    {
        return new static(
            array_map(
                fn(array $item) => SendPulseViberSenderNameDTO::fromArray([
                    'id' => $item['id'],
                    'name' => $item['name'],
                ]),
                $data,
            )
        );
    }
}
