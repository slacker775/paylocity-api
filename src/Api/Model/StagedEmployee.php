<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Model;

class StagedEmployee
{
    /**
     * Add up to 19 direct deposit accounts in addition to the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with information provided on the request. GET API will not return direct deposit data.
     *
     * @var StagedEmployeeAdditionalDirectDepositItem[]
     */
    protected $additionalDirectDeposit;
    /**
     * Add setup values used for employee benefits integration, insurance plan settings, and ACA reporting.
     *
     * @var StagedEmployeeBenefitSetupItem[]
     */
    protected $benefitSetup;
    /**
     * Up to 8 custom fields of boolean (checkbox) type value.
     *
     * @var StagedEmployeeCustomBooleanFieldsItem[]
     */
    protected $customBooleanFields;
    /**
     * Up to 8 custom fields of the date type value.
     *
     * @var StagedEmployeeCustomDateFieldsItem[]
     */
    protected $customDateFields;
    /**
     * Up to 8 custom fields of the dropdown type value.
     *
     * @var StagedEmployeeCustomDropDownFieldsItem[]
     */
    protected $customDropDownFields;
    /**
     * Up to 8 custom fields of numeric type value.
     *
     * @var StagedEmployeeCustomNumberFieldsItem[]
     */
    protected $customNumberFields;
    /**
     * Up to 8 custom fields of text type value.
     *
     * @var StagedEmployeeCustomTextFieldsItem[]
     */
    protected $customTextFields;
    /**
     * Add home department cost center, position, supervisor, reviewer, employment type, EEO class, pay settings, and union information.
     *
     * @var StagedEmployeeDepartmentPositionItem[]
     */
    protected $departmentPosition;
    /**
     * Add federal tax amount type (taxCalculationCode), amount or percentage, filing status, and exemptions.
     *
     * @var StagedEmployeeFederalTaxItem[]
     */
    protected $federalTax;
    /**
     * Add employee's home address, personal phone numbers, and personal email.
     *
     * @var StagedEmployeeHomeAddressItem[]
     */
    protected $homeAddress;
    /**
     * Add local tax code, filing status, and exemptions including PA-PSD taxes.
     *
     * @var StagedEmployeeLocalTaxItem[]
     */
    protected $localTax;
    /**
     * Add the main direct deposit account. After deposits are made to any additional direct deposit accounts, the remaining net check is deposited in the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with what is provided on the request. GET API will not return direct deposit data.
     *
     * @var StagedEmployeeMainDirectDepositItem[]
     */
    protected $mainDirectDeposit;
    /**
     * Add non-primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, supplemental check (specialCheckCalc), and reciprocity code information.
     *
     * @var StagedEmployeeNonPrimaryStateTaxItem[]
     */
    protected $nonPrimaryStateTax;
    /**
     * Add hourly or salary pay rate, effective date, and pay frequency.
     *
     * @var StagedEmployeePrimaryPayRateItem[]
     */
    protected $primaryPayRate;
    /**
     * Add primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, and supplemental check (specialCheckCalc) information. Only one primary state is allowed.
     *
     * @var StagedEmployeePrimaryStateTaxItem[]
     */
    protected $primaryStateTax;
    /**
     * Add employee status, change reason, effective date, and adjusted seniority date. Note that companies that are still in Implementation cannot hire future employees.
     *
     * @var StagedEmployeeStatusItem[]
     */
    protected $status;
    /**
     * Add Web Time badge number and charge rate and synchronize Web Pay and Web Time employee data.
     *
     * @var StagedEmployeeWebTime
     */
    protected $webTime;
    /**
     * Add employee's work address, phone numbers, and email. Work Location drop down field is not included.
     *
     * @var StagedEmployeeWorkAddressItem[]
     */
    protected $workAddress;
    /**
     * Add I-9 work authorization information.
     *
     * @var StagedEmployeeWorkEligibilityItem[]
     */
    protected $workEligibility;

    /**
     * Add up to 19 direct deposit accounts in addition to the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with information provided on the request. GET API will not return direct deposit data.
     *
     * @return StagedEmployeeAdditionalDirectDepositItem[]
     */
    public function getAdditionalDirectDeposit(): array
    {
        return $this->additionalDirectDeposit;
    }

    /**
     * Add up to 19 direct deposit accounts in addition to the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with information provided on the request. GET API will not return direct deposit data.
     *
     * @param StagedEmployeeAdditionalDirectDepositItem[] $additionalDirectDeposit
     */
    public function setAdditionalDirectDeposit(array $additionalDirectDeposit): self
    {
        $this->additionalDirectDeposit = $additionalDirectDeposit;

        return $this;
    }

    /**
     * Add setup values used for employee benefits integration, insurance plan settings, and ACA reporting.
     *
     * @return StagedEmployeeBenefitSetupItem[]
     */
    public function getBenefitSetup(): array
    {
        return $this->benefitSetup;
    }

