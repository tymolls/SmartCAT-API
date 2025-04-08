<?php

namespace SmartCat\Client\Normalizer;

class BilingualFileImportSettingsModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\BilingualFileImportSettingsModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\BilingualFileImportSettingsModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\BilingualFileImportSettingsModel();
        if (isset($data['targetSubstitutionMode'])) {
            $object->setTargetSubstitutionMode($data['targetSubstitutionMode']);
        }
        if (isset($data['lockMode'])) {
            $object->setLockMode($data['lockMode']);
        }
        if (isset($data['confirmMode'])) {
            $object->setConfirmMode($data['confirmMode']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getTargetSubstitutionMode()) {
            $data['targetSubstitutionMode'] = $object->getTargetSubstitutionMode();
        }
        if (null !== $object->getLockMode()) {
            $data['lockMode'] = $object->getLockMode();
        }
        if (null !== $object->getConfirmMode()) {
            $data['confirmMode'] = $object->getConfirmMode();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\BilingualFileImportSettingsModel::class => true,
        ];
    }
}