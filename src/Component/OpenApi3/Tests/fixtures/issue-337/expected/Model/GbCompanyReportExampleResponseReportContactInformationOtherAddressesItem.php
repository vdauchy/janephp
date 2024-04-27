<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     *
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var string
     */
    protected $simpleValue;
    /**
     *
     *
     * @var string
     */
    protected $postalCode;
    /**
     *
     *
     * @var string
     */
    protected $telephone;
    /**
     *
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getSimpleValue(): string
    {
        return $this->simpleValue;
    }
    /**
     *
     *
     * @param string $simpleValue
     *
     * @return self
     */
    public function setSimpleValue(string $simpleValue): self
    {
        $this->initialized['simpleValue'] = true;
        $this->simpleValue = $simpleValue;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     *
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }
    /**
     *
     *
     * @param string $telephone
     *
     * @return self
     */
    public function setTelephone(string $telephone): self
    {
        $this->initialized['telephone'] = true;
        $this->telephone = $telephone;
        return $this;
    }
}