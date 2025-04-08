<?php

namespace SmartCat\Client\Normalizer;

class GlossaryModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\GlossaryModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\GlossaryModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\GlossaryModel();
        if (isset($data['id'])) {
            $object->setId($data['id']);
        }
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['description'])) {
            $object->setDescription($data['description']);
        }
        if (isset($data['clientId'])) {
            $object->setClientId($data['clientId']);
        }
        if (isset($data['languages'])) {
            $values = array();
            foreach ($data['languages'] as $value) {
                $values[] = $value;
            }
            $object->setLanguages($values);
        }
        if (isset($data['units'])) {
            $object->setUnits($data['units']);
        }
        if (isset($data['unitsPending'])) {
            $object->setUnitsPending($data['unitsPending']);
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
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getLanguages()) {
            $values = array();
            foreach ($object->getLanguages() as $value) {
                $values[] = $value;
            }
            $data['languages'] = $values;
        }
        if (null !== $object->getUnits()) {
            $data['units'] = $object->getUnits();
        }
        if (null !== $object->getUnitsPending()) {
            $data['unitsPending'] = $object->getUnitsPending();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\GlossaryModel::class => true,
        ];
    }
}