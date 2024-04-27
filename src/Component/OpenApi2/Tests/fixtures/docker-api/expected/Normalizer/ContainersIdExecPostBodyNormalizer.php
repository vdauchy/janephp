<?php

namespace Docker\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Docker\Api\Runtime\Normalizer\CheckArray;
use Docker\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \Docker\Api\Model\ContainersIdExecPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ContainersIdExecPostBody';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ContainersIdExecPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AttachStdin', $data)) {
                $object->setAttachStdin($data['AttachStdin']);
            }
            if (\array_key_exists('AttachStdout', $data)) {
                $object->setAttachStdout($data['AttachStdout']);
            }
            if (\array_key_exists('AttachStderr', $data)) {
                $object->setAttachStderr($data['AttachStderr']);
            }
            if (\array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            if (\array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
            }
            if (\array_key_exists('Env', $data)) {
                $values = [];
                foreach ($data['Env'] as $value) {
                    $values[] = $value;
                }
                $object->setEnv($values);
            }
            if (\array_key_exists('Cmd', $data)) {
                $values_1 = [];
                foreach ($data['Cmd'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCmd($values_1);
            }
            if (\array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
            }
            if (\array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values = [];
                foreach ($object->getEnv() as $value) {
                    $values[] = $value;
                }
                $data['Env'] = $values;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_1 = [];
                foreach ($object->getCmd() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Cmd'] = $values_1;
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Docker\Api\Model\ContainersIdExecPostBody::class => false];
        }
    }
} else {
    class ContainersIdExecPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \Docker\Api\Model\ContainersIdExecPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ContainersIdExecPostBody';
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
            $object = new \Docker\Api\Model\ContainersIdExecPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AttachStdin', $data)) {
                $object->setAttachStdin($data['AttachStdin']);
            }
            if (\array_key_exists('AttachStdout', $data)) {
                $object->setAttachStdout($data['AttachStdout']);
            }
            if (\array_key_exists('AttachStderr', $data)) {
                $object->setAttachStderr($data['AttachStderr']);
            }
            if (\array_key_exists('DetachKeys', $data)) {
                $object->setDetachKeys($data['DetachKeys']);
            }
            if (\array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
            }
            if (\array_key_exists('Env', $data)) {
                $values = [];
                foreach ($data['Env'] as $value) {
                    $values[] = $value;
                }
                $object->setEnv($values);
            }
            if (\array_key_exists('Cmd', $data)) {
                $values_1 = [];
                foreach ($data['Cmd'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setCmd($values_1);
            }
            if (\array_key_exists('Privileged', $data)) {
                $object->setPrivileged($data['Privileged']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
            }
            if (\array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('detachKeys') && null !== $object->getDetachKeys()) {
                $data['DetachKeys'] = $object->getDetachKeys();
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values = [];
                foreach ($object->getEnv() as $value) {
                    $values[] = $value;
                }
                $data['Env'] = $values;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_1 = [];
                foreach ($object->getCmd() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Cmd'] = $values_1;
            }
            if ($object->isInitialized('privileged') && null !== $object->getPrivileged()) {
                $data['Privileged'] = $object->getPrivileged();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainersIdExecPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Docker\Api\Model\ContainersIdExecPostBody::class => false];
        }
    }
}
