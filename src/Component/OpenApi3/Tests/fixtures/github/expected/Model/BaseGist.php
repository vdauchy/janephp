<?php

namespace Github\Model;

class BaseGist extends \ArrayObject
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
    protected $url;
    /**
     *
     *
     * @var string
     */
    protected $forksUrl;
    /**
     *
     *
     * @var string
     */
    protected $commitsUrl;
    /**
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $nodeId;
    /**
     *
     *
     * @var string
     */
    protected $gitPullUrl;
    /**
     *
     *
     * @var string
     */
    protected $gitPushUrl;
    /**
     *
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     *
     *
     * @var array<string, BaseGistFilesItem>
     */
    protected $files;
    /**
     *
     *
     * @var bool
     */
    protected $public;
    /**
     *
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     *
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     *
     *
     * @var string|null
     */
    protected $description;
    /**
     *
     *
     * @var int
     */
    protected $comments;
    /**
     *
     *
     * @var BaseGistUser|null
     */
    protected $user;
    /**
     *
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     *
     *
     * @var BaseGistOwner|null
     */
    protected $owner;
    /**
     *
     *
     * @var bool
     */
    protected $truncated;
    /**
     *
     *
     * @var list<mixed>
     */
    protected $forks;
    /**
     *
     *
     * @var list<mixed>
     */
    protected $history;
    /**
     *
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     *
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getForksUrl(): string
    {
        return $this->forksUrl;
    }
    /**
     *
     *
     * @param string $forksUrl
     *
     * @return self
     */
    public function setForksUrl(string $forksUrl): self
    {
        $this->initialized['forksUrl'] = true;
        $this->forksUrl = $forksUrl;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCommitsUrl(): string
    {
        return $this->commitsUrl;
    }
    /**
     *
     *
     * @param string $commitsUrl
     *
     * @return self
     */
    public function setCommitsUrl(string $commitsUrl): self
    {
        $this->initialized['commitsUrl'] = true;
        $this->commitsUrl = $commitsUrl;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     *
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getNodeId(): string
    {
        return $this->nodeId;
    }
    /**
     *
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId): self
    {
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGitPullUrl(): string
    {
        return $this->gitPullUrl;
    }
    /**
     *
     *
     * @param string $gitPullUrl
     *
     * @return self
     */
    public function setGitPullUrl(string $gitPullUrl): self
    {
        $this->initialized['gitPullUrl'] = true;
        $this->gitPullUrl = $gitPullUrl;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getGitPushUrl(): string
    {
        return $this->gitPushUrl;
    }
    /**
     *
     *
     * @param string $gitPushUrl
     *
     * @return self
     */
    public function setGitPushUrl(string $gitPushUrl): self
    {
        $this->initialized['gitPushUrl'] = true;
        $this->gitPushUrl = $gitPushUrl;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getHtmlUrl(): string
    {
        return $this->htmlUrl;
    }
    /**
     *
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl): self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     *
     *
     * @return array<string, BaseGistFilesItem>
     */
    public function getFiles(): iterable
    {
        return $this->files;
    }
    /**
     *
     *
     * @param array<string, BaseGistFilesItem> $files
     *
     * @return self
     */
    public function setFiles(iterable $files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->public;
    }
    /**
     *
     *
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;
        return $this;
    }
    /**
     *
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     *
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     *
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     *
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     *
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     *
     *
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }
    /**
     *
     *
     * @param int $comments
     *
     * @return self
     */
    public function setComments(int $comments): self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     *
     *
     * @return BaseGistUser|null
     */
    public function getUser(): ?BaseGistUser
    {
        return $this->user;
    }
    /**
     *
     *
     * @param BaseGistUser|null $user
     *
     * @return self
     */
    public function setUser(?BaseGistUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getCommentsUrl(): string
    {
        return $this->commentsUrl;
    }
    /**
     *
     *
     * @param string $commentsUrl
     *
     * @return self
     */
    public function setCommentsUrl(string $commentsUrl): self
    {
        $this->initialized['commentsUrl'] = true;
        $this->commentsUrl = $commentsUrl;
        return $this;
    }
    /**
     *
     *
     * @return BaseGistOwner|null
     */
    public function getOwner(): ?BaseGistOwner
    {
        return $this->owner;
    }
    /**
     *
     *
     * @param BaseGistOwner|null $owner
     *
     * @return self
     */
    public function setOwner(?BaseGistOwner $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     *
     *
     * @return bool
     */
    public function getTruncated(): bool
    {
        return $this->truncated;
    }
    /**
     *
     *
     * @param bool $truncated
     *
     * @return self
     */
    public function setTruncated(bool $truncated): self
    {
        $this->initialized['truncated'] = true;
        $this->truncated = $truncated;
        return $this;
    }
    /**
     *
     *
     * @return list<mixed>
     */
    public function getForks(): array
    {
        return $this->forks;
    }
    /**
     *
     *
     * @param list<mixed> $forks
     *
     * @return self
     */
    public function setForks(array $forks): self
    {
        $this->initialized['forks'] = true;
        $this->forks = $forks;
        return $this;
    }
    /**
     *
     *
     * @return list<mixed>
     */
    public function getHistory(): array
    {
        return $this->history;
    }
    /**
     *
     *
     * @param list<mixed> $history
     *
     * @return self
     */
    public function setHistory(array $history): self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
}