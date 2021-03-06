<?php

namespace ACES\Common\Domain;

class TimeRecorder
{
    private $latest;
    private $timeout;

    /**
     * TimeRecorder constructor.
     *
     * @param int $timeout
     */
    public function __construct($timeout)
    {
        $now_ = new \DateTime();
        $now = $now_->getTimestamp();
        $this->latest = $now;
        $this->timeout = $timeout;
    }

    /**
     * @throws \Exception
     *
     * @return bool
     */
    public function timeout()
    {
//        $now = new \DateTime();
        $now_ = new \DateTime();
        $now = $now_->getTimestamp();
        if ($now - $this->latest >= $this->timeout) {
            $this->latest = $now;

            return true;
        }

        return false;
    }
}
