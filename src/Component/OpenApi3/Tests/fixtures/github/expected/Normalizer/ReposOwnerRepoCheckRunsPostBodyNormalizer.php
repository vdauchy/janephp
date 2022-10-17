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
class ReposOwnerRepoCheckRunsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Github\\Model\\ReposOwnerRepoCheckRunsPostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Github\\Model\\ReposOwnerRepoCheckRunsPostBody';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
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
            $context['skip_validation'] = true;
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
            $object->setOutput($this->denormalizer->denormalize($data['output'], 'Github\\Model\\ReposOwnerRepoCheckRunsPostBodyOutput', 'json', $context));
            unset($data['output']);
        }
        if (\array_key_exists('actions', $data)) {
            $values = array();
            foreach ($data['actions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Github\\Model\\ReposOwnerRepoCheckRunsPostBodyActionsItem', 'json', $context);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['name'] = $object->getName();
        $data['head_sha'] = $object->getHeadSha();
        if (null !== $object->getDetailsUrl()) {
            $data['details_url'] = $object->getDetailsUrl();
        }
        if (null !== $object->getExternalId()) {
            $data['external_id'] = $object->getExternalId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStartedAt()) {
            $data['started_at'] = $object->getStartedAt();
        }
        if (null !== $object->getConclusion()) {
            $data['conclusion'] = $object->getConclusion();
        }
        if (null !== $object->getCompletedAt()) {
            $data['completed_at'] = $object->getCompletedAt();
        }
        if (null !== $object->getOutput()) {
            $data['output'] = $this->normalizer->normalize($object->getOutput(), 'json', $context);
        }
        if (null !== $object->getActions()) {
            $values = array();
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
            $context['skip_validation'] = true;
        }
        return $data;
    }
}