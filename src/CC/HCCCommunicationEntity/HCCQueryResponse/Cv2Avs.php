<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\HCCQueryResponse;

use JMS\Serializer\Annotation as Annotation;

/**
 * The container for the Address and card security code verification result.
 *
 * @Annotation\XmlRoot("Response")
 * @Annotation\AccessType("public_method")
 */
class Cv2Avs
{
    /**
     * The result of the address and card security code verification.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("cv2avs_status")
     */
    private $cv2AvsStatus;

    /**
     * Cv2Avs constructor.
     *
     * @param string $cv2AvsStatus
     */
    public function __construct($cv2AvsStatus)
    {
        $this->cv2AvsStatus = $cv2AvsStatus;
    }

    /**
     * Cv2AvsStatus getter.
     *
     * @return string
     */
    public function getCv2AvsStatus()
    {
        return $this->cv2AvsStatus;
    }

    /**
     * Cv2AvsStatus setter.
     *
     * @param string $cv2AvsStatus
     */
    public function setCv2AvsStatus($cv2AvsStatus)
    {
        $this->cv2AvsStatus = $cv2AvsStatus;
    }
}
