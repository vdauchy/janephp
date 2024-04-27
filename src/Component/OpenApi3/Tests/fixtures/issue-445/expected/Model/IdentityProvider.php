<?php

namespace PicturePark\API\Model;

class IdentityProvider extends \ArrayObject
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
     * Mapping of identity provider claims to user attributes
     *
     * @var list<IdpClaimToUserAttributeMapping>|null
     */
    protected $claimMapping;
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @var string|null
     */
    protected $groupClaimType;
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @var list<IdpGroupToUserRoleMapping>|null
     */
    protected $groupMapping;
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @var string|null
     */
    protected $fallbackUserRoleId;
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @var string|null
     */
    protected $id;
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    protected $name;
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @var string|null
     */
    protected $displayName;
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @return list<IdpClaimToUserAttributeMapping>|null
     */
    public function getClaimMapping(): ?array
    {
        return $this->claimMapping;
    }
    /**
     * Mapping of identity provider claims to user attributes
     *
     * @param list<IdpClaimToUserAttributeMapping>|null $claimMapping
     *
     * @return self
     */
    public function setClaimMapping(?array $claimMapping): self
    {
        $this->initialized['claimMapping'] = true;
        $this->claimMapping = $claimMapping;
        return $this;
    }
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @return string|null
     */
    public function getGroupClaimType(): ?string
    {
        return $this->groupClaimType;
    }
    /**
     * Name of the identity provider claim that holds group membership information
     *
     * @param string|null $groupClaimType
     *
     * @return self
     */
    public function setGroupClaimType(?string $groupClaimType): self
    {
        $this->initialized['groupClaimType'] = true;
        $this->groupClaimType = $groupClaimType;
        return $this;
    }
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @return list<IdpGroupToUserRoleMapping>|null
     */
    public function getGroupMapping(): ?array
    {
        return $this->groupMapping;
    }
    /**
     * IdP (AD) group to user role ID mapping
     *
     * @param list<IdpGroupToUserRoleMapping>|null $groupMapping
     *
     * @return self
     */
    public function setGroupMapping(?array $groupMapping): self
    {
        $this->initialized['groupMapping'] = true;
        $this->groupMapping = $groupMapping;
        return $this;
    }
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @return string|null
     */
    public function getFallbackUserRoleId(): ?string
    {
        return $this->fallbackUserRoleId;
    }
    /**
     * Optional user role ID that will be assigned to a user is none of the group mappings produce a match
     *
     * @param string|null $fallbackUserRoleId
     *
     * @return self
     */
    public function setFallbackUserRoleId(?string $fallbackUserRoleId): self
    {
        $this->initialized['fallbackUserRoleId'] = true;
        $this->fallbackUserRoleId = $fallbackUserRoleId;
        return $this;
    }
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Identity provider ID (has to match an existing IdP defined in IdentityServer)
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Name of the identity provider as defined in IdentityServer
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }
    /**
     * Display name of the identity provider as defined in IdentityServer
     *
     * @param string|null $displayName
     *
     * @return self
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
}