<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMilesAndMoreConnectMailResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns a MidocoMailMessage with addresses, subject and text.
 * @subpackage Structs
 */
class PrepareMilesAndMoreConnectMailResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for PrepareMilesAndMoreConnectMailResponse
     * @uses PrepareMilesAndMoreConnectMailResponse::setMidocoMailMessage()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Crmsd\StructType\PrepareMilesAndMoreConnectMailResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
