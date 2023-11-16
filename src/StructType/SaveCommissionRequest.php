<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCommissionRequest StructType
 * @subpackage Structs
 */
class SaveCommissionRequest extends AbstractStructBase
{
    /**
     * The MidocoCommission
     * Meta information extracted from the WSDL
     * - ref: MidocoCommission
     * @var \Pggns\MidocoApi\Crmsd\StructType\CommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDTO $MidocoCommission = null;
    /**
     * Constructor method for SaveCommissionRequest
     * @uses SaveCommissionRequest::setMidocoCommission()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDTO $midocoCommission
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDTO $midocoCommission = null)
    {
        $this
            ->setMidocoCommission($midocoCommission);
    }
    /**
     * Get MidocoCommission value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CommissionDTO|null
     */
    public function getMidocoCommission(): ?\Pggns\MidocoApi\Crmsd\StructType\CommissionDTO
    {
        return $this->MidocoCommission;
    }
    /**
     * Set MidocoCommission value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CommissionDTO $midocoCommission
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveCommissionRequest
     */
    public function setMidocoCommission(?\Pggns\MidocoApi\Crmsd\StructType\CommissionDTO $midocoCommission = null): self
    {
        $this->MidocoCommission = $midocoCommission;
        
        return $this;
    }
}
