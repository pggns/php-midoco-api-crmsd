<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSimilarAddressResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getSimilarAddress --- select a list of similar addresses according to phonetic match, see activity diagram check_address, consider only validated entries by option
 * @subpackage Structs
 */
class GetSimilarAddressResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    protected array $MidocoCrmAddress = [];
    /**
     * Constructor method for GetSimilarAddressResponse
     * @uses GetSimilarAddressResponse::setMidocoCrmAddress()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     */
    public function __construct(array $midocoCrmAddress = [])
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSimilarAddressResponseMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$getSimilarAddressResponseMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($getSimilarAddressResponseMidocoCrmAddressItem) ? get_class($getSimilarAddressResponseMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($getSimilarAddressResponseMidocoCrmAddressItem), var_export($getSimilarAddressResponseMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSimilarAddressResponse
     */
    public function setMidocoCrmAddress(array $midocoCrmAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetSimilarAddressResponse
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
}
