<?php

namespace SmartCat\Client\Normalizer;

class UploadDocumentPropertiesModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\UploadDocumentPropertiesModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\UploadDocumentPropertiesModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\UploadDocumentPropertiesModel();
        if (isset($data['bilingualFileImportSettings'])) {
            $object->setBilingualFileImportSettings($this->serializer->deserialize($data['bilingualFileImportSettings'], 'SmartCat\\Client\\Model\\BilingualFileImportSettingsModel', 'raw', $context));
        }
        if (isset($data['enablePlaceholders'])) {
            $object->setEnablePlaceholders($data['enablePlaceholders']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getBilingualFileImportSettings()) {
            $data['bilingualFileImportSettings'] = $this->serializer->serialize($object->getBilingualFileImportSettings(), 'raw', $context);
        }
        if (null !== $object->getEnablePlaceholders()) {
            $data['enablePlaceholders'] = $object->getEnablePlaceholders();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\UploadDocumentPropertiesModel::class => true,
        ];
    }
}