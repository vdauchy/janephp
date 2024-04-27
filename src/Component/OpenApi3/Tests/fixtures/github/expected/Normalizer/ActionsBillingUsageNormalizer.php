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
    class ActionsBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\ActionsBillingUsage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ActionsBillingUsage';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ActionsBillingUsage();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActionsBillingUsageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_minutes_used', $data)) {
                $object->setTotalMinutesUsed($data['total_minutes_used']);
                unset($data['total_minutes_used']);
            }
            if (\array_key_exists('total_paid_minutes_used', $data)) {
                $object->setTotalPaidMinutesUsed($data['total_paid_minutes_used']);
                unset($data['total_paid_minutes_used']);
            }
            if (\array_key_exists('included_minutes', $data)) {
                $object->setIncludedMinutes($data['included_minutes']);
                unset($data['included_minutes']);
            }
            if (\array_key_exists('minutes_used_breakdown', $data)) {
                $object->setMinutesUsedBreakdown($this->denormalizer->denormalize($data['minutes_used_breakdown'], \Github\Model\ActionsBillingUsageMinutesUsedBreakdown::class, 'json', $context));
                unset($data['minutes_used_breakdown']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('totalMinutesUsed') && null !== $object->getTotalMinutesUsed()) {
                $data['total_minutes_used'] = $object->getTotalMinutesUsed();
            }
            if ($object->isInitialized('totalPaidMinutesUsed') && null !== $object->getTotalPaidMinutesUsed()) {
                $data['total_paid_minutes_used'] = $object->getTotalPaidMinutesUsed();
            }
            if ($object->isInitialized('includedMinutes') && null !== $object->getIncludedMinutes()) {
                $data['included_minutes'] = $object->getIncludedMinutes();
            }
            if ($object->isInitialized('minutesUsedBreakdown') && null !== $object->getMinutesUsedBreakdown()) {
                $data['minutes_used_breakdown'] = $this->normalizer->normalize($object->getMinutesUsedBreakdown(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActionsBillingUsageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\ActionsBillingUsage::class => false];
        }
    }
} else {
    class ActionsBillingUsageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\ActionsBillingUsage::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\ActionsBillingUsage';
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
            $object = new \Github\Model\ActionsBillingUsage();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActionsBillingUsageConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('total_minutes_used', $data)) {
                $object->setTotalMinutesUsed($data['total_minutes_used']);
                unset($data['total_minutes_used']);
            }
            if (\array_key_exists('total_paid_minutes_used', $data)) {
                $object->setTotalPaidMinutesUsed($data['total_paid_minutes_used']);
                unset($data['total_paid_minutes_used']);
            }
            if (\array_key_exists('included_minutes', $data)) {
                $object->setIncludedMinutes($data['included_minutes']);
                unset($data['included_minutes']);
            }
            if (\array_key_exists('minutes_used_breakdown', $data)) {
                $object->setMinutesUsedBreakdown($this->denormalizer->denormalize($data['minutes_used_breakdown'], \Github\Model\ActionsBillingUsageMinutesUsedBreakdown::class, 'json', $context));
                unset($data['minutes_used_breakdown']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('totalMinutesUsed') && null !== $object->getTotalMinutesUsed()) {
                $data['total_minutes_used'] = $object->getTotalMinutesUsed();
            }
            if ($object->isInitialized('totalPaidMinutesUsed') && null !== $object->getTotalPaidMinutesUsed()) {
                $data['total_paid_minutes_used'] = $object->getTotalPaidMinutesUsed();
            }
            if ($object->isInitialized('includedMinutes') && null !== $object->getIncludedMinutes()) {
                $data['included_minutes'] = $object->getIncludedMinutes();
            }
            if ($object->isInitialized('minutesUsedBreakdown') && null !== $object->getMinutesUsedBreakdown()) {
                $data['minutes_used_breakdown'] = $this->normalizer->normalize($object->getMinutesUsedBreakdown(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ActionsBillingUsageConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\ActionsBillingUsage::class => false];
        }
    }
}