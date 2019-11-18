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

class EmployeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\Employee';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Paylocity\\Api\\Model\\Employee';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\Employee();
        if (property_exists($data, 'additionalDirectDeposit')) {
            $values = [];
            foreach ($data->{'additionalDirectDeposit'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Paylocity\\Api\\Model\\EmployeeAdditionalDirectDepositItem', 'json', $context);
            }
            $object->setAdditionalDirectDeposit($values);
        }
        if (property_exists($data, 'additionalRate')) {
            $values_1 = [];
            foreach ($data->{'additionalRate'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Paylocity\\Api\\Model\\EmployeeAdditionalRateItem', 'json', $context);
            }
            $object->setAdditionalRate($values_1);
        }
        if (property_exists($data, 'benefitSetup')) {
            $object->setBenefitSetup($this->denormalizer->denormalize($data->{'benefitSetup'}, 'Paylocity\\Api\\Model\\EmployeeBenefitSetup', 'json', $context));
        }
        if (property_exists($data, 'customBooleanFields')) {
            $values_2 = [];
            foreach ($data->{'customBooleanFields'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Paylocity\\Api\\Model\\EmployeeCustomBooleanFieldsItem', 'json', $context);
            }
            $object->setCustomBooleanFields($values_2);
        }
        if (property_exists($data, 'customDateFields')) {
            $values_3 = [];
            foreach ($data->{'customDateFields'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Paylocity\\Api\\Model\\EmployeeCustomDateFieldsItem', 'json', $context);
            }
            $object->setCustomDateFields($values_3);
        }
        if (property_exists($data, 'customDropDownFields')) {
            $values_4 = [];
            foreach ($data->{'customDropDownFields'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Paylocity\\Api\\Model\\EmployeeCustomDropDownFieldsItem', 'json', $context);
            }
            $object->setCustomDropDownFields($values_4);
        }
        if (property_exists($data, 'customNumberFields')) {
            $values_5 = [];
            foreach ($data->{'customNumberFields'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Paylocity\\Api\\Model\\EmployeeCustomNumberFieldsItem', 'json', $context);
            }
            $object->setCustomNumberFields($values_5);
        }
        if (property_exists($data, 'customTextFields')) {
            $values_6 = [];
            foreach ($data->{'customTextFields'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Paylocity\\Api\\Model\\EmployeeCustomTextFieldsItem', 'json', $context);
            }
            $object->setCustomTextFields($values_6);
        }
        if (property_exists($data, 'departmentPosition')) {
            $object->setDepartmentPosition($this->denormalizer->denormalize($data->{'departmentPosition'}, 'Paylocity\\Api\\Model\\EmployeeDepartmentPosition', 'json', $context));
        }
        if (property_exists($data, 'emergencyContacts')) {
            $values_7 = [];
            foreach ($data->{'emergencyContacts'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Paylocity\\Api\\Model\\EmployeeEmergencyContactsItem', 'json', $context);
            }
            $object->setEmergencyContacts($values_7);
        }
        if (property_exists($data, 'federalTax')) {
            $object->setFederalTax($this->denormalizer->denormalize($data->{'federalTax'}, 'Paylocity\\Api\\Model\\EmployeeFederalTax', 'json', $context));
        }
        if (property_exists($data, 'homeAddress')) {
            $object->setHomeAddress($this->denormalizer->denormalize($data->{'homeAddress'}, 'Paylocity\\Api\\Model\\EmployeeHomeAddress', 'json', $context));
        }
        if (property_exists($data, 'isHighlyCompensated')) {
            $object->setIsHighlyCompensated($data->{'isHighlyCompensated'});
        }
        if (property_exists($data, 'isSmoker')) {
            $object->setIsSmoker($data->{'isSmoker'});
        }
        if (property_exists($data, 'localTax')) {
            $values_8 = [];
            foreach ($data->{'localTax'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Paylocity\\Api\\Model\\EmployeeLocalTaxItem', 'json', $context);
            }
            $object->setLocalTax($values_8);
        }
        if (property_exists($data, 'mainDirectDeposit')) {
            $object->setMainDirectDeposit($this->denormalizer->denormalize($data->{'mainDirectDeposit'}, 'Paylocity\\Api\\Model\\EmployeeMainDirectDeposit', 'json', $context));
        }
        if (property_exists($data, 'nonPrimaryStateTax')) {
            $object->setNonPrimaryStateTax($this->denormalizer->denormalize($data->{'nonPrimaryStateTax'}, 'Paylocity\\Api\\Model\\EmployeeNonPrimaryStateTax', 'json', $context));
        }
        if (property_exists($data, 'primaryPayRate')) {
            $object->setPrimaryPayRate($this->denormalizer->denormalize($data->{'primaryPayRate'}, 'Paylocity\\Api\\Model\\EmployeePrimaryPayRate', 'json', $context));
        }
        if (property_exists($data, 'primaryStateTax')) {
            $object->setPrimaryStateTax($this->denormalizer->denormalize($data->{'primaryStateTax'}, 'Paylocity\\Api\\Model\\EmployeePrimaryStateTax', 'json', $context));
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Paylocity\\Api\\Model\\EmployeeStatus', 'json', $context));
        }
        if (property_exists($data, 'taxSetup')) {
            $object->setTaxSetup($this->denormalizer->denormalize($data->{'taxSetup'}, 'Paylocity\\Api\\Model\\EmployeeTaxSetup', 'json', $context));
        }
        if (property_exists($data, 'webTime')) {
            $object->setWebTime($this->denormalizer->denormalize($data->{'webTime'}, 'Paylocity\\Api\\Model\\EmployeeWebTime', 'json', $context));
        }
        if (property_exists($data, 'workAddress')) {
            $object->setWorkAddress($this->denormalizer->denormalize($data->{'workAddress'}, 'Paylocity\\Api\\Model\\EmployeeWorkAddress', 'json', $context));
        }
        if (property_exists($data, 'workEligibility')) {
            $object->setWorkEligibility($this->denormalizer->denormalize($data->{'workEligibility'}, 'Paylocity\\Api\\Model\\EmployeeWorkEligibility', 'json', $context));
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
        foreach ($object->getAdditionalRate() as $value_1) {
            $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $data->{'additionalRate'} = $values_1;
        $data->{'benefitSetup'} = $this->normalizer->normalize($object->getBenefitSetup(), 'json', $context);
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
        $data->{'departmentPosition'} = $this->normalizer->normalize($object->getDepartmentPosition(), 'json', $context);
        $values_7 = [];
        foreach ($object->getEmergencyContacts() as $value_7) {
            $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
        }
        $data->{'emergencyContacts'} = $values_7;
        $data->{'federalTax'} = $this->normalizer->normalize($object->getFederalTax(), 'json', $context);
        $data->{'homeAddress'} = $this->normalizer->normalize($object->getHomeAddress(), 'json', $context);
        $data->{'isHighlyCompensated'} = $object->getIsHighlyCompensated();
        $data->{'isSmoker'} = $object->getIsSmoker();
        $values_8 = [];
        foreach ($object->getLocalTax() as $value_8) {
            $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
        }
        $data->{'localTax'} = $values_8;
        $data->{'mainDirectDeposit'} = $this->normalizer->normalize($object->getMainDirectDeposit(), 'json', $context);
        $data->{'nonPrimaryStateTax'} = $this->normalizer->normalize($object->getNonPrimaryStateTax(), 'json', $context);
        $data->{'primaryPayRate'} = $this->normalizer->normalize($object->getPrimaryPayRate(), 'json', $context);
        $data->{'primaryStateTax'} = $this->normalizer->normalize($object->getPrimaryStateTax(), 'json', $context);
        $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        $data->{'taxSetup'} = $this->normalizer->normalize($object->getTaxSetup(), 'json', $context);
        $data->{'webTime'} = $this->normalizer->normalize($object->getWebTime(), 'json', $context);
        $data->{'workAddress'} = $this->normalizer->normalize($object->getWorkAddress(), 'json', $context);
        $data->{'workEligibility'} = $this->normalizer->normalize($object->getWorkEligibility(), 'json', $context);

        return $data;
    }
}
