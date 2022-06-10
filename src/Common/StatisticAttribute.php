<?php

namespace ACES\Common;

class StatisticAttribute extends BasicAttribute
{
    public $enccnt;
    public $deccnt;
    public $encerrcnt;
    public $decerrcnt;
    public $signcnt;
    public $verifycnt;
    public $signerrcnt;
    public $verifyerrcnt;

    public function __construct($type, $level, $service, $tid, $stat)
    {
        parent::__construct($type, $level, $service, $tid);
        $this->enccnt = null === $stat ? '0' : $stat[0];
        $this->deccnt = null === $stat ? '0' : $stat[1];
        $this->encerrcnt = null === $stat ? '0' : $stat[2];
        $this->decerrcnt = null === $stat ? '0' : $stat[3];
        $this->signcnt = null === $stat ? '0' : $stat[4];
        $this->verifycnt = null === $stat ? '0' : $stat[5];
        $this->signerrcnt = null === $stat ? '0' : $stat[6];
        $this->verifyerrcnt = null === $stat ? '0' : $stat[7];
    }
}
