<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class GraphDriverData
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $data;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string[] $data
     *
     * @return self
     */
    public function setData(\ArrayObject $data = null)
    {
        $this->data = $data;

        return $this;
    }
}
