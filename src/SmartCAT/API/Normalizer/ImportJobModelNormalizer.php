<?php

namespace SmartCat\Client\Normalizer;

class ImportJobModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ImportJobModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ImportJobModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ImportJobModel();
        if (isset($data['freelancerId'])) {
            $object->setFreelancerId($data['freelancerId']);
        }
        if (isset($data['serviceType'])) {
            $object->setServiceType($data['serviceType']);
        }
        if (isset($data['jobDescription'])) {
            $object->setJobDescription($data['jobDescription']);
        }
        if (isset($data['unitsType'])) {
            $object->setUnitsType($data['unitsType']);
        }
        if (isset($data['unitsAmount'])) {
            $object->setUnitsAmount($data['unitsAmount']);
        }
        if (isset($data['pricePerUnit'])) {
            $object->setPricePerUnit($data['pricePerUnit']);
        }
        if (isset($data['currency'])) {
            $object->setCurrency($data['currency']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getFreelancerId()) {
            $data['freelancerId'] = $object->getFreelancerId();
        }
        if (null !== $object->getServiceType()) {
            $data['serviceType'] = $object->getServiceType();
        }
        if (null !== $object->getJobDescription()) {
            $data['jobDescription'] = $object->getJobDescription();
        }
        if (null !== $object->getUnitsType()) {
            $data['unitsType'] = $object->getUnitsType();
        }
        if (null !== $object->getUnitsAmount()) {
            $data['unitsAmount'] = $object->getUnitsAmount();
        }
        if (null !== $object->getPricePerUnit()) {
            $data['pricePerUnit'] = $object->getPricePerUnit();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            'object',
        ];
    }
}