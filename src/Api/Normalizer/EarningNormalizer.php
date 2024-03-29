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

class EarningNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\Earning';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Paylocity\\Api\\Model\\Earning';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\Earning();
        if (property_exists($data, 'agency')) {
            $object->setAgency($data->{'agency'});
        }
        if (property_exists($data, 'calculationCode')) {
            $object->setCalculationCode($data->{'calculationCode'});
        }
        if (property_exists($data, 'costCenter1')) {
            $object->setCostCenter1($data->{'costCenter1'});
        }
        if (property_exists($data, 'costCenter2')) {
            $object->setCostCenter2($data->{'costCenter2'});
        }
        if (property_exists($data, 'costCenter3')) {
            $object->setCostCenter3($data->{'costCenter3'});
        }
        if (property_exists($data, 'earningCode')) {
            $object->setEarningCode($data->{'earningCode'});
        }
        if (property_exists($data, 'effectiveDate')) {
            $object->setEffectiveDate($data->{'effectiveDate'});
        }
        if (property_exists($data, 'endDate')) {
            $object->setEndDate($data->{'endDate'});
        }
        if (property_exists($data, 'frequency')) {
            $object->setFrequency($data->{'frequency'});
        }
        if (property_exists($data, 'jobCode')) {
            $object->setJobCode($data->{'jobCode'});
        }
        if (property_exists($data, 'rateCode')) {
            $object->setRateCode($data->{'rateCode'});
        }
        if (property_exists($data, 'startDate')) {
            $object->setStartDate($data->{'startDate'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $data->{'agency'} = $object->getAgency();
        $data->{'calculationCode'} = $object->getCalculationCode();
        $data->{'costCenter1'} = $object->getCostCenter1();
        $data->{'costCenter2'} = $object->getCostCenter2();
        $data->{'costCenter3'} = $object->getCostCenter3();
        $data->{'earningCode'} = $object->getEarningCode();
        $data->{'effectiveDate'} = $object->getEffectiveDate();
        $data->{'endDate'} = $object->getEndDate();
        $data->{'frequency'} = $object->getFrequency();
        $data->{'jobCode'} = $object->getJobCode();
        $data->{'rateCode'} = $object->getRateCode();
        $data->{'startDate'} = $object->getStartDate();

        return $data;
    }
}
