<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein
 * Date: 7/7/2019
 * Time: 2:44 PM
 */

namespace App\FormModels\Repository;


class ProductModel
{
    private $productId;
    private $productGuaranteeId;
    private $productGuaranteeName;
    private $productSupplierId;
    private $productSupplierName;
    private $productCurrentPrice;
    private $productDiscountPrice;
    private $productNewCurrentPrice;
    private $productNewDiscountPrice;
    private $productBasePrice;
    private $productTotalPrice;
    private $productSerial;
    private $productQuantity;
    private $productTypeId;
    private $productTypeName;
    private $productTypeMachineName;
    private $productColorName;
    private $productColorHex;
    private $productColorId;
    private $productItemId;
    private $productItemName;
    private $productDeedId;
    private $productPricingDeedId;
    private $productPricingDeedExpiryDate;
    private $productPricingDeedName;
    private $productCurrentShelveId;
    private $productCurrentShelveName;
    private $productCurrentInventoryId;
    private $productCurrentInventoryName;
    private $productCurrentQueueId;
    private $productCurrentQueueName;
    private $productIsDisabled = false;
    private $productCurrentPlace;
    private $productOfferGroupId;
    private $productPricingDeedItemId;
    private $productOrderId;
    private $productOrderItemId;
    private $productOrderItemCount;
    private $productMaxQuantity;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductGuaranteeId()
    {
        return $this->productGuaranteeId;
    }

    /**
     * @param mixed $productGuaranteeId
     */
    public function setProductGuaranteeId($productGuaranteeId): void
    {
        $this->productGuaranteeId = $productGuaranteeId;
    }

    /**
     * @return mixed
     */
    public function getProductGuaranteeName()
    {
        return $this->productGuaranteeName;
    }

    /**
     * @param mixed $productGuaranteeName
     */
    public function setProductGuaranteeName($productGuaranteeName): void
    {
        $this->productGuaranteeName = $productGuaranteeName;
    }

    /**
     * @return mixed
     */
    public function getProductSupplierId()
    {
        return $this->productSupplierId;
    }

    /**
     * @param mixed $productSupplierId
     */
    public function setProductSupplierId($productSupplierId): void
    {
        $this->productSupplierId = $productSupplierId;
    }

    /**
     * @return mixed
     */
    public function getProductSupplierName()
    {
        return $this->productSupplierName;
    }

