<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Model;

class ServiceSpecNetworksItem
{
    /**
     * @var string
     */
    protected $target;
    /**
     * @var string[]
     */
    protected $aliases;

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     *
     * @return self
     */
    public function setTarget($target = null)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     *
     * @return self
     */
    public function setAliases(array $aliases = null)
    {
        $this->aliases = $aliases;

        return $this;
    }
}
