<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Model;

class SwarmSpecOrchestration
{
    /**
     * @var int
     */
    protected $taskHistoryRetentionLimit;

    /**
     * @return int
     */
    public function getTaskHistoryRetentionLimit()
    {
        return $this->taskHistoryRetentionLimit;
    }

    /**
     * @param int $taskHistoryRetentionLimit
     *
     * @return self
     */
    public function setTaskHistoryRetentionLimit($taskHistoryRetentionLimit = null)
    {
        $this->taskHistoryRetentionLimit = $taskHistoryRetentionLimit;

        return $this;
    }
}
