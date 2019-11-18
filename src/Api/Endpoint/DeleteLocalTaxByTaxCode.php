<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Endpoint;

class DeleteLocalTaxByTaxCode extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $employeeId;
    protected $taxCode;

    /**
     * Delete local tax by tax code.
     *
     * @param string $companyId        Company Id
     * @param string $employeeId       Employee Id
     * @param string $taxCode          Tax Code
     * @param array  $headerParameters {
     *
     *     @var string $Authorization Bearer + JWT
     * }
     */
    public function __construct(string $companyId, string $employeeId, string $taxCode, array $headerParameters = [])
    {
        $this->companyId = $companyId;
        $this->employeeId = $employeeId;
        $this->taxCode = $taxCode;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{companyId}', '{employeeId}', '{taxCode}'], [$this->companyId, $this->employeeId, $this->taxCode], '/v2/companies/{companyId}/employees/{employeeId}/localTaxes/{taxCode}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws \Paylocity\Api\Exception\DeleteLocalTaxByTaxCodeBadRequestException
     * @throws \Paylocity\Api\Exception\DeleteLocalTaxByTaxCodeInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
        }
        if (400 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\DeleteLocalTaxByTaxCodeBadRequestException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (404 === $status) {
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\DeleteLocalTaxByTaxCodeInternalServerErrorException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
    }
}
