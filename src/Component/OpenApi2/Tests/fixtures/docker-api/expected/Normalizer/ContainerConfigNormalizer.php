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
    class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === \Docker\Api\Model\ContainerConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ContainerConfig';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Docker\Api\Model\ContainerConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainerConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data)) {
                $object->setHostname($data['Hostname']);
            }
            if (\array_key_exists('Domainname', $data)) {
                $object->setDomainname($data['Domainname']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
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
            if (\array_key_exists('ExposedPorts', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setExposedPorts($values);
            }
            if (\array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
            }
            if (\array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            if (\array_key_exists('StdinOnce', $data)) {
                $object->setStdinOnce($data['StdinOnce']);
            }
            if (\array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            if (\array_key_exists('Cmd', $data)) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
            }
            if (\array_key_exists('Healthcheck', $data)) {
                $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context));
            }
            if (\array_key_exists('ArgsEscaped', $data)) {
                $object->setArgsEscaped($data['ArgsEscaped']);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($data['Image']);
            }
            if (\array_key_exists('Volumes', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setVolumes($values_3);
            }
            if (\array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            if (\array_key_exists('Entrypoint', $data)) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setEntrypoint($values_4);
            }
            if (\array_key_exists('NetworkDisabled', $data)) {
                $object->setNetworkDisabled($data['NetworkDisabled']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('OnBuild', $data)) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setOnBuild($values_5);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $object->setLabels($values_6);
            }
            if (\array_key_exists('StopSignal', $data)) {
                $object->setStopSignal($data['StopSignal']);
            }
            if (\array_key_exists('StopTimeout', $data)) {
                $object->setStopTimeout($data['StopTimeout']);
            }
            if (\array_key_exists('Shell', $data)) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setShell($values_7);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('domainname') && null !== $object->getDomainname()) {
                $data['Domainname'] = $object->getDomainname();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('exposedPorts') && null !== $object->getExposedPorts()) {
                $values = [];
                foreach ($object->getExposedPorts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['ExposedPorts'] = $values;
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('stdinOnce') && null !== $object->getStdinOnce()) {
                $data['StdinOnce'] = $object->getStdinOnce();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('healthcheck') && null !== $object->getHealthcheck()) {
                $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
            }
            if ($object->isInitialized('argsEscaped') && null !== $object->getArgsEscaped()) {
                $data['ArgsEscaped'] = $object->getArgsEscaped();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_3 = [];
                foreach ($object->getVolumes() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['Volumes'] = $values_3;
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $values_4 = [];
                foreach ($object->getEntrypoint() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Entrypoint'] = $values_4;
            }
            if ($object->isInitialized('networkDisabled') && null !== $object->getNetworkDisabled()) {
                $data['NetworkDisabled'] = $object->getNetworkDisabled();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('onBuild') && null !== $object->getOnBuild()) {
                $values_5 = [];
                foreach ($object->getOnBuild() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['OnBuild'] = $values_5;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_6 = [];
                foreach ($object->getLabels() as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $data['Labels'] = $values_6;
            }
            if ($object->isInitialized('stopSignal') && null !== $object->getStopSignal()) {
                $data['StopSignal'] = $object->getStopSignal();
            }
            if ($object->isInitialized('stopTimeout') && null !== $object->getStopTimeout()) {
                $data['StopTimeout'] = $object->getStopTimeout();
            }
            if ($object->isInitialized('shell') && null !== $object->getShell()) {
                $values_7 = [];
                foreach ($object->getShell() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Shell'] = $values_7;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainerConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Docker\Api\Model\ContainerConfig::class => false];
        }
    }
} else {
    class ContainerConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === \Docker\Api\Model\ContainerConfig::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Docker\Api\Model\ContainerConfig';
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
            $object = new \Docker\Api\Model\ContainerConfig();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainerConfigConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Hostname', $data)) {
                $object->setHostname($data['Hostname']);
            }
            if (\array_key_exists('Domainname', $data)) {
                $object->setDomainname($data['Domainname']);
            }
            if (\array_key_exists('User', $data)) {
                $object->setUser($data['User']);
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
            if (\array_key_exists('ExposedPorts', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['ExposedPorts'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setExposedPorts($values);
            }
            if (\array_key_exists('Tty', $data)) {
                $object->setTty($data['Tty']);
            }
            if (\array_key_exists('OpenStdin', $data)) {
                $object->setOpenStdin($data['OpenStdin']);
            }
            if (\array_key_exists('StdinOnce', $data)) {
                $object->setStdinOnce($data['StdinOnce']);
            }
            if (\array_key_exists('Env', $data)) {
                $values_1 = [];
                foreach ($data['Env'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setEnv($values_1);
            }
            if (\array_key_exists('Cmd', $data)) {
                $values_2 = [];
                foreach ($data['Cmd'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCmd($values_2);
            }
            if (\array_key_exists('Healthcheck', $data)) {
                $object->setHealthcheck($this->denormalizer->denormalize($data['Healthcheck'], \Docker\Api\Model\HealthConfig::class, 'json', $context));
            }
            if (\array_key_exists('ArgsEscaped', $data)) {
                $object->setArgsEscaped($data['ArgsEscaped']);
            }
            if (\array_key_exists('Image', $data)) {
                $object->setImage($data['Image']);
            }
            if (\array_key_exists('Volumes', $data)) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Volumes'] as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $object->setVolumes($values_3);
            }
            if (\array_key_exists('WorkingDir', $data)) {
                $object->setWorkingDir($data['WorkingDir']);
            }
            if (\array_key_exists('Entrypoint', $data)) {
                $values_4 = [];
                foreach ($data['Entrypoint'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setEntrypoint($values_4);
            }
            if (\array_key_exists('NetworkDisabled', $data)) {
                $object->setNetworkDisabled($data['NetworkDisabled']);
            }
            if (\array_key_exists('MacAddress', $data)) {
                $object->setMacAddress($data['MacAddress']);
            }
            if (\array_key_exists('OnBuild', $data)) {
                $values_5 = [];
                foreach ($data['OnBuild'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setOnBuild($values_5);
            }
            if (\array_key_exists('Labels', $data)) {
                $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['Labels'] as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $object->setLabels($values_6);
            }
            if (\array_key_exists('StopSignal', $data)) {
                $object->setStopSignal($data['StopSignal']);
            }
            if (\array_key_exists('StopTimeout', $data)) {
                $object->setStopTimeout($data['StopTimeout']);
            }
            if (\array_key_exists('Shell', $data)) {
                $values_7 = [];
                foreach ($data['Shell'] as $value_7) {
                    $values_7[] = $value_7;
                }
                $object->setShell($values_7);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('hostname') && null !== $object->getHostname()) {
                $data['Hostname'] = $object->getHostname();
            }
            if ($object->isInitialized('domainname') && null !== $object->getDomainname()) {
                $data['Domainname'] = $object->getDomainname();
            }
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['User'] = $object->getUser();
            }
            if ($object->isInitialized('attachStdin') && null !== $object->getAttachStdin()) {
                $data['AttachStdin'] = $object->getAttachStdin();
            }
            if ($object->isInitialized('attachStdout') && null !== $object->getAttachStdout()) {
                $data['AttachStdout'] = $object->getAttachStdout();
            }
            if ($object->isInitialized('attachStderr') && null !== $object->getAttachStderr()) {
                $data['AttachStderr'] = $object->getAttachStderr();
            }
            if ($object->isInitialized('exposedPorts') && null !== $object->getExposedPorts()) {
                $values = [];
                foreach ($object->getExposedPorts() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['ExposedPorts'] = $values;
            }
            if ($object->isInitialized('tty') && null !== $object->getTty()) {
                $data['Tty'] = $object->getTty();
            }
            if ($object->isInitialized('openStdin') && null !== $object->getOpenStdin()) {
                $data['OpenStdin'] = $object->getOpenStdin();
            }
            if ($object->isInitialized('stdinOnce') && null !== $object->getStdinOnce()) {
                $data['StdinOnce'] = $object->getStdinOnce();
            }
            if ($object->isInitialized('env') && null !== $object->getEnv()) {
                $values_1 = [];
                foreach ($object->getEnv() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['Env'] = $values_1;
            }
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $values_2 = [];
                foreach ($object->getCmd() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['Cmd'] = $values_2;
            }
            if ($object->isInitialized('healthcheck') && null !== $object->getHealthcheck()) {
                $data['Healthcheck'] = $this->normalizer->normalize($object->getHealthcheck(), 'json', $context);
            }
            if ($object->isInitialized('argsEscaped') && null !== $object->getArgsEscaped()) {
                $data['ArgsEscaped'] = $object->getArgsEscaped();
            }
            if ($object->isInitialized('image') && null !== $object->getImage()) {
                $data['Image'] = $object->getImage();
            }
            if ($object->isInitialized('volumes') && null !== $object->getVolumes()) {
                $values_3 = [];
                foreach ($object->getVolumes() as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $data['Volumes'] = $values_3;
            }
            if ($object->isInitialized('workingDir') && null !== $object->getWorkingDir()) {
                $data['WorkingDir'] = $object->getWorkingDir();
            }
            if ($object->isInitialized('entrypoint') && null !== $object->getEntrypoint()) {
                $values_4 = [];
                foreach ($object->getEntrypoint() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['Entrypoint'] = $values_4;
            }
            if ($object->isInitialized('networkDisabled') && null !== $object->getNetworkDisabled()) {
                $data['NetworkDisabled'] = $object->getNetworkDisabled();
            }
            if ($object->isInitialized('macAddress') && null !== $object->getMacAddress()) {
                $data['MacAddress'] = $object->getMacAddress();
            }
            if ($object->isInitialized('onBuild') && null !== $object->getOnBuild()) {
                $values_5 = [];
                foreach ($object->getOnBuild() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['OnBuild'] = $values_5;
            }
            if ($object->isInitialized('labels') && null !== $object->getLabels()) {
                $values_6 = [];
                foreach ($object->getLabels() as $key_2 => $value_6) {
                    $values_6[$key_2] = $value_6;
                }
                $data['Labels'] = $values_6;
            }
            if ($object->isInitialized('stopSignal') && null !== $object->getStopSignal()) {
                $data['StopSignal'] = $object->getStopSignal();
            }
            if ($object->isInitialized('stopTimeout') && null !== $object->getStopTimeout()) {
                $data['StopTimeout'] = $object->getStopTimeout();
            }
            if ($object->isInitialized('shell') && null !== $object->getShell()) {
                $values_7 = [];
                foreach ($object->getShell() as $value_7) {
                    $values_7[] = $value_7;
                }
                $data['Shell'] = $values_7;
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Docker\Api\Validator\ContainerConfigConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return [\Docker\Api\Model\ContainerConfig::class => false];
        }
    }
}
