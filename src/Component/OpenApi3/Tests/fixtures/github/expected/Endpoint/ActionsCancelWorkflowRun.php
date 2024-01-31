<?php

namespace Github\Endpoint;

class ActionsCancelWorkflowRun extends \Github\Runtime\Client\BaseEndpoint implements \Github\Runtime\Client\Endpoint
{
    protected $owner;
    protected $repo;
    protected $run_id;
    /**
     * Cancels a workflow run using its `id`. You must authenticate using an access token with the `repo` scope to use this endpoint. GitHub Apps must have the `actions:write` permission to use this endpoint.
     *
     * @param string $owner 
     * @param string $repo 
     * @param int $runId 
     */
    public function __construct(string $owner, string $repo, int $runId)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->run_id = $runId;
    }
    use \Github\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{owner}', '{repo}', '{run_id}'], [$this->owner, $this->repo, $this->run_id], '/repos/{owner}/{repo}/actions/runs/{run_id}/cancel');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (202 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return [];
    }
}