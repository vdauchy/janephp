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
    class IdentityProviderEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\IdentityProviderEditable::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\IdentityProviderEditable::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\IdentityProviderEditable();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
                $values = [];
                foreach ($data['claimMapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class, 'json', $context);
                }
                $object->setClaimMapping($values);
            }
            elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
                $object->setClaimMapping(null);
            }
            if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
                $object->setGroupClaimType($data['groupClaimType']);
            }
            elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
                $object->setGroupClaimType(null);
            }
            if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
                $values_1 = [];
                foreach ($data['groupMapping'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\IdpGroupToUserRoleMapping::class, 'json', $context);
                }
                $object->setGroupMapping($values_1);
            }
            elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
                $object->setGroupMapping(null);
            }
            if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
                $object->setFallbackUserRoleId($data['fallbackUserRoleId']);
            }
            elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
                $object->setFallbackUserRoleId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('claimMapping') && null !== $object->getClaimMapping()) {
                $values = [];
                foreach ($object->getClaimMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['claimMapping'] = $values;
            }
            if ($object->isInitialized('groupClaimType') && null !== $object->getGroupClaimType()) {
                $data['groupClaimType'] = $object->getGroupClaimType();
            }
            if ($object->isInitialized('groupMapping') && null !== $object->getGroupMapping()) {
                $values_1 = [];
                foreach ($object->getGroupMapping() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['groupMapping'] = $values_1;
            }
            if ($object->isInitialized('fallbackUserRoleId') && null !== $object->getFallbackUserRoleId()) {
                $data['fallbackUserRoleId'] = $object->getFallbackUserRoleId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\PicturePark\API\Model\IdentityProviderEditable::class => false];
        }
    }
} else {
    class IdentityProviderEditableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\IdentityProviderEditable::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\IdentityProviderEditable::class;
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
            $object = new \PicturePark\API\Model\IdentityProviderEditable();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claimMapping', $data) && $data['claimMapping'] !== null) {
                $values = [];
                foreach ($data['claimMapping'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\IdpClaimToUserAttributeMapping::class, 'json', $context);
                }
                $object->setClaimMapping($values);
            }
            elseif (\array_key_exists('claimMapping', $data) && $data['claimMapping'] === null) {
                $object->setClaimMapping(null);
            }
            if (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] !== null) {
                $object->setGroupClaimType($data['groupClaimType']);
            }
            elseif (\array_key_exists('groupClaimType', $data) && $data['groupClaimType'] === null) {
                $object->setGroupClaimType(null);
            }
            if (\array_key_exists('groupMapping', $data) && $data['groupMapping'] !== null) {
                $values_1 = [];
                foreach ($data['groupMapping'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \PicturePark\API\Model\IdpGroupToUserRoleMapping::class, 'json', $context);
                }
                $object->setGroupMapping($values_1);
            }
            elseif (\array_key_exists('groupMapping', $data) && $data['groupMapping'] === null) {
                $object->setGroupMapping(null);
            }
            if (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] !== null) {
                $object->setFallbackUserRoleId($data['fallbackUserRoleId']);
            }
            elseif (\array_key_exists('fallbackUserRoleId', $data) && $data['fallbackUserRoleId'] === null) {
                $object->setFallbackUserRoleId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('claimMapping') && null !== $object->getClaimMapping()) {
                $values = [];
                foreach ($object->getClaimMapping() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['claimMapping'] = $values;
            }
            if ($object->isInitialized('groupClaimType') && null !== $object->getGroupClaimType()) {
                $data['groupClaimType'] = $object->getGroupClaimType();
            }
            if ($object->isInitialized('groupMapping') && null !== $object->getGroupMapping()) {
                $values_1 = [];
                foreach ($object->getGroupMapping() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['groupMapping'] = $values_1;
            }
            if ($object->isInitialized('fallbackUserRoleId') && null !== $object->getFallbackUserRoleId()) {
                $data['fallbackUserRoleId'] = $object->getFallbackUserRoleId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\PicturePark\API\Model\IdentityProviderEditable::class => false];
        }
    }
}