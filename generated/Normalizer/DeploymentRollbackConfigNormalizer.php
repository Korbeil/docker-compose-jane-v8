<?php

namespace JoliCode\Compose\Normalizer;

use JoliCode\Compose\Model\DeploymentRollbackConfig;
use AutoMapper\AutoMapperInterface;
use AutoMapper\AutoMapper;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
class DeploymentRollbackConfigNormalizer implements NormalizerInterface, DenormalizerInterface
{
    private readonly AutoMapperInterface $autoMapper;
    function __construct(AutoMapperInterface $autoMapper = null)
    {
        $this->autoMapper = $autoMapper ?? AutoMapper::create();
    }
    /**
     * @param DeploymentRollbackConfig $object
     *
     * @return array
     */
    function normalize(mixed $object, string $format = null, array $context = array()) : array|string|int|float|bool|\ArrayObject|null
    {
        /** @var array $output */
        $output = $this->autoMapper->map($object, 'array', $context);
        return $output;
    }
    function supportsNormalization(mixed $data, string $format = null, array $context = array()) : bool
    {
        return $data instanceof DeploymentRollbackConfig;
    }
    /**
     * @param array|object $data
     *
     * @return DeploymentRollbackConfig
     */
    function denormalize(mixed $data, string $type, string $format = null, array $context = array()) : mixed
    {
        /** @var class-string $class */
        $class = $type;
        /** @var DeploymentRollbackConfig $output */
        $output = $this->autoMapper->map($data, $class, $context);
        return $output;
    }
    function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = array()) : bool
    {
        return $type === DeploymentRollbackConfig::class;
    }
    /** @return array<class-string, bool> */
    function getSupportedTypes(?string $format) : array
    {
        return array(DeploymentRollbackConfig::class => true);
    }
}