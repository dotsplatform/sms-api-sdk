<?php
/**
 * Description of SmsDeliveryCountsList.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Bogdan Mamontov <bohdan.mamontov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO\Statistics;

use Illuminate\Support\Collection;

/**
 * Keyed by external reference.
 *
 * @method SmsDeliveryCountsDTO[] all()
 * @method SmsDeliveryCountsDTO|null get($key, $default = null)
 */
class SmsDeliveryCountsList extends Collection
{
    public static function fromArray(array $data): static
    {
        $list = new static();
        foreach ($data as $item) {
            if (!is_array($item) || !isset($item['externalReference'])) {
                continue;
            }
            $counts = SmsDeliveryCountsDTO::fromArray($item);
            $list->put($counts->getExternalReference(), $counts);
        }

        return $list;
    }

    public function findByReference(string $externalReference): ?SmsDeliveryCountsDTO
    {
        return $this->get($externalReference);
    }
}
