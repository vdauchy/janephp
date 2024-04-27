<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\ServiceSpecMode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ServiceSpecMode';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ServiceSpecMode();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ServiceSpecModeConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Replicated', $data)) {
                $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], \Docker\Api\Model\ServiceSpecModeReplicated::class, 'json', $context));
            }
            if (\array_key_exists('Global', $data)) {
                $object->setGlobal($data['Global']);
            }
            if (\array_key_exists('ReplicatedJob', $data)) {
                $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], \Docker\Api\Model\ServiceSpecModeReplicatedJob::class, 'json', $context));
            }
            if (\array_key_exists('GlobalJob', $data)) {
                $object->setGlobalJob($data['GlobalJob']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('replicated') && null !== $object->getReplicated()) {
                $data['Replicated'] = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
            }
            if ($object->isInitialized('global') && null !== $object->getGlobal()) {
                $data['Global'] = $object->getGlobal();
            }
            if ($object->isInitialized('replicatedJob') && null !== $object->getReplicatedJob()) {
                $data['ReplicatedJob'] = $this->normalizer->normalize($object->getReplicatedJob(), 'json', $context);
            }
            if ($object->isInitialized('globalJob') && null !== $object->getGlobalJob()) {
                $data['GlobalJob'] = $object->getGlobalJob();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ServiceSpecModeConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\ServiceSpecMode::class => false];
        }
    }
} else {
    class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Docker\Api\Model\ServiceSpecMode::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ServiceSpecMode';
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
            $object = new \Docker\Api\Model\ServiceSpecMode();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ServiceSpecModeConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Replicated', $data)) {
                $object->setReplicated($this->denormalizer->denormalize($data['Replicated'], \Docker\Api\Model\ServiceSpecModeReplicated::class, 'json', $context));
            }
            if (\array_key_exists('Global', $data)) {
                $object->setGlobal($data['Global']);
            }
            if (\array_key_exists('ReplicatedJob', $data)) {
                $object->setReplicatedJob($this->denormalizer->denormalize($data['ReplicatedJob'], \Docker\Api\Model\ServiceSpecModeReplicatedJob::class, 'json', $context));
            }
            if (\array_key_exists('GlobalJob', $data)) {
                $object->setGlobalJob($data['GlobalJob']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('replicated') && null !== $object->getReplicated()) {
                $data['Replicated'] = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
            }
            if ($object->isInitialized('global') && null !== $object->getGlobal()) {
                $data['Global'] = $object->getGlobal();
            }
            if ($object->isInitialized('replicatedJob') && null !== $object->getReplicatedJob()) {
                $data['ReplicatedJob'] = $this->normalizer->normalize($object->getReplicatedJob(), 'json', $context);
            }
            if ($object->isInitialized('globalJob') && null !== $object->getGlobalJob()) {
                $data['GlobalJob'] = $object->getGlobalJob();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ServiceSpecModeConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Docker\Api\Model\ServiceSpecMode::class => false];
        }
    }
}