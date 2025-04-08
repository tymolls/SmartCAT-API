<?php

namespace SmartCat\Client\Normalizer;

class PlaceholderFormatModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\PlaceholderFormatModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\PlaceholderFormatModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\PlaceholderFormatModel();
        if (isset($data['regex'])) {
            $object->setRegex($data['regex']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getRegex()) {
            $data['regex'] = $object->getRegex();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\PlaceholderFormatModel::class => true,
        ];
    }
}