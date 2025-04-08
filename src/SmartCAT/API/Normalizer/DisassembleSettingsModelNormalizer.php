<?php

namespace SmartCat\Client\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareTrait;

class DisassembleSettingsModelNormalizer implements DenormalizerInterface, NormalizerInterface
{
    use SerializerAwareTrait;

    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\DisassembleSettingsModel') {
            return false;
        }
        return true;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCAT\Client\Model\DisassembleSettingsModel) {
            return true;
        }
        return false;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCAT\Client\Model\DisassembleSettingsModel();
        if (isset($data['translatableAttributes'])) {
            $object->setTranslatableAttributes($data['translatableAttributes']);
        }
        return $object;
    }
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getTranslatableAttributes()) {
            $data['translatableAttributes'] = $object->getTranslatableAttributes();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\DisassembleSettingsModel::class => true,
        ];
    }
}