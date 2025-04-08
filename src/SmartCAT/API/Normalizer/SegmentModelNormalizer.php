<?php

namespace SmartCat\Client\Normalizer;

class SegmentModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\SegmentModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\SegmentModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\SegmentModel();
        if (isset($data['text'])) {
            $object->setText($data['text']);
        }
        if (isset($data['prevContext'])) {
            $object->setPrevContext($data['prevContext']);
        }
        if (isset($data['nextContext'])) {
            $object->setNextContext($data['nextContext']);
        }
        if (isset($data['tags'])) {
            $values = array();
            foreach ($data['tags'] as $value) {
                $values[] = $this->serializer->deserialize($value, 'SmartCat\\Client\\Model\\SegmentTagModel', 'raw', $context);
            }
            $object->setTags($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getText()) {
            $data['text'] = $object->getText();
        }
        if (null !== $object->getPrevContext()) {
            $data['prevContext'] = $object->getPrevContext();
        }
        if (null !== $object->getNextContext()) {
            $data['nextContext'] = $object->getNextContext();
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