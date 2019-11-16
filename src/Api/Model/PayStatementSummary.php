<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class PayStatementSummary
{
    /**
     * .<br />.
     *
     * @var bool
     */
    protected $autoPay;
    /**
     * .<br />.
     *
     * @var string|null
     */
    protected $beginDate;
    /**
     * .<br />.
     *
     * @var string|null
     */
    protected $checkDate;
    /**
     * .<br />.
     *
     * @var int
     */
    protected $checkNumber;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $directDepositAmount;
    /**
     * .<br />.
     *
     * @var string|null
     */
    protected $endDate;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $grossPay;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $hours;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $netCheck;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $netPay;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $overtimeDollars;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $overtimeHours;
    /**
     * .<br />.
     *
     * @var int
     */
    protected $process;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $regularDollars;
    /**
     * .<br />.
     *
     * @var float|null
     */
    protected $regularHours;
    /**
     * <br />.
     *
     * @var int
     */
    protected $transactionNumber;
    /**
     * .<br />.
     *
     * @var int
     */
    protected $voucherNumber;
    /**
     * .<br />.
     *
     * @var string|null
     */
    protected $workersCompCode;
    /**
     * .<br />.
     *
     * @var int
     */
    protected $year;

    /**
     * .<br />.
     */
    public function getAutoPay(): bool
    {
        return $this->autoPay;
    }

    /**
     * .<br />.
     */
    public function setAutoPay(bool $autoPay): self
    {
        $this->autoPay = $autoPay;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getBeginDate(): ?string
    {
        return $this->beginDate;
    }

    /**
     * .<br />.
     */
    public function setBeginDate(?string $beginDate): self
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getCheckDate(): ?string
    {
        return $this->checkDate;
    }

    /**
     * .<br />.
     */
    public function setCheckDate(?string $checkDate): self
    {
        $this->checkDate = $checkDate;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getCheckNumber(): int
    {
        return $this->checkNumber;
    }

    /**
     * .<br />.
     */
    public function setCheckNumber(int $checkNumber): self
    {
        $this->checkNumber = $checkNumber;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getDirectDepositAmount(): ?float
    {
        return $this->directDepositAmount;
    }

    /**
     * .<br />.
     */
    public function setDirectDepositAmount(?float $directDepositAmount): self
    {
        $this->directDepositAmount = $directDepositAmount;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * .<br />.
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getGrossPay(): ?float
    {
        return $this->grossPay;
    }

    /**
     * .<br />.
     */
    public function setGrossPay(?float $grossPay): self
    {
        $this->grossPay = $grossPay;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getHours(): ?float
    {
        return $this->hours;
    }

    /**
     * .<br />.
     */
    public function setHours(?float $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getNetCheck(): ?float
    {
        return $this->netCheck;
    }

    /**
     * .<br />.
     */
    public function setNetCheck(?float $netCheck): self
    {
        $this->netCheck = $netCheck;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getNetPay(): ?float
    {
        return $this->netPay;
    }

    /**
     * .<br />.
     */
    public function setNetPay(?float $netPay): self
    {
        $this->netPay = $netPay;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getOvertimeDollars(): ?float
    {
        return $this->overtimeDollars;
    }

    /**
     * .<br />.
     */
    public function setOvertimeDollars(?float $overtimeDollars): self
    {
        $this->overtimeDollars = $overtimeDollars;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getOvertimeHours(): ?float
    {
        return $this->overtimeHours;
    }

    /**
     * .<br />.
     */
    public function setOvertimeHours(?float $overtimeHours): self
    {
        $this->overtimeHours = $overtimeHours;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getProcess(): int
    {
        return $this->process;
    }

    /**
     * .<br />.
     */
    public function setProcess(int $process): self
    {
        $this->process = $process;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getRegularDollars(): ?float
    {
        return $this->regularDollars;
    }

    /**
     * .<br />.
     */
    public function setRegularDollars(?float $regularDollars): self
    {
        $this->regularDollars = $regularDollars;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getRegularHours(): ?float
    {
        return $this->regularHours;
    }

    /**
     * .<br />.
     */
    public function setRegularHours(?float $regularHours): self
    {
        $this->regularHours = $regularHours;

        return $this;
    }

    /**
     * <br />.
     */
    public function getTransactionNumber(): int
    {
        return $this->transactionNumber;
    }

    /**
     * <br />.
     */
    public function setTransactionNumber(int $transactionNumber): self
    {
        $this->transactionNumber = $transactionNumber;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getVoucherNumber(): int
    {
        return $this->voucherNumber;
    }

    /**
     * .<br />.
     */
    public function setVoucherNumber(int $voucherNumber): self
    {
        $this->voucherNumber = $voucherNumber;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getWorkersCompCode(): ?string
    {
        return $this->workersCompCode;
    }

    /**
     * .<br />.
     */
    public function setWorkersCompCode(?string $workersCompCode): self
    {
        $this->workersCompCode = $workersCompCode;

        return $this;
    }

    /**
     * .<br />.
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * .<br />.
     */
    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }
}