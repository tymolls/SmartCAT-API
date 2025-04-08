<?php

namespace SmartCat\Client\Normalizer;

use SmartCat\Client\Model\DirectoryItemModel;
use SmartCat\Client\Model\DirectoryModel;

class DirectoryModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\DirectoryModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof DirectoryModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new DirectoryModel();
        if (isset($data['type'])) {
            $object->setType($data['type']);
        }
        if (isset($data['items'])) {
            $values = array();
            foreach ($data['items'] as $value) {
                $values[] = $this->serializer->deserialize(json_encode($value), DirectoryItemModel::class, 'json', $context);
            }
            $object->setItems($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getItems()) {
            $values = array();
            foreach ($object->getItems() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['items'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            'object',
        ];
    }
}