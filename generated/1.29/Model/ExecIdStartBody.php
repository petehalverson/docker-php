<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_29\Model;

class ExecIdStartBody
{
    /**
     * @var bool
     */
    protected $detach;
    /**
     * @var bool
     */
    protected $tty;

    /**
     * @return bool
     */
    public function getDetach()
    {
        return $this->detach;
    }

    /**
     * @param bool $detach
     *
     * @return self
     */
    public function setDetach($detach = null)
    {
        $this->detach = $detach;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTty()
    {
        return $this->tty;
    }

    /**
     * @param bool $tty
     *
     * @return self
     */
    public function setTty($tty = null)
    {
        $this->tty = $tty;

        return $this;
    }
}
