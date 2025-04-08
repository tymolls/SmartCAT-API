<?php

namespace SmartCat\Client\Normalizer;

class AssignableExecutiveModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\AssignableExecutiveModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\AssignableExecutiveModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\AssignableExecutiveModel();
        if (isset($data['id'])) {
            $object->setId($data['id']);
        }
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['surname'])) {
            $object->setSurname($data['surname']);
        }
        if (isset($data['email'])) {
            $object->setEmail($data['email']);
        }
        if (isset($data['md5HashOfEMail'])) {
            $object->setMd5HashOfEMail($data['md5HashOfEMail']);
        }
        if (isset($data['type'])) {
            $object->setType($data['type']);
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
        if (null !== $object->getSurname()) {
            $data['surname'] = $object->getSurname();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getMd5HashOfEMail()) {
            $data['md5HashOfEMail'] = $object->getMd5HashOfEMail();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\AssignableExecutiveModel::class => true,
        ];
    }
}