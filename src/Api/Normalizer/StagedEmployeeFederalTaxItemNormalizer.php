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

class StagedEmployeeFederalTaxItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\StagedEmployeeFederalTaxItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Paylocity\\Api\\Model\\StagedEmployeeFederalTaxItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\StagedEmployeeFederalTaxItem();
        if (property_exists($data, 'amount')) {
            $value = $data->{'amount'};
            if (is_float($data->{'amount'})) {
                $value = $data->{'amount'};
            } elseif (is_null($data->{'amount'})) {
                $value = $data->{'amount'};
            }
            $object->setAmount($value);
        }
        if (property_exists($data, 'exemptions')) {
            $value_1 = $data->{'exemptions'};
            if (is_float($data->{'exemptions'})) {
                $value_1 = $data->{'exemptions'};
            } elseif (is_null($data->{'exemptions'})) {
                $value_1 = $data->{'exemptions'};
            }
            $object->setExemptions($value_1);
        }
        if (property_exists($data, 'filingStatus')) {
            $value_2 = $data->{'filingStatus'};
            if (is_string($data->{'filingStatus'})) {
                $value_2 = $data->{'filingStatus'};
            } elseif (is_null($data->{'filingStatus'})) {
                $value_2 = $data->{'filingStatus'};
            }
            $object->setFilingStatus($value_2);
        }
        if (property_exists($data, 'percentage')) {
            $value_3 = $data->{'percentage'};
            if (is_float($data->{'percentage'})) {
                $value_3 = $data->{'percentage'};
            } elseif (is_null($data->{'percentage'})) {
                $value_3 = $data->{'percentage'};
            }
            $object->setPercentage($value_3);
        }
        if (property_exists($data, 'taxCalculationCode')) {
            $value_4 = $data->{'taxCalculationCode'};
            if (is_string($data->{'taxCalculationCode'})) {
                $value_4 = $data->{'taxCalculationCode'};
            } elseif (is_null($data->{'taxCalculationCode'})) {
                $value_4 = $data->{'taxCalculationCode'};
            }
            $object->setTaxCalculationCode($value_4);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $value = $object->getAmount();
        if (is_float($object->getAmount())) {
            $value = $object->getAmount();
        } elseif (is_null($object->getAmount())) {
            $value = $object->getAmount();
        }
        $data->{'amount'} = $value;
        $value_1 = $object->getExemptions();
        if (is_float($object->getExemptions())) {
            $value_1 = $object->getExemptions();
        } elseif (is_null($object->getExemptions())) {
            $value_1 = $object->getExemptions();
        }
        $data->{'exemptions'} = $value_1;
        $value_2 = $object->getFilingStatus();
        if (is_string($object->getFilingStatus())) {
            $value_2 = $object->getFilingStatus();
        } elseif (is_null($object->getFilingStatus())) {
            $value_2 = $object->getFilingStatus();
        }
        $data->{'filingStatus'} = $value_2;
        $value_3 = $object->getPercentage();
        if (is_float($object->getPercentage())) {
            $value_3 = $object->getPercentage();
        } elseif (is_null($object->getPercentage())) {
            $value_3 = $object->getPercentage();
        }
        $data->{'percentage'} = $value_3;
        $value_4 = $object->getTaxCalculationCode();
        if (is_string($object->getTaxCalculationCode())) {
            $value_4 = $object->getTaxCalculationCode();
        } elseif (is_null($object->getTaxCalculationCode())) {
            $value_4 = $object->getTaxCalculationCode();
        }
        $data->{'taxCalculationCode'} = $value_4;

        return $data;
    }
}
