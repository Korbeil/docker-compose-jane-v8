<?php

namespace JoliCode\Compose\Model;

class Service
{
    public function __construct(
        public Development1|null $develop,
        public Deployment1|null $deploy,
        /** @var mixed|string[] */
        public mixed|array $annotations,
        public bool $attach,
        public string|ServiceBuild $build,
        public ServiceBlkioConfig $blkioConfig,
        /** @var string[] */
        public array $capAdd,
        /** @var string[] */
        public array $capDrop,
        public ServiceCgroupEnum $cgroup,
        public string $cgroupParent,
        /** @var null|string|string[] */
        public null|string|array $command,
        /** @var string|ServiceConfigOrSecretItem2[] */
        public array $configs,
        public string $containerName,
        public int $cpuCount,
        public int $cpuPercent,
        public float|string $cpuShares,
        public float|string $cpuQuota,
        public float|string $cpuPeriod,
        public float|string $cpuRtPeriod,
        public float|string $cpuRtRuntime,
        public float|string $cpus,
        public string $cpuset,
        public ServiceCredentialSpec $credentialSpec,
        /** @var string[]|mixed */
        public array|mixed $dependsOn,
        /** @var string[] */
        public array $deviceCgroupRules,
        /** @var string[] */
        public array $devices,
        public string $dns,
        /** @var string[] */
        public array $dnsOpt,
        public string $dnsSearch,
        public string $domainname,
        /** @var null|string|string[] */
        public null|string|array $entrypoint,
        /** @var string|string|EnvFileItem1[] */
        public string|array $envFile,
        /** @var mixed|string[] */
        public mixed|array $environment,
        /** @var string|float[] */
        public array $expose,
        public string|ServiceExtends $extends,
        /** @var string[] */
        public array $externalLinks,
        /** @var mixed|string[] */
        public mixed|array $extraHosts,
        /** @var string|float[] */
        public array $groupAdd,
        public Healthcheck $healthcheck,
        public string $hostname,
        public string $image,
        public bool $init,
        public string $ipc,
        public string $isolation,
        /** @var mixed|string[] */
        public mixed|array $labels,
        /** @var string[] */
        public array $links,
        public ServiceLogging $logging,
        public string $macAddress,
        public float|string $memLimit,
        public string|int $memReservation,
        public int $memSwappiness,
        public float|string $memswapLimit,
        public string $networkMode,
        /** @var string[]|mixed */
        public array|mixed $networks,
        public bool $oomKillDisable,
        public int $oomScoreAdj,
        public string|null $pid,
        public float|string $pidsLimit,
        public string $platform,
        /** @var float|string|ServicePortsItem[] */
        public array $ports,
        public bool $privileged,
        /** @var string[] */
        public array $profiles,
        public ServicePullPolicyEnum $pullPolicy,
        public bool $readOnly,
        public string $restart,
        public string $runtime,
        public int $scale,
        /** @var string[] */
        public array $securityOpt,
        public float|string $shmSize,
        /** @var string|ServiceConfigOrSecretItem3[] */
        public array $secrets,
        /** @var mixed|string[] */
        public mixed|array $sysctls,
        public bool $stdinOpen,
        public string $stopGracePeriod,
        public string $stopSignal,
        /** @var array<string, mixed> */
        public array $storageOpt,
        public string $tmpfs,
        public bool $tty,
        public mixed $ulimits,
        public string $user,
        public string $uts,
        public string $usernsMode,
        /** @var string|ServiceVolumesItem[] */
        public array $volumes,
        /** @var string[] */
        public array $volumesFrom,
        public string $workingDir
    )
    {
    }
}