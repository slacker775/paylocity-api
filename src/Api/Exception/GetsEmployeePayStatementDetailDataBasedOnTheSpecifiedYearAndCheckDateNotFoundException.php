<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Exception;

class GetsEmployeePayStatementDetailDataBasedOnTheSpecifiedYearAndCheckDateNotFoundException extends \RuntimeException implements ClientException
{
    private $errorList;

    public function __construct($errorList)
    {
        parent::__construct('The employee, specified year, or check date does not exist', 404);
        $this->errorList = $errorList;
    }

    public function getErrorList()
    {
        return $this->errorList;
    }
}