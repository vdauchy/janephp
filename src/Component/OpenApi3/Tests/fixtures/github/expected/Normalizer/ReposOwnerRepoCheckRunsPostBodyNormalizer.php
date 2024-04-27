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
    class ReposOwnerRepoCheckRunsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\ReposOwnerRepoCheckRunsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\Model\ReposOwnerRepoCheckRunsPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ReposOwnerRepoCheckRunsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('head_sha', $data)) {
                $object->setHeadSha($data['head_sha']);
                unset($data['head_sha']);
            }
            if (\array_key_exists('details_url', $data)) {
                $object->setDetailsUrl($data['details_url']);
                unset($data['details_url']);
            }
            if (\array_key_exists('external_id', $data)) {
                $object->setExternalId($data['external_id']);
                unset($data['external_id']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('started_at', $data)) {
                $object->setStartedAt($data['started_at']);
                unset($data['started_at']);
            }
            if (\array_key_exists('conclusion', $data)) {
                $object->setConclusion($data['conclusion']);
                unset($data['conclusion']);
            }
            if (\array_key_exists('completed_at', $data)) {
                $object->setCompletedAt($data['completed_at']);
                unset($data['completed_at']);
            }
            if (\array_key_exists('output', $data)) {
                $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutput::class, 'json', $context));
                unset($data['output']);
            }
            if (\array_key_exists('actions', $data)) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsPostBodyActionsItem::class, 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
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
            $data['name'] = $object->getName();
            $data['head_sha'] = $object->getHeadSha();
            if ($object->isInitialized('detailsUrl') && null !== $object->getDetailsUrl()) {
                $data['details_url'] = $object->getDetailsUrl();
            }
            if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
                $data['external_id'] = $object->getExternalId();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['started_at'] = $object->getStartedAt();
            }
            if ($object->isInitialized('conclusion') && null !== $object->getConclusion()) {
                $data['conclusion'] = $object->getConclusion();
            }
            if ($object->isInitialized('completedAt') && null !== $object->getCompletedAt()) {
                $data['completed_at'] = $object->getCompletedAt();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\ReposOwnerRepoCheckRunsPostBody::class => false];
        }
    }
} else {
    class ReposOwnerRepoCheckRunsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \Github\Model\ReposOwnerRepoCheckRunsPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Github\Model\ReposOwnerRepoCheckRunsPostBody';
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
            $object = new \Github\Model\ReposOwnerRepoCheckRunsPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('head_sha', $data)) {
                $object->setHeadSha($data['head_sha']);
                unset($data['head_sha']);
            }
            if (\array_key_exists('details_url', $data)) {
                $object->setDetailsUrl($data['details_url']);
                unset($data['details_url']);
            }
            if (\array_key_exists('external_id', $data)) {
                $object->setExternalId($data['external_id']);
                unset($data['external_id']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('started_at', $data)) {
                $object->setStartedAt($data['started_at']);
                unset($data['started_at']);
            }
            if (\array_key_exists('conclusion', $data)) {
                $object->setConclusion($data['conclusion']);
                unset($data['conclusion']);
            }
            if (\array_key_exists('completed_at', $data)) {
                $object->setCompletedAt($data['completed_at']);
                unset($data['completed_at']);
            }
            if (\array_key_exists('output', $data)) {
                $object->setOutput($this->denormalizer->denormalize($data['output'], \Github\Model\ReposOwnerRepoCheckRunsPostBodyOutput::class, 'json', $context));
                unset($data['output']);
            }
            if (\array_key_exists('actions', $data)) {
                $values = [];
                foreach ($data['actions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ReposOwnerRepoCheckRunsPostBodyActionsItem::class, 'json', $context);
                }
                $object->setActions($values);
                unset($data['actions']);
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
            $data['name'] = $object->getName();
            $data['head_sha'] = $object->getHeadSha();
            if ($object->isInitialized('detailsUrl') && null !== $object->getDetailsUrl()) {
                $data['details_url'] = $object->getDetailsUrl();
            }
            if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
                $data['external_id'] = $object->getExternalId();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['started_at'] = $object->getStartedAt();
            }
            if ($object->isInitialized('conclusion') && null !== $object->getConclusion()) {
                $data['conclusion'] = $object->getConclusion();
            }
            if ($object->isInitialized('completedAt') && null !== $object->getCompletedAt()) {
                $data['completed_at'] = $object->getCompletedAt();
            }
            if ($object->isInitialized('output') && null !== $object->getOutput()) {
                $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
            }
            if ($object->isInitialized('actions') && null !== $object->getActions()) {
                $values = [];
                foreach ($object->getActions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['actions'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ReposOwnerRepoCheckRunsPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Github\Model\ReposOwnerRepoCheckRunsPostBody::class => false];
        }
    }
}