    /**
     * @param mixed $productSupplierName
     */
    public function setProductSupplierName($productSupplierName): void
    {
        $this->productSupplierName = $productSupplierName;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentPrice()
    {
        return $this->productCurrentPrice;
    }

    /**
     * @param mixed $productCurrentPrice
     */
    public function setProductCurrentPrice($productCurrentPrice): void
    {
        $this->productCurrentPrice = $productCurrentPrice;
    }

    /**
     * @return mixed
     */
    public function getProductDiscountPrice()
    {
        return $this->productDiscountPrice;
    }

    /**
     * @param mixed $productDiscountPrice
     */
    public function setProductDiscountPrice($productDiscountPrice): void
    {
        $this->productDiscountPrice = $productDiscountPrice;
    }

    /**
     * @return mixed
     */
    public function getProductNewCurrentPrice()
    {
        return $this->productNewCurrentPrice;
    }

    /**
     * @param mixed $productNewCurrentPrice
     */
    public function setProductNewCurrentPrice($productNewCurrentPrice): void
    {
        $this->productNewCurrentPrice = $productNewCurrentPrice;
    }

    /**
     * @return mixed
     */
    public function getProductNewDiscountPrice()
    {
        return $this->productNewDiscountPrice;
    }

    /**
     * @param mixed $productNewDiscountPrice
     */
    public function setProductNewDiscountPrice($productNewDiscountPrice): void
    {
        $this->productNewDiscountPrice = $productNewDiscountPrice;
    }

    /**
     * @return mixed
     */
    public function getProductBasePrice()
    {
        return $this->productBasePrice;
    }

    /**
     * @param mixed $productBasePrice
     */
    public function setProductBasePrice($productBasePrice): void
    {
        $this->productBasePrice = $productBasePrice;
    }

    /**
     * @return mixed
     */
    public function getProductTotalPrice()
    {
        return $this->productTotalPrice;
    }

    /**
     * @param mixed $productTotalPrice
     */
    public function setProductTotalPrice($productTotalPrice): void
    {
        $this->productTotalPrice = $productTotalPrice;
    }

    /**
     * @return mixed
     */
    public function getProductSerial()
    {
        return $this->productSerial;
    }

    /**
     * @param mixed $productSerial
     */
    public function setProductSerial($productSerial): void
    {
        $this->productSerial = $productSerial;
    }

    /**
     * @return mixed
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * @param mixed $productQuantity
     */
    public function setProductQuantity($productQuantity): void
    {
        $this->productQuantity = $productQuantity;
    }

    /**
     * @return mixed
     */
    public function getProductTypeId()
    {
        return $this->productTypeId;
    }

    /**
     * @param mixed $productTypeId
     */
    public function setProductTypeId($productTypeId): void
    {
        $this->productTypeId = $productTypeId;
    }

    /**
     * @return mixed
     */
    public function getProductTypeName()
    {
        return $this->productTypeName;
    }

    /**
     * @param mixed $productTypeName
     */
    public function setProductTypeName($productTypeName): void
    {
        $this->productTypeName = $productTypeName;
    }

    /**
     * @return mixed
     */
    public function getProductTypeMachineName()
    {
        return $this->productTypeMachineName;
    }

    /**
     * @param mixed $productTypeMachineName
     */
    public function setProductTypeMachineName($productTypeMachineName): void
    {
        $this->productTypeMachineName = $productTypeMachineName;
    }

    /**
     * @return mixed
     */
    public function getProductColorName()
    {
        return $this->productColorName;
    }

    /**
     * @param mixed $productColorName
     */
    public function setProductColorName($productColorName): void
    {
        $this->productColorName = $productColorName;
    }

    /**
     * @return mixed
     */
    public function getProductColorHex()
    {
        return $this->productColorHex;
    }

    /**
     * @param mixed $productColorHex
     */
    public function setProductColorHex($productColorHex): void
    {
        $this->productColorHex = $productColorHex;
    }

    /**
     * @return mixed
     */
    public function getProductColorId()
    {
        return $this->productColorId;
    }

    /**
     * @param mixed $productColorId
     */
    public function setProductColorId($productColorId): void
    {
        $this->productColorId = $productColorId;
    }

    /**
     * @return mixed
     */
    public function getProductItemId()
    {
        return $this->productItemId;
    }

    /**
     * @param mixed $productItemId
     */
    public function setProductItemId($productItemId): void
    {
        $this->productItemId = $productItemId;
    }

    /**
     * @return mixed
     */
    public function getProductItemName()
    {
        return $this->productItemName;
    }

    /**
     * @param mixed $productItemName
     */
    public function setProductItemName($productItemName): void
    {
        $this->productItemName = $productItemName;
    }

    /**
     * @return mixed
     */
    public function getProductDeedId()
    {
        return $this->productDeedId;
    }

    /**
     * @param mixed $productDeedId
     */
    public function setProductDeedId($productDeedId): void
    {
        $this->productDeedId = $productDeedId;
    }

    /**
     * @return mixed
     */
    public function getProductPricingDeedId()
    {
        return $this->productPricingDeedId;
    }

    /**
     * @param mixed $productPricingDeedId
     */
    public function setProductPricingDeedId($productPricingDeedId): void
    {
        $this->productPricingDeedId = $productPricingDeedId;
    }

    /**
     * @return mixed
     */
    public function getProductPricingDeedExpiryDate()
    {
        return $this->productPricingDeedExpiryDate;
    }

    /**
     * @param mixed $productPricingDeedExpiryDate
     */
    public function setProductPricingDeedExpiryDate($productPricingDeedExpiryDate): void
    {
        $this->productPricingDeedExpiryDate = $productPricingDeedExpiryDate;
    }

    /**
     * @return mixed
     */
    public function getProductPricingDeedName()
    {
        return $this->productPricingDeedName;
    }

    /**
     * @param mixed $productPricingDeedName
     */
    public function setProductPricingDeedName($productPricingDeedName): void
    {
        $this->productPricingDeedName = $productPricingDeedName;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentShelveId()
    {
        return $this->productCurrentShelveId;
    }

    /**
     * @param mixed $productCurrentShelveId
     */
    public function setProductCurrentShelveId($productCurrentShelveId): void
    {
        $this->productCurrentShelveId = $productCurrentShelveId;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentShelveName()
    {
        return $this->productCurrentShelveName;
    }

    /**
     * @param mixed $productCurrentShelveName
     */
    public function setProductCurrentShelveName($productCurrentShelveName): void
    {
        $this->productCurrentShelveName = $productCurrentShelveName;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentInventoryId()
    {
        return $this->productCurrentInventoryId;
    }

    /**
     * @param mixed $productCurrentInventoryId
     */
    public function setProductCurrentInventoryId($productCurrentInventoryId): void
    {
        $this->productCurrentInventoryId = $productCurrentInventoryId;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentInventoryName()
    {
        return $this->productCurrentInventoryName;
    }

    /**
     * @param mixed $productCurrentInventoryName
     */
    public function setProductCurrentInventoryName($productCurrentInventoryName): void
    {
        $this->productCurrentInventoryName = $productCurrentInventoryName;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentQueueId()
    {
        return $this->productCurrentQueueId;
    }

    /**
     * @param mixed $productCurrentQueueId
     */
    public function setProductCurrentQueueId($productCurrentQueueId): void
    {
        $this->productCurrentQueueId = $productCurrentQueueId;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentQueueName()
    {
        return $this->productCurrentQueueName;
    }

    /**
     * @param mixed $productCurrentQueueName
     */
    public function setProductCurrentQueueName($productCurrentQueueName): void
    {
        $this->productCurrentQueueName = $productCurrentQueueName;
    }

    /**
     * @return mixed
     */
    public function getProductIsDisabled()
    {
        return $this->productIsDisabled;
    }

    /**
     * @param mixed $productIsDisabled
     */
    public function setProductIsDisabled($productIsDisabled): void
    {
        $this->productIsDisabled = $productIsDisabled;
    }

    /**
     * @return mixed
     */
    public function getProductCurrentPlace()
    {
        return $this->productCurrentPlace;
    }

    /**
     * @param mixed $productCurrentPlace
     */
    public function setProductCurrentPlace($productCurrentPlace): void
    {
        $this->productCurrentPlace = $productCurrentPlace;
    }

    /**
     * @return mixed
     */
    public function getProductOfferGroupId()
    {
        return $this->productOfferGroupId;
    }

    /**
     * @param mixed $productOfferGroupId
     */
    public function setProductOfferGroupId($productOfferGroupId): void
    {
        $this->productOfferGroupId = $productOfferGroupId;
    }

    /**
     * @return mixed
     */
    public function getProductPricingDeedItemId()
    {
        return $this->productPricingDeedItemId;
    }

    /**
     * @param mixed $productPricingDeedItemId
     */
    public function setProductPricingDeedItemId($productPricingDeedItemId): void
    {
        $this->productPricingDeedItemId = $productPricingDeedItemId;
    }

    /**
     * @return mixed
     */
    public function getProductOrderId()
    {
        return $this->productOrderId;
    }

    /**
     * @param mixed $productOrderId
     */
    public function setProductOrderId($productOrderId): void
    {
        $this->productOrderId = $productOrderId;
    }

    /**
     * @return mixed
     */
    public function getProductOrderItemId()
    {
        return $this->productOrderItemId;
    }

    /**
     * @param mixed $productOrderItemId
     */
    public function setProductOrderItemId($productOrderItemId): void
    {
        $this->productOrderItemId = $productOrderItemId;
    }

    /**
     * @return mixed
     */
    public function getProductOrderItemCount()
    {
        return $this->productOrderItemCount;
    }

    /**
     * @param mixed $productOrderItemCount
     */
    public function setProductOrderItemCount($productOrderItemCount): void
    {
        $this->productOrderItemCount = $productOrderItemCount;
    }

    /**
     * @return mixed
     */
    public function getProductMaxQuantity()
    {
        return $this->productMaxQuantity;
    }

    /**
     * @param mixed $productMaxQuantity
     */
    public function setProductMaxQuantity($productMaxQuantity): void
    {
        $this->productMaxQuantity = $productMaxQuantity;
    }


}