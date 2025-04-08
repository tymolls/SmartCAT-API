<?php

namespace SmartCat\Client\Normalizer;

class CallbackPropertyModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\CallbackPropertyModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\CallbackPropertyModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\CallbackPropertyModel();
        if (isset($data['url'])) {
            $object->setUrl($data['url']);
        }
        if (isset($data['additionalHeaders'])) {
            $values = array();
            foreach ($data['additionalHeaders'] as $value) {
                $values[] = $this->serializer->deserialize(json_encode($value), 'SmartCat\\Client\\Model\\AdditionalHeaderModel', 'json', $context);
            }
            $object->setAdditionalHeaders($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getAdditionalHeaders()) {
            $values = array();
            foreach ($object->getAdditionalHeaders() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['additionalHeaders'] = $values;
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\CallbackPropertyModel::class => true,
        ];
    }
}