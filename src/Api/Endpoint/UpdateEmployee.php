<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Endpoint;

class UpdateEmployee extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $employeeId;

    /**
     * Update Employee API will update existing employee data in WebPay.
     *
     * @param string $companyId        Company Id
     * @param string $employeeId       Employee Id
     * @param array  $headerParameters {
     *
     *     @var string $Authorization Bearer + JWT
     * }
     */
    public function __construct(string $companyId, string $employeeId, \Paylocity\Api\Model\Employee $requestBody, array $headerParameters = [])
    {
        $this->companyId = $companyId;
        $this->employeeId = $employeeId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{companyId}', '{employeeId}'], [$this->companyId, $this->employeeId], '/v2/companies/{companyId}/employees/{employeeId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Paylocity\Api\Model\Employee) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization']);
        $optionsResolver->setRequired(['Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('Authorization', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Paylocity\Api\Exception\UpdateEmployeeBadRequestException
     * @throws \Paylocity\Api\Exception\UpdateEmployeeInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\UpdateEmployeeBadRequestException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\UpdateEmployeeInternalServerErrorException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
    }
}
