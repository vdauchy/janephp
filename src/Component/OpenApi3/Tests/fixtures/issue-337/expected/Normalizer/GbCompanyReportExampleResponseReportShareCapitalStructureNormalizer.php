<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure();
            if (\array_key_exists('numberOfSharesIssued', $data) && \is_int($data['numberOfSharesIssued'])) {
                $data['numberOfSharesIssued'] = (double) $data['numberOfSharesIssued'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuedShareCapital', $data)) {
                $object->setIssuedShareCapital($this->denormalizer->denormalize($data['issuedShareCapital'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital::class, 'json', $context));
                unset($data['issuedShareCapital']);
            }
            if (\array_key_exists('numberOfSharesIssued', $data)) {
                $object->setNumberOfSharesIssued($data['numberOfSharesIssued']);
                unset($data['numberOfSharesIssued']);
            }
            if (\array_key_exists('shareHolders', $data)) {
                $values = [];
                foreach ($data['shareHolders'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class, 'json', $context);
                }
                $object->setShareHolders($values);
                unset($data['shareHolders']);
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
            if ($object->isInitialized('issuedShareCapital') && null !== $object->getIssuedShareCapital()) {
                $data['issuedShareCapital'] = $this->normalizer->normalize($object->getIssuedShareCapital(), 'json', $context);
            }
            if ($object->isInitialized('numberOfSharesIssued') && null !== $object->getNumberOfSharesIssued()) {
                $data['numberOfSharesIssued'] = $object->getNumberOfSharesIssued();
            }
            if ($object->isInitialized('shareHolders') && null !== $object->getShareHolders()) {
                $values = [];
                foreach ($object->getShareHolders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shareHolders'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportShareCapitalStructureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure';
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure();
            if (\array_key_exists('numberOfSharesIssued', $data) && \is_int($data['numberOfSharesIssued'])) {
                $data['numberOfSharesIssued'] = (double) $data['numberOfSharesIssued'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuedShareCapital', $data)) {
                $object->setIssuedShareCapital($this->denormalizer->denormalize($data['issuedShareCapital'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureIssuedShareCapital::class, 'json', $context));
                unset($data['issuedShareCapital']);
            }
            if (\array_key_exists('numberOfSharesIssued', $data)) {
                $object->setNumberOfSharesIssued($data['numberOfSharesIssued']);
                unset($data['numberOfSharesIssued']);
            }
            if (\array_key_exists('shareHolders', $data)) {
                $values = [];
                foreach ($data['shareHolders'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructureShareHoldersItem::class, 'json', $context);
                }
                $object->setShareHolders($values);
                unset($data['shareHolders']);
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
            if ($object->isInitialized('issuedShareCapital') && null !== $object->getIssuedShareCapital()) {
                $data['issuedShareCapital'] = $this->normalizer->normalize($object->getIssuedShareCapital(), 'json', $context);
            }
            if ($object->isInitialized('numberOfSharesIssued') && null !== $object->getNumberOfSharesIssued()) {
                $data['numberOfSharesIssued'] = $object->getNumberOfSharesIssued();
            }
            if ($object->isInitialized('shareHolders') && null !== $object->getShareHolders()) {
                $values = [];
                foreach ($object->getShareHolders() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['shareHolders'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportShareCapitalStructure::class => false];
        }
    }
}
