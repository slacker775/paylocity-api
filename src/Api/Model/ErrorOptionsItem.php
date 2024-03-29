<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class ErrorOptionsItem
{
    /**
     * The code associated with this option.
     *
     * @var string
     */
    protected $code;
    /**
     * The description of the option.
     *
     * @var string
     */
    protected $description;

    /**
     * The code associated with this option.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * The code associated with this option.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The description of the option.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * The description of the option.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
