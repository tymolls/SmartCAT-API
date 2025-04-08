<?php

namespace SmartCat\Client\Normalizer;

class SegmentTagModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\SegmentTagModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\SegmentTagModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\SegmentTagModel();
        if (isset($data['tagNumber'])) {
            $object->setTagNumber($data['tagNumber']);
        }
        if (isset($data['tagType'])) {
            $object->setTagType($data['tagType']);
        }
        if (isset($data['position'])) {
            $object->setPosition($data['position']);
        }
        if (isset($data['isVirtual'])) {
            $object->setIsVirtual($data['isVirtual']);
        }
        if (isset($data['isInvisible'])) {
            $object->setIsInvisible($data['isInvisible']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getTagNumber()) {
            $data['tagNumber'] = $object->getTagNumber();
        }
        if (null !== $object->getTagType()) {
            $data['tagType'] = $object->getTagType();
        }
        if (null !== $object->getPosition()) {
            $data['position'] = $object->getPosition();
        }
        if (null !== $object->getIsVirtual()) {
            $data['isVirtual'] = $object->getIsVirtual();
        }
        if (null !== $object->getIsInvisible()) {
            $data['isInvisible'] = $object->getIsInvisible();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\SegmentTagModel::class => true,
        ];
    }
}