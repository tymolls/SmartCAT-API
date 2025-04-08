<?php

namespace SmartCat\Client\Normalizer;

class AssignExecutivesRequestModelNormalizer extends AbstractNormalizer
{
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        if ($type !== 'SmartCat\\Client\\Model\\AssignExecutivesRequestModel') {
            return false;
        }
        return true;
    }

    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        if ($data instanceof \SmartCat\Client\Model\AssignExecutivesRequestModel) {
            return true;
        }
        return false;
    }

    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \SmartCat\Client\Model\AssignExecutivesRequestModel();
        if (isset($data['executives'])) {
            $values = array();
            foreach ($data['executives'] as $value) {
                $values[] = $this->serializer->deserialize(json_encode($value), 'SmartCat\\Client\\Model\\Executive', 'json', $context);
            }
            $object->setExecutives($values);
        }
        if (isset($data['minWordsCountForExecutive'])) {
            $object->setMinWordsCountForExecutive($data['minWordsCountForExecutive']);
        }
        if (isset($data['assignmentMode'])) {
            $object->setAssignmentMode($data['assignmentMode']);
        }
        return $object;
    }

    public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $data = [];
        if (null !== $object->getExecutives()) {
            $values = array();
            foreach ($object->getExecutives() as $value) {
                $values[] = $this->serializer->serialize($value, 'raw', $context);
            }
            $data['executives'] = $values;
        }
        if (null !== $object->getMinWordsCountForExecutive()) {
            $data['minWordsCountForExecutive'] = $object->getMinWordsCountForExecutive();
        }
        if (null !== $object->getAssignmentMode()) {
            $data['assignmentMode'] = $object->getAssignmentMode();
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [
            \SmartCat\Client\Model\AssignExecutivesRequestModel::class => true,
        ];
    }
}