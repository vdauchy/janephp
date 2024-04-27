<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\CheckArray;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DeleteRulesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ids', $data)) {
                $values = [];
                foreach ($data['ids'] as $value) {
                    $values[] = $value;
                }
                $object->setIds($values);
                unset($data['ids']);
            }
            if (\array_key_exists('values', $data)) {
                $values_1 = [];
                foreach ($data['values'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setValues($values_1);
                unset($data['values']);
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
            if ($object->isInitialized('ids') && null !== $object->getIds()) {
                $values = [];
                foreach ($object->getIds() as $value) {
                    $values[] = $value;
                }
                $data['ids'] = $values;
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $values_1 = [];
                foreach ($object->getValues() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['values'] = $values_1;
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
            return [\Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class => false];
        }
    }
} else {
    class DeleteRulesRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ids', $data)) {
                $values = [];
                foreach ($data['ids'] as $value) {
                    $values[] = $value;
                }
                $object->setIds($values);
                unset($data['ids']);
            }
            if (\array_key_exists('values', $data)) {
                $values_1 = [];
                foreach ($data['values'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setValues($values_1);
                unset($data['values']);
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
            if ($object->isInitialized('ids') && null !== $object->getIds()) {
                $values = [];
                foreach ($object->getIds() as $value) {
                    $values[] = $value;
                }
                $data['ids'] = $values;
            }
            if ($object->isInitialized('values') && null !== $object->getValues()) {
                $values_1 = [];
                foreach ($object->getValues() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['values'] = $values_1;
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
            return [\Jane\Component\OpenApi3\Tests\Expected\Model\DeleteRulesRequest::class => false];
        }
    }
}