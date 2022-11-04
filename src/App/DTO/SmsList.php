<?php
/**
 * Description of SmsList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Illuminate\Support\Collection;

/**
 * @extends Collection<int, SmsDTO>
 */
class SmsList extends Collection
{
    public static function fromArray(array $data): self
    {
        return new self(
            array_map(
                fn (array $item) => SmsDTO::fromArray([
                    'id' => $item['id'],
                    'phone' => $item['phone'],
                    'status' => $item['status'],
                    'message' => $item['message'],
                    'accountId' => $item['account_id'],
                    'providerId' => $item['provider_id'],
                    'providerType' => $item['provider_type'],
                    'responseMessage' => $item['response_message'],
                    'sentTime' => $item['sent_time'],
                ]),
                $data,
            )
        );
    }
}
