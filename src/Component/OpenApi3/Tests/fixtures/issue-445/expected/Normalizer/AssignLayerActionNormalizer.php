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
    class AssignLayerActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\AssignLayerAction::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\AssignLayerAction';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\AssignLayerAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('layerId', $data) && $data['layerId'] !== null) {
                $object->setLayerId($data['layerId']);
                unset($data['layerId']);
            }
            elseif (\array_key_exists('layerId', $data) && $data['layerId'] === null) {
                $object->setLayerId(null);
            }
            if (\array_key_exists('defaultValues', $data) && $data['defaultValues'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['defaultValues'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setDefaultValues($values);
                unset($data['defaultValues']);
            }
            elseif (\array_key_exists('defaultValues', $data) && $data['defaultValues'] === null) {
                $object->setDefaultValues(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('layerId') && null !== $object->getLayerId()) {
                $data['layerId'] = $object->getLayerId();
            }
            if ($object->isInitialized('defaultValues') && null !== $object->getDefaultValues()) {
                $values = [];
                foreach ($object->getDefaultValues() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['defaultValues'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\AssignLayerAction::class => false];
        }
    }
} else {
    class AssignLayerActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\AssignLayerAction::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\AssignLayerAction';
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
            $object = new \PicturePark\API\Model\AssignLayerAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('traceRefId', $data) && $data['traceRefId'] !== null) {
                $object->setTraceRefId($data['traceRefId']);
                unset($data['traceRefId']);
            }
            elseif (\array_key_exists('traceRefId', $data) && $data['traceRefId'] === null) {
                $object->setTraceRefId(null);
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('layerId', $data) && $data['layerId'] !== null) {
                $object->setLayerId($data['layerId']);
                unset($data['layerId']);
            }
            elseif (\array_key_exists('layerId', $data) && $data['layerId'] === null) {
                $object->setLayerId(null);
            }
            if (\array_key_exists('defaultValues', $data) && $data['defaultValues'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['defaultValues'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setDefaultValues($values);
                unset($data['defaultValues']);
            }
            elseif (\array_key_exists('defaultValues', $data) && $data['defaultValues'] === null) {
                $object->setDefaultValues(null);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            if ($object->isInitialized('traceRefId') && null !== $object->getTraceRefId()) {
                $data['traceRefId'] = $object->getTraceRefId();
            }
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('layerId') && null !== $object->getLayerId()) {
                $data['layerId'] = $object->getLayerId();
            }
            if ($object->isInitialized('defaultValues') && null !== $object->getDefaultValues()) {
                $values = [];
                foreach ($object->getDefaultValues() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['defaultValues'] = $values;
            }
            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\AssignLayerAction::class => false];
        }
    }
}