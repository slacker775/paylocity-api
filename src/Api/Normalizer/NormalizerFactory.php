<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new AddClientSecretNormalizer();
        $normalizers[] = new AdditionalRateNormalizer();
        $normalizers[] = new BenefitSetupNormalizer();
        $normalizers[] = new CompanyCodesNormalizer();
        $normalizers[] = new CustomFieldDefinitionNormalizer();
        $normalizers[] = new CustomFieldDefinitionValuesItemNormalizer();
        $normalizers[] = new EarningNormalizer();
        $normalizers[] = new EmergencyContactNormalizer();
        $normalizers[] = new EmployeeNormalizer();
        $normalizers[] = new EmployeeAdditionalDirectDepositItemNormalizer();
        $normalizers[] = new EmployeeAdditionalRateItemNormalizer();
        $normalizers[] = new EmployeeBenefitSetupNormalizer();
        $normalizers[] = new EmployeeCustomBooleanFieldsItemNormalizer();
        $normalizers[] = new EmployeeCustomDateFieldsItemNormalizer();
        $normalizers[] = new EmployeeCustomDropDownFieldsItemNormalizer();
        $normalizers[] = new EmployeeCustomNumberFieldsItemNormalizer();
        $normalizers[] = new EmployeeCustomTextFieldsItemNormalizer();
        $normalizers[] = new EmployeeDepartmentPositionNormalizer();
        $normalizers[] = new EmployeeEmergencyContactsItemNormalizer();
        $normalizers[] = new EmployeeFederalTaxNormalizer();
        $normalizers[] = new EmployeeHomeAddressNormalizer();
        $normalizers[] = new EmployeeLocalTaxItemNormalizer();
        $normalizers[] = new EmployeeMainDirectDepositNormalizer();
        $normalizers[] = new EmployeeNonPrimaryStateTaxNormalizer();
        $normalizers[] = new EmployeePrimaryPayRateNormalizer();
        $normalizers[] = new EmployeePrimaryStateTaxNormalizer();
        $normalizers[] = new EmployeeStatusNormalizer();
        $normalizers[] = new EmployeeTaxSetupNormalizer();
        $normalizers[] = new EmployeeWebTimeNormalizer();
        $normalizers[] = new EmployeeWorkAddressNormalizer();
        $normalizers[] = new EmployeeWorkEligibilityNormalizer();
        $normalizers[] = new EmployeeIdResponseNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new ErrorOptionsItemNormalizer();
        $normalizers[] = new PayStatementDetailsNormalizer();
        $normalizers[] = new PayStatementSummaryNormalizer();
        $normalizers[] = new StagedEmployeeNormalizer();
        $normalizers[] = new StagedEmployeeAdditionalDirectDepositItemNormalizer();
        $normalizers[] = new StagedEmployeeBenefitSetupItemNormalizer();
        $normalizers[] = new StagedEmployeeCustomBooleanFieldsItemNormalizer();
        $normalizers[] = new StagedEmployeeCustomDateFieldsItemNormalizer();
        $normalizers[] = new StagedEmployeeCustomDropDownFieldsItemNormalizer();
        $normalizers[] = new StagedEmployeeCustomNumberFieldsItemNormalizer();
        $normalizers[] = new StagedEmployeeCustomTextFieldsItemNormalizer();
        $normalizers[] = new StagedEmployeeDepartmentPositionItemNormalizer();
        $normalizers[] = new StagedEmployeeFederalTaxItemNormalizer();
        $normalizers[] = new StagedEmployeeHomeAddressItemNormalizer();
        $normalizers[] = new StagedEmployeeLocalTaxItemNormalizer();
        $normalizers[] = new StagedEmployeeMainDirectDepositItemNormalizer();
        $normalizers[] = new StagedEmployeeNonPrimaryStateTaxItemNormalizer();
        $normalizers[] = new StagedEmployeePrimaryPayRateItemNormalizer();
        $normalizers[] = new StagedEmployeePrimaryStateTaxItemNormalizer();
        $normalizers[] = new StagedEmployeeStatusItemNormalizer();
        $normalizers[] = new StagedEmployeeWebTimeNormalizer();
        $normalizers[] = new StagedEmployeeWorkAddressItemNormalizer();
        $normalizers[] = new StagedEmployeeWorkEligibilityItemNormalizer();
        $normalizers[] = new TrackingNumberResponseNormalizer();

        return $normalizers;
    }
}
