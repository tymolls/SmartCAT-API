<?php

namespace SmartCat\Client\Normalizer;

class StatisticsRowModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\StatisticsRowModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\StatisticsRowModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\StatisticsRowModel();
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['words'])) {
            $object->setWords($data['words']);
        }
        if (isset($data['percent'])) {
            $object->setPercent($data['percent']);
        }
        if (isset($data['segments'])) {
            $object->setSegments($data['segments']);
        }
        if (isset($data['pages'])) {
            $object->setPages($data['pages']);
        }
        if (isset($data['charsWithoutSpaces'])) {
            $object->setCharsWithoutSpaces($data['charsWithoutSpaces']);
        }
        if (isset($data['charsWithSpaces'])) {
            $object->setCharsWithSpaces($data['charsWithSpaces']);
        }
        if (isset($data['cost'])) {
            $object->setCost($data['cost']);
        }
        if (isset($data['effectiveWordsForBilling'])) {
            $object->setEffectiveWordsForBilling($data['effectiveWordsForBilling']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getWords()) {
            $data['words'] = $object->getWords();
        }
        if (null !== $object->getPercent()) {
            $data['percent'] = $object->getPercent();
        }
        if (null !== $object->getSegments()) {
            $data['segments'] = $object->getSegments();
        }
        if (null !== $object->getPages()) {
            $data['pages'] = $object->getPages();
        }
        if (null !== $object->getCharsWithoutSpaces()) {
            $data['charsWithoutSpaces'] = $object->getCharsWithoutSpaces();
        }
        if (null !== $object->getCharsWithSpaces()) {
            $data['charsWithSpaces'] = $object->getCharsWithSpaces();
        }
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getEffectiveWordsForBilling()) {
            $data['effectiveWordsForBilling'] = $object->getEffectiveWordsForBilling();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\StatisticsRowModel::class => true,
        ];
    }
}