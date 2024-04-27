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
    class TiffFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\TiffFormat::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\TiffFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\TiffFormat();
            if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
                $data['horizontalResolution'] = (double) $data['horizontalResolution'];
            }
            if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
                $data['verticalResolution'] = (double) $data['verticalResolution'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
                $object->setColorProfile($data['colorProfile']);
                unset($data['colorProfile']);
            }
            elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
                $object->setColorProfile(null);
            }
            if (\array_key_exists('colorTransformationIntent', $data)) {
                $object->setColorTransformationIntent($data['colorTransformationIntent']);
                unset($data['colorTransformationIntent']);
            }
            if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
                $object->setHorizontalResolution($data['horizontalResolution']);
                unset($data['horizontalResolution']);
            }
            elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
                $object->setHorizontalResolution(null);
            }
            if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
                $object->setVerticalResolution($data['verticalResolution']);
                unset($data['verticalResolution']);
            }
            elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
                $object->setVerticalResolution(null);
            }
            if (\array_key_exists('keepClippingPath', $data)) {
                $object->setKeepClippingPath($data['keepClippingPath']);
                unset($data['keepClippingPath']);
            }
            if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
                $object->setResizeAction($data['resizeAction']);
                unset($data['resizeAction']);
            }
            elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
                $object->setResizeAction(null);
            }
            if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ImageActionBase::class, 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
            }
            elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
                $object->setActions(null);
            }
            if (\array_key_exists('alphaPremultiplied', $data)) {
                $object->setAlphaPremultiplied($data['alphaPremultiplied']);
                unset($data['alphaPremultiplied']);
            }
            if (\array_key_exists('compressionType', $data)) {
                $object->setCompressionType($data['compressionType']);
                unset($data['compressionType']);
            }
            if (\array_key_exists('includeUnspecifiedTiffExtraChannels', $data)) {
                $object->setIncludeUnspecifiedTiffExtraChannels($data['includeUnspecifiedTiffExtraChannels']);
                unset($data['includeUnspecifiedTiffExtraChannels']);
            }
            if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
                $object->setExtension(null);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('colorProfile') && null !== $object->getColorProfile()) {
                $data['colorProfile'] = $object->getColorProfile();
            }
            if ($object->isInitialized('colorTransformationIntent') && null !== $object->getColorTransformationIntent()) {
                $data['colorTransformationIntent'] = $object->getColorTransformationIntent();
            }
            if ($object->isInitialized('horizontalResolution') && null !== $object->getHorizontalResolution()) {
                $data['horizontalResolution'] = $object->getHorizontalResolution();
            }
            if ($object->isInitialized('verticalResolution') && null !== $object->getVerticalResolution()) {
                $data['verticalResolution'] = $object->getVerticalResolution();
            }
            if ($object->isInitialized('keepClippingPath') && null !== $object->getKeepClippingPath()) {
                $data['keepClippingPath'] = $object->getKeepClippingPath();
            }
            if ($object->isInitialized('resizeAction') && null !== $object->getResizeAction()) {
                $data['resizeAction'] = $object->getResizeAction();
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            if ($object->isInitialized('alphaPremultiplied') && null !== $object->getAlphaPremultiplied()) {
                $data['alphaPremultiplied'] = $object->getAlphaPremultiplied();
            }
            if ($object->isInitialized('compressionType') && null !== $object->getCompressionType()) {
                $data['compressionType'] = $object->getCompressionType();
            }
            if ($object->isInitialized('includeUnspecifiedTiffExtraChannels') && null !== $object->getIncludeUnspecifiedTiffExtraChannels()) {
                $data['includeUnspecifiedTiffExtraChannels'] = $object->getIncludeUnspecifiedTiffExtraChannels();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
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
            return [\PicturePark\API\Model\TiffFormat::class => false];
        }
    }
} else {
    class TiffFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \PicturePark\API\Model\TiffFormat::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'PicturePark\API\Model\TiffFormat';
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
            $object = new \PicturePark\API\Model\TiffFormat();
            if (\array_key_exists('horizontalResolution', $data) && \is_int($data['horizontalResolution'])) {
                $data['horizontalResolution'] = (double) $data['horizontalResolution'];
            }
            if (\array_key_exists('verticalResolution', $data) && \is_int($data['verticalResolution'])) {
                $data['verticalResolution'] = (double) $data['verticalResolution'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('kind', $data)) {
                $object->setKind($data['kind']);
                unset($data['kind']);
            }
            if (\array_key_exists('colorProfile', $data) && $data['colorProfile'] !== null) {
                $object->setColorProfile($data['colorProfile']);
                unset($data['colorProfile']);
            }
            elseif (\array_key_exists('colorProfile', $data) && $data['colorProfile'] === null) {
                $object->setColorProfile(null);
            }
            if (\array_key_exists('colorTransformationIntent', $data)) {
                $object->setColorTransformationIntent($data['colorTransformationIntent']);
                unset($data['colorTransformationIntent']);
            }
            if (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] !== null) {
                $object->setHorizontalResolution($data['horizontalResolution']);
                unset($data['horizontalResolution']);
            }
            elseif (\array_key_exists('horizontalResolution', $data) && $data['horizontalResolution'] === null) {
                $object->setHorizontalResolution(null);
            }
            if (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] !== null) {
                $object->setVerticalResolution($data['verticalResolution']);
                unset($data['verticalResolution']);
            }
            elseif (\array_key_exists('verticalResolution', $data) && $data['verticalResolution'] === null) {
                $object->setVerticalResolution(null);
            }
            if (\array_key_exists('keepClippingPath', $data)) {
                $object->setKeepClippingPath($data['keepClippingPath']);
                unset($data['keepClippingPath']);
            }
            if (\array_key_exists('resizeAction', $data) && $data['resizeAction'] !== null) {
                $object->setResizeAction($data['resizeAction']);
                unset($data['resizeAction']);
            }
            elseif (\array_key_exists('resizeAction', $data) && $data['resizeAction'] === null) {
                $object->setResizeAction(null);
            }
            if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \PicturePark\API\Model\ImageActionBase::class, 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
            }
            elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
                $object->setActions(null);
            }
            if (\array_key_exists('alphaPremultiplied', $data)) {
                $object->setAlphaPremultiplied($data['alphaPremultiplied']);
                unset($data['alphaPremultiplied']);
            }
            if (\array_key_exists('compressionType', $data)) {
                $object->setCompressionType($data['compressionType']);
                unset($data['compressionType']);
            }
            if (\array_key_exists('includeUnspecifiedTiffExtraChannels', $data)) {
                $object->setIncludeUnspecifiedTiffExtraChannels($data['includeUnspecifiedTiffExtraChannels']);
                unset($data['includeUnspecifiedTiffExtraChannels']);
            }
            if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
                $object->setExtension($data['extension']);
                unset($data['extension']);
            }
            elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
                $object->setExtension(null);
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
            $data['kind'] = $object->getKind();
            if ($object->isInitialized('colorProfile') && null !== $object->getColorProfile()) {
                $data['colorProfile'] = $object->getColorProfile();
            }
            if ($object->isInitialized('colorTransformationIntent') && null !== $object->getColorTransformationIntent()) {
                $data['colorTransformationIntent'] = $object->getColorTransformationIntent();
            }
            if ($object->isInitialized('horizontalResolution') && null !== $object->getHorizontalResolution()) {
                $data['horizontalResolution'] = $object->getHorizontalResolution();
            }
            if ($object->isInitialized('verticalResolution') && null !== $object->getVerticalResolution()) {
                $data['verticalResolution'] = $object->getVerticalResolution();
            }
            if ($object->isInitialized('keepClippingPath') && null !== $object->getKeepClippingPath()) {
                $data['keepClippingPath'] = $object->getKeepClippingPath();
            }
            if ($object->isInitialized('resizeAction') && null !== $object->getResizeAction()) {
                $data['resizeAction'] = $object->getResizeAction();
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            if ($object->isInitialized('alphaPremultiplied') && null !== $object->getAlphaPremultiplied()) {
                $data['alphaPremultiplied'] = $object->getAlphaPremultiplied();
            }
            if ($object->isInitialized('compressionType') && null !== $object->getCompressionType()) {
                $data['compressionType'] = $object->getCompressionType();
            }
            if ($object->isInitialized('includeUnspecifiedTiffExtraChannels') && null !== $object->getIncludeUnspecifiedTiffExtraChannels()) {
                $data['includeUnspecifiedTiffExtraChannels'] = $object->getIncludeUnspecifiedTiffExtraChannels();
            }
            if ($object->isInitialized('extension') && null !== $object->getExtension()) {
                $data['extension'] = $object->getExtension();
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
            return [\PicturePark\API\Model\TiffFormat::class => false];
        }
    }
}
