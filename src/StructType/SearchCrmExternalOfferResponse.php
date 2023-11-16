<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCrmExternalOfferResponse StructType
 * @subpackage Structs
 */
class SearchCrmExternalOfferResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmExternalOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmExternalOffer
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[]
     */
    protected array $MidocoCrmExternalOffer = [];
    /**
     * Constructor method for SearchCrmExternalOfferResponse
     * @uses SearchCrmExternalOfferResponse::setMidocoCrmExternalOffer()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     */
    public function __construct(array $midocoCrmExternalOffer = [])
    {
        $this
            ->setMidocoCrmExternalOffer($midocoCrmExternalOffer);
    }
    /**
     * Get MidocoCrmExternalOffer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[]
     */
    public function getMidocoCrmExternalOffer(): array
    {
        return $this->MidocoCrmExternalOffer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmExternalOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmExternalOffer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmExternalOfferForArrayConstraintsFromSetMidocoCrmExternalOffer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) {
            // validation for constraint: itemType
            if (!$searchCrmExternalOfferResponseMidocoCrmExternalOfferItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer) {
                $invalidValues[] = is_object($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) ? get_class($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) : sprintf('%s(%s)', gettype($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem), var_export($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferResponse
     */
    public function setMidocoCrmExternalOffer(array $midocoCrmExternalOffer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmExternalOfferArrayErrorMessage = self::validateMidocoCrmExternalOfferForArrayConstraintsFromSetMidocoCrmExternalOffer($midocoCrmExternalOffer))) {
            throw new InvalidArgumentException($midocoCrmExternalOfferArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmExternalOffer = $midocoCrmExternalOffer;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\SearchCrmExternalOfferResponse
     */
    public function addToMidocoCrmExternalOffer(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmExternalOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmExternalOffer[] = $item;
        
        return $this;
    }
}
