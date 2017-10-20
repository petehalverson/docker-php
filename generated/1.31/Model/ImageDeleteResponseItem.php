<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Model;

class ImageDeleteResponseItem
{
    /**
     * @var string
     */
    protected $untagged;
    /**
     * @var string
     */
    protected $deleted;

    /**
     * @return string
     */
    public function getUntagged()
    {
        return $this->untagged;
    }

    /**
     * @param string $untagged
     *
     * @return self
     */
    public function setUntagged($untagged = null)
    {
        $this->untagged = $untagged;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param string $deleted
     *
     * @return self
     */
    public function setDeleted($deleted = null)
    {
        $this->deleted = $deleted;

        return $this;
    }
}
