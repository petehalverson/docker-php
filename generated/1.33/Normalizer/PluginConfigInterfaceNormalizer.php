<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PluginConfigInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_33\\Model\\PluginConfigInterface' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_33\Model\PluginConfigInterface) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_33\Model\PluginConfigInterface();
        if (property_exists($data, 'Types')) {
            $values = [];
            foreach ($data->{'Types'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_33\\Model\\PluginInterfaceType', 'json', $context);
            }
            $object->setTypes($values);
        }
        if (property_exists($data, 'Socket')) {
            $object->setSocket($data->{'Socket'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTypes()) {
            $values = [];
            foreach ($object->getTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Types'} = $values;
        }
        if (null !== $object->getSocket()) {
            $data->{'Socket'} = $object->getSocket();
        }

        return $data;
    }
}
