<?php

namespace ACES\Request;


class EclpCoTransportReverseLasWaybillRequest
{
    private $apiParas = array();
    private $version;
    private $deptNo;
    private $orderNo;
    private $salePlatform;
    private $customerPin;
    private $associateSoNo;
    private $senderName;
    private $senderMobile;
    private $senderPhone;
    private $senderAddress;
    private $receiverName;
    private $receiverMobile;
    private $receiverPhone;
    private $receiverAddress;
    private $isFragile;
    private $pickupReturnReason;
    private $isGuarantee;
    private $guaranteeValue;
    private $weight;
    private $length;
    private $width;
    private $height;
    private $packageName;
    private $packageQty;
    private $productSku;
    private $lasDisassemble;
    private $lasBale;

    public function getApiMethodName()
    {
        return "jingdong.eclp.co.transportReverseLasWaybill";
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return "{}";
        }
        return json_encode($this->apiParas);
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

    public function setDeptNo($deptNo)
    {
        $this->deptNo = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getSalePlatform()
    {
        return $this->salePlatform;
    }

    public function setSalePlatform($salePlatform)
    {
        $this->salePlatform = $salePlatform;
        $this->apiParas["salePlatform"] = $salePlatform;
    }

    public function getCustomerPin()
    {
        return $this->customerPin;
    }

    public function setCustomerPin($customerPin)
    {
        $this->customerPin = $customerPin;
        $this->apiParas["customerPin"] = $customerPin;
    }

    public function getAssociateSoNo()
    {
        return $this->associateSoNo;
    }

    public function setAssociateSoNo($associateSoNo)
    {
        $this->associateSoNo = $associateSoNo;
        $this->apiParas["associateSoNo"] = $associateSoNo;
    }

    public function getSenderName()
    {
        return $this->senderName;
    }

    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
        $this->apiParas["senderName"] = $senderName;
    }

    public function getSenderMobile()
    {
        return $this->senderMobile;
    }

    public function setSenderMobile($senderMobile)
    {
        $this->senderMobile = $senderMobile;
        $this->apiParas["senderMobile"] = $senderMobile;
    }

    public function getSenderPhone()
    {
        return $this->senderPhone;
    }

    public function setSenderPhone($senderPhone)
    {
        $this->senderPhone = $senderPhone;
        $this->apiParas["senderPhone"] = $senderPhone;
    }

    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        $this->apiParas["senderAddress"] = $senderAddress;
    }

    public function getReceiverName()
    {
        return $this->receiverName;
    }

    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
        $this->apiParas["receiverName"] = $receiverName;
    }

    public function getReceiverMobile()
    {
        return $this->receiverMobile;
    }

    public function setReceiverMobile($receiverMobile)
    {
        $this->receiverMobile = $receiverMobile;
        $this->apiParas["receiverMobile"] = $receiverMobile;
    }

    public function getReceiverPhone()
    {
        return $this->receiverPhone;
    }

    public function setReceiverPhone($receiverPhone)
    {
        $this->receiverPhone = $receiverPhone;
        $this->apiParas["receiverPhone"] = $receiverPhone;
    }

    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        $this->apiParas["receiverAddress"] = $receiverAddress;
    }

    public function getIsFragile()
    {
        return $this->isFragile;
    }

    public function setIsFragile($isFragile)
    {
        $this->isFragile = $isFragile;
        $this->apiParas["isFragile"] = $isFragile;
    }

    public function getPickupReturnReason()
    {
        return $this->pickupReturnReason;
    }

    public function setPickupReturnReason($pickupReturnReason)
    {
        $this->pickupReturnReason = $pickupReturnReason;
        $this->apiParas["pickupReturnReason"] = $pickupReturnReason;
    }

    public function getIsGuarantee()
    {
        return $this->isGuarantee;
    }

    public function setIsGuarantee($isGuarantee)
    {
        $this->isGuarantee = $isGuarantee;
        $this->apiParas["isGuarantee"] = $isGuarantee;
    }

    public function getGuaranteeValue()
    {
        return $this->guaranteeValue;
    }

    public function setGuaranteeValue($guaranteeValue)
    {
        $this->guaranteeValue = $guaranteeValue;
        $this->apiParas["guaranteeValue"] = $guaranteeValue;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
        $this->apiParas["length"] = $length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
        $this->apiParas["width"] = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        $this->apiParas["height"] = $height;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }

    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
        $this->apiParas["packageName"] = $packageName;
    }

    public function getPackageQty()
    {
        return $this->packageQty;
    }

    public function setPackageQty($packageQty)
    {
        $this->packageQty = $packageQty;
        $this->apiParas["packageQty"] = $packageQty;
    }

    public function getProductSku()
    {
        return $this->productSku;
    }

    public function setProductSku($productSku)
    {
        $this->productSku = $productSku;
        $this->apiParas["productSku"] = $productSku;
    }

    public function getLasDisassemble()
    {
        return $this->lasDisassemble;
    }

    public function setLasDisassemble($lasDisassemble)
    {
        $this->lasDisassemble = $lasDisassemble;
        $this->apiParas["lasDisassemble"] = $lasDisassemble;
    }

    public function getLasBale()
    {
        return $this->lasBale;
    }

    public function setLasBale($lasBale)
    {
        $this->lasBale = $lasBale;
        $this->apiParas["lasBale"] = $lasBale;
    }
}
