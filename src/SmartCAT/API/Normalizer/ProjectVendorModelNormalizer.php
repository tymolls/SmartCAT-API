<?php

namespace SmartCat\Client\Normalizer;

use SmartCat\Client\Model\ProjectVendorModel;

class ProjectVendorModelNormalizer extends AbstractNormalizer
{
    /**
     * @param $data
     * @param $type
     * @param null $format
     * @return bool
     */
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ProjectVendorModel') {
            return false;
        }
        return true;
    }

    /**
     * @param $data
     * @param null $format
     * @return bool
     */
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ProjectVendorModel) {
            return true;
        }
        return false;
    }

    /**
     * @param $data
     * @param $class
     * @param null $format
     * @param array $context
     * @return ProjectVendorModel
     */
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ProjectVendorModel();
        if (isset($data['vendorAccountId'])) {
            $object->setVendorAccountId($data['vendorAccountId']);
        }
        if (isset($data['removedFromProject'])) {
            $object->setRemovedFromProject($data['removedFromProject']);
        }
        return $object;
    }

    /**
     * @param ProjectVendorModel $object
     * @param null $format
     * @param array $context
     * @return \stdClass
     */
    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getVendorAccountId()) {
            $data['vendorAccountId'] = $object->getVendorAccountId();
        }
        if (null !== $object->getRemovedFromProject()) {
            $data['removedFromProject'] = $object->getRemovedFromProject();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ProjectVendorModel::class => true,
        ];
    }
}