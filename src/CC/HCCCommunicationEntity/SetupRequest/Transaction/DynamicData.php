<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\SetupRequest\Transaction;

use Jms\Serializer\Annotation;

/**
 * The container for the Dynamic Data that is used to display information on the hosted page.
 */
class DynamicData
{
    /**
     * Field is optional and is used to control the display of the cardholder name field.
     *
     * Populate with “show” otherwise Cardholder Name will not be visible on capture page.
     * If value of show is supplied, cardholder name field will be displayed on hosted page.
     * Any other value or omission of this field will not display the cardholder name field.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("dyn_data_3")
     */
    private $cardHolderNameControl;

    /**
     * Fully qualified URL for the Go Back link that is displayed on the capture page.
     * A secure (https) URL must be provided. If left blank, the function will not work.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\SerializedName("dyn_data_4")
     */
    private $goBackLink;

    /**
     * DynamicData constructor.
     *
     * @param string $cardHolderNameControl
     * @param string $goBackLink
     */
    public function __construct($cardHolderNameControl = null, $goBackLink = null)
    {
        $this->cardHolderNameControl = $cardHolderNameControl;
        $this->goBackLink = $goBackLink;
    }

    /**
     * CardHolderNameControl getter.
     *
     * @return string
     */
    public function getCardHolderNameControl()
    {
        return $this->cardHolderNameControl;
    }

    /**
     * CardHolderNameControl setter.
     *
     * @param string $cardHolderNameControl
     */
    public function setCardHolderNameControl($cardHolderNameControl)
    {
        $this->cardHolderNameControl = $cardHolderNameControl;
    }

    /**
     * GoBackLink getter.
     *
     * @return string
     */
    public function getGoBackLink()
    {
        return $this->goBackLink;
    }

    /**
     * GoBackLink setter.
     *
     * @param string $goBackLink
     */
    public function setGoBackLink($goBackLink)
    {
        $this->goBackLink = $goBackLink;
    }
}
