<?php
/**
 * Description of NandoDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Eduard Danylov <eduard.danylov@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class NandoDTO extends DTO
{
    protected ?string $apiKey = null;

    protected ?int $brandNameId = null;

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function getBrandNameId(): ?int
    {
        return $this->brandNameId;
    }
}
