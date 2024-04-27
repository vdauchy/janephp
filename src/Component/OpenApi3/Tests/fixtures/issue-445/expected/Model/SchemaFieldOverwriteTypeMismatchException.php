<?php

namespace PicturePark\API\Model;

class SchemaFieldOverwriteTypeMismatchException extends \ArrayObject
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
    protected $traceLevel;
    /**
     *
     *
     * @var string|null
     */
    protected $traceId;
    /**
     *
     *
     * @var string|null
     */
    protected $traceJobId;
    /**
     *
     *
     * @var int
     */
    protected $httpStatusCode;
    /**
     *
     *
     * @var string|null
     */
    protected $exceptionMessage;
    /**
     *
     *
     * @var string
     */
    protected $kind;
    /**
     *
     *
     * @var string|null
     */
    protected $customerId;
    /**
     *
     *
     * @var string|null
     */
    protected $customerAlias;
    /**
     *
     *
     * @var string|null
     */
    protected $userId;
    /**
     *
     *
     * @var string|null
     */
    protected $schemaId;
    /**
     *
     *
     * @var string|null
     */
    protected $fieldId;
    /**
     *
     *
     * @var string|null
     */
    protected $fieldOverwriteType;
    /**
     *
     *
     * @var string|null
     */
    protected $fieldType;
    /**
     *
     *
     * @return string
     */
    public function getTraceLevel(): string
    {
        return $this->traceLevel;
    }
    /**
     *
     *
     * @param string $traceLevel
     *
     * @return self
     */
    public function setTraceLevel(string $traceLevel): self
    {
        $this->initialized['traceLevel'] = true;
        $this->traceLevel = $traceLevel;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTraceId(): ?string
    {
        return $this->traceId;
    }
    /**
     *
     *
     * @param string|null $traceId
     *
     * @return self
     */
    public function setTraceId(?string $traceId): self
    {
        $this->initialized['traceId'] = true;
        $this->traceId = $traceId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTraceJobId(): ?string
    {
        return $this->traceJobId;
    }
    /**
     *
     *
     * @param string|null $traceJobId
     *
     * @return self
     */
    public function setTraceJobId(?string $traceJobId): self
    {
        $this->initialized['traceJobId'] = true;
        $this->traceJobId = $traceJobId;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }
    /**
     *
     *
     * @param int $httpStatusCode
     *
     * @return self
     */
    public function setHttpStatusCode(int $httpStatusCode): self
    {
        $this->initialized['httpStatusCode'] = true;
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExceptionMessage(): ?string
    {
        return $this->exceptionMessage;
    }
    /**
     *
     *
     * @param string|null $exceptionMessage
     *
     * @return self
     */
    public function setExceptionMessage(?string $exceptionMessage): self
    {
        $this->initialized['exceptionMessage'] = true;
        $this->exceptionMessage = $exceptionMessage;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getKind(): string
    {
        return $this->kind;
    }
    /**
     *
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind): self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     *
     *
     * @param string|null $customerId
     *
     * @return self
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->initialized['customerId'] = true;
        $this->customerId = $customerId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCustomerAlias(): ?string
    {
        return $this->customerAlias;
    }
    /**
     *
     *
     * @param string|null $customerAlias
     *
     * @return self
     */
    public function setCustomerAlias(?string $customerAlias): self
    {
        $this->initialized['customerAlias'] = true;
        $this->customerAlias = $customerAlias;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     *
     *
     * @param string|null $userId
     *
     * @return self
     */
    public function setUserId(?string $userId): self
    {
        $this->initialized['userId'] = true;
        $this->userId = $userId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSchemaId(): ?string
    {
        return $this->schemaId;
    }
    /**
     *
     *
     * @param string|null $schemaId
     *
     * @return self
     */
    public function setSchemaId(?string $schemaId): self
    {
        $this->initialized['schemaId'] = true;
        $this->schemaId = $schemaId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFieldId(): ?string
    {
        return $this->fieldId;
    }
    /**
     *
     *
     * @param string|null $fieldId
     *
     * @return self
     */
    public function setFieldId(?string $fieldId): self
    {
        $this->initialized['fieldId'] = true;
        $this->fieldId = $fieldId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFieldOverwriteType(): ?string
    {
        return $this->fieldOverwriteType;
    }
    /**
     *
     *
     * @param string|null $fieldOverwriteType
     *
     * @return self
     */
    public function setFieldOverwriteType(?string $fieldOverwriteType): self
    {
        $this->initialized['fieldOverwriteType'] = true;
        $this->fieldOverwriteType = $fieldOverwriteType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }
    /**
     *
     *
     * @param string|null $fieldType
     *
     * @return self
     */
    public function setFieldType(?string $fieldType): self
    {
        $this->initialized['fieldType'] = true;
        $this->fieldType = $fieldType;
        return $this;
    }
}