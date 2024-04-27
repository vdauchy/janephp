<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SchemaPermissionSetDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\SchemaPermissionSetDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\SchemaPermissionSetDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\SchemaPermissionSetDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\PermissionUserRoleRightsOfMetadataRight::class, 'json', $context);
                }
                $object->setUserRolesRights($values);
                unset($data['userRolesRights']);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class, 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
                unset($data['userRolesPermissionSetRights']);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            if (\array_key_exists('exclusive', $data)) {
                $object->setExclusive($data['exclusive']);
                unset($data['exclusive']);
            }
            if (\array_key_exists('ownerTokenId', $data)) {
                $object->setOwnerTokenId($data['ownerTokenId']);
                unset($data['ownerTokenId']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            $data['exclusive'] = $object->getExclusive();
            $data['ownerTokenId'] = $object->getOwnerTokenId();
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\SchemaPermissionSetDetail::class => false];
        }
    }
} else {
    class SchemaPermissionSetDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\SchemaPermissionSetDetail::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\SchemaPermissionSetDetail';
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
            $object = new \PicturePark\API\Model\SchemaPermissionSetDetail();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('names', $data)) {
                $object->setNames($data['names']);
                unset($data['names']);
            }
            if (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] !== null) {
                $values = [];
                foreach ($data['userRolesRights'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\PermissionUserRoleRightsOfMetadataRight::class, 'json', $context);
                }
                $object->setUserRolesRights($values);
                unset($data['userRolesRights']);
            }
            elseif (\array_key_exists('userRolesRights', $data) && $data['userRolesRights'] === null) {
                $object->setUserRolesRights(null);
            }
            if (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] !== null) {
                $values_1 = [];
                foreach ($data['userRolesPermissionSetRights'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\PermissionUserRoleRightsOfPermissionSetRight::class, 'json', $context);
                }
                $object->setUserRolesPermissionSetRights($values_1);
                unset($data['userRolesPermissionSetRights']);
            }
            elseif (\array_key_exists('userRolesPermissionSetRights', $data) && $data['userRolesPermissionSetRights'] === null) {
                $object->setUserRolesPermissionSetRights(null);
            }
            if (\array_key_exists('exclusive', $data)) {
                $object->setExclusive($data['exclusive']);
                unset($data['exclusive']);
            }
            if (\array_key_exists('ownerTokenId', $data)) {
                $object->setOwnerTokenId($data['ownerTokenId']);
                unset($data['ownerTokenId']);
            }
            if (\array_key_exists('audit', $data) && $data['audit'] !== null) {
                $object->setAudit($data['audit']);
                unset($data['audit']);
            }
            elseif (\array_key_exists('audit', $data) && $data['audit'] === null) {
                $object->setAudit(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['id'] = $object->getId();
            $data['names'] = $object->getNames();
            if ($object->isInitialized('userRolesRights') && null !== $object->getUserRolesRights()) {
                $values = [];
                foreach ($object->getUserRolesRights() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['userRolesRights'] = $values;
            }
            if ($object->isInitialized('userRolesPermissionSetRights') && null !== $object->getUserRolesPermissionSetRights()) {
                $values_1 = [];
                foreach ($object->getUserRolesPermissionSetRights() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['userRolesPermissionSetRights'] = $values_1;
            }
            $data['exclusive'] = $object->getExclusive();
            $data['ownerTokenId'] = $object->getOwnerTokenId();
            if ($object->isInitialized('audit') && null !== $object->getAudit()) {
                $data['audit'] = $object->getAudit();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\SchemaPermissionSetDetail::class => false];
        }
    }
}