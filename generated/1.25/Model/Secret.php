<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Model;

class Secret
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var SecretVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var ServiceSpec
     */
    protected $spec;

    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return SecretVersion
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param SecretVersion $version
     *
     * @return self
     */
    public function setVersion(SecretVersion $version = null)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return ServiceSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * @param ServiceSpec $spec
     *
     * @return self
     */
    public function setSpec(ServiceSpec $spec = null)
    {
        $this->spec = $spec;

        return $this;
    }
}
