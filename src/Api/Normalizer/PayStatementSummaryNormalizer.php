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

class PayStatementSummaryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\PayStatementSummary';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Paylocity\\Api\\Model\\PayStatementSummary';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\PayStatementSummary();
        if (property_exists($data, 'autoPay')) {
            $object->setAutoPay($data->{'autoPay'});
        }
        if (property_exists($data, 'checkNumber')) {
            $object->setCheckNumber($data->{'checkNumber'});
        }
        if (property_exists($data, 'process')) {
            $object->setProcess($data->{'process'});
        }
        if (property_exists($data, 'transactionNumber')) {
            $object->setTransactionNumber($data->{'transactionNumber'});
        }
        if (property_exists($data, 'voucherNumber')) {
            $object->setVoucherNumber($data->{'voucherNumber'});
        }
        if (property_exists($data, 'year')) {
            $object->setYear($data->{'year'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $data->{'autoPay'} = $object->getAutoPay();
        $data->{'checkNumber'} = $object->getCheckNumber();
        $data->{'process'} = $object->getProcess();
        $data->{'transactionNumber'} = $object->getTransactionNumber();
        $data->{'voucherNumber'} = $object->getVoucherNumber();
        $data->{'year'} = $object->getYear();

        return $data;
    }
}
