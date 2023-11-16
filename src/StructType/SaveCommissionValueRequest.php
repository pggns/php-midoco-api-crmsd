<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionValueRequest StructType
 * @subpackage Structs
 */
class SaveCommissionValueRequest extends AbstractStructBase
{
    /**
     * The MidocoCommissionValue
     * Meta information extracted from the WSDL
     * - ref: MidocoCommissionValue
     * @var \Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO $MidocoCommissionValue = null;
    /**
     * Constructor method for SaveCommissionValueRequest
     * @uses SaveCommissionValueRequest::setMidocoCommissionValue()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO $midocoCommissionValue
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO $midocoCommissionValue = null)
    {
        $this
            ->setMidocoCommissionValue($midocoCommissionValue);
    }
    /**
     * Get MidocoCommissionValue value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO|null
     */
    public function getMidocoCommissionValue(): ?\Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO
    {
        return $this->MidocoCommissionValue;
    }
    /**
     * Set MidocoCommissionValue value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO $midocoCommissionValue
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionValueRequest
     */
    public function setMidocoCommissionValue(?\Pggns\MidocoApi\Crmsd\StructType\CommissionValueDTO $midocoCommissionValue = null): self
    {
        $this->MidocoCommissionValue = $midocoCommissionValue;
        
        return $this;
    }
}
