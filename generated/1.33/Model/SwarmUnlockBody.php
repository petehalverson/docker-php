<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Model;

class SwarmUnlockBody
{
    /**
     * @var string
     */
    protected $unlockKey;

    /**
     * @return string
     */
    public function getUnlockKey()
    {
        return $this->unlockKey;
    }

    /**
     * @param string $unlockKey
     *
     * @return self
     */
    public function setUnlockKey($unlockKey = null)
    {
        $this->unlockKey = $unlockKey;

        return $this;
    }
}
