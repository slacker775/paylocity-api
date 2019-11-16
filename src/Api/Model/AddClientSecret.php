<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class AddClientSecret
{
    /**
     * A value sent with the 'ACTION NEEDED: Web Link API Credentials Expiring Soon.' email notification.
     *
     * @var string
     */
    protected $code;

    /**
     * A value sent with the 'ACTION NEEDED: Web Link API Credentials Expiring Soon.' email notification.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * A value sent with the 'ACTION NEEDED: Web Link API Credentials Expiring Soon.' email notification.
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
