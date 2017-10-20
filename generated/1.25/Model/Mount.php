<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Model;

class Mount
{
    /**
     * @var string
     */
    protected $target;
    /**
     * @var mixed
     */
    protected $source;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @var MountBindOptions
     */
    protected $bindOptions;
    /**
     * @var MountVolumeOptions
     */
    protected $volumeOptions;
    /**
     * @var MountTmpfsOptions
     */
    protected $tmpfsOptions;

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
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     *
     * @return self
     */
    public function setSource($source = null)
    {
        $this->source = $source;

        return $this;
    }

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
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly($readOnly = null)
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return MountBindOptions
     */
    public function getBindOptions()
    {
        return $this->bindOptions;
    }

    /**
     * @param MountBindOptions $bindOptions
     *
     * @return self
     */
    public function setBindOptions(MountBindOptions $bindOptions = null)
    {
        $this->bindOptions = $bindOptions;

        return $this;
    }

    /**
     * @return MountVolumeOptions
     */
    public function getVolumeOptions()
    {
        return $this->volumeOptions;
    }

    /**
     * @param MountVolumeOptions $volumeOptions
     *
     * @return self
     */
    public function setVolumeOptions(MountVolumeOptions $volumeOptions = null)
    {
        $this->volumeOptions = $volumeOptions;

        return $this;
    }

    /**
     * @return MountTmpfsOptions
     */
    public function getTmpfsOptions()
    {
        return $this->tmpfsOptions;
    }

    /**
     * @param MountTmpfsOptions $tmpfsOptions
     *
     * @return self
     */
    public function setTmpfsOptions(MountTmpfsOptions $tmpfsOptions = null)
    {
        $this->tmpfsOptions = $tmpfsOptions;

        return $this;
    }
}
