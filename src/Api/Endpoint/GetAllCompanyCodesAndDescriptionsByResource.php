<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Endpoint;

class GetAllCompanyCodesAndDescriptionsByResource extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;
    protected $codeResource;

    /**
     * Get All Company Codes for the selected company and resource.
     *
     * @param string $companyId        Company Id
     * @param string $codeResource     Type of Company Code. Common values costcenter1, costcenter2, costcenter3, deductions, earnings, taxes, paygrade, positions.
     * @param array  $headerParameters {
     *
     *     @var string $Authorization Bearer + JWT
     * }
     */
    public function __construct(string $companyId, string $codeResource, array $headerParameters = [])
    {
        $this->companyId = $companyId;
        $this->codeResource = $codeResource;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{companyId}', '{codeResource}'], [$this->companyId, $this->codeResource], '/v2/companies/{companyId}/codes/{codeResource}');
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
     * @throws \Paylocity\Api\Exception\GetAllCompanyCodesAndDescriptionsByResourceNotFoundException
     * @throws \Paylocity\Api\Exception\GetAllCompanyCodesAndDescriptionsByResourceInternalServerErrorException
     *
     * @return \Paylocity\Api\Model\CompanyCodes[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Paylocity\\Api\\Model\\CompanyCodes[]', 'json');
        }
        if (401 === $status) {
        }
        if (403 === $status) {
        }
        if (404 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\GetAllCompanyCodesAndDescriptionsByResourceNotFoundException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
        if (500 === $status && mb_strpos($contentType, 'application/json') !== false) {
            throw new \Paylocity\Api\Exception\GetAllCompanyCodesAndDescriptionsByResourceInternalServerErrorException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
    }
}
