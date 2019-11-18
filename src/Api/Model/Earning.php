<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class Earning
{
    /**
     * Third-party agency associated with earning. Must match Company setup.<br  />Max length: 10.
     *
     * @var string
     */
    protected $agency;
    /**
     * Defines how earnings are calculated. Common values are *% (percentage of gross), flat (flat dollar amount)*. Defaulted to the Company setup calcCode for earning. <br  />Max length: 20.
     *
     * @var string
     */
    protected $calculationCode;
    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     *
     * @var string
     */
    protected $costCenter1;
    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     *
     * @var string
     */
    protected $costCenter2;
    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     *
     * @var string
     */
    protected $costCenter3;
    /**
     * Earning code. Must match Company setup. <br  />Max length: 10.
     *
     * @var string
     */
    protected $earningCode;
    /**
     * Date earning is active. Defaulted to run date or check date based on Company setup. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Stop date of an earning. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     *
     * @var string
     */
    protected $endDate;
    /**
     * Needed if earning is applied differently from the payroll frequency (one time earning for example).<br  /> Max length: 5.
     *
     * @var string
     */
    protected $frequency;
    /**
     * Job code associated with earnings. Must match Company setup.<br  /> Max length: 20.
     *
     * @var string
     */
    protected $jobCode;
    /**
     * Rate Code applies to additional pay rates entered for an employee. Must match Company setup. <br  /> Max length: 10.
     *
     * @var string
     */
    protected $rateCode;
    /**
     * Start date of an earning based on payroll calendar. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     *
     * @var string
     */
    protected $startDate;

    /**
     * Third-party agency associated with earning. Must match Company setup.<br  />Max length: 10.
     */
    public function getAgency(): string
    {
        return $this->agency;
    }

    /**
     * Third-party agency associated with earning. Must match Company setup.<br  />Max length: 10.
     */
    public function setAgency(string $agency): self
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * Defines how earnings are calculated. Common values are *% (percentage of gross), flat (flat dollar amount)*. Defaulted to the Company setup calcCode for earning. <br  />Max length: 20.
     */
    public function getCalculationCode(): string
    {
        return $this->calculationCode;
    }

    /**
     * Defines how earnings are calculated. Common values are *% (percentage of gross), flat (flat dollar amount)*. Defaulted to the Company setup calcCode for earning. <br  />Max length: 20.
     */
    public function setCalculationCode(string $calculationCode): self
    {
        $this->calculationCode = $calculationCode;

        return $this;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function getCostCenter1(): string
    {
        return $this->costCenter1;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function setCostCenter1(string $costCenter1): self
    {
        $this->costCenter1 = $costCenter1;

        return $this;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function getCostCenter2(): string
    {
        return $this->costCenter2;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function setCostCenter2(string $costCenter2): self
    {
        $this->costCenter2 = $costCenter2;

        return $this;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function getCostCenter3(): string
    {
        return $this->costCenter3;
    }

    /**
     * Cost Center associated with earning. Must match Company setup.<br  /> Max length: 10.
     */
    public function setCostCenter3(string $costCenter3): self
    {
        $this->costCenter3 = $costCenter3;

        return $this;
    }

    /**
     * Earning code. Must match Company setup. <br  />Max length: 10.
     */
    public function getEarningCode(): string
    {
        return $this->earningCode;
    }

    /**
     * Earning code. Must match Company setup. <br  />Max length: 10.
     */
    public function setEarningCode(string $earningCode): self
    {
        $this->earningCode = $earningCode;

        return $this;
    }

    /**
     * Date earning is active. Defaulted to run date or check date based on Company setup. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * Date earning is active. Defaulted to run date or check date based on Company setup. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Stop date of an earning. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * Stop date of an earning. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function setEndDate(string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Needed if earning is applied differently from the payroll frequency (one time earning for example).<br  /> Max length: 5.
     */
    public function getFrequency(): string
    {
        return $this->frequency;
    }

    /**
     * Needed if earning is applied differently from the payroll frequency (one time earning for example).<br  /> Max length: 5.
     */
    public function setFrequency(string $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Job code associated with earnings. Must match Company setup.<br  /> Max length: 20.
     */
    public function getJobCode(): string
    {
        return $this->jobCode;
    }

    /**
     * Job code associated with earnings. Must match Company setup.<br  /> Max length: 20.
     */
    public function setJobCode(string $jobCode): self
    {
        $this->jobCode = $jobCode;

        return $this;
    }

    /**
     * Rate Code applies to additional pay rates entered for an employee. Must match Company setup. <br  /> Max length: 10.
     */
    public function getRateCode(): string
    {
        return $this->rateCode;
    }

    /**
     * Rate Code applies to additional pay rates entered for an employee. Must match Company setup. <br  /> Max length: 10.
     */
    public function setRateCode(string $rateCode): self
    {
        $this->rateCode = $rateCode;

        return $this;
    }

    /**
     * Start date of an earning based on payroll calendar. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * Start date of an earning based on payroll calendar. Common formats are MM-DD-CCYY, CCYY-MM-DD.
     */
    public function setStartDate(string $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}
