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
    class EngineDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\EngineDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\EngineDescription';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\EngineDescription();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EngineDescriptionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EngineVersion', $data)) {
                $object->setEngineVersion($data['EngineVersion']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            if (\array_key_exists('Plugins', $data)) {
                $values_1 = [];
                foreach ($data['Plugins'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\EngineDescriptionPluginsItem', 'json', $context);
                }
                $object->setPlugins($values_1);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('engineVersion') && null !== $object->getEngineVersion()) {
                $data['EngineVersion'] = $object->getEngineVersion();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $values_1 = [];
                foreach ($object->getPlugins() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Plugins'] = $values_1;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EngineDescriptionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\EngineDescription' => false];
        }
    }
} else {
    class EngineDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Docker\\Api\\Model\\EngineDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\\Api\\Model\\EngineDescription';
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
            $object = new \Docker\Api\Model\EngineDescription();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EngineDescriptionConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('EngineVersion', $data)) {
                $object->setEngineVersion($data['EngineVersion']);
            }
            if (\array_key_exists('Labels', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setLabels($values);
            }
            if (\array_key_exists('Plugins', $data)) {
                $values_1 = [];
                foreach ($data['Plugins'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\Api\\Model\\EngineDescriptionPluginsItem', 'json', $context);
                }
                $object->setPlugins($values_1);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('engineVersion') && null !== $object->getEngineVersion()) {
                $data['EngineVersion'] = $object->getEngineVersion();
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values = [];
                foreach ($object->getLabels() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['Labels'] = $values;
            }
            if ($object->isInitialized('plugins') && null !== $object->getPlugins()) {
                $values_1 = [];
                foreach ($object->getPlugins() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['Plugins'] = $values_1;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\EngineDescriptionConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Docker\\Api\\Model\\EngineDescription' => false];
        }
    }
}