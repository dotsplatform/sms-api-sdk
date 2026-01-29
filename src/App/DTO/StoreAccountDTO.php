<?php
/**
 * Description of StoreAccountDTO.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Oleksandr Polosmak <o.polosmak@dotsplatform.com>
 */

namespace Dotsplatform\Sms\DTO;

use Dots\Data\DTO;

class StoreAccountDTO extends DTO
{
    protected string $id;
    protected string $name;
    protected string $lang;
    protected array $settings;

    public function getId(): string
    {
        return $this->id;
    }s

    public function getName(): string
    {
        return $this->name;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function getSettings(): array
    {
        return $this->settings;
    }
}
