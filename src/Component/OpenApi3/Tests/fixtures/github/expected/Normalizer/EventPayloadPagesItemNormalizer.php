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
    class EventPayloadPagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\EventPayloadPagesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\EventPayloadPagesItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\EventPayloadPagesItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('page_name', $data)) {
                $object->setPageName($data['page_name']);
                unset($data['page_name']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
                $object->setSummary(null);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
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
            if ($object->isInitialized('pageName') && null !== $object->getPageName()) {
                $data['page_name'] = $object->getPageName();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('summary') && null !== $object->getSummary()) {
                $data['summary'] = $object->getSummary();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('sha') && null !== $object->getSha()) {
                $data['sha'] = $object->getSha();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\EventPayloadPagesItem' => false];
        }
    }
} else {
    class EventPayloadPagesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Github\\Model\\EventPayloadPagesItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\\Model\\EventPayloadPagesItem';
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
            $object = new \Github\Model\EventPayloadPagesItem();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('page_name', $data)) {
                $object->setPageName($data['page_name']);
                unset($data['page_name']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('summary', $data) && $data['summary'] !== null) {
                $object->setSummary($data['summary']);
                unset($data['summary']);
            }
            elseif (\array_key_exists('summary', $data) && $data['summary'] === null) {
                $object->setSummary(null);
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
                unset($data['action']);
            }
            if (\array_key_exists('sha', $data)) {
                $object->setSha($data['sha']);
                unset($data['sha']);
            }
            if (\array_key_exists('html_url', $data)) {
                $object->setHtmlUrl($data['html_url']);
                unset($data['html_url']);
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
            if ($object->isInitialized('pageName') && null !== $object->getPageName()) {
                $data['page_name'] = $object->getPageName();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('summary') && null !== $object->getSummary()) {
                $data['summary'] = $object->getSummary();
            }
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('sha') && null !== $object->getSha()) {
                $data['sha'] = $object->getSha();
            }
            if ($object->isInitialized('htmlUrl') && null !== $object->getHtmlUrl()) {
                $data['html_url'] = $object->getHtmlUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\EventPayloadPagesItemConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Github\\Model\\EventPayloadPagesItem' => false];
        }
    }
}