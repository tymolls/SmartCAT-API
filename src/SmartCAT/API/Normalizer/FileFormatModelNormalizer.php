<?php

namespace SmartCat\Client\Normalizer;

class FileFormatModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\FileFormatModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\FileFormatModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\FileFormatModel();
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['ocr'])) {
            $object->setOcr($data['ocr']);
        }
        if (isset($data['mime-type'])) {
            $object->setMimeType($data['mime-type']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOcr()) {
            $data['ocr'] = $object->getOcr();
        }
        if (null !== $object->getMimeType()) {
            $data['mime-type'] = $object->getMimeType();
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