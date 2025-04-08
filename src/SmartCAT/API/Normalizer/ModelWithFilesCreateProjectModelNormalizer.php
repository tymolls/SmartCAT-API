<?php

namespace SmartCat\Client\Normalizer;

class ModelWithFilesCreateProjectModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ModelWithFilesCreateProjectModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ModelWithFilesCreateProjectModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ModelWithFilesCreateProjectModel();
        if (isset($data['Value'])) {
            $object->setValue($this->serializer->deserialize($data['Value'], 'SmartCat\\Client\\Model\\CreateProjectModel', 'raw', $context));
        }
        if (isset($data['Files'])) {
            $values = array();
            foreach ($data['Files'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\UploadedFile', 'raw', $context);
            }
            $object->setFiles($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getValue()) {
            $data['Value'] = $this->serializer->serialize($object->getValue(), 'raw', $context);
        }
        if (null !== $object->getFiles()) {
            $values = array();
            foreach ($object->getFiles() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['Files'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ModelWithFilesCreateProjectModel::class => true,
        ];
    }
}