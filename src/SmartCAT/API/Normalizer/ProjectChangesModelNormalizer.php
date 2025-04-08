<?php

namespace SmartCat\Client\Normalizer;

use Carbon\Carbon;

class ProjectChangesModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ProjectChangesModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ProjectChangesModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ProjectChangesModel();
        if (isset($data['name'])) {
            $object->setName($data['name']);
        }
        if (isset($data['description'])) {
            $object->setDescription($data['description']);
        }
        if (isset($data['deadline'])) {
            $object->setDeadline($data['deadline']);
        }
        if (isset($data['clientId'])) {
            $object->setClientId($data['clientId']);
        }
        if (isset($data['domainId'])) {
            $object->setDomainId($data['domainId']);
        }
        if (isset($data['vendorAccountIds'])) {
            $values_1 = array();
            foreach ($data['vendorAccountIds'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setVendorAccountIds($values_1);
        }
        if (isset($data['externalTag'])) {
            $object->setExternalTag($data['externalTag']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDeadline()) {
            $data['deadline'] = Carbon::parse($object->getDeadline())->toISOString();
        }
        if (null !== $object->getClientId()) {
            $data['clientId'] = $object->getClientId();
        }
        if (null !== $object->getDomainId()) {
            $data['domainId'] = $object->getDomainId();
        }
        if (null !== $object->getVendorAccountIds()) {
            $values_1 = array();
            foreach ($object->getVendorAccountIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['vendorAccountIds'] = $values_1;
        }
        if (null !== $object->getExternalTag()) {
            $data['externalTag'] = $object->getExternalTag();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ProjectChangesModel::class => true,
        ];
    }
}