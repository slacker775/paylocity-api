<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Exception;

class AddOrUpdateAnEmployeeEarningInternalServerErrorException extends \RuntimeException implements ServerException
{
    private $errorList;

    public function __construct($errorList)
    {
        parent::__construct('Internal Server Error', 500);
        $this->errorList = $errorList;
    }

    public function getErrorList()
    {
        return $this->errorList;
    }
}
