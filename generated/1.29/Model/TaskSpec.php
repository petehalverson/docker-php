<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class TaskSpec
{
    /**
     * @var TaskSpecContainerSpec
     */
    protected $containerSpec;
    /**
     * @var TaskSpecResources
     */
    protected $resources;
    /**
     * @var TaskSpecRestartPolicy
     */
    protected $restartPolicy;
    /**
     * @var TaskSpecPlacement
     */
    protected $placement;
    /**
     * @var int
     */
    protected $forceUpdate;
    /**
     * @var TaskSpecNetworksItem[]
     */
    protected $networks;
    /**
     * @var TaskSpecLogDriver
     */
    protected $logDriver;

    /**
     * @return TaskSpecContainerSpec
     */
    public function getContainerSpec()
    {
        return $this->containerSpec;
    }

    /**
     * @param TaskSpecContainerSpec $containerSpec
     *
     * @return self
     */
    public function setContainerSpec(TaskSpecContainerSpec $containerSpec = null)
    {
        $this->containerSpec = $containerSpec;

        return $this;
    }

    /**
     * @return TaskSpecResources
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param TaskSpecResources $resources
     *
     * @return self
     */
    public function setResources(TaskSpecResources $resources = null)
    {
        $this->resources = $resources;

        return $this;
    }

    /**
     * @return TaskSpecRestartPolicy
     */
    public function getRestartPolicy()
    {
        return $this->restartPolicy;
    }

    /**
     * @param TaskSpecRestartPolicy $restartPolicy
     *
     * @return self
     */
    public function setRestartPolicy(TaskSpecRestartPolicy $restartPolicy = null)
    {
        $this->restartPolicy = $restartPolicy;

        return $this;
    }

    /**
     * @return TaskSpecPlacement
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * @param TaskSpecPlacement $placement
     *
     * @return self
     */
    public function setPlacement(TaskSpecPlacement $placement = null)
    {
        $this->placement = $placement;

        return $this;
    }

    /**
     * @return int
     */
    public function getForceUpdate()
    {
        return $this->forceUpdate;
    }

    /**
     * @param int $forceUpdate
     *
     * @return self
     */
    public function setForceUpdate($forceUpdate = null)
    {
        $this->forceUpdate = $forceUpdate;

        return $this;
    }

    /**
     * @return TaskSpecNetworksItem[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * @param TaskSpecNetworksItem[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks = null)
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * @return TaskSpecLogDriver
     */
    public function getLogDriver()
    {
        return $this->logDriver;
    }

    /**
     * @param TaskSpecLogDriver $logDriver
     *
     * @return self
     */
    public function setLogDriver(TaskSpecLogDriver $logDriver = null)
    {
        $this->logDriver = $logDriver;

        return $this;
    }
}
