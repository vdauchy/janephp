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
    class OrgHookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\OrgHook::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Github\Model\OrgHook';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\OrgHook();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgHookConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('ping_url', $data)) {
                $object->setPingUrl($data['ping_url']);
                unset($data['ping_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            if (\array_key_exists('config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['config'], \Github\Model\OrgHookConfig::class, 'json', $context));
                unset($data['config']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['url'] = $object->getUrl();
            $data['ping_url'] = $object->getPingUrl();
            $data['name'] = $object->getName();
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            $data['active'] = $object->getActive();
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:sP');
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:sP');
            $data['type'] = $object->getType();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgHookConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\OrgHook::class => false];
        }
    }
} else {
    class OrgHookNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\OrgHook::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === 'Github\Model\OrgHook';
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
            $object = new \Github\Model\OrgHook();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgHookConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('ping_url', $data)) {
                $object->setPingUrl($data['ping_url']);
                unset($data['ping_url']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            if (\array_key_exists('config', $data)) {
                $object->setConfig($this->denormalizer->denormalize($data['config'], \Github\Model\OrgHookConfig::class, 'json', $context));
                unset($data['config']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
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
            $data['id'] = $object->getId();
            $data['url'] = $object->getUrl();
            $data['ping_url'] = $object->getPingUrl();
            $data['name'] = $object->getName();
            $values = [];
            foreach ($object->getEvents() as $value) {
                $values[] = $value;
            }
            $data['events'] = $values;
            $data['active'] = $object->getActive();
            $data['config'] = $this->normalizer->normalize($object->getConfig(), 'json', $context);
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\TH:i:sP');
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\TH:i:sP');
            $data['type'] = $object->getType();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\OrgHookConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\OrgHook::class => false];
        }
    }
}