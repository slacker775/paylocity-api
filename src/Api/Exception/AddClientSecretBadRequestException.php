<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Exception;

class AddClientSecretBadRequestException extends \RuntimeException implements ClientException
{
    private $errorList;

    public function __construct($errorList)
    {
        parent::__construct('Bad Request', 400);
        $this->errorList = $errorList;
    }

    public function getErrorList()
    {
        return $this->errorList;
    }
}
