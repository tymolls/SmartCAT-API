<?php

namespace SmartCat\Client\Normalizer;

class SegmentWithMatchesModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\SegmentWithMatchesModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\SegmentWithMatchesModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\SegmentWithMatchesModel();
        if (isset($data['sourceText'])) {
            $object->setSourceText($data['sourceText']);
        }
        if (isset($data['targetText'])) {
            $object->setTargetText($data['targetText']);
        }
        if (isset($data['segmentMatch'])) {
            $object->setSegmentMatch($data['segmentMatch']);
        }
        if (isset($data['tags'])) {
            $values = array();
            foreach ($data['tags'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\TagsFromUnit', 'raw', $context);
            }
            $object->setTags($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getSourceText()) {
            $data['sourceText'] = $object->getSourceText();
        }
        if (null !== $object->getTargetText()) {
            $data['targetText'] = $object->getTargetText();
        }
        if (null !== $object->getSegmentMatch()) {
            $data['segmentMatch'] = $object->getSegmentMatch();
        }
        if (null !== $object->getTags()) {
            $values = array();
            foreach ($object->getTags() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['tags'] = $values;
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