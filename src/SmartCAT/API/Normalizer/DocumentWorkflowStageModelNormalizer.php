<?php

namespace SmartCat\Client\Normalizer;

class DocumentWorkflowStageModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\DocumentWorkflowStageModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\DocumentWorkflowStageModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\DocumentWorkflowStageModel();
        if (isset($data['progress'])) {
            $object->setProgress($data['progress']);
        }
        if (isset($data['wordsTranslated'])) {
            $object->setWordsTranslated($data['wordsTranslated']);
        }
        if (isset($data['unassignedWordsCount'])) {
            $object->setUnassignedWordsCount($data['unassignedWordsCount']);
        }
        if (isset($data['status'])) {
            $object->setStatus($data['status']);
        }
        if (isset($data['executives'])) {
            $values = array();
            foreach ($data['executives'] as $value) {
                $values[] = $this->serializer->deserialize(json_encode($value), 'SmartCat\\Client\\Model\\AssignedExecutiveModel', 'json', $context);
            }
            $object->setExecutives($values);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if (null !== $object->getWordsTranslated()) {
            $data['wordsTranslated'] = $object->getWordsTranslated();
        }
        if (null !== $object->getUnassignedWordsCount()) {
            $data['unassignedWordsCount'] = $object->getUnassignedWordsCount();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getExecutives()) {
            $values = array();
            foreach ($object->getExecutives() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['executives'] = $values;
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