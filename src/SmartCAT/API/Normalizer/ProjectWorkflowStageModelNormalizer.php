<?php

namespace SmartCat\Client\Normalizer;

class ProjectWorkflowStageModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\ProjectWorkflowStageModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\ProjectWorkflowStageModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\ProjectWorkflowStageModel();
        if (isset($data['progress'])) {
            $object->setProgress($data['progress']);
        }
        if (isset($data['stageType'])) {
            $object->setStageType($data['stageType']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if (null !== $object->getStageType()) {
            $data['stageType'] = $object->getStageType();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\ProjectWorkflowStageModel::class => true,
        ];
    }
}