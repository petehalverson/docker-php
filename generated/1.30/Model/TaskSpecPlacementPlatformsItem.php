<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_30\Model;

class TaskSpecPlacementPlatformsItem
{
    /**
     * @var string
     */
    protected $architecture;
    /**
     * @var string
     */
    protected $oS;

    /**
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * @param string $architecture
     *
     * @return self
     */
    public function setArchitecture($architecture = null)
    {
        $this->architecture = $architecture;

        return $this;
    }

    /**
     * @return string
     */
    public function getOS()
    {
        return $this->oS;
    }

    /**
     * @param string $oS
     *
     * @return self
     */
    public function setOS($oS = null)
    {
        $this->oS = $oS;

        return $this;
    }
}
