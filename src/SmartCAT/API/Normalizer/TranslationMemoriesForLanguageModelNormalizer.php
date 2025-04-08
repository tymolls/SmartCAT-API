<?php

namespace SmartCat\Client\Normalizer;

class TranslationMemoriesForLanguageModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\TranslationMemoriesForLanguageModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\TranslationMemoriesForLanguageModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\TranslationMemoriesForLanguageModel();
        if (isset($data['language'])) {
            $object->setLanguage($data['language']);
        }
        if (isset($data['translationMemories'])) {
            $values = array();
            foreach ($data['translationMemories'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\TranslationMemoryForProjectModel', 'raw', $context);
            }
            $object->setTranslationMemories($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getTranslationMemories()) {
            $values = array();
            foreach ($object->getTranslationMemories() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['translationMemories'] = $values;
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