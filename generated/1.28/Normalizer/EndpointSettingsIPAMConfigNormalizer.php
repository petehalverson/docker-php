<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_28\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EndpointSettingsIPAMConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_28\\Model\\EndpointSettingsIPAMConfig' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_28\Model\EndpointSettingsIPAMConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_28\Model\EndpointSettingsIPAMConfig();
        if (property_exists($data, 'IPv4Address')) {
            $object->setIPv4Address($data->{'IPv4Address'});
        }
        if (property_exists($data, 'IPv6Address')) {
            $object->setIPv6Address($data->{'IPv6Address'});
        }
        if (property_exists($data, 'LinkLocalIPs')) {
            $values = [];
            foreach ($data->{'LinkLocalIPs'} as $value) {
                $values[] = $value;
            }
            $object->setLinkLocalIPs($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIPv4Address()) {
            $data->{'IPv4Address'} = $object->getIPv4Address();
        }
        if (null !== $object->getIPv6Address()) {
            $data->{'IPv6Address'} = $object->getIPv6Address();
        }
        if (null !== $object->getLinkLocalIPs()) {
            $values = [];
            foreach ($object->getLinkLocalIPs() as $value) {
                $values[] = $value;
            }
            $data->{'LinkLocalIPs'} = $values;
        }

        return $data;
    }
}
