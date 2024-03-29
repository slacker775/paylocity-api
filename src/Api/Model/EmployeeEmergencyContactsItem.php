<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class EmployeeEmergencyContactsItem
{
    /**
     * Valid values are *true* or *false*.
     *
     * @var bool
     */
    protected $syncEmployeeInfo;

    /**
     * Valid values are *true* or *false*.
     */
    public function getSyncEmployeeInfo(): bool
    {
        return $this->syncEmployeeInfo;
    }

    /**
     * Valid values are *true* or *false*.
     */
    public function setSyncEmployeeInfo(bool $syncEmployeeInfo): self
    {
        $this->syncEmployeeInfo = $syncEmployeeInfo;

        return $this;
    }
}
