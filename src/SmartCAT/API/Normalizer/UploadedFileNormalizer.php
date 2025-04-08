<?php

namespace SmartCat\Client\Normalizer;

class UploadedFileNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\UploadedFile') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\UploadedFile) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\UploadedFile();
        if (isset($data['FullName'])) {
            $object->setFullName($data['FullName']);
        }
        if (isset($data['Name'])) {
            $object->setName($data['Name']);
        }
        if (isset($data['Extension'])) {
            $object->setExtension($data['Extension']);
        }
        if (isset($data['MediaType'])) {
            $object->setMediaType($data['MediaType']);
        }
        if (isset($data['FileSize'])) {
            $object->setFileSize($data['FileSize']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getFullName()) {
            $data['FullName'] = $object->getFullName();
        }
        if (null !== $object->getName()) {
            $data['Name'] = $object->getName();
        }
        if (null !== $object->getExtension()) {
            $data['Extension'] = $object->getExtension();
        }
        if (null !== $object->getMediaType()) {
            $data['MediaType'] = $object->getMediaType();
        }
        if (null !== $object->getFileSize()) {
            $data['FileSize'] = $object->getFileSize();
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