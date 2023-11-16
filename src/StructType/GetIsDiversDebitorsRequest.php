<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsDiversDebitorsRequest StructType
 * @subpackage Structs
 */
class GetIsDiversDebitorsRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $MidocoDebitor = null;
    /**
     * Constructor method for GetIsDiversDebitorsRequest
     * @uses GetIsDiversDebitorsRequest::setMidocoDebitor()
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor = null)
    {
        $this
            ->setMidocoDebitor($midocoDebitor);
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO|null
     */
    public function getMidocoDebitor(): ?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO
    {
        return $this->MidocoDebitor;
    }
    /**
     * Set MidocoDebitor value
     * @param \Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetIsDiversDebitorsRequest
     */
    public function setMidocoDebitor(?\Pggns\MidocoApi\Crmsd\StructType\DebitorDTO $midocoDebitor = null): self
    {
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
}
