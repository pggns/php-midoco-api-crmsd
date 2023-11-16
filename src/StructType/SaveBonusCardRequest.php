<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBonusCardRequest StructType
 * @subpackage Structs
 */
class SaveBonusCardRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $MidocoCrmBonusCard = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveBonusCardRequest
     * @uses SaveBonusCardRequest::setMidocoCrmBonusCard()
     * @uses SaveBonusCardRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $midocoCrmBonusCard
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $midocoCrmBonusCard = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard|null
     */
    public function getMidocoCrmBonusCard(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveBonusCardRequest
     */
    public function setMidocoCrmBonusCard(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmBonusCard $midocoCrmBonusCard = null): self
    {
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveBonusCardRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
