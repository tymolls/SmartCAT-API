<?php

namespace SmartCat\Client\Normalizer;

class TMRangeRateModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\TMRangeRateModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\TMRangeRateModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\TMRangeRateModel();
        if (isset($data['fromQuality'])) {
            $object->setFromQuality($data['fromQuality']);
        }
        if (isset($data['toQuality'])) {
            $object->setToQuality($data['toQuality']);
        }
        if (isset($data['value'])) {
            $object->setValue($data['value']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getFromQuality()) {
            $data['fromQuality'] = $object->getFromQuality();
        }
        if (null !== $object->getToQuality()) {
            $data['toQuality'] = $object->getToQuality();
        }
        if (null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\TMRangeRateModel::class => true,
        ];
    }
}