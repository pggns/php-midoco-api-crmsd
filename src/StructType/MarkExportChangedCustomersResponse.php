<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkExportChangedCustomersResponse StructType
 * @subpackage Structs
 */
class MarkExportChangedCustomersResponse extends AbstractStructBase
{
    /**
     * The notFoundChangeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $notFoundChangeId = [];
    /**
     * The numEntriesMarked
     * @var int|null
     */
    protected ?int $numEntriesMarked = null;
    /**
     * Constructor method for MarkExportChangedCustomersResponse
     * @uses MarkExportChangedCustomersResponse::setNotFoundChangeId()
     * @uses MarkExportChangedCustomersResponse::setNumEntriesMarked()
     * @param int[] $notFoundChangeId
     * @param int $numEntriesMarked
     */
    public function __construct(array $notFoundChangeId = [], ?int $numEntriesMarked = null)
    {
        $this
            ->setNotFoundChangeId($notFoundChangeId)
            ->setNumEntriesMarked($numEntriesMarked);
    }
    /**
     * Get notFoundChangeId value
     * @return int[]
     */
    public function getNotFoundChangeId(): array
    {
        return $this->notFoundChangeId;
    }
    /**
     * This method is responsible for validating the values passed to the setNotFoundChangeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotFoundChangeId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotFoundChangeIdForArrayConstraintsFromSetNotFoundChangeId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $markExportChangedCustomersResponseNotFoundChangeIdItem) {
            // validation for constraint: itemType
            if (!(is_int($markExportChangedCustomersResponseNotFoundChangeIdItem) || ctype_digit($markExportChangedCustomersResponseNotFoundChangeIdItem))) {
                $invalidValues[] = is_object($markExportChangedCustomersResponseNotFoundChangeIdItem) ? get_class($markExportChangedCustomersResponseNotFoundChangeIdItem) : sprintf('%s(%s)', gettype($markExportChangedCustomersResponseNotFoundChangeIdItem), var_export($markExportChangedCustomersResponseNotFoundChangeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The notFoundChangeId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set notFoundChangeId value
     * @throws InvalidArgumentException
     * @param int[] $notFoundChangeId
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkExportChangedCustomersResponse
     */
    public function setNotFoundChangeId(array $notFoundChangeId = []): self
    {
        // validation for constraint: array
        if ('' !== ($notFoundChangeIdArrayErrorMessage = self::validateNotFoundChangeIdForArrayConstraintsFromSetNotFoundChangeId($notFoundChangeId))) {
            throw new InvalidArgumentException($notFoundChangeIdArrayErrorMessage, __LINE__);
        }
        $this->notFoundChangeId = $notFoundChangeId;
        
        return $this;
    }
    /**
     * Add item to notFoundChangeId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkExportChangedCustomersResponse
     */
    public function addToNotFoundChangeId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The notFoundChangeId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->notFoundChangeId[] = $item;
        
        return $this;
    }
    /**
     * Get numEntriesMarked value
     * @return int|null
     */
    public function getNumEntriesMarked(): ?int
    {
        return $this->numEntriesMarked;
    }
    /**
     * Set numEntriesMarked value
     * @param int $numEntriesMarked
     * @return \Pggns\MidocoApi\Crmsd\StructType\MarkExportChangedCustomersResponse
     */
    public function setNumEntriesMarked(?int $numEntriesMarked = null): self
    {
        // validation for constraint: int
        if (!is_null($numEntriesMarked) && !(is_int($numEntriesMarked) || ctype_digit($numEntriesMarked))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numEntriesMarked, true), gettype($numEntriesMarked)), __LINE__);
        }
        $this->numEntriesMarked = $numEntriesMarked;
        
        return $this;
    }
}
