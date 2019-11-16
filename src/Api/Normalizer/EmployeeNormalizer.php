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
        return get_class($data) === 'Paylocity\\Api\\Model\\Employee';
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
        if (property_exists($data, 'birthDate')) {
            $value_2 = $data->{'birthDate'};
            if (is_string($data->{'birthDate'})) {
                $value_2 = $data->{'birthDate'};
            } elseif (is_null($data->{'birthDate'})) {
                $value_2 = $data->{'birthDate'};
            }
            $object->setBirthDate($value_2);
        }
        if (property_exists($data, 'companyName')) {
            $value_3 = $data->{'companyName'};
            if (is_string($data->{'companyName'})) {
                $value_3 = $data->{'companyName'};
            } elseif (is_null($data->{'companyName'})) {
                $value_3 = $data->{'companyName'};
            }
            $object->setCompanyName($value_3);
        }
        if (property_exists($data, 'currency')) {
            $value_4 = $data->{'currency'};
            if (is_string($data->{'currency'})) {
                $value_4 = $data->{'currency'};
            } elseif (is_null($data->{'currency'})) {
                $value_4 = $data->{'currency'};
            }
            $object->setCurrency($value_4);
        }
        if (property_exists($data, 'customBooleanFields')) {
            $values_2 = [];
            foreach ($data->{'customBooleanFields'} as $value_5) {
                $values_2[] = $this->denormalizer->denormalize($value_5, 'Paylocity\\Api\\Model\\EmployeeCustomBooleanFieldsItem', 'json', $context);
            }
            $object->setCustomBooleanFields($values_2);
        }
        if (property_exists($data, 'customDateFields')) {
            $values_3 = [];
            foreach ($data->{'customDateFields'} as $value_6) {
                $values_3[] = $this->denormalizer->denormalize($value_6, 'Paylocity\\Api\\Model\\EmployeeCustomDateFieldsItem', 'json', $context);
            }
            $object->setCustomDateFields($values_3);
        }
        if (property_exists($data, 'customDropDownFields')) {
            $values_4 = [];
            foreach ($data->{'customDropDownFields'} as $value_7) {
                $values_4[] = $this->denormalizer->denormalize($value_7, 'Paylocity\\Api\\Model\\EmployeeCustomDropDownFieldsItem', 'json', $context);
            }
            $object->setCustomDropDownFields($values_4);
        }
        if (property_exists($data, 'customNumberFields')) {
            $values_5 = [];
            foreach ($data->{'customNumberFields'} as $value_8) {
                $values_5[] = $this->denormalizer->denormalize($value_8, 'Paylocity\\Api\\Model\\EmployeeCustomNumberFieldsItem', 'json', $context);
            }
            $object->setCustomNumberFields($values_5);
        }
        if (property_exists($data, 'customTextFields')) {
            $values_6 = [];
            foreach ($data->{'customTextFields'} as $value_9) {
                $values_6[] = $this->denormalizer->denormalize($value_9, 'Paylocity\\Api\\Model\\EmployeeCustomTextFieldsItem', 'json', $context);
            }
            $object->setCustomTextFields($values_6);
        }
        if (property_exists($data, 'departmentPosition')) {
            $object->setDepartmentPosition($this->denormalizer->denormalize($data->{'departmentPosition'}, 'Paylocity\\Api\\Model\\EmployeeDepartmentPosition', 'json', $context));
        }
        if (property_exists($data, 'disabilityDescription')) {
            $value_10 = $data->{'disabilityDescription'};
            if (is_string($data->{'disabilityDescription'})) {
                $value_10 = $data->{'disabilityDescription'};
            } elseif (is_null($data->{'disabilityDescription'})) {
                $value_10 = $data->{'disabilityDescription'};
            }
            $object->setDisabilityDescription($value_10);
        }
        if (property_exists($data, 'emergencyContacts')) {
            $values_7 = [];
            foreach ($data->{'emergencyContacts'} as $value_11) {
                $values_7[] = $this->denormalizer->denormalize($value_11, 'Paylocity\\Api\\Model\\EmployeeEmergencyContactsItem', 'json', $context);
            }
            $object->setEmergencyContacts($values_7);
        }
        if (property_exists($data, 'employeeId')) {
            $value_12 = $data->{'employeeId'};
            if (is_string($data->{'employeeId'})) {
                $value_12 = $data->{'employeeId'};
            } elseif (is_null($data->{'employeeId'})) {
                $value_12 = $data->{'employeeId'};
            }
            $object->setEmployeeId($value_12);
        }
        if (property_exists($data, 'ethnicity')) {
            $value_13 = $data->{'ethnicity'};
            if (is_string($data->{'ethnicity'})) {
                $value_13 = $data->{'ethnicity'};
            } elseif (is_null($data->{'ethnicity'})) {
                $value_13 = $data->{'ethnicity'};
            }
            $object->setEthnicity($value_13);
        }
        if (property_exists($data, 'federalTax')) {
            $object->setFederalTax($this->denormalizer->denormalize($data->{'federalTax'}, 'Paylocity\\Api\\Model\\EmployeeFederalTax', 'json', $context));
        }
        if (property_exists($data, 'firstName')) {
            $value_14 = $data->{'firstName'};
            if (is_string($data->{'firstName'})) {
                $value_14 = $data->{'firstName'};
            } elseif (is_null($data->{'firstName'})) {
                $value_14 = $data->{'firstName'};
            }
            $object->setFirstName($value_14);
        }
        if (property_exists($data, 'gender')) {
            $value_15 = $data->{'gender'};
            if (is_string($data->{'gender'})) {
                $value_15 = $data->{'gender'};
            } elseif (is_null($data->{'gender'})) {
                $value_15 = $data->{'gender'};
            }
            $object->setGender($value_15);
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
        if (property_exists($data, 'lastName')) {
            $value_16 = $data->{'lastName'};
            if (is_string($data->{'lastName'})) {
                $value_16 = $data->{'lastName'};
            } elseif (is_null($data->{'lastName'})) {
                $value_16 = $data->{'lastName'};
            }
            $object->setLastName($value_16);
        }
        if (property_exists($data, 'localTax')) {
            $values_8 = [];
            foreach ($data->{'localTax'} as $value_17) {
                $values_8[] = $this->denormalizer->denormalize($value_17, 'Paylocity\\Api\\Model\\EmployeeLocalTaxItem', 'json', $context);
            }
            $object->setLocalTax($values_8);
        }
        if (property_exists($data, 'mainDirectDeposit')) {
            $object->setMainDirectDeposit($this->denormalizer->denormalize($data->{'mainDirectDeposit'}, 'Paylocity\\Api\\Model\\EmployeeMainDirectDeposit', 'json', $context));
        }
        if (property_exists($data, 'maritalStatus')) {
            $value_18 = $data->{'maritalStatus'};
            if (is_string($data->{'maritalStatus'})) {
                $value_18 = $data->{'maritalStatus'};
            } elseif (is_null($data->{'maritalStatus'})) {
                $value_18 = $data->{'maritalStatus'};
            }
            $object->setMaritalStatus($value_18);
        }
        if (property_exists($data, 'middleName')) {
            $value_19 = $data->{'middleName'};
            if (is_string($data->{'middleName'})) {
                $value_19 = $data->{'middleName'};
            } elseif (is_null($data->{'middleName'})) {
                $value_19 = $data->{'middleName'};
            }
            $object->setMiddleName($value_19);
        }
        if (property_exists($data, 'nonPrimaryStateTax')) {
            $object->setNonPrimaryStateTax($this->denormalizer->denormalize($data->{'nonPrimaryStateTax'}, 'Paylocity\\Api\\Model\\EmployeeNonPrimaryStateTax', 'json', $context));
        }
        if (property_exists($data, 'ownerPercent')) {
            $value_20 = $data->{'ownerPercent'};
            if (is_float($data->{'ownerPercent'})) {
                $value_20 = $data->{'ownerPercent'};
            } elseif (is_null($data->{'ownerPercent'})) {
                $value_20 = $data->{'ownerPercent'};
            }
            $object->setOwnerPercent($value_20);
        }
        if (property_exists($data, 'preferredName')) {
            $value_21 = $data->{'preferredName'};
            if (is_string($data->{'preferredName'})) {
                $value_21 = $data->{'preferredName'};
            } elseif (is_null($data->{'preferredName'})) {
                $value_21 = $data->{'preferredName'};
            }
            $object->setPreferredName($value_21);
        }
        if (property_exists($data, 'primaryPayRate')) {
            $object->setPrimaryPayRate($this->denormalizer->denormalize($data->{'primaryPayRate'}, 'Paylocity\\Api\\Model\\EmployeePrimaryPayRate', 'json', $context));
        }
        if (property_exists($data, 'primaryStateTax')) {
            $object->setPrimaryStateTax($this->denormalizer->denormalize($data->{'primaryStateTax'}, 'Paylocity\\Api\\Model\\EmployeePrimaryStateTax', 'json', $context));
        }
        if (property_exists($data, 'priorLastName')) {
            $value_22 = $data->{'priorLastName'};
            if (is_string($data->{'priorLastName'})) {
                $value_22 = $data->{'priorLastName'};
            } elseif (is_null($data->{'priorLastName'})) {
                $value_22 = $data->{'priorLastName'};
            }
            $object->setPriorLastName($value_22);
        }
        if (property_exists($data, 'salutation')) {
            $value_23 = $data->{'salutation'};
            if (is_string($data->{'salutation'})) {
                $value_23 = $data->{'salutation'};
            } elseif (is_null($data->{'salutation'})) {
                $value_23 = $data->{'salutation'};
            }
            $object->setSalutation($value_23);
        }
        if (property_exists($data, 'ssn')) {
            $value_24 = $data->{'ssn'};
            if (is_string($data->{'ssn'})) {
                $value_24 = $data->{'ssn'};
            } elseif (is_null($data->{'ssn'})) {
                $value_24 = $data->{'ssn'};
            }
            $object->setSsn($value_24);
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($this->denormalizer->denormalize($data->{'status'}, 'Paylocity\\Api\\Model\\EmployeeStatus', 'json', $context));
        }
        if (property_exists($data, 'suffix')) {
            $value_25 = $data->{'suffix'};
            if (is_string($data->{'suffix'})) {
                $value_25 = $data->{'suffix'};
            } elseif (is_null($data->{'suffix'})) {
                $value_25 = $data->{'suffix'};
            }
            $object->setSuffix($value_25);
        }
        if (property_exists($data, 'taxSetup')) {
            $object->setTaxSetup($this->denormalizer->denormalize($data->{'taxSetup'}, 'Paylocity\\Api\\Model\\EmployeeTaxSetup', 'json', $context));
        }
        if (property_exists($data, 'veteranDescription')) {
            $value_26 = $data->{'veteranDescription'};
            if (is_string($data->{'veteranDescription'})) {
                $value_26 = $data->{'veteranDescription'};
            } elseif (is_null($data->{'veteranDescription'})) {
                $value_26 = $data->{'veteranDescription'};
            }
            $object->setVeteranDescription($value_26);
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
        if (null !== $object->getAdditionalDirectDeposit()) {
            $values = [];
            foreach ($object->getAdditionalDirectDeposit() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'additionalDirectDeposit'} = $values;
        }
        if (null !== $object->getAdditionalRate()) {
            $values_1 = [];
            foreach ($object->getAdditionalRate() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'additionalRate'} = $values_1;
        }
        if (null !== $object->getBenefitSetup()) {
            $data->{'benefitSetup'} = $this->normalizer->normalize($object->getBenefitSetup(), 'json', $context);
        }
        $value_2 = $object->getBirthDate();
        if (is_string($object->getBirthDate())) {
            $value_2 = $object->getBirthDate();
        } elseif (is_null($object->getBirthDate())) {
            $value_2 = $object->getBirthDate();
        }
        $data->{'birthDate'} = $value_2;
        $value_3 = $object->getCompanyName();
        if (is_string($object->getCompanyName())) {
            $value_3 = $object->getCompanyName();
        } elseif (is_null($object->getCompanyName())) {
            $value_3 = $object->getCompanyName();
        }
        $data->{'companyName'} = $value_3;
        $value_4 = $object->getCurrency();
        if (is_string($object->getCurrency())) {
            $value_4 = $object->getCurrency();
        } elseif (is_null($object->getCurrency())) {
            $value_4 = $object->getCurrency();
        }
        $data->{'currency'} = $value_4;
        if (null !== $object->getCustomBooleanFields()) {
            $values_2 = [];
            foreach ($object->getCustomBooleanFields() as $value_5) {
                $values_2[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'customBooleanFields'} = $values_2;
        }
        if (null !== $object->getCustomDateFields()) {
            $values_3 = [];
            foreach ($object->getCustomDateFields() as $value_6) {
                $values_3[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'customDateFields'} = $values_3;
        }
        if (null !== $object->getCustomDropDownFields()) {
            $values_4 = [];
            foreach ($object->getCustomDropDownFields() as $value_7) {
                $values_4[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'customDropDownFields'} = $values_4;
        }
        if (null !== $object->getCustomNumberFields()) {
            $values_5 = [];
            foreach ($object->getCustomNumberFields() as $value_8) {
                $values_5[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'customNumberFields'} = $values_5;
        }
        if (null !== $object->getCustomTextFields()) {
            $values_6 = [];
            foreach ($object->getCustomTextFields() as $value_9) {
                $values_6[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data->{'customTextFields'} = $values_6;
        }
        if (null !== $object->getDepartmentPosition()) {
            $data->{'departmentPosition'} = $this->normalizer->normalize($object->getDepartmentPosition(), 'json', $context);
        }
        $value_10 = $object->getDisabilityDescription();
        if (is_string($object->getDisabilityDescription())) {
            $value_10 = $object->getDisabilityDescription();
        } elseif (is_null($object->getDisabilityDescription())) {
            $value_10 = $object->getDisabilityDescription();
        }
        $data->{'disabilityDescription'} = $value_10;
        if (null !== $object->getEmergencyContacts()) {
            $values_7 = [];
            foreach ($object->getEmergencyContacts() as $value_11) {
                $values_7[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $data->{'emergencyContacts'} = $values_7;
        }
        $value_12 = $object->getEmployeeId();
        if (is_string($object->getEmployeeId())) {
            $value_12 = $object->getEmployeeId();
        } elseif (is_null($object->getEmployeeId())) {
            $value_12 = $object->getEmployeeId();
        }
        $data->{'employeeId'} = $value_12;
        $value_13 = $object->getEthnicity();
        if (is_string($object->getEthnicity())) {
            $value_13 = $object->getEthnicity();
        } elseif (is_null($object->getEthnicity())) {
            $value_13 = $object->getEthnicity();
        }
        $data->{'ethnicity'} = $value_13;
        if (null !== $object->getFederalTax()) {
            $data->{'federalTax'} = $this->normalizer->normalize($object->getFederalTax(), 'json', $context);
        }
        $value_14 = $object->getFirstName();
        if (is_string($object->getFirstName())) {
            $value_14 = $object->getFirstName();
        } elseif (is_null($object->getFirstName())) {
            $value_14 = $object->getFirstName();
        }
        $data->{'firstName'} = $value_14;
        $value_15 = $object->getGender();
        if (is_string($object->getGender())) {
            $value_15 = $object->getGender();
        } elseif (is_null($object->getGender())) {
            $value_15 = $object->getGender();
        }
        $data->{'gender'} = $value_15;
        if (null !== $object->getHomeAddress()) {
            $data->{'homeAddress'} = $this->normalizer->normalize($object->getHomeAddress(), 'json', $context);
        }
        if (null !== $object->getIsHighlyCompensated()) {
            $data->{'isHighlyCompensated'} = $object->getIsHighlyCompensated();
        }
        if (null !== $object->getIsSmoker()) {
            $data->{'isSmoker'} = $object->getIsSmoker();
        }
        $value_16 = $object->getLastName();
        if (is_string($object->getLastName())) {
            $value_16 = $object->getLastName();
        } elseif (is_null($object->getLastName())) {
            $value_16 = $object->getLastName();
        }
        $data->{'lastName'} = $value_16;
        if (null !== $object->getLocalTax()) {
            $values_8 = [];
            foreach ($object->getLocalTax() as $value_17) {
                $values_8[] = $this->normalizer->normalize($value_17, 'json', $context);
            }
            $data->{'localTax'} = $values_8;
        }
        if (null !== $object->getMainDirectDeposit()) {
            $data->{'mainDirectDeposit'} = $this->normalizer->normalize($object->getMainDirectDeposit(), 'json', $context);
        }
        $value_18 = $object->getMaritalStatus();
        if (is_string($object->getMaritalStatus())) {
            $value_18 = $object->getMaritalStatus();
        } elseif (is_null($object->getMaritalStatus())) {
            $value_18 = $object->getMaritalStatus();
        }
        $data->{'maritalStatus'} = $value_18;
        $value_19 = $object->getMiddleName();
        if (is_string($object->getMiddleName())) {
            $value_19 = $object->getMiddleName();
        } elseif (is_null($object->getMiddleName())) {
            $value_19 = $object->getMiddleName();
        }
        $data->{'middleName'} = $value_19;
        if (null !== $object->getNonPrimaryStateTax()) {
            $data->{'nonPrimaryStateTax'} = $this->normalizer->normalize($object->getNonPrimaryStateTax(), 'json', $context);
        }
        $value_20 = $object->getOwnerPercent();
        if (is_float($object->getOwnerPercent())) {
            $value_20 = $object->getOwnerPercent();
        } elseif (is_null($object->getOwnerPercent())) {
            $value_20 = $object->getOwnerPercent();
        }
        $data->{'ownerPercent'} = $value_20;
        $value_21 = $object->getPreferredName();
        if (is_string($object->getPreferredName())) {
            $value_21 = $object->getPreferredName();
        } elseif (is_null($object->getPreferredName())) {
            $value_21 = $object->getPreferredName();
        }
        $data->{'preferredName'} = $value_21;
        if (null !== $object->getPrimaryPayRate()) {
            $data->{'primaryPayRate'} = $this->normalizer->normalize($object->getPrimaryPayRate(), 'json', $context);
        }
        if (null !== $object->getPrimaryStateTax()) {
            $data->{'primaryStateTax'} = $this->normalizer->normalize($object->getPrimaryStateTax(), 'json', $context);
        }
        $value_22 = $object->getPriorLastName();
        if (is_string($object->getPriorLastName())) {
            $value_22 = $object->getPriorLastName();
        } elseif (is_null($object->getPriorLastName())) {
            $value_22 = $object->getPriorLastName();
        }
        $data->{'priorLastName'} = $value_22;
        $value_23 = $object->getSalutation();
        if (is_string($object->getSalutation())) {
            $value_23 = $object->getSalutation();
        } elseif (is_null($object->getSalutation())) {
            $value_23 = $object->getSalutation();
        }
        $data->{'salutation'} = $value_23;
        $value_24 = $object->getSsn();
        if (is_string($object->getSsn())) {
            $value_24 = $object->getSsn();
        } elseif (is_null($object->getSsn())) {
            $value_24 = $object->getSsn();
        }
        $data->{'ssn'} = $value_24;
        if (null !== $object->getStatus()) {
            $data->{'status'} = $this->normalizer->normalize($object->getStatus(), 'json', $context);
        }
        $value_25 = $object->getSuffix();
        if (is_string($object->getSuffix())) {
            $value_25 = $object->getSuffix();
        } elseif (is_null($object->getSuffix())) {
            $value_25 = $object->getSuffix();
        }
        $data->{'suffix'} = $value_25;
        if (null !== $object->getTaxSetup()) {
            $data->{'taxSetup'} = $this->normalizer->normalize($object->getTaxSetup(), 'json', $context);
        }
        $value_26 = $object->getVeteranDescription();
        if (is_string($object->getVeteranDescription())) {
            $value_26 = $object->getVeteranDescription();
        } elseif (is_null($object->getVeteranDescription())) {
            $value_26 = $object->getVeteranDescription();
        }
        $data->{'veteranDescription'} = $value_26;
        if (null !== $object->getWebTime()) {
            $data->{'webTime'} = $this->normalizer->normalize($object->getWebTime(), 'json', $context);
        }
        if (null !== $object->getWorkAddress()) {
            $data->{'workAddress'} = $this->normalizer->normalize($object->getWorkAddress(), 'json', $context);
        }
        if (null !== $object->getWorkEligibility()) {
            $data->{'workEligibility'} = $this->normalizer->normalize($object->getWorkEligibility(), 'json', $context);
        }

        return $data;
    }
}