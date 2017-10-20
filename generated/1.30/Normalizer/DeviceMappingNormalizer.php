<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_30\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeviceMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_30\\Model\\DeviceMapping' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_30\Model\DeviceMapping) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_30\Model\DeviceMapping();
        if (property_exists($data, 'PathOnHost')) {
            $object->setPathOnHost($data->{'PathOnHost'});
        }
        if (property_exists($data, 'PathInContainer')) {
            $object->setPathInContainer($data->{'PathInContainer'});
        }
        if (property_exists($data, 'CgroupPermissions')) {
            $object->setCgroupPermissions($data->{'CgroupPermissions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPathOnHost()) {
            $data->{'PathOnHost'} = $object->getPathOnHost();
        }
        if (null !== $object->getPathInContainer()) {
            $data->{'PathInContainer'} = $object->getPathInContainer();
        }
        if (null !== $object->getCgroupPermissions()) {
            $data->{'CgroupPermissions'} = $object->getCgroupPermissions();
        }

        return $data;
    }
}
