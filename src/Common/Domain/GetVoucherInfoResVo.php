<?php

namespace ACES\Common\Domain;

class GetVoucherInfoResVo
{
    private $voucher;

    /**
     * @return string
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * @param string|null $voucher
     */
    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;
    }
}
