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

class EmployeeTaxSetupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Paylocity\\Api\\Model\\EmployeeTaxSetup';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Paylocity\\Api\\Model\\EmployeeTaxSetup';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Paylocity\Api\Model\EmployeeTaxSetup();
        if (property_exists($data, 'fitwExemptNotes')) {
            $value = $data->{'fitwExemptNotes'};
            if (is_string($data->{'fitwExemptNotes'})) {
                $value = $data->{'fitwExemptNotes'};
            } elseif (is_null($data->{'fitwExemptNotes'})) {
                $value = $data->{'fitwExemptNotes'};
            }
            $object->setFitwExemptNotes($value);
        }
        if (property_exists($data, 'fitwExemptReason')) {
            $value_1 = $data->{'fitwExemptReason'};
            if (is_string($data->{'fitwExemptReason'})) {
                $value_1 = $data->{'fitwExemptReason'};
            } elseif (is_null($data->{'fitwExemptReason'})) {
                $value_1 = $data->{'fitwExemptReason'};
            }
            $object->setFitwExemptReason($value_1);
        }
        if (property_exists($data, 'futaExemptNotes')) {
            $value_2 = $data->{'futaExemptNotes'};
            if (is_string($data->{'futaExemptNotes'})) {
                $value_2 = $data->{'futaExemptNotes'};
            } elseif (is_null($data->{'futaExemptNotes'})) {
                $value_2 = $data->{'futaExemptNotes'};
            }
            $object->setFutaExemptNotes($value_2);
        }
        if (property_exists($data, 'futaExemptReason')) {
            $value_3 = $data->{'futaExemptReason'};
            if (is_string($data->{'futaExemptReason'})) {
                $value_3 = $data->{'futaExemptReason'};
            } elseif (is_null($data->{'futaExemptReason'})) {
                $value_3 = $data->{'futaExemptReason'};
            }
            $object->setFutaExemptReason($value_3);
        }
        if (property_exists($data, 'isEmployee943')) {
            $object->setIsEmployee943($data->{'isEmployee943'});
        }
        if (property_exists($data, 'isPension')) {
            $object->setIsPension($data->{'isPension'});
        }
        if (property_exists($data, 'isStatutory')) {
            $object->setIsStatutory($data->{'isStatutory'});
        }
        if (property_exists($data, 'medExemptNotes')) {
            $value_4 = $data->{'medExemptNotes'};
            if (is_string($data->{'medExemptNotes'})) {
                $value_4 = $data->{'medExemptNotes'};
            } elseif (is_null($data->{'medExemptNotes'})) {
                $value_4 = $data->{'medExemptNotes'};
            }
            $object->setMedExemptNotes($value_4);
        }
        if (property_exists($data, 'medExemptReason')) {
            $value_5 = $data->{'medExemptReason'};
            if (is_string($data->{'medExemptReason'})) {
                $value_5 = $data->{'medExemptReason'};
            } elseif (is_null($data->{'medExemptReason'})) {
                $value_5 = $data->{'medExemptReason'};
            }
            $object->setMedExemptReason($value_5);
        }
        if (property_exists($data, 'sitwExemptNotes')) {
            $value_6 = $data->{'sitwExemptNotes'};
            if (is_string($data->{'sitwExemptNotes'})) {
                $value_6 = $data->{'sitwExemptNotes'};
            } elseif (is_null($data->{'sitwExemptNotes'})) {
                $value_6 = $data->{'sitwExemptNotes'};
            }
            $object->setSitwExemptNotes($value_6);
        }
        if (property_exists($data, 'sitwExemptReason')) {
            $value_7 = $data->{'sitwExemptReason'};
            if (is_string($data->{'sitwExemptReason'})) {
                $value_7 = $data->{'sitwExemptReason'};
            } elseif (is_null($data->{'sitwExemptReason'})) {
                $value_7 = $data->{'sitwExemptReason'};
            }
            $object->setSitwExemptReason($value_7);
        }
        if (property_exists($data, 'ssExemptNotes')) {
            $value_8 = $data->{'ssExemptNotes'};
            if (is_string($data->{'ssExemptNotes'})) {
                $value_8 = $data->{'ssExemptNotes'};
            } elseif (is_null($data->{'ssExemptNotes'})) {
                $value_8 = $data->{'ssExemptNotes'};
            }
            $object->setSsExemptNotes($value_8);
        }
        if (property_exists($data, 'ssExemptReason')) {
            $value_9 = $data->{'ssExemptReason'};
            if (is_string($data->{'ssExemptReason'})) {
                $value_9 = $data->{'ssExemptReason'};
            } elseif (is_null($data->{'ssExemptReason'})) {
                $value_9 = $data->{'ssExemptReason'};
            }
            $object->setSsExemptReason($value_9);
        }
        if (property_exists($data, 'suiExemptNotes')) {
            $value_10 = $data->{'suiExemptNotes'};
            if (is_string($data->{'suiExemptNotes'})) {
                $value_10 = $data->{'suiExemptNotes'};
            } elseif (is_null($data->{'suiExemptNotes'})) {
                $value_10 = $data->{'suiExemptNotes'};
            }
            $object->setSuiExemptNotes($value_10);
        }
        if (property_exists($data, 'suiExemptReason')) {
            $value_11 = $data->{'suiExemptReason'};
            if (is_string($data->{'suiExemptReason'})) {
                $value_11 = $data->{'suiExemptReason'};
            } elseif (is_null($data->{'suiExemptReason'})) {
                $value_11 = $data->{'suiExemptReason'};
            }
            $object->setSuiExemptReason($value_11);
        }
        if (property_exists($data, 'suiState')) {
            $value_12 = $data->{'suiState'};
            if (is_string($data->{'suiState'})) {
                $value_12 = $data->{'suiState'};
            } elseif (is_null($data->{'suiState'})) {
                $value_12 = $data->{'suiState'};
            }
            $object->setSuiState($value_12);
        }
        if (property_exists($data, 'taxDistributionCode1099R')) {
            $value_13 = $data->{'taxDistributionCode1099R'};
            if (is_string($data->{'taxDistributionCode1099R'})) {
                $value_13 = $data->{'taxDistributionCode1099R'};
            } elseif (is_null($data->{'taxDistributionCode1099R'})) {
                $value_13 = $data->{'taxDistributionCode1099R'};
            }
            $object->setTaxDistributionCode1099R($value_13);
        }
        if (property_exists($data, 'taxForm')) {
            $value_14 = $data->{'taxForm'};
            if (is_string($data->{'taxForm'})) {
                $value_14 = $data->{'taxForm'};
            } elseif (is_null($data->{'taxForm'})) {
                $value_14 = $data->{'taxForm'};
            }
            $object->setTaxForm($value_14);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        $value = $object->getFitwExemptNotes();
        if (is_string($object->getFitwExemptNotes())) {
            $value = $object->getFitwExemptNotes();
        } elseif (is_null($object->getFitwExemptNotes())) {
            $value = $object->getFitwExemptNotes();
        }
        $data->{'fitwExemptNotes'} = $value;
        $value_1 = $object->getFitwExemptReason();
        if (is_string($object->getFitwExemptReason())) {
            $value_1 = $object->getFitwExemptReason();
        } elseif (is_null($object->getFitwExemptReason())) {
            $value_1 = $object->getFitwExemptReason();
        }
        $data->{'fitwExemptReason'} = $value_1;
        $value_2 = $object->getFutaExemptNotes();
        if (is_string($object->getFutaExemptNotes())) {
            $value_2 = $object->getFutaExemptNotes();
        } elseif (is_null($object->getFutaExemptNotes())) {
            $value_2 = $object->getFutaExemptNotes();
        }
        $data->{'futaExemptNotes'} = $value_2;
        $value_3 = $object->getFutaExemptReason();
        if (is_string($object->getFutaExemptReason())) {
            $value_3 = $object->getFutaExemptReason();
        } elseif (is_null($object->getFutaExemptReason())) {
            $value_3 = $object->getFutaExemptReason();
        }
        $data->{'futaExemptReason'} = $value_3;
        if (null !== $object->getIsEmployee943()) {
            $data->{'isEmployee943'} = $object->getIsEmployee943();
        }
        if (null !== $object->getIsPension()) {
            $data->{'isPension'} = $object->getIsPension();
        }
        if (null !== $object->getIsStatutory()) {
            $data->{'isStatutory'} = $object->getIsStatutory();
        }
        $value_4 = $object->getMedExemptNotes();
        if (is_string($object->getMedExemptNotes())) {
            $value_4 = $object->getMedExemptNotes();
        } elseif (is_null($object->getMedExemptNotes())) {
            $value_4 = $object->getMedExemptNotes();
        }
        $data->{'medExemptNotes'} = $value_4;
        $value_5 = $object->getMedExemptReason();
        if (is_string($object->getMedExemptReason())) {
            $value_5 = $object->getMedExemptReason();
        } elseif (is_null($object->getMedExemptReason())) {
            $value_5 = $object->getMedExemptReason();
        }
        $data->{'medExemptReason'} = $value_5;
        $value_6 = $object->getSitwExemptNotes();
        if (is_string($object->getSitwExemptNotes())) {
            $value_6 = $object->getSitwExemptNotes();
        } elseif (is_null($object->getSitwExemptNotes())) {
            $value_6 = $object->getSitwExemptNotes();
        }
        $data->{'sitwExemptNotes'} = $value_6;
        $value_7 = $object->getSitwExemptReason();
        if (is_string($object->getSitwExemptReason())) {
            $value_7 = $object->getSitwExemptReason();
        } elseif (is_null($object->getSitwExemptReason())) {
            $value_7 = $object->getSitwExemptReason();
        }
        $data->{'sitwExemptReason'} = $value_7;
        $value_8 = $object->getSsExemptNotes();
        if (is_string($object->getSsExemptNotes())) {
            $value_8 = $object->getSsExemptNotes();
        } elseif (is_null($object->getSsExemptNotes())) {
            $value_8 = $object->getSsExemptNotes();
        }
        $data->{'ssExemptNotes'} = $value_8;
        $value_9 = $object->getSsExemptReason();
        if (is_string($object->getSsExemptReason())) {
            $value_9 = $object->getSsExemptReason();
        } elseif (is_null($object->getSsExemptReason())) {
            $value_9 = $object->getSsExemptReason();
        }
        $data->{'ssExemptReason'} = $value_9;
        $value_10 = $object->getSuiExemptNotes();
        if (is_string($object->getSuiExemptNotes())) {
            $value_10 = $object->getSuiExemptNotes();
        } elseif (is_null($object->getSuiExemptNotes())) {
            $value_10 = $object->getSuiExemptNotes();
        }
        $data->{'suiExemptNotes'} = $value_10;
        $value_11 = $object->getSuiExemptReason();
        if (is_string($object->getSuiExemptReason())) {
            $value_11 = $object->getSuiExemptReason();
        } elseif (is_null($object->getSuiExemptReason())) {
            $value_11 = $object->getSuiExemptReason();
        }
        $data->{'suiExemptReason'} = $value_11;
        $value_12 = $object->getSuiState();
        if (is_string($object->getSuiState())) {
            $value_12 = $object->getSuiState();
        } elseif (is_null($object->getSuiState())) {
            $value_12 = $object->getSuiState();
        }
        $data->{'suiState'} = $value_12;
        $value_13 = $object->getTaxDistributionCode1099R();
        if (is_string($object->getTaxDistributionCode1099R())) {
            $value_13 = $object->getTaxDistributionCode1099R();
        } elseif (is_null($object->getTaxDistributionCode1099R())) {
            $value_13 = $object->getTaxDistributionCode1099R();
        }
        $data->{'taxDistributionCode1099R'} = $value_13;
        $value_14 = $object->getTaxForm();
        if (is_string($object->getTaxForm())) {
            $value_14 = $object->getTaxForm();
        } elseif (is_null($object->getTaxForm())) {
            $value_14 = $object->getTaxForm();
        }
        $data->{'taxForm'} = $value_14;

        return $data;
    }
}