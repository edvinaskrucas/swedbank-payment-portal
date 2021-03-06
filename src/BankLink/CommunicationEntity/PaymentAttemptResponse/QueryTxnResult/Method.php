<?php

namespace SwedbankPaymentPortal\BankLink\CommunicationEntity\PaymentAttemptResponse\QueryTxnResult;

use SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\PaymentMethod;
use SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\ServiceType;
use JMS\Serializer\Annotation;

/**
 * The top-level container element that depicts the APM used for the transaction.
 *
 * The sub elements will contain the rest of the APM specific details.
 *
 * @Annotation\AccessType("public_method")
 */
class Method
{
    /**
     * The APM for this transaction.
     *
     * @var PaymentMethod
     *
     * @Annotation\XmlAttribute
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\PaymentMethod")
     * @Annotation\SerializedName("name")
     */
    private $name;

    /**
     * The value returned by the processor to uniquely identify the transaction
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\SerializedName("ReferenceId")
     * @Annotation\XmlElement(cdata=false)
     */
    private $referenceId;

    /**
     * A return code from the processor.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\SerializedName("ResponseCode")
     * @Annotation\XmlElement(cdata=false)
     */
    private $responseCode;

    /**
     * The text field used to provide a short text description of the response code from the processor.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\SerializedName("ResponseDescription")
     * @Annotation\XmlElement(cdata=false)
     */
    private $responseDescription;

    /**
     * The text field used to provide a short text description of the response code from the processor.
     *
     * @var ServiceType
     *
     * @Annotation\Type("SwedbankPaymentPortal\BankLink\CommunicationEntity\Type\ServiceType")
     * @Annotation\SerializedName("ServiceType")
     */
    private $serviceType;

    /**
     * These are APM specific parameters that are returned in this container. Parameters can vary depending on APM.
     *
     * @var string[]
     * @Annotation\SerializedName("__MethodSpecificData")
     * @Annotation\Type("array")
     */
    private $methodSpecificData;

    /**
     * Method constructor.
     *
     * @param PaymentMethod $name
     * @param string        $referenceId
     * @param string        $responseCode
     * @param string        $responseDescription
     * @param ServiceType   $serviceType
     * @param array         $methodSpecificData
     */
    public function __construct(
        PaymentMethod $name,
        $referenceId,
        $responseCode,
        $responseDescription,
        ServiceType $serviceType = null,
        array $methodSpecificData = []
    ) {
        $this->methodSpecificData = $methodSpecificData;
        $this->name = $name;
        $this->referenceId = $referenceId;
        $this->responseCode = $responseCode;
        $this->responseDescription = $responseDescription;
        $this->serviceType = $serviceType;
    }

    /**
     * Name getter.
     *
     * @return PaymentMethod
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name setter.
     *
     * @param PaymentMethod $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * ReferenceId getter.
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * ReferenceId setter.
     *
     * @param string $referenceId
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    /**
     * ResponseCode getter.
     *
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * ResponseCode setter.
     *
     * @param string $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * ResponseDescription getter.
     *
     * @return string
     */
    public function getResponseDescription()
    {
        return $this->responseDescription;
    }

    /**
     * ResponseDescription setter.
     *
     * @param string $responseDescription
     */
    public function setResponseDescription($responseDescription)
    {
        $this->responseDescription = $responseDescription;
    }

    /**
     * ServiceType getter.
     *
     * @return ServiceType
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * ServiceType setter.
     *
     * @param ServiceType $serviceType
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * MethodSpecificData getter.
     *
     * @return \string[]
     */
    public function getMethodSpecificData()
    {
        return $this->methodSpecificData;
    }

    /**
     * MethodSpecificData setter.
     *
     * @param \string[] $methodSpecificData
     */
    public function setMethodSpecificData($methodSpecificData)
    {
        $this->methodSpecificData = $methodSpecificData;
    }
}
