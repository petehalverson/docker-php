<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImagesPruneResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_25\\Model\\ImagesPruneResponse200' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_25\Model\ImagesPruneResponse200) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_25\Model\ImagesPruneResponse200();
        if (property_exists($data, 'ImagesDeleted')) {
            $values = [];
            foreach ($data->{'ImagesDeleted'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_25\\Model\\ImageDeleteResponse', 'json', $context);
            }
            $object->setImagesDeleted($values);
        }
        if (property_exists($data, 'SpaceReclaimed')) {
            $object->setSpaceReclaimed($data->{'SpaceReclaimed'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getImagesDeleted()) {
            $values = [];
            foreach ($object->getImagesDeleted() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'ImagesDeleted'} = $values;
        }
        if (null !== $object->getSpaceReclaimed()) {
            $data->{'SpaceReclaimed'} = $object->getSpaceReclaimed();
        }

        return $data;
    }
}
