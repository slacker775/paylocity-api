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

class EmergencyContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\EmergencyContact';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Paylocity\\Api\\Model\\EmergencyContact';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\EmergencyContact();
        if (property_exists($data, 'address1')) {
            $value = $data->{'address1'};
            if (is_string($data->{'address1'})) {
                $value = $data->{'address1'};
            } elseif (is_null($data->{'address1'})) {
                $value = $data->{'address1'};
            }
            $object->setAddress1($value);
        }
        if (property_exists($data, 'address2')) {
            $value_1 = $data->{'address2'};
            if (is_string($data->{'address2'})) {
                $value_1 = $data->{'address2'};
            } elseif (is_null($data->{'address2'})) {
                $value_1 = $data->{'address2'};
            }
            $object->setAddress2($value_1);
        }
        if (property_exists($data, 'city')) {
            $value_2 = $data->{'city'};
            if (is_string($data->{'city'})) {
                $value_2 = $data->{'city'};
            } elseif (is_null($data->{'city'})) {
                $value_2 = $data->{'city'};
            }
            $object->setCity($value_2);
        }
        if (property_exists($data, 'country')) {
            $value_3 = $data->{'country'};
            if (is_string($data->{'country'})) {
                $value_3 = $data->{'country'};
            } elseif (is_null($data->{'country'})) {
                $value_3 = $data->{'country'};
            }
            $object->setCountry($value_3);
        }
        if (property_exists($data, 'county')) {
            $value_4 = $data->{'county'};
            if (is_string($data->{'county'})) {
                $value_4 = $data->{'county'};
            } elseif (is_null($data->{'county'})) {
                $value_4 = $data->{'county'};
            }
            $object->setCounty($value_4);
        }
        if (property_exists($data, 'email')) {
            $value_5 = $data->{'email'};
            if (is_string($data->{'email'})) {
                $value_5 = $data->{'email'};
            } elseif (is_null($data->{'email'})) {
                $value_5 = $data->{'email'};
            }
            $object->setEmail($value_5);
        }
        if (property_exists($data, 'firstName')) {
            $value_6 = $data->{'firstName'};
            if (is_string($data->{'firstName'})) {
                $value_6 = $data->{'firstName'};
            } elseif (is_null($data->{'firstName'})) {
                $value_6 = $data->{'firstName'};
            }
            $object->setFirstName($value_6);
        }
        if (property_exists($data, 'homePhone')) {
            $value_7 = $data->{'homePhone'};
            if (is_string($data->{'homePhone'})) {
                $value_7 = $data->{'homePhone'};
            } elseif (is_null($data->{'homePhone'})) {
                $value_7 = $data->{'homePhone'};
            }
            $object->setHomePhone($value_7);
        }
        if (property_exists($data, 'lastName')) {
            $value_8 = $data->{'lastName'};
            if (is_string($data->{'lastName'})) {
                $value_8 = $data->{'lastName'};
            } elseif (is_null($data->{'lastName'})) {
                $value_8 = $data->{'lastName'};
            }
            $object->setLastName($value_8);
        }
        if (property_exists($data, 'mobilePhone')) {
            $value_9 = $data->{'mobilePhone'};
            if (is_string($data->{'mobilePhone'})) {
                $value_9 = $data->{'mobilePhone'};
            } elseif (is_null($data->{'mobilePhone'})) {
                $value_9 = $data->{'mobilePhone'};
            }
            $object->setMobilePhone($value_9);
        }
        if (property_exists($data, 'notes')) {
            $value_10 = $data->{'notes'};
            if (is_string($data->{'notes'})) {
                $value_10 = $data->{'notes'};
            } elseif (is_null($data->{'notes'})) {
                $value_10 = $data->{'notes'};
            }
            $object->setNotes($value_10);
        }
        if (property_exists($data, 'pager')) {
            $value_11 = $data->{'pager'};
            if (is_string($data->{'pager'})) {
                $value_11 = $data->{'pager'};
            } elseif (is_null($data->{'pager'})) {
                $value_11 = $data->{'pager'};
            }
            $object->setPager($value_11);
        }
        if (property_exists($data, 'primaryPhone')) {
            $value_12 = $data->{'primaryPhone'};
            if (is_string($data->{'primaryPhone'})) {
                $value_12 = $data->{'primaryPhone'};
            } elseif (is_null($data->{'primaryPhone'})) {
                $value_12 = $data->{'primaryPhone'};
            }
            $object->setPrimaryPhone($value_12);
        }
        if (property_exists($data, 'priority')) {
            $value_13 = $data->{'priority'};
            if (is_string($data->{'priority'})) {
                $value_13 = $data->{'priority'};
            } elseif (is_null($data->{'priority'})) {
                $value_13 = $data->{'priority'};
            }
            $object->setPriority($value_13);
        }
        if (property_exists($data, 'relationship')) {
            $value_14 = $data->{'relationship'};
            if (is_string($data->{'relationship'})) {
                $value_14 = $data->{'relationship'};
            } elseif (is_null($data->{'relationship'})) {
                $value_14 = $data->{'relationship'};
            }
            $object->setRelationship($value_14);
        }
        if (property_exists($data, 'state')) {
            $value_15 = $data->{'state'};
            if (is_string($data->{'state'})) {
                $value_15 = $data->{'state'};
            } elseif (is_null($data->{'state'})) {
                $value_15 = $data->{'state'};
            }
            $object->setState($value_15);
        }
        if (property_exists($data, 'syncEmployeeInfo')) {
            $object->setSyncEmployeeInfo($data->{'syncEmployeeInfo'});
        }
        if (property_exists($data, 'workExtension')) {
            $value_16 = $data->{'workExtension'};
            if (is_string($data->{'workExtension'})) {
                $value_16 = $data->{'workExtension'};
            } elseif (is_null($data->{'workExtension'})) {
                $value_16 = $data->{'workExtension'};
            }
            $object->setWorkExtension($value_16);
        }
        if (property_exists($data, 'workPhone')) {
            $value_17 = $data->{'workPhone'};
            if (is_string($data->{'workPhone'})) {
                $value_17 = $data->{'workPhone'};
            } elseif (is_null($data->{'workPhone'})) {
                $value_17 = $data->{'workPhone'};
            }
            $object->setWorkPhone($value_17);
        }
        if (property_exists($data, 'zip')) {
            $value_18 = $data->{'zip'};
            if (is_string($data->{'zip'})) {
                $value_18 = $data->{'zip'};
            } elseif (is_null($data->{'zip'})) {
                $value_18 = $data->{'zip'};
            }
            $object->setZip($value_18);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $value = $object->getAddress1();
        if (is_string($object->getAddress1())) {
            $value = $object->getAddress1();
        } elseif (is_null($object->getAddress1())) {
            $value = $object->getAddress1();
        }
        $data->{'address1'} = $value;
        $value_1 = $object->getAddress2();
        if (is_string($object->getAddress2())) {
            $value_1 = $object->getAddress2();
        } elseif (is_null($object->getAddress2())) {
            $value_1 = $object->getAddress2();
        }
        $data->{'address2'} = $value_1;
        $value_2 = $object->getCity();
        if (is_string($object->getCity())) {
            $value_2 = $object->getCity();
        } elseif (is_null($object->getCity())) {
            $value_2 = $object->getCity();
        }
        $data->{'city'} = $value_2;
        $value_3 = $object->getCountry();
        if (is_string($object->getCountry())) {
            $value_3 = $object->getCountry();
        } elseif (is_null($object->getCountry())) {
            $value_3 = $object->getCountry();
        }
        $data->{'country'} = $value_3;
        $value_4 = $object->getCounty();
        if (is_string($object->getCounty())) {
            $value_4 = $object->getCounty();
        } elseif (is_null($object->getCounty())) {
            $value_4 = $object->getCounty();
        }
        $data->{'county'} = $value_4;
        $value_5 = $object->getEmail();
        if (is_string($object->getEmail())) {
            $value_5 = $object->getEmail();
        } elseif (is_null($object->getEmail())) {
            $value_5 = $object->getEmail();
        }
        $data->{'email'} = $value_5;
        $value_6 = $object->getFirstName();
        if (is_string($object->getFirstName())) {
            $value_6 = $object->getFirstName();
        } elseif (is_null($object->getFirstName())) {
            $value_6 = $object->getFirstName();
        }
        $data->{'firstName'} = $value_6;
        $value_7 = $object->getHomePhone();
        if (is_string($object->getHomePhone())) {
            $value_7 = $object->getHomePhone();
        } elseif (is_null($object->getHomePhone())) {
            $value_7 = $object->getHomePhone();
        }
        $data->{'homePhone'} = $value_7;
        $value_8 = $object->getLastName();
        if (is_string($object->getLastName())) {
            $value_8 = $object->getLastName();
        } elseif (is_null($object->getLastName())) {
            $value_8 = $object->getLastName();
        }
        $data->{'lastName'} = $value_8;
        $value_9 = $object->getMobilePhone();
        if (is_string($object->getMobilePhone())) {
            $value_9 = $object->getMobilePhone();
        } elseif (is_null($object->getMobilePhone())) {
            $value_9 = $object->getMobilePhone();
        }
        $data->{'mobilePhone'} = $value_9;
        $value_10 = $object->getNotes();
        if (is_string($object->getNotes())) {
            $value_10 = $object->getNotes();
        } elseif (is_null($object->getNotes())) {
            $value_10 = $object->getNotes();
        }
        $data->{'notes'} = $value_10;
        $value_11 = $object->getPager();
        if (is_string($object->getPager())) {
            $value_11 = $object->getPager();
        } elseif (is_null($object->getPager())) {
            $value_11 = $object->getPager();
        }
        $data->{'pager'} = $value_11;
        $value_12 = $object->getPrimaryPhone();
        if (is_string($object->getPrimaryPhone())) {
            $value_12 = $object->getPrimaryPhone();
        } elseif (is_null($object->getPrimaryPhone())) {
            $value_12 = $object->getPrimaryPhone();
        }
        $data->{'primaryPhone'} = $value_12;
        $value_13 = $object->getPriority();
        if (is_string($object->getPriority())) {
            $value_13 = $object->getPriority();
        } elseif (is_null($object->getPriority())) {
            $value_13 = $object->getPriority();
        }
        $data->{'priority'} = $value_13;
        $value_14 = $object->getRelationship();
        if (is_string($object->getRelationship())) {
            $value_14 = $object->getRelationship();
        } elseif (is_null($object->getRelationship())) {
            $value_14 = $object->getRelationship();
        }
        $data->{'relationship'} = $value_14;
        $value_15 = $object->getState();
        if (is_string($object->getState())) {
            $value_15 = $object->getState();
        } elseif (is_null($object->getState())) {
            $value_15 = $object->getState();
        }
        $data->{'state'} = $value_15;
        if (null !== $object->getSyncEmployeeInfo()) {
            $data->{'syncEmployeeInfo'} = $object->getSyncEmployeeInfo();
        }
        $value_16 = $object->getWorkExtension();
        if (is_string($object->getWorkExtension())) {
            $value_16 = $object->getWorkExtension();
        } elseif (is_null($object->getWorkExtension())) {
            $value_16 = $object->getWorkExtension();
        }
        $data->{'workExtension'} = $value_16;
        $value_17 = $object->getWorkPhone();
        if (is_string($object->getWorkPhone())) {
            $value_17 = $object->getWorkPhone();
        } elseif (is_null($object->getWorkPhone())) {
            $value_17 = $object->getWorkPhone();
        }
        $data->{'workPhone'} = $value_17;
        $value_18 = $object->getZip();
        if (is_string($object->getZip())) {
            $value_18 = $object->getZip();
        } elseif (is_null($object->getZip())) {
            $value_18 = $object->getZip();
        }
        $data->{'zip'} = $value_18;

        return $data;
    }
}
