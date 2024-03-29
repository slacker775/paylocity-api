<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class EmployeeIdResponse
{
    /**
     * The EmployeeId.
     *
     * @var string
     */
    protected $employeeId;

    /**
     * The EmployeeId.
     */
    public function getEmployeeId(): string
    {
        return $this->employeeId;
    }

    /**
     * The EmployeeId.
     */
    public function setEmployeeId(string $employeeId): self
    {
        $this->employeeId = $employeeId;

        return $this;
    }
}
