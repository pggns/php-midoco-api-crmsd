<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAgencyCooperationHistoryRequest StructType
 * @subpackage Structs
 */
class DeleteAgencyCooperationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $MidocoAgencyCooperationHistory = null;
    /**
     * Constructor method for DeleteAgencyCooperationHistoryRequest
     * @uses DeleteAgencyCooperationHistoryRequest::setMidocoAgencyCooperationHistory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null)
    {
        $this
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory);
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory|null
     */
    public function getMidocoAgencyCooperationHistory(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\Crmsd\StructType\DeleteAgencyCooperationHistoryRequest
     */
    public function setMidocoAgencyCooperationHistory(?\Pggns\MidocoApi\Crmsd\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null): self
    {
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
}
