<?php

namespace SmartCat\Client\Normalizer;

class DocumentTargetIdNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\DocumentTargetId') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\DocumentTargetId) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\DocumentTargetId();
        if (isset($data['DocumentId'])) {
            $object->setDocumentId($data['DocumentId']);
        }
        if (isset($data['LanguageId'])) {
            $object->setLanguageId($data['LanguageId']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getDocumentId()) {
            $data['DocumentId'] = $object->getDocumentId();
        }
        if (null !== $object->getLanguageId()) {
            $data['LanguageId'] = $object->getLanguageId();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\DocumentTargetId::class => true,
        ];
    }
}