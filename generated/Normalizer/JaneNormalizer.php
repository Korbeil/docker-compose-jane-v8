<?php

namespace JoliCode\Compose\Normalizer;

use AutoMapper\AutoMapperInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use JoliCode\Compose\Model\DevelopmentWatchItem;
use JoliCode\Compose\Model\Development;
use JoliCode\Compose\Model\DeploymentRollbackConfig;
use JoliCode\Compose\Model\DeploymentUpdateConfig;
use JoliCode\Compose\Model\DeploymentResourcesLimits;
use JoliCode\Compose\Model\DeploymentResourcesReservations;
use JoliCode\Compose\Model\DeploymentResources;
use JoliCode\Compose\Model\DeploymentRestartPolicy;
use JoliCode\Compose\Model\DeploymentPlacementPreferencesItem;
use JoliCode\Compose\Model\DeploymentPlacement;
use JoliCode\Compose\Model\Deployment;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem;
use JoliCode\Compose\Model\BlkioLimit;
use JoliCode\Compose\Model\BlkioWeight;
use JoliCode\Compose\Model\EnvFileItem;
use JoliCode\Compose\Model\Healthcheck;
use JoliCode\Compose\Model\Development1;
use JoliCode\Compose\Model\DeploymentRollbackConfig1;
use JoliCode\Compose\Model\DeploymentUpdateConfig1;
use JoliCode\Compose\Model\DeploymentRestartPolicy1;
use JoliCode\Compose\Model\Deployment1;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem1;
use JoliCode\Compose\Model\Ulimits;
use JoliCode\Compose\Model\ServiceBuild;
use JoliCode\Compose\Model\BlkioLimit1;
use JoliCode\Compose\Model\BlkioLimit2;
use JoliCode\Compose\Model\BlkioLimit3;
use JoliCode\Compose\Model\BlkioLimit4;
use JoliCode\Compose\Model\BlkioWeight1;
use JoliCode\Compose\Model\ServiceBlkioConfig;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem2;
use JoliCode\Compose\Model\ServiceCredentialSpec;
use JoliCode\Compose\Model\ServiceDependsOn;
use JoliCode\Compose\Model\EnvFileItem1;
use JoliCode\Compose\Model\ServiceExtends;
use JoliCode\Compose\Model\ServiceLogging;
use JoliCode\Compose\Model\ServiceNetworks;
use JoliCode\Compose\Model\ServicePortsItem;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem3;
use JoliCode\Compose\Model\ServiceVolumesItemBind;
use JoliCode\Compose\Model\ServiceVolumesItemVolume;
use JoliCode\Compose\Model\ServiceVolumesItemTmpfs;
use JoliCode\Compose\Model\ServiceVolumesItem;
use JoliCode\Compose\Model\Service;
use JoliCode\Compose\Model\GenericResourcesItemDiscreteResourceSpec;
use JoliCode\Compose\Model\GenericResourcesItem;
use JoliCode\Compose\Model\DevicesItem;
use JoliCode\Compose\Model\_Include;
use JoliCode\Compose\Model\NetworkIpamConfigItem;
use JoliCode\Compose\Model\NetworkIpam;
use JoliCode\Compose\Model\NetworkExternal;
use JoliCode\Compose\Model\Network;
use JoliCode\Compose\Model\VolumeExternal;
use JoliCode\Compose\Model\Volume;
use JoliCode\Compose\Model\SecretExternal;
use JoliCode\Compose\Model\Secret;
use JoliCode\Compose\Model\ConfigExternal;
use JoliCode\Compose\Model\Config;
use JoliCode\Compose\Model\_Include1;
use JoliCode\Compose\Model\Development2;
use JoliCode\Compose\Model\DeploymentRollbackConfig2;
use JoliCode\Compose\Model\DeploymentUpdateConfig2;
use JoliCode\Compose\Model\DeploymentRestartPolicy2;
use JoliCode\Compose\Model\Deployment2;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem4;
use JoliCode\Compose\Model\ServiceBuild1;
use JoliCode\Compose\Model\BlkioLimit5;
use JoliCode\Compose\Model\BlkioLimit6;
use JoliCode\Compose\Model\BlkioLimit7;
use JoliCode\Compose\Model\BlkioLimit8;
use JoliCode\Compose\Model\BlkioWeight2;
use JoliCode\Compose\Model\ServiceBlkioConfig1;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem5;
use JoliCode\Compose\Model\ServiceCredentialSpec1;
use JoliCode\Compose\Model\ServiceDependsOn1;
use JoliCode\Compose\Model\EnvFileItem2;
use JoliCode\Compose\Model\ServiceExtends1;
use JoliCode\Compose\Model\ServiceLogging1;
use JoliCode\Compose\Model\ServiceNetworks1;
use JoliCode\Compose\Model\ServicePortsItem1;
use JoliCode\Compose\Model\ServiceConfigOrSecretItem6;
use JoliCode\Compose\Model\ServiceVolumesItemBind1;
use JoliCode\Compose\Model\ServiceVolumesItemVolume1;
use JoliCode\Compose\Model\ServiceVolumesItemTmpfs1;
use JoliCode\Compose\Model\ServiceVolumesItem1;
use JoliCode\Compose\Model\Service1;
use JoliCode\Compose\Model\NetworkIpamConfigItem1;
use JoliCode\Compose\Model\NetworkIpam1;
use JoliCode\Compose\Model\NetworkExternal1;
use JoliCode\Compose\Model\Network1;
use JoliCode\Compose\Model\VolumeExternal1;
use JoliCode\Compose\Model\Volume1;
use JoliCode\Compose\Model\SecretExternal1;
use JoliCode\Compose\Model\Secret1;
use JoliCode\Compose\Model\ConfigExternal1;
use JoliCode\Compose\Model\Config1;
use JoliCode\Compose\Model\Compose;
class JaneNormalizer implements NormalizerInterface, DenormalizerInterface
{
    const MODELS = array(DevelopmentWatchItem::class => false, Development::class => false, DeploymentRollbackConfig::class => false, DeploymentUpdateConfig::class => false, DeploymentResourcesLimits::class => false, DeploymentResourcesReservations::class => false, DeploymentResources::class => false, DeploymentRestartPolicy::class => false, DeploymentPlacementPreferencesItem::class => false, DeploymentPlacement::class => false, Deployment::class => false, ServiceConfigOrSecretItem::class => false, BlkioLimit::class => false, BlkioWeight::class => false, EnvFileItem::class => false, Healthcheck::class => false, Development1::class => false, DeploymentRollbackConfig1::class => false, DeploymentUpdateConfig1::class => false, DeploymentRestartPolicy1::class => false, Deployment1::class => false, ServiceConfigOrSecretItem1::class => false, Ulimits::class => false, ServiceBuild::class => false, BlkioLimit1::class => false, BlkioLimit2::class => false, BlkioLimit3::class => false, BlkioLimit4::class => false, BlkioWeight1::class => false, ServiceBlkioConfig::class => false, ServiceConfigOrSecretItem2::class => false, ServiceCredentialSpec::class => false, ServiceDependsOn::class => false, EnvFileItem1::class => false, ServiceExtends::class => false, ServiceLogging::class => false, ServiceNetworks::class => false, ServicePortsItem::class => false, ServiceConfigOrSecretItem3::class => false, ServiceVolumesItemBind::class => false, ServiceVolumesItemVolume::class => false, ServiceVolumesItemTmpfs::class => false, ServiceVolumesItem::class => false, Service::class => false, GenericResourcesItemDiscreteResourceSpec::class => false, GenericResourcesItem::class => false, DevicesItem::class => false, _Include::class => false, NetworkIpamConfigItem::class => false, NetworkIpam::class => false, NetworkExternal::class => false, Network::class => false, VolumeExternal::class => false, Volume::class => false, SecretExternal::class => false, Secret::class => false, ConfigExternal::class => false, Config::class => false, _Include1::class => false, Development2::class => false, DeploymentRollbackConfig2::class => false, DeploymentUpdateConfig2::class => false, DeploymentRestartPolicy2::class => false, Deployment2::class => false, ServiceConfigOrSecretItem4::class => false, ServiceBuild1::class => false, BlkioLimit5::class => false, BlkioLimit6::class => false, BlkioLimit7::class => false, BlkioLimit8::class => false, BlkioWeight2::class => false, ServiceBlkioConfig1::class => false, ServiceConfigOrSecretItem5::class => false, ServiceCredentialSpec1::class => false, ServiceDependsOn1::class => false, EnvFileItem2::class => false, ServiceExtends1::class => false, ServiceLogging1::class => false, ServiceNetworks1::class => false, ServicePortsItem1::class => false, ServiceConfigOrSecretItem6::class => false, ServiceVolumesItemBind1::class => false, ServiceVolumesItemVolume1::class => false, ServiceVolumesItemTmpfs1::class => false, ServiceVolumesItem1::class => false, Service1::class => false, NetworkIpamConfigItem1::class => false, NetworkIpam1::class => false, NetworkExternal1::class => false, Network1::class => false, VolumeExternal1::class => false, Volume1::class => false, SecretExternal1::class => false, Secret1::class => false, ConfigExternal1::class => false, Config1::class => false, Compose::class => false);
    const NORMALIZERS = array(DevelopmentWatchItem::class => DevelopmentWatchItemNormalizer::class, Development::class => DevelopmentNormalizer::class, DeploymentRollbackConfig::class => DeploymentRollbackConfigNormalizer::class, DeploymentUpdateConfig::class => DeploymentUpdateConfigNormalizer::class, DeploymentResourcesLimits::class => DeploymentResourcesLimitsNormalizer::class, DeploymentResourcesReservations::class => DeploymentResourcesReservationsNormalizer::class, DeploymentResources::class => DeploymentResourcesNormalizer::class, DeploymentRestartPolicy::class => DeploymentRestartPolicyNormalizer::class, DeploymentPlacementPreferencesItem::class => DeploymentPlacementPreferencesItemNormalizer::class, DeploymentPlacement::class => DeploymentPlacementNormalizer::class, Deployment::class => DeploymentNormalizer::class, ServiceConfigOrSecretItem::class => ServiceConfigOrSecretItemNormalizer::class, BlkioLimit::class => BlkioLimitNormalizer::class, BlkioWeight::class => BlkioWeightNormalizer::class, EnvFileItem::class => EnvFileItemNormalizer::class, Healthcheck::class => HealthcheckNormalizer::class, Development1::class => Development1Normalizer::class, DeploymentRollbackConfig1::class => DeploymentRollbackConfig1Normalizer::class, DeploymentUpdateConfig1::class => DeploymentUpdateConfig1Normalizer::class, DeploymentRestartPolicy1::class => DeploymentRestartPolicy1Normalizer::class, Deployment1::class => Deployment1Normalizer::class, ServiceConfigOrSecretItem1::class => ServiceConfigOrSecretItem1Normalizer::class, Ulimits::class => UlimitsNormalizer::class, ServiceBuild::class => ServiceBuildNormalizer::class, BlkioLimit1::class => BlkioLimit1Normalizer::class, BlkioLimit2::class => BlkioLimit2Normalizer::class, BlkioLimit3::class => BlkioLimit3Normalizer::class, BlkioLimit4::class => BlkioLimit4Normalizer::class, BlkioWeight1::class => BlkioWeight1Normalizer::class, ServiceBlkioConfig::class => ServiceBlkioConfigNormalizer::class, ServiceConfigOrSecretItem2::class => ServiceConfigOrSecretItem2Normalizer::class, ServiceCredentialSpec::class => ServiceCredentialSpecNormalizer::class, ServiceDependsOn::class => ServiceDependsOnNormalizer::class, EnvFileItem1::class => EnvFileItem1Normalizer::class, ServiceExtends::class => ServiceExtendsNormalizer::class, ServiceLogging::class => ServiceLoggingNormalizer::class, ServiceNetworks::class => ServiceNetworksNormalizer::class, ServicePortsItem::class => ServicePortsItemNormalizer::class, ServiceConfigOrSecretItem3::class => ServiceConfigOrSecretItem3Normalizer::class, ServiceVolumesItemBind::class => ServiceVolumesItemBindNormalizer::class, ServiceVolumesItemVolume::class => ServiceVolumesItemVolumeNormalizer::class, ServiceVolumesItemTmpfs::class => ServiceVolumesItemTmpfsNormalizer::class, ServiceVolumesItem::class => ServiceVolumesItemNormalizer::class, Service::class => ServiceNormalizer::class, GenericResourcesItemDiscreteResourceSpec::class => GenericResourcesItemDiscreteResourceSpecNormalizer::class, GenericResourcesItem::class => GenericResourcesItemNormalizer::class, DevicesItem::class => DevicesItemNormalizer::class, _Include::class => _IncludeNormalizer::class, NetworkIpamConfigItem::class => NetworkIpamConfigItemNormalizer::class, NetworkIpam::class => NetworkIpamNormalizer::class, NetworkExternal::class => NetworkExternalNormalizer::class, Network::class => NetworkNormalizer::class, VolumeExternal::class => VolumeExternalNormalizer::class, Volume::class => VolumeNormalizer::class, SecretExternal::class => SecretExternalNormalizer::class, Secret::class => SecretNormalizer::class, ConfigExternal::class => ConfigExternalNormalizer::class, Config::class => ConfigNormalizer::class, _Include1::class => _Include1Normalizer::class, Development2::class => Development2Normalizer::class, DeploymentRollbackConfig2::class => DeploymentRollbackConfig2Normalizer::class, DeploymentUpdateConfig2::class => DeploymentUpdateConfig2Normalizer::class, DeploymentRestartPolicy2::class => DeploymentRestartPolicy2Normalizer::class, Deployment2::class => Deployment2Normalizer::class, ServiceConfigOrSecretItem4::class => ServiceConfigOrSecretItem4Normalizer::class, ServiceBuild1::class => ServiceBuild1Normalizer::class, BlkioLimit5::class => BlkioLimit5Normalizer::class, BlkioLimit6::class => BlkioLimit6Normalizer::class, BlkioLimit7::class => BlkioLimit7Normalizer::class, BlkioLimit8::class => BlkioLimit8Normalizer::class, BlkioWeight2::class => BlkioWeight2Normalizer::class, ServiceBlkioConfig1::class => ServiceBlkioConfig1Normalizer::class, ServiceConfigOrSecretItem5::class => ServiceConfigOrSecretItem5Normalizer::class, ServiceCredentialSpec1::class => ServiceCredentialSpec1Normalizer::class, ServiceDependsOn1::class => ServiceDependsOn1Normalizer::class, EnvFileItem2::class => EnvFileItem2Normalizer::class, ServiceExtends1::class => ServiceExtends1Normalizer::class, ServiceLogging1::class => ServiceLogging1Normalizer::class, ServiceNetworks1::class => ServiceNetworks1Normalizer::class, ServicePortsItem1::class => ServicePortsItem1Normalizer::class, ServiceConfigOrSecretItem6::class => ServiceConfigOrSecretItem6Normalizer::class, ServiceVolumesItemBind1::class => ServiceVolumesItemBind1Normalizer::class, ServiceVolumesItemVolume1::class => ServiceVolumesItemVolume1Normalizer::class, ServiceVolumesItemTmpfs1::class => ServiceVolumesItemTmpfs1Normalizer::class, ServiceVolumesItem1::class => ServiceVolumesItem1Normalizer::class, Service1::class => Service1Normalizer::class, NetworkIpamConfigItem1::class => NetworkIpamConfigItem1Normalizer::class, NetworkIpam1::class => NetworkIpam1Normalizer::class, NetworkExternal1::class => NetworkExternal1Normalizer::class, Network1::class => Network1Normalizer::class, VolumeExternal1::class => VolumeExternal1Normalizer::class, Volume1::class => Volume1Normalizer::class, SecretExternal1::class => SecretExternal1Normalizer::class, Secret1::class => Secret1Normalizer::class, ConfigExternal1::class => ConfigExternal1Normalizer::class, Config1::class => Config1Normalizer::class, Compose::class => ComposeNormalizer::class);
    private readonly ?AutoMapperInterface $autoMapper;
    /** @var (NormalizerInterface&DenormalizerInterface)[] */
    public array $normalizersCache = array();
    function __construct(AutoMapperInterface $autoMapper = null)
    {
        $this->autoMapper = $autoMapper;
    }
    /**
    * @param object $object
    *
    * @return array
    */
    function normalize(mixed $object, string $format = null, array $context = array()) : array|string|int|float|bool|\ArrayObject|null
    {
        return $this->getNormalizer($object::class)->normalize($object, $format, $context);
    }
    /**
    * @param object $data
    *
    * @return bool
    */
    function supportsNormalization(mixed $data, string $format = null, array $context = array()) : bool
    {
        return \in_array($data::class, array_keys(static::MODELS), true);
    }
    /**
    * @param array|object $data
    *
    * @return object
    */
    function denormalize(mixed $data, string $type, string $format = null, array $context = array()) : mixed
    {
        return $this->getNormalizer($type)->denormalize($data, $type, $format, $context);
    }
    /** @return bool */
    function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = array()) : bool
    {
        return \in_array($type, array_keys(static::MODELS), true);
    }
    /** @return array<class-string, bool> */
    function getSupportedTypes(?string $format) : array
    {
        return static::MODELS;
    }
    function getNormalizer(string $normalizer) : NormalizerInterface&DenormalizerInterface
    {
        if (!\array_key_exists($normalizer, $this->normalizersCache)) {
            $normalizerClass = static::NORMALIZERS[$normalizer];
            /** @var NormalizerInterface&DenormalizerInterface $instance */
            $instance = new $normalizerClass($this->autoMapper);
            $this->normalizersCache[$normalizer] = $instance;
        }
        return $this->normalizersCache[$normalizer];
    }
}