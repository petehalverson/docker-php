<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_32\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SwarmInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ('Docker\\API\\V1_32\\Model\\SwarmInfo' !== $type) {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_32\Model\SwarmInfo) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_32\Model\SwarmInfo();
        if (property_exists($data, 'NodeID')) {
            $object->setNodeID($data->{'NodeID'});
        }
        if (property_exists($data, 'NodeAddr')) {
            $object->setNodeAddr($data->{'NodeAddr'});
        }
        if (property_exists($data, 'LocalNodeState')) {
            $object->setLocalNodeState($data->{'LocalNodeState'});
        }
        if (property_exists($data, 'ControlAvailable')) {
            $object->setControlAvailable($data->{'ControlAvailable'});
        }
        if (property_exists($data, 'Error')) {
            $object->setError($data->{'Error'});
        }
        if (property_exists($data, 'RemoteManagers')) {
            $values = [];
            foreach ($data->{'RemoteManagers'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\V1_32\\Model\\PeerNode', 'json', $context);
            }
            $object->setRemoteManagers($values);
        }
        if (property_exists($data, 'Nodes')) {
            $object->setNodes($data->{'Nodes'});
        }
        if (property_exists($data, 'Managers')) {
            $object->setManagers($data->{'Managers'});
        }
        if (property_exists($data, 'Cluster')) {
            $object->setCluster($this->denormalizer->denormalize($data->{'Cluster'}, 'Docker\\API\\V1_32\\Model\\ClusterInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNodeID()) {
            $data->{'NodeID'} = $object->getNodeID();
        }
        if (null !== $object->getNodeAddr()) {
            $data->{'NodeAddr'} = $object->getNodeAddr();
        }
        if (null !== $object->getLocalNodeState()) {
            $data->{'LocalNodeState'} = $object->getLocalNodeState();
        }
        if (null !== $object->getControlAvailable()) {
            $data->{'ControlAvailable'} = $object->getControlAvailable();
        }
        if (null !== $object->getError()) {
            $data->{'Error'} = $object->getError();
        }
        if (null !== $object->getRemoteManagers()) {
            $values = [];
            foreach ($object->getRemoteManagers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'RemoteManagers'} = $values;
        }
        if (null !== $object->getNodes()) {
            $data->{'Nodes'} = $object->getNodes();
        }
        if (null !== $object->getManagers()) {
            $data->{'Managers'} = $object->getManagers();
        }
        if (null !== $object->getCluster()) {
            $data->{'Cluster'} = $this->normalizer->normalize($object->getCluster(), 'json', $context);
        }

        return $data;
    }
}
