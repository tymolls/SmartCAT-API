<?php

namespace SmartCat\Client\Normalizer;

class UpdateUserRequestNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\UpdateUserRequest') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\UpdateUserRequest) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\UpdateUserRequest();
        if (isset($data['firstName'])) {
            $object->setFirstName($data['firstName']);
        }
        if (isset($data['lastName'])) {
            $object->setLastName($data['lastName']);
        }
        if (isset($data['rightsGroup'])) {
            $object->setRightsGroup($data['rightsGroup']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getFirstName()) {
            $data['firstName'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['lastName'] = $object->getLastName();
        }
        if (null !== $object->getRightsGroup()) {
            $data['rightsGroup'] = $object->getRightsGroup();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\UpdateUserRequest::class => true,
        ];
    }
}