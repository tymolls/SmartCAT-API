<?php

namespace SmartCat\Client\Normalizer;

class NetRateModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\NetRateModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\NetRateModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\NetRateModel();
        if (isset($data['id'])) {
            $object->setId($data['id']);
        }
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['newWordsRate'])) {
            $object->setNewWordsRate($data['newWordsRate']);
        }
        if (isset($data['repetitionsRate'])) {
            $object->setRepetitionsRate($data['repetitionsRate']);
        }
        if (isset($data['tmMatchRates'])) {
            $values = array();
            foreach ($data['tmMatchRates'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\TMRangeRateModel', 'raw', $context);
            }
            $object->setTmMatchRates($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNewWordsRate()) {
            $data['newWordsRate'] = $object->getNewWordsRate();
        }
        if (null !== $object->getRepetitionsRate()) {
            $data['repetitionsRate'] = $object->getRepetitionsRate();
        }
        if (null !== $object->getTmMatchRates()) {
            $values = array();
            foreach ($object->getTmMatchRates() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['tmMatchRates'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\NetRateModel::class => true,
        ];
    }
}