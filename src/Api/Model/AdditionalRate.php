<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class AdditionalRate
{
    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Change Reason drop down.<br />.
     *
     * @var string
     */
    protected $changeReason;
    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 1 drop down. This cell must be in a text format.<br />.
     *
     * @var string
     */
    protected $costCenter1;
    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 2 drop down. This cell must be in a text format.<br />.
     *
     * @var string
     */
    protected $costCenter2;
    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 3 drop down. This cell must be in a text format.<br />.
     *
     * @var string
     */
    protected $costCenter3;
    /**
     * Required. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Not required. Must match one of the system coded check dates available in the Additional Rates End Check Date drop down. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     *
     * @var string
     */
    protected $endCheckDate;
    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Job drop down.<br />.
     *
     * @var string
     */
    protected $job;
    /**
     * Required. Enter dollar amount that corresponds to the Per selection.<br />.
     *
     * @var float
     */
    protected $rate;
    /**
     * Required. If populated, must match one of the system coded values available in the Additional Rates Rate Code drop down.<br />.
     *
     * @var string
     */
    protected $rateCode;
    /**
     * Not required.<br  />Max length: 4000<br />.
     *
     * @var string
     */
    protected $rateNotes;
    /**
     * Required. Valid values are HOUR or WEEK.<br />.
     *
     * @var string
     */
    protected $ratePer;
    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Shift drop down.<br />.
     *
     * @var string
     */
    protected $shift;

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Change Reason drop down.<br />.
     */
    public function getChangeReason(): string
    {
        return $this->changeReason;
    }

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Change Reason drop down.<br />.
     */
    public function setChangeReason(string $changeReason): self
    {
        $this->changeReason = $changeReason;

        return $this;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 1 drop down. This cell must be in a text format.<br />.
     */
    public function getCostCenter1(): string
    {
        return $this->costCenter1;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 1 drop down. This cell must be in a text format.<br />.
     */
    public function setCostCenter1(string $costCenter1): self
    {
        $this->costCenter1 = $costCenter1;

        return $this;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 2 drop down. This cell must be in a text format.<br />.
     */
    public function getCostCenter2(): string
    {
        return $this->costCenter2;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 2 drop down. This cell must be in a text format.<br />.
     */
    public function setCostCenter2(string $costCenter2): self
    {
        $this->costCenter2 = $costCenter2;

        return $this;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 3 drop down. This cell must be in a text format.<br />.
     */
    public function getCostCenter3(): string
    {
        return $this->costCenter3;
    }

    /**
     * Not required. Valid values must match one of the system coded cost centers available in the Additional Rates Cost Center level 3 drop down. This cell must be in a text format.<br />.
     */
    public function setCostCenter3(string $costCenter3): self
    {
        $this->costCenter3 = $costCenter3;

        return $this;
    }

    /**
     * Required. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * Required. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Not required. Must match one of the system coded check dates available in the Additional Rates End Check Date drop down. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     */
    public function getEndCheckDate(): string
    {
        return $this->endCheckDate;
    }

    /**
     * Not required. Must match one of the system coded check dates available in the Additional Rates End Check Date drop down. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.<br />.
     */
    public function setEndCheckDate(string $endCheckDate): self
    {
        $this->endCheckDate = $endCheckDate;

        return $this;
    }

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Job drop down.<br />.
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Job drop down.<br />.
     */
    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Required. Enter dollar amount that corresponds to the Per selection.<br />.
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * Required. Enter dollar amount that corresponds to the Per selection.<br />.
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Required. If populated, must match one of the system coded values available in the Additional Rates Rate Code drop down.<br />.
     */
    public function getRateCode(): string
    {
        return $this->rateCode;
    }

    /**
     * Required. If populated, must match one of the system coded values available in the Additional Rates Rate Code drop down.<br />.
     */
    public function setRateCode(string $rateCode): self
    {
        $this->rateCode = $rateCode;

        return $this;
    }

    /**
     * Not required.<br  />Max length: 4000<br />.
     */
    public function getRateNotes(): string
    {
        return $this->rateNotes;
    }

    /**
     * Not required.<br  />Max length: 4000<br />.
     */
    public function setRateNotes(string $rateNotes): self
    {
        $this->rateNotes = $rateNotes;

        return $this;
    }

    /**
     * Required. Valid values are HOUR or WEEK.<br />.
     */
    public function getRatePer(): string
    {
        return $this->ratePer;
    }

    /**
     * Required. Valid values are HOUR or WEEK.<br />.
     */
    public function setRatePer(string $ratePer): self
    {
        $this->ratePer = $ratePer;

        return $this;
    }

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Shift drop down.<br />.
     */
    public function getShift(): string
    {
        return $this->shift;
    }

    /**
     * Not required. If populated, must match one of the system coded values available in the Additional Rates Shift drop down.<br />.
     */
    public function setShift(string $shift): self
    {
        $this->shift = $shift;

        return $this;
    }
}
