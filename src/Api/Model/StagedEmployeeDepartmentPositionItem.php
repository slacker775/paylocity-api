<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class StagedEmployeeDepartmentPositionItem
{
    /**
     * Employee department/position change reason. Must match Company setup. <br  />Max length: 15.
     *
     * @var string|null
     */
    protected $changeReason;
    /**
     * Employee clock badge number. Defaults to employeeId. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $clockBadgeNumber;
    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $costCenter1;
    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $costCenter2;
    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $costCenter3;
    /**
     * The date the position takes effect. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     *
     * @var string|null
     */
    protected $effectiveDate;
    /**
     * Employee current employment type. Common values *RFT (Regular Full Time), RPT (Regular Part Time), SNL (Seasonal), TFT (Temporary Full Time), TPT (Temporary Part Time)*. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $employeeType;
    /**
     * Values are configured in Company > Setup > HR > EEO Classes.<br  /> Max length: 10.
     *
     * @var string|null
     */
    protected $equalEmploymentOpportunityClass;
    /**
     * Indicates if employee is exempt from minimum wage.
     *
     * @var bool|null
     */
    protected $isMinimumWageExempt;
    /**
     * Indicates if employee is exempt from overtime.
     *
     * @var bool|null
     */
    protected $isOvertimeExempt;
    /**
     * Indicates if employee is a supervisor or reviewer.
     *
     * @var bool|null
     */
    protected $isSupervisorReviewer;
    /**
     * Indicates if union dues are collected.
     *
     * @var bool|null
     */
    protected $isUnionDuesCollected;
    /**
     * Indicates if initiations fees are collected.
     *
     * @var bool|null
     */
    protected $isUnionInitiationCollected;
    /**
     * Employee current job title. <br  />Max length: 50.
     *
     * @var string|null
     */
    protected $jobTitle;
    /**
     * Employee pay group. Must match Company setup. <br  /> Max length: 20.
     *
     * @var string|null
     */
    protected $payGroup;
    /**
     * Employee position code. Must match Company setup.<br  />Max length: 20.
     *
     * @var string|null
     */
    protected $positionCode;
    /**
     * Employee work shift.<br  />Max length: 255.
     *
     * @var string|null
     */
    protected $shift;
    /**
     * Supervisor's company number. Defaults to employee company number.<br  />Max length: 9.
     *
     * @var string|null
     */
    protected $supervisorCompanyNumber;
    /**
     * EmployeeId of the supervisor. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $supervisorEmployeeId;
    /**
     * Indicates if employee receives tips.
     *
     * @var string|null
     */
    protected $tipped;
    /**
     * Employee union affiliation effective date. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     *
     * @var string|null
     */
    protected $unionAffiliationDate;
    /**
     * Employee union code. Must match Company setup. <br  />Max length: 10.
     *
     * @var string|null
     */
    protected $unionCode;
    /**
     * Employee union position. Must match Company setup. <br  />Max length: 30.
     *
     * @var string|null
     */
    protected $unionPosition;
    /**
     * Employee worker compensation code. Must match Company setup.<br  /> Max length: 10.
     *
     * @var string|null
     */
    protected $workersCompensation;

    /**
     * Employee department/position change reason. Must match Company setup. <br  />Max length: 15.
     */
    public function getChangeReason(): ?string
    {
        return $this->changeReason;
    }

    /**
     * Employee department/position change reason. Must match Company setup. <br  />Max length: 15.
     */
    public function setChangeReason(?string $changeReason): self
    {
        $this->changeReason = $changeReason;

        return $this;
    }

    /**
     * Employee clock badge number. Defaults to employeeId. <br  />Max length: 10.
     */
    public function getClockBadgeNumber(): ?string
    {
        return $this->clockBadgeNumber;
    }

    /**
     * Employee clock badge number. Defaults to employeeId. <br  />Max length: 10.
     */
    public function setClockBadgeNumber(?string $clockBadgeNumber): self
    {
        $this->clockBadgeNumber = $clockBadgeNumber;

        return $this;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function getCostCenter1(): ?string
    {
        return $this->costCenter1;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function setCostCenter1(?string $costCenter1): self
    {
        $this->costCenter1 = $costCenter1;

        return $this;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function getCostCenter2(): ?string
    {
        return $this->costCenter2;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function setCostCenter2(?string $costCenter2): self
    {
        $this->costCenter2 = $costCenter2;

        return $this;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function getCostCenter3(): ?string
    {
        return $this->costCenter3;
    }

    /**
     * Employer defined location, like *branch, division, department*, etc. Must match Company setup. <br  />Max length: 10.
     */
    public function setCostCenter3(?string $costCenter3): self
    {
        $this->costCenter3 = $costCenter3;

        return $this;
    }

    /**
     * The date the position takes effect. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     */
    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }

    /**
     * The date the position takes effect. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     */
    public function setEffectiveDate(?string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Employee current employment type. Common values *RFT (Regular Full Time), RPT (Regular Part Time), SNL (Seasonal), TFT (Temporary Full Time), TPT (Temporary Part Time)*. <br  />Max length: 10.
     */
    public function getEmployeeType(): ?string
    {
        return $this->employeeType;
    }

    /**
     * Employee current employment type. Common values *RFT (Regular Full Time), RPT (Regular Part Time), SNL (Seasonal), TFT (Temporary Full Time), TPT (Temporary Part Time)*. <br  />Max length: 10.
     */
    public function setEmployeeType(?string $employeeType): self
    {
        $this->employeeType = $employeeType;

        return $this;
    }

    /**
     * Values are configured in Company > Setup > HR > EEO Classes.<br  /> Max length: 10.
     */
    public function getEqualEmploymentOpportunityClass(): ?string
    {
        return $this->equalEmploymentOpportunityClass;
    }

    /**
     * Values are configured in Company > Setup > HR > EEO Classes.<br  /> Max length: 10.
     */
    public function setEqualEmploymentOpportunityClass(?string $equalEmploymentOpportunityClass): self
    {
        $this->equalEmploymentOpportunityClass = $equalEmploymentOpportunityClass;

        return $this;
    }

    /**
     * Indicates if employee is exempt from minimum wage.
     */
    public function getIsMinimumWageExempt(): ?bool
    {
        return $this->isMinimumWageExempt;
    }

    /**
     * Indicates if employee is exempt from minimum wage.
     */
    public function setIsMinimumWageExempt(?bool $isMinimumWageExempt): self
    {
        $this->isMinimumWageExempt = $isMinimumWageExempt;

        return $this;
    }

    /**
     * Indicates if employee is exempt from overtime.
     */
    public function getIsOvertimeExempt(): ?bool
    {
        return $this->isOvertimeExempt;
    }

    /**
     * Indicates if employee is exempt from overtime.
     */
    public function setIsOvertimeExempt(?bool $isOvertimeExempt): self
    {
        $this->isOvertimeExempt = $isOvertimeExempt;

        return $this;
    }

    /**
     * Indicates if employee is a supervisor or reviewer.
     */
    public function getIsSupervisorReviewer(): ?bool
    {
        return $this->isSupervisorReviewer;
    }

    /**
     * Indicates if employee is a supervisor or reviewer.
     */
    public function setIsSupervisorReviewer(?bool $isSupervisorReviewer): self
    {
        $this->isSupervisorReviewer = $isSupervisorReviewer;

        return $this;
    }

    /**
     * Indicates if union dues are collected.
     */
    public function getIsUnionDuesCollected(): ?bool
    {
        return $this->isUnionDuesCollected;
    }

    /**
     * Indicates if union dues are collected.
     */
    public function setIsUnionDuesCollected(?bool $isUnionDuesCollected): self
    {
        $this->isUnionDuesCollected = $isUnionDuesCollected;

        return $this;
    }

    /**
     * Indicates if initiations fees are collected.
     */
    public function getIsUnionInitiationCollected(): ?bool
    {
        return $this->isUnionInitiationCollected;
    }

    /**
     * Indicates if initiations fees are collected.
     */
    public function setIsUnionInitiationCollected(?bool $isUnionInitiationCollected): self
    {
        $this->isUnionInitiationCollected = $isUnionInitiationCollected;

        return $this;
    }

    /**
     * Employee current job title. <br  />Max length: 50.
     */
    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    /**
     * Employee current job title. <br  />Max length: 50.
     */
    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Employee pay group. Must match Company setup. <br  /> Max length: 20.
     */
    public function getPayGroup(): ?string
    {
        return $this->payGroup;
    }

    /**
     * Employee pay group. Must match Company setup. <br  /> Max length: 20.
     */
    public function setPayGroup(?string $payGroup): self
    {
        $this->payGroup = $payGroup;

        return $this;
    }

    /**
     * Employee position code. Must match Company setup.<br  />Max length: 20.
     */
    public function getPositionCode(): ?string
    {
        return $this->positionCode;
    }

    /**
     * Employee position code. Must match Company setup.<br  />Max length: 20.
     */
    public function setPositionCode(?string $positionCode): self
    {
        $this->positionCode = $positionCode;

        return $this;
    }

    /**
     * Employee work shift.<br  />Max length: 255.
     */
    public function getShift(): ?string
    {
        return $this->shift;
    }

    /**
     * Employee work shift.<br  />Max length: 255.
     */
    public function setShift(?string $shift): self
    {
        $this->shift = $shift;

        return $this;
    }

    /**
     * Supervisor's company number. Defaults to employee company number.<br  />Max length: 9.
     */
    public function getSupervisorCompanyNumber(): ?string
    {
        return $this->supervisorCompanyNumber;
    }

    /**
     * Supervisor's company number. Defaults to employee company number.<br  />Max length: 9.
     */
    public function setSupervisorCompanyNumber(?string $supervisorCompanyNumber): self
    {
        $this->supervisorCompanyNumber = $supervisorCompanyNumber;

        return $this;
    }

    /**
     * EmployeeId of the supervisor. <br  />Max length: 10.
     */
    public function getSupervisorEmployeeId(): ?string
    {
        return $this->supervisorEmployeeId;
    }

    /**
     * EmployeeId of the supervisor. <br  />Max length: 10.
     */
    public function setSupervisorEmployeeId(?string $supervisorEmployeeId): self
    {
        $this->supervisorEmployeeId = $supervisorEmployeeId;

        return $this;
    }

    /**
     * Indicates if employee receives tips.
     */
    public function getTipped(): ?string
    {
        return $this->tipped;
    }

    /**
     * Indicates if employee receives tips.
     */
    public function setTipped(?string $tipped): self
    {
        $this->tipped = $tipped;

        return $this;
    }

    /**
     * Employee union affiliation effective date. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     */
    public function getUnionAffiliationDate(): ?string
    {
        return $this->unionAffiliationDate;
    }

    /**
     * Employee union affiliation effective date. Common formats include *MM-DD-CCYY*, *CCYY-MM-DD*.
     */
    public function setUnionAffiliationDate(?string $unionAffiliationDate): self
    {
        $this->unionAffiliationDate = $unionAffiliationDate;

        return $this;
    }

    /**
     * Employee union code. Must match Company setup. <br  />Max length: 10.
     */
    public function getUnionCode(): ?string
    {
        return $this->unionCode;
    }

    /**
     * Employee union code. Must match Company setup. <br  />Max length: 10.
     */
    public function setUnionCode(?string $unionCode): self
    {
        $this->unionCode = $unionCode;

        return $this;
    }

    /**
     * Employee union position. Must match Company setup. <br  />Max length: 30.
     */
    public function getUnionPosition(): ?string
    {
        return $this->unionPosition;
    }

    /**
     * Employee union position. Must match Company setup. <br  />Max length: 30.
     */
    public function setUnionPosition(?string $unionPosition): self
    {
        $this->unionPosition = $unionPosition;

        return $this;
    }

    /**
     * Employee worker compensation code. Must match Company setup.<br  /> Max length: 10.
     */
    public function getWorkersCompensation(): ?string
    {
        return $this->workersCompensation;
    }

    /**
     * Employee worker compensation code. Must match Company setup.<br  /> Max length: 10.
     */
    public function setWorkersCompensation(?string $workersCompensation): self
    {
        $this->workersCompensation = $workersCompensation;

        return $this;
    }
}
