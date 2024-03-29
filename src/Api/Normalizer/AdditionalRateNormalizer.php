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

class AdditionalRateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\AdditionalRate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Paylocity\\Api\\Model\\AdditionalRate';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\AdditionalRate();
        if (property_exists($data, 'changeReason')) {
            $object->setChangeReason($data->{'changeReason'});
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
        if (property_exists($data, 'effectiveDate')) {
            $object->setEffectiveDate($data->{'effectiveDate'});
        }
        if (property_exists($data, 'endCheckDate')) {
            $object->setEndCheckDate($data->{'endCheckDate'});
        }
        if (property_exists($data, 'job')) {
            $object->setJob($data->{'job'});
        }
        if (property_exists($data, 'rate')) {
            $object->setRate($data->{'rate'});
        }
        if (property_exists($data, 'rateCode')) {
            $object->setRateCode($data->{'rateCode'});
        }
        if (property_exists($data, 'rateNotes')) {
            $object->setRateNotes($data->{'rateNotes'});
        }
        if (property_exists($data, 'ratePer')) {
            $object->setRatePer($data->{'ratePer'});
        }
        if (property_exists($data, 'shift')) {
            $object->setShift($data->{'shift'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $data->{'changeReason'} = $object->getChangeReason();
        $data->{'costCenter1'} = $object->getCostCenter1();
        $data->{'costCenter2'} = $object->getCostCenter2();
        $data->{'costCenter3'} = $object->getCostCenter3();
        $data->{'effectiveDate'} = $object->getEffectiveDate();
        $data->{'endCheckDate'} = $object->getEndCheckDate();
        $data->{'job'} = $object->getJob();
        $data->{'rate'} = $object->getRate();
        $data->{'rateCode'} = $object->getRateCode();
        $data->{'rateNotes'} = $object->getRateNotes();
        $data->{'ratePer'} = $object->getRatePer();
        $data->{'shift'} = $object->getShift();

        return $data;
    }
}
