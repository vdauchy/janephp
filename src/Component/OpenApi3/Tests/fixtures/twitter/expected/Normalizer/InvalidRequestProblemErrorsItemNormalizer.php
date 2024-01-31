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
    class InvalidRequestProblemErrorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblemErrorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parameters', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['parameters'] as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $object->setParameters($values);
                unset($data['parameters']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
                $values = [];
                foreach ($object->getParameters() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $data['parameters'] = $values;
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => false];
        }
    }
} else {
    class InvalidRequestProblemErrorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem';
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
            $object = new \Jane\Component\OpenApi3\Tests\Expected\Model\InvalidRequestProblemErrorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('parameters', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['parameters'] as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $object->setParameters($values);
                unset($data['parameters']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            if ($object->isInitialized('parameters') && null !== $object->getParameters()) {
                $values = [];
                foreach ($object->getParameters() as $key => $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $value_1;
                    }
                    $values[$key] = $values_1;
                }
                $data['parameters'] = $values;
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Jane\\Component\\OpenApi3\\Tests\\Expected\\Model\\InvalidRequestProblemErrorsItem' => false];
        }
    }
}