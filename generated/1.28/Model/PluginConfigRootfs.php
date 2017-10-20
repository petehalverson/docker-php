<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_28\Model;

class PluginConfigRootfs
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string[]
     */
    protected $diffIds;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDiffIds()
    {
        return $this->diffIds;
    }

    /**
     * @param string[] $diffIds
     *
     * @return self
     */
    public function setDiffIds(array $diffIds = null)
    {
        $this->diffIds = $diffIds;

        return $this;
    }
}
