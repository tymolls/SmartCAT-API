<?php

namespace SmartCat\Client\Normalizer;

class CreateTranslationMemoryModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\CreateTranslationMemoryModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\CreateTranslationMemoryModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\CreateTranslationMemoryModel();
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['sourceLanguage'])) {
            $object->setSourceLanguage($data['sourceLanguage']);
        }
        if (isset($data['targetLanguages'])) {
            $values = array();
            foreach ($data['targetLanguages'] as $value) {
                $values[] = $value;
            }
            $object->setTargetLanguages($values);
        }
        if (isset($data['description'])) {
            $object->setDescription($data['description']);
        }
        if (isset($data['clientId'])) {
            $object->setClientId($data['clientId']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getSourceLanguage()) {
            $data['sourceLanguage'] = $object->getSourceLanguage();
        }
        if (null !== $object->getTargetLanguages()) {
            $values = array();
            foreach ($object->getTargetLanguages() as $value) {
                $values[] = $value;
            }
            $data['targetLanguages'] = $values;
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\CreateTranslationMemoryModel::class => true,
        ];
    }
}