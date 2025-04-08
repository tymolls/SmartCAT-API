<?php

namespace SmartCat\Client\Normalizer;

class ExportDocumentTaskModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ExportDocumentTaskModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ExportDocumentTaskModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ExportDocumentTaskModel();
        if (isset($data['id'])) {
            $object->setId($data['id']);
        }
        if (isset($data['documentIds'])) {
            $values = array();
            foreach ($data['documentIds'] as $value) {
                $values[] = $value;
            }
            $object->setDocumentIds($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getDocumentIds()) {
            $values = array();
            foreach ($object->getDocumentIds() as $value) {
                $values[] = $value;
            }
            $data['documentIds'] = $values;
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