    /**
     * Add setup values used for employee benefits integration, insurance plan settings, and ACA reporting.
     *
     * @param StagedEmployeeBenefitSetupItem[] $benefitSetup
     */
    public function setBenefitSetup(array $benefitSetup): self
    {
        $this->benefitSetup = $benefitSetup;

        return $this;
    }

    /**
     * Up to 8 custom fields of boolean (checkbox) type value.
     *
     * @return StagedEmployeeCustomBooleanFieldsItem[]
     */
    public function getCustomBooleanFields(): array
    {
        return $this->customBooleanFields;
    }

    /**
     * Up to 8 custom fields of boolean (checkbox) type value.
     *
     * @param StagedEmployeeCustomBooleanFieldsItem[] $customBooleanFields
     */
    public function setCustomBooleanFields(array $customBooleanFields): self
    {
        $this->customBooleanFields = $customBooleanFields;

        return $this;
    }

    /**
     * Up to 8 custom fields of the date type value.
     *
     * @return StagedEmployeeCustomDateFieldsItem[]
     */
    public function getCustomDateFields(): array
    {
        return $this->customDateFields;
    }

    /**
     * Up to 8 custom fields of the date type value.
     *
     * @param StagedEmployeeCustomDateFieldsItem[] $customDateFields
     */
    public function setCustomDateFields(array $customDateFields): self
    {
        $this->customDateFields = $customDateFields;

        return $this;
    }

    /**
     * Up to 8 custom fields of the dropdown type value.
     *
     * @return StagedEmployeeCustomDropDownFieldsItem[]
     */
    public function getCustomDropDownFields(): array
    {
        return $this->customDropDownFields;
    }

    /**
     * Up to 8 custom fields of the dropdown type value.
     *
     * @param StagedEmployeeCustomDropDownFieldsItem[] $customDropDownFields
     */
    public function setCustomDropDownFields(array $customDropDownFields): self
    {
        $this->customDropDownFields = $customDropDownFields;

        return $this;
    }

    /**
     * Up to 8 custom fields of numeric type value.
     *
     * @return StagedEmployeeCustomNumberFieldsItem[]
     */
    public function getCustomNumberFields(): array
    {
        return $this->customNumberFields;
    }

    /**
     * Up to 8 custom fields of numeric type value.
     *
     * @param StagedEmployeeCustomNumberFieldsItem[] $customNumberFields
     */
    public function setCustomNumberFields(array $customNumberFields): self
    {
        $this->customNumberFields = $customNumberFields;

        return $this;
    }

    /**
     * Up to 8 custom fields of text type value.
     *
     * @return StagedEmployeeCustomTextFieldsItem[]
     */
    public function getCustomTextFields(): array
    {
        return $this->customTextFields;
    }

    /**
     * Up to 8 custom fields of text type value.
     *
     * @param StagedEmployeeCustomTextFieldsItem[] $customTextFields
     */
    public function setCustomTextFields(array $customTextFields): self
    {
        $this->customTextFields = $customTextFields;

        return $this;
    }

    /**
     * Add home department cost center, position, supervisor, reviewer, employment type, EEO class, pay settings, and union information.
     *
     * @return StagedEmployeeDepartmentPositionItem[]
     */
    public function getDepartmentPosition(): array
    {
        return $this->departmentPosition;
    }

    /**
     * Add home department cost center, position, supervisor, reviewer, employment type, EEO class, pay settings, and union information.
     *
     * @param StagedEmployeeDepartmentPositionItem[] $departmentPosition
     */
    public function setDepartmentPosition(array $departmentPosition): self
    {
        $this->departmentPosition = $departmentPosition;

        return $this;
    }

    /**
     * Add federal tax amount type (taxCalculationCode), amount or percentage, filing status, and exemptions.
     *
     * @return StagedEmployeeFederalTaxItem[]
     */
    public function getFederalTax(): array
    {
        return $this->federalTax;
    }

    /**
     * Add federal tax amount type (taxCalculationCode), amount or percentage, filing status, and exemptions.
     *
     * @param StagedEmployeeFederalTaxItem[] $federalTax
     */
    public function setFederalTax(array $federalTax): self
    {
        $this->federalTax = $federalTax;

        return $this;
    }

    /**
     * Add employee's home address, personal phone numbers, and personal email.
     *
     * @return StagedEmployeeHomeAddressItem[]
     */
    public function getHomeAddress(): array
    {
        return $this->homeAddress;
    }

    /**
     * Add employee's home address, personal phone numbers, and personal email.
     *
     * @param StagedEmployeeHomeAddressItem[] $homeAddress
     */
    public function setHomeAddress(array $homeAddress): self
    {
        $this->homeAddress = $homeAddress;

        return $this;
    }

    /**
     * Add local tax code, filing status, and exemptions including PA-PSD taxes.
     *
     * @return StagedEmployeeLocalTaxItem[]
     */
    public function getLocalTax(): array
    {
        return $this->localTax;
    }

    /**
     * Add local tax code, filing status, and exemptions including PA-PSD taxes.
     *
     * @param StagedEmployeeLocalTaxItem[] $localTax
     */
    public function setLocalTax(array $localTax): self
    {
        $this->localTax = $localTax;

        return $this;
    }

    /**
     * Add the main direct deposit account. After deposits are made to any additional direct deposit accounts, the remaining net check is deposited in the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with what is provided on the request. GET API will not return direct deposit data.
     *
     * @return StagedEmployeeMainDirectDepositItem[]
     */
    public function getMainDirectDeposit(): array
    {
        return $this->mainDirectDeposit;
    }

    /**
     * Add the main direct deposit account. After deposits are made to any additional direct deposit accounts, the remaining net check is deposited in the main direct deposit account. IMPORTANT: A direct deposit update will remove ALL existing main and additional direct deposit information in WebPay and replace with what is provided on the request. GET API will not return direct deposit data.
     *
     * @param StagedEmployeeMainDirectDepositItem[] $mainDirectDeposit
     */
    public function setMainDirectDeposit(array $mainDirectDeposit): self
    {
        $this->mainDirectDeposit = $mainDirectDeposit;

        return $this;
    }

    /**
     * Add non-primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, supplemental check (specialCheckCalc), and reciprocity code information.
     *
     * @return StagedEmployeeNonPrimaryStateTaxItem[]
     */
    public function getNonPrimaryStateTax(): array
    {
        return $this->nonPrimaryStateTax;
    }

    /**
     * Add non-primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, supplemental check (specialCheckCalc), and reciprocity code information.
     *
     * @param StagedEmployeeNonPrimaryStateTaxItem[] $nonPrimaryStateTax
     */
    public function setNonPrimaryStateTax(array $nonPrimaryStateTax): self
    {
        $this->nonPrimaryStateTax = $nonPrimaryStateTax;

        return $this;
    }

    /**
     * Add hourly or salary pay rate, effective date, and pay frequency.
     *
     * @return StagedEmployeePrimaryPayRateItem[]
     */
    public function getPrimaryPayRate(): array
    {
        return $this->primaryPayRate;
    }

    /**
     * Add hourly or salary pay rate, effective date, and pay frequency.
     *
     * @param StagedEmployeePrimaryPayRateItem[] $primaryPayRate
     */
    public function setPrimaryPayRate(array $primaryPayRate): self
    {
        $this->primaryPayRate = $primaryPayRate;

        return $this;
    }

    /**
     * Add primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, and supplemental check (specialCheckCalc) information. Only one primary state is allowed.
     *
     * @return StagedEmployeePrimaryStateTaxItem[]
     */
    public function getPrimaryStateTax(): array
    {
        return $this->primaryStateTax;
    }

    /**
     * Add primary state tax code, amount type (taxCalculationCode), amount or percentage, filing status, exemptions, and supplemental check (specialCheckCalc) information. Only one primary state is allowed.
     *
     * @param StagedEmployeePrimaryStateTaxItem[] $primaryStateTax
     */
    public function setPrimaryStateTax(array $primaryStateTax): self
    {
        $this->primaryStateTax = $primaryStateTax;

        return $this;
    }

    /**
     * Add employee status, change reason, effective date, and adjusted seniority date. Note that companies that are still in Implementation cannot hire future employees.
     *
     * @return StagedEmployeeStatusItem[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

    /**
     * Add employee status, change reason, effective date, and adjusted seniority date. Note that companies that are still in Implementation cannot hire future employees.
     *
     * @param StagedEmployeeStatusItem[] $status
     */
    public function setStatus(array $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Add Web Time badge number and charge rate and synchronize Web Pay and Web Time employee data.
     */
    public function getWebTime(): StagedEmployeeWebTime
    {
        return $this->webTime;
    }

    /**
     * Add Web Time badge number and charge rate and synchronize Web Pay and Web Time employee data.
     */
    public function setWebTime(StagedEmployeeWebTime $webTime): self
    {
        $this->webTime = $webTime;

        return $this;
    }

    /**
     * Add employee's work address, phone numbers, and email. Work Location drop down field is not included.
     *
     * @return StagedEmployeeWorkAddressItem[]
     */
    public function getWorkAddress(): array
    {
        return $this->workAddress;
    }

    /**
     * Add employee's work address, phone numbers, and email. Work Location drop down field is not included.
     *
     * @param StagedEmployeeWorkAddressItem[] $workAddress
     */
    public function setWorkAddress(array $workAddress): self
    {
        $this->workAddress = $workAddress;

        return $this;
    }

    /**
     * Add I-9 work authorization information.
     *
     * @return StagedEmployeeWorkEligibilityItem[]
     */
    public function getWorkEligibility(): array
    {
        return $this->workEligibility;
    }

    /**
     * Add I-9 work authorization information.
     *
     * @param StagedEmployeeWorkEligibilityItem[] $workEligibility
     */
    public function setWorkEligibility(array $workEligibility): self
    {
        $this->workEligibility = $workEligibility;

        return $this;
    }
}
