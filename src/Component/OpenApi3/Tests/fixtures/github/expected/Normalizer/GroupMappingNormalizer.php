<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GroupMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\GroupMapping::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\GroupMapping';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\GroupMapping();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GroupMappingConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('groups', $data)) {
                $values = [];
                foreach ($data['groups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\GroupMappingGroupsItem::class, 'json', $context);
                }
                $object->setGroups($values);
                unset($data['groups']);
            }
            if (\array_key_exists('group_id', $data)) {
                $object->setGroupId($data['group_id']);
                unset($data['group_id']);
            }
            if (\array_key_exists('group_name', $data)) {
                $object->setGroupName($data['group_name']);
                unset($data['group_name']);
            }
            if (\array_key_exists('group_description', $data)) {
                $object->setGroupDescription($data['group_description']);
                unset($data['group_description']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('synced_at', $data)) {
                $object->setSyncedAt($data['synced_at']);
                unset($data['synced_at']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('groups') && null !== $object->getGroups()) {
                $values = [];
                foreach ($object->getGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['groups'] = $values;
            }
            if ($object->isInitialized('groupId') && null !== $object->getGroupId()) {
                $data['group_id'] = $object->getGroupId();
            }
            if ($object->isInitialized('groupName') && null !== $object->getGroupName()) {
                $data['group_name'] = $object->getGroupName();
            }
            if ($object->isInitialized('groupDescription') && null !== $object->getGroupDescription()) {
                $data['group_description'] = $object->getGroupDescription();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('syncedAt') && null !== $object->getSyncedAt()) {
                $data['synced_at'] = $object->getSyncedAt();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GroupMappingConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\GroupMapping::class => false];
        }
    }
} else {
    class GroupMappingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\GroupMapping::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\GroupMapping';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\GroupMapping();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GroupMappingConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('groups', $data)) {
                $values = [];
                foreach ($data['groups'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\GroupMappingGroupsItem::class, 'json', $context);
                }
                $object->setGroups($values);
                unset($data['groups']);
            }
            if (\array_key_exists('group_id', $data)) {
                $object->setGroupId($data['group_id']);
                unset($data['group_id']);
            }
            if (\array_key_exists('group_name', $data)) {
                $object->setGroupName($data['group_name']);
                unset($data['group_name']);
            }
            if (\array_key_exists('group_description', $data)) {
                $object->setGroupDescription($data['group_description']);
                unset($data['group_description']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('synced_at', $data)) {
                $object->setSyncedAt($data['synced_at']);
                unset($data['synced_at']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('groups') && null !== $object->getGroups()) {
                $values = [];
                foreach ($object->getGroups() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['groups'] = $values;
            }
            if ($object->isInitialized('groupId') && null !== $object->getGroupId()) {
                $data['group_id'] = $object->getGroupId();
            }
            if ($object->isInitialized('groupName') && null !== $object->getGroupName()) {
                $data['group_name'] = $object->getGroupName();
            }
            if ($object->isInitialized('groupDescription') && null !== $object->getGroupDescription()) {
                $data['group_description'] = $object->getGroupDescription();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('syncedAt') && null !== $object->getSyncedAt()) {
                $data['synced_at'] = $object->getSyncedAt();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\GroupMappingConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\GroupMapping::class => false];
        }
    }
}