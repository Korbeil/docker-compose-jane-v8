<?php

namespace JoliCode\Compose\Normalizer;

use JoliCode\Compose\Model\ServiceVolumesItem1;
use AutoMapper\AutoMapperInterface;
use AutoMapper\AutoMapper;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
class ServiceVolumesItem1Normalizer implements NormalizerInterface, DenormalizerInterface
{
    private readonly AutoMapperInterface $autoMapper;
    function __construct(AutoMapperInterface $autoMapper = null)
    {
        $this->autoMapper = $autoMapper ?? AutoMapper::create();
    }
    /**
     * @param ServiceVolumesItem1 $object
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
        return $data instanceof ServiceVolumesItem1;
    }
    /**
     * @param array|object $data
     *
     * @return ServiceVolumesItem1
     */
    function denormalize(mixed $data, string $type, string $format = null, array $context = array()) : mixed
    {
        /** @var class-string $class */
        $class = $type;
        /** @var ServiceVolumesItem1 $output */
        $output = $this->autoMapper->map($data, $class, $context);
        return $output;
    }
    function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = array()) : bool
    {
        return $type === ServiceVolumesItem1::class;
    }
    /** @return array<class-string, bool> */
    function getSupportedTypes(?string $format) : array
    {
        return array(ServiceVolumesItem1::class => true);
    }
}