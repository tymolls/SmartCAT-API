<?php

namespace SmartCat\Client\Normalizer;

class ModelWithFilesIReadOnlyListCreateDocumentPropertyModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ModelWithFilesIReadOnlyListCreateDocumentPropertyModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ModelWithFilesIReadOnlyListCreateDocumentPropertyModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ModelWithFilesIReadOnlyListCreateDocumentPropertyModel();
        if (isset($data['Value'])) {
            $values = array();
            foreach ($data['Value'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\CreateDocumentPropertyModel', 'raw', $context);
            }
            $object->setValue($values);
        }
        if (isset($data['Files'])) {
            $values_1 = array();
            foreach ($data['Files'] as $value_1) {
                $values_1[] = $this->serializer->deserialize($value_1, 'SmartCat\\Client\\Model\\UploadedFile', 'raw', $context);
            }
            $object->setFiles($values_1);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getValue()) {
            $values = array();
            foreach ($object->getValue() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['Value'] = $values;
        }
        if (null !== $object->getFiles()) {
            $values_1 = array();
            foreach ($object->getFiles() as $value_1) {
                $values_1[] = $this->serializer->serialize($value_1, 'raw', $context);
            }
            $data['Files'] = $values_1;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ModelWithFilesIReadOnlyListCreateDocumentPropertyModel::class => true,
        ];
    }
}