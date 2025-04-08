<?php

namespace SmartCat\Client\Normalizer;

class CreateInvoiceModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\CreateInvoiceModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\CreateInvoiceModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\CreateInvoiceModel();
        if (isset($data['userId'])) {
            $object->setUserId($data['userId']);
        }
        if (isset($data['jobIds'])) {
            $values = array();
            foreach ($data['jobIds'] as $value) {
                $values[] = $value;
            }
            $object->setJobIds($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getUserId()) {
            $data['userId'] = $object->getUserId();
        }
        if (null !== $object->getJobIds()) {
            $values = array();
            foreach ($object->getJobIds() as $value) {
                $values[] = $value;
            }
            $data['jobIds'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\CreateInvoiceModel::class => true,
        ];
    }
}