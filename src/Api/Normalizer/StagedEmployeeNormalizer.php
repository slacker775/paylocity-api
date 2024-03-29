<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class StagedEmployeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\StagedEmployee';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Paylocity\\Api\\Model\\StagedEmployee';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\StagedEmployee();
        if (property_exists($data, 'additionalDirectDeposit')) {
            $values = [];
            foreach ($data->{'additionalDirectDeposit'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Paylocity\\Api\\Model\\StagedEmployeeAdditionalDirectDepositItem', 'json', $context);
            }
            $object->setAdditionalDirectDeposit($values);
        }
        if (property_exists($data, 'benefitSetup')) {
            $values_1 = [];
            foreach ($data->{'benefitSetup'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Paylocity\\Api\\Model\\StagedEmployeeBenefitSetupItem', 'json', $context);
            }
            $object->setBenefitSetup($values_1);
        }
        if (property_exists($data, 'customBooleanFields')) {
            $values_2 = [];
            foreach ($data->{'customBooleanFields'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Paylocity\\Api\\Model\\StagedEmployeeCustomBooleanFieldsItem', 'json', $context);
            }
            $object->setCustomBooleanFields($values_2);
        }
        if (property_exists($data, 'customDateFields')) {
            $values_3 = [];
            foreach ($data->{'customDateFields'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Paylocity\\Api\\Model\\StagedEmployeeCustomDateFieldsItem', 'json', $context);
            }
            $object->setCustomDateFields($values_3);
        }
        if (property_exists($data, 'customDropDownFields')) {
            $values_4 = [];
            foreach ($data->{'customDropDownFields'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Paylocity\\Api\\Model\\StagedEmployeeCustomDropDownFieldsItem', 'json', $context);
            }
            $object->setCustomDropDownFields($values_4);
        }
        if (property_exists($data, 'customNumberFields')) {
            $values_5 = [];
            foreach ($data->{'customNumberFields'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Paylocity\\Api\\Model\\StagedEmployeeCustomNumberFieldsItem', 'json', $context);
            }
            $object->setCustomNumberFields($values_5);
        }
        if (property_exists($data, 'customTextFields')) {
            $values_6 = [];
            foreach ($data->{'customTextFields'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Paylocity\\Api\\Model\\StagedEmployeeCustomTextFieldsItem', 'json', $context);
            }
            $object->setCustomTextFields($values_6);
        }
        if (property_exists($data, 'departmentPosition')) {
            $values_7 = [];
            foreach ($data->{'departmentPosition'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Paylocity\\Api\\Model\\StagedEmployeeDepartmentPositionItem', 'json', $context);
            }
            $object->setDepartmentPosition($values_7);
        }
        if (property_exists($data, 'federalTax')) {
            $values_8 = [];
            foreach ($data->{'federalTax'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Paylocity\\Api\\Model\\StagedEmployeeFederalTaxItem', 'json', $context);
            }
            $object->setFederalTax($values_8);
        }
        if (property_exists($data, 'homeAddress')) {
            $values_9 = [];
            foreach ($data->{'homeAddress'} as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Paylocity\\Api\\Model\\StagedEmployeeHomeAddressItem', 'json', $context);
            }
            $object->setHomeAddress($values_9);
        }
        if (property_exists($data, 'localTax')) {
            $values_10 = [];
            foreach ($data->{'localTax'} as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Paylocity\\Api\\Model\\StagedEmployeeLocalTaxItem', 'json', $context);
            }
            $object->setLocalTax($values_10);
        }
        if (property_exists($data, 'mainDirectDeposit')) {
            $values_11 = [];
            foreach ($data->{'mainDirectDeposit'} as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Paylocity\\Api\\Model\\StagedEmployeeMainDirectDepositItem', 'json', $context);
            }
            $object->setMainDirectDeposit($values_11);
        }
        if (property_exists($data, 'nonPrimaryStateTax')) {
            $values_12 = [];
            foreach ($data->{'nonPrimaryStateTax'} as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Paylocity\\Api\\Model\\StagedEmployeeNonPrimaryStateTaxItem', 'json', $context);
            }
            $object->setNonPrimaryStateTax($values_12);
        }
        if (property_exists($data, 'primaryPayRate')) {
            $values_13 = [];
            foreach ($data->{'primaryPayRate'} as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Paylocity\\Api\\Model\\StagedEmployeePrimaryPayRateItem', 'json', $context);
            }
            $object->setPrimaryPayRate($values_13);
        }
        if (property_exists($data, 'primaryStateTax')) {
            $values_14 = [];
            foreach ($data->{'primaryStateTax'} as $value_14) {
                $values_14[] = $this->denormalizer->denormalize($value_14, 'Paylocity\\Api\\Model\\StagedEmployeePrimaryStateTaxItem', 'json', $context);
            }
            $object->setPrimaryStateTax($values_14);
        }
        if (property_exists($data, 'status')) {
            $values_15 = [];
            foreach ($data->{'status'} as $value_15) {
                $values_15[] = $this->denormalizer->denormalize($value_15, 'Paylocity\\Api\\Model\\StagedEmployeeStatusItem', 'json', $context);
            }
            $object->setStatus($values_15);
        }
        if (property_exists($data, 'webTime')) {
            $object->setWebTime($this->denormalizer->denormalize($data->{'webTime'}, 'Paylocity\\Api\\Model\\StagedEmployeeWebTime', 'json', $context));
        }
        if (property_exists($data, 'workAddress')) {
            $values_16 = [];
            foreach ($data->{'workAddress'} as $value_16) {
                $values_16[] = $this->denormalizer->denormalize($value_16, 'Paylocity\\Api\\Model\\StagedEmployeeWorkAddressItem', 'json', $context);
            }
            $object->setWorkAddress($values_16);
        }
        if (property_exists($data, 'workEligibility')) {
            $values_17 = [];
            foreach ($data->{'workEligibility'} as $value_17) {
                $values_17[] = $this->denormalizer->denormalize($value_17, 'Paylocity\\Api\\Model\\StagedEmployeeWorkEligibilityItem', 'json', $context);
            }
            $object->setWorkEligibility($values_17);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $values = [];
        foreach ($object->getAdditionalDirectDeposit() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data->{'additionalDirectDeposit'} = $values;
        $values_1 = [];
        foreach ($object->getBenefitSetup() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data->{'benefitSetup'} = $values_1;
        $values_2 = [];
        foreach ($object->getCustomBooleanFields() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data->{'customBooleanFields'} = $values_2;
        $values_3 = [];
        foreach ($object->getCustomDateFields() as $value_3) {
            $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
        }
        $data->{'customDateFields'} = $values_3;
        $values_4 = [];
        foreach ($object->getCustomDropDownFields() as $value_4) {
            $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
        }
        $data->{'customDropDownFields'} = $values_4;
        $values_5 = [];
        foreach ($object->getCustomNumberFields() as $value_5) {
            $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
        }
        $data->{'customNumberFields'} = $values_5;
        $values_6 = [];
        foreach ($object->getCustomTextFields() as $value_6) {
            $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
        }
        $data->{'customTextFields'} = $values_6;
        $values_7 = [];
        foreach ($object->getDepartmentPosition() as $value_7) {
            $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
        }
        $data->{'departmentPosition'} = $values_7;
        $values_8 = [];
        foreach ($object->getFederalTax() as $value_8) {
            $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
        }
        $data->{'federalTax'} = $values_8;
        $values_9 = [];
        foreach ($object->getHomeAddress() as $value_9) {
            $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
        }
        $data->{'homeAddress'} = $values_9;
        $values_10 = [];
        foreach ($object->getLocalTax() as $value_10) {
            $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
        }
        $data->{'localTax'} = $values_10;
        $values_11 = [];
        foreach ($object->getMainDirectDeposit() as $value_11) {
            $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
        }
        $data->{'mainDirectDeposit'} = $values_11;
        $values_12 = [];
        foreach ($object->getNonPrimaryStateTax() as $value_12) {
            $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
        }
        $data->{'nonPrimaryStateTax'} = $values_12;
        $values_13 = [];
        foreach ($object->getPrimaryPayRate() as $value_13) {
            $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
        }
        $data->{'primaryPayRate'} = $values_13;
        $values_14 = [];
        foreach ($object->getPrimaryStateTax() as $value_14) {
            $values_14[] = $this->normalizer->normalize($value_14, 'json', $context);
        }
        $data->{'primaryStateTax'} = $values_14;
        $values_15 = [];
        foreach ($object->getStatus() as $value_15) {
            $values_15[] = $this->normalizer->normalize($value_15, 'json', $context);
        }
        $data->{'status'} = $values_15;
        $data->{'webTime'} = $this->normalizer->normalize($object->getWebTime(), 'json', $context);
        $values_16 = [];
        foreach ($object->getWorkAddress() as $value_16) {
            $values_16[] = $this->normalizer->normalize($value_16, 'json', $context);
        }
        $data->{'workAddress'} = $values_16;
        $values_17 = [];
        foreach ($object->getWorkEligibility() as $value_17) {
            $values_17[] = $this->normalizer->normalize($value_17, 'json', $context);
        }
        $data->{'workEligibility'} = $values_17;

        return $data;
    }
}
