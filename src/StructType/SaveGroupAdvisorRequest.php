<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGroupAdvisorRequest StructType
 * @subpackage Structs
 */
class SaveGroupAdvisorRequest extends AbstractStructBase
{
    /**
     * The MidocoGroupAdviser
     * Meta information extracted from the WSDL
     * - ref: MidocoGroupAdviser
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $MidocoGroupAdviser = null;
    /**
     * Constructor method for SaveGroupAdvisorRequest
     * @uses SaveGroupAdvisorRequest::setMidocoGroupAdviser()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $midocoGroupAdviser
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $midocoGroupAdviser = null)
    {
        $this
            ->setMidocoGroupAdviser($midocoGroupAdviser);
    }
    /**
     * Get MidocoGroupAdviser value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser|null
     */
    public function getMidocoGroupAdviser(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser
    {
        return $this->MidocoGroupAdviser;
    }
    /**
     * Set MidocoGroupAdviser value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $midocoGroupAdviser
     * @return \Pggns\MidocoApi\Crmsd\StructType\SaveGroupAdvisorRequest
     */
    public function setMidocoGroupAdviser(?\Pggns\MidocoApi\Crmsd\StructType\MidocoGroupAdviser $midocoGroupAdviser = null): self
    {
        $this->MidocoGroupAdviser = $midocoGroupAdviser;
        
        return $this;
    }
}
