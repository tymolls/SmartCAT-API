<?php

namespace SmartCat\Client\Normalizer;

class TranslationMemoryForProjectModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\TranslationMemoryForProjectModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\TranslationMemoryForProjectModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\TranslationMemoryForProjectModel();
        if (isset($data['id'])) {
            $object->setId($data['id']);
        }
        if (isset($data['matchThreshold'])) {
            $object->setMatchThreshold($data['matchThreshold']);
        }
        if (isset($data['isWritable'])) {
            $object->setIsWritable($data['isWritable']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getMatchThreshold()) {
            $data['matchThreshold'] = $object->getMatchThreshold();
        }
        if (null !== $object->getIsWritable()) {
            $data['isWritable'] = $object->getIsWritable();
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