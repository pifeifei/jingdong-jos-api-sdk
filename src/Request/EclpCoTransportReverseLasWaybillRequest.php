<?php

namespace ACES\Request;

class EclpCoTransportReverseLasWaybillRequest extends AbstractRequest
{
    public function getApiMethodName()
    {
        return 'jingdong.eclp.co.transportReverseLasWaybill';
    }

    public function check()
    {
    }

    public function getDeptNo()
    {
        return $this->apiParas['deptNo'];
    }

    public function setDeptNo($deptNo)
    {
        $this->apiParas['deptNo'] = $deptNo;

        return $this;
    }

    public function getOrderNo()
    {
        return $this->apiParas['orderNo'];
    }

    public function setOrderNo($orderNo)
    {
        $this->apiParas['orderNo'] = $orderNo;

        return $this;
    }

    public function getSalePlatform()
    {
        return $this->apiParas['salePlatform'];
    }

    public function setSalePlatform($salePlatform)
    {
        $this->apiParas['salePlatform'] = $salePlatform;

        return $this;
    }

    public function getCustomerPin()
    {
        return $this->apiParas['customerPin'];
    }

    public function setCustomerPin($customerPin)
    {
        $this->apiParas['customerPin'] = $customerPin;

        return $this;
    }

    public function getAssociateSoNo()
    {
        return $this->apiParas['associateSoNo'];
    }

    public function setAssociateSoNo($associateSoNo)
    {
        $this->apiParas['associateSoNo'] = $associateSoNo;

        return $this;
    }

    public function getSenderName()
    {
        return $this->apiParas['senderName'];
    }

    public function setSenderName($senderName)
    {
        $this->apiParas['senderName'] = $senderName;

        return $this;
    }

    public function getSenderMobile()
    {
        return $this->apiParas['senderMobile'];
    }

    public function setSenderMobile($senderMobile)
    {
        $this->apiParas['senderMobile'] = $senderMobile;

        return $this;
    }

    public function getSenderPhone()
    {
        return $this->apiParas['senderPhone'];
    }

    public function setSenderPhone($senderPhone)
    {
        $this->apiParas['senderPhone'] = $senderPhone;

        return $this;
    }

    public function getSenderAddress()
    {
        return $this->apiParas['senderAddress'];
    }

    public function setSenderAddress($senderAddress)
    {
        $this->apiParas['senderAddress'] = $senderAddress;

        return $this;
    }

    public function getReceiverName()
    {
        return $this->apiParas['receiverName'];
    }

    public function setReceiverName($receiverName)
    {
        $this->apiParas['receiverName'] = $receiverName;

        return $this;
    }

    public function getReceiverMobile()
    {
        return $this->apiParas['receiverMobile'];
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->apiParas['receiverMobile'] = $receiverMobile;

        return $this;
    }

    public function getReceiverPhone()
    {
        return $this->apiParas['receiverPhone'];
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->apiParas['receiverPhone'] = $receiverPhone;

        return $this;
    }

    public function getReceiverAddress()
    {
        return $this->apiParas['receiverAddress'];
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->apiParas['receiverAddress'] = $receiverAddress;

        return $this;
    }

    public function getIsFragile()
    {
        return $this->apiParas['isFragile'];
    }

    public function setIsFragile($isFragile)
    {
        $this->apiParas['isFragile'] = $isFragile;

        return $this;
    }

    public function getPickupReturnReason()
    {
        return $this->apiParas['pickupReturnReason'];
    }

    public function setPickupReturnReason($pickupReturnReason)
    {
        $this->apiParas['pickupReturnReason'] = $pickupReturnReason;

        return $this;
    }

    public function getIsGuarantee()
    {
        return $this->apiParas['isGuarantee'];
    }

    public function setIsGuarantee($isGuarantee)
    {
        $this->apiParas['isGuarantee'] = $isGuarantee;

        return $this;
    }

    public function getGuaranteeValue()
    {
        return $this->apiParas['guaranteeValue'];
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->apiParas['guaranteeValue'] = $guaranteeValue;

        return $this;
    }

    public function getWeight()
    {
        return $this->apiParas['weight'];
    }

    public function setWeight($weight)
    {
        $this->apiParas['weight'] = $weight;

        return $this;
    }

    public function getLength()
    {
        return $this->apiParas['length'];
    }

    public function setLength($length)
    {
        $this->apiParas['length'] = $length;

        return $this;
    }

    public function getWidth()
    {
        return $this->apiParas['width'];
    }

    public function setWidth($width)
    {
        $this->apiParas['width'] = $width;

        return $this;
    }

    public function getHeight()
    {
        return $this->apiParas['height'];
    }

    public function setHeight($height)
    {
        $this->apiParas['height'] = $height;

        return $this;
    }

    public function getPackageName()
    {
        return $this->apiParas['packageName'];
    }

    public function setPackageName($packageName)
    {
        $this->apiParas['packageName'] = $packageName;

        return $this;
    }

    public function getPackageQty()
    {
        return $this->apiParas['packageQty'];
    }

    public function setPackageQty($packageQty)
    {
        $this->apiParas['packageQty'] = $packageQty;

        return $this;
    }

    public function getProductSku()
    {
        return $this->apiParas['productSku'];
    }

    public function setProductSku($productSku)
    {
        $this->apiParas['productSku'] = $productSku;

        return $this;
    }

    public function getLasDisassemble()
    {
        return $this->apiParas['lasDisassemble'];
    }

    public function setLasDisassemble($lasDisassemble)
    {
        $this->apiParas['lasDisassemble'] = $lasDisassemble;

        return $this;
    }

    public function getLasBale()
    {
        return $this->apiParas['lasBale'];
    }

    public function setLasBale($lasBale)
    {
        $this->apiParas['lasBale'] = $lasBale;

        return $this;
    }
}
