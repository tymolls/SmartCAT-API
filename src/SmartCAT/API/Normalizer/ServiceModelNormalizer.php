<?php

namespace SmartCat\Client\Normalizer;

class ServiceModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ServiceModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ServiceModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ServiceModel();
        if (isset($data['serviceType'])) {
            $object->setServiceType($data['serviceType']);
        }
        if (isset($data['sourceLanguage'])) {
            $object->setSourceLanguage($data['sourceLanguage']);
        }
        if (isset($data['targetLanguage'])) {
            $object->setTargetLanguage($data['targetLanguage']);
        }
        if (isset($data['pricePerUnit'])) {
            $object->setPricePerUnit($data['pricePerUnit']);
        }
        if (isset($data['currency'])) {
            $object->setCurrency($data['currency']);
        }
        if (isset($data['specializations'])) {
            $values = [];
            foreach ($data['specializations'] as $value) {
                $values[] = $value;
            }
            $object->setSpecializations($values);
        }

        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];

        if (null !== $object->getServiceType()) {
            $data['serviceType'] = $object->getServiceType();
        }
        if (null !== $object->getSourceLanguage()) {
            $data['sourceLanguage'] = $object->getSourceLanguage();
        }
        if (null !== $object->getTargetLanguage()) {
            $data['targetLanguage'] = $object->getTargetLanguage();
        }
        if (null !== $object->getPricePerUnit()) {
            $data['pricePerUnit'] = $object->getPricePerUnit();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getSpecializations()) {
            $values = [];
            foreach ($object->getSpecializations() as $value) {
                $values[] = $value;
            }
            $data['specializations'] = $values;
        }

        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ServiceModel::class => true,
        ];
    }
}
