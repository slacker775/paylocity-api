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

class StagedEmployeeCustomBooleanFieldsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\StagedEmployeeCustomBooleanFieldsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Paylocity\\Api\\Model\\StagedEmployeeCustomBooleanFieldsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\StagedEmployeeCustomBooleanFieldsItem();
        if (property_exists($data, 'category')) {
            $object->setCategory($data->{'category'});
        }
        if (property_exists($data, 'label')) {
            $value = $data->{'label'};
            if (is_string($data->{'label'})) {
                $value = $data->{'label'};
            } elseif (is_null($data->{'label'})) {
                $value = $data->{'label'};
            }
            $object->setLabel($value);
        }
        if (property_exists($data, 'value')) {
            $value_1 = $data->{'value'};
            if (is_bool($data->{'value'})) {
                $value_1 = $data->{'value'};
            } elseif (is_null($data->{'value'})) {
                $value_1 = $data->{'value'};
            }
            $object->setValue($value_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCategory()) {
            $data->{'category'} = $object->getCategory();
        }
        $value = $object->getLabel();
        if (is_string($object->getLabel())) {
            $value = $object->getLabel();
        } elseif (is_null($object->getLabel())) {
            $value = $object->getLabel();
        }
        $data->{'label'} = $value;
        $value_1 = $object->getValue();
        if (is_bool($object->getValue())) {
            $value_1 = $object->getValue();
        } elseif (is_null($object->getValue())) {
            $value_1 = $object->getValue();
        }
        $data->{'value'} = $value_1;

        return $data;
    }
}
