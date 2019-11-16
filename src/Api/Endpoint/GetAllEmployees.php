<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Endpoint;

class GetAllEmployees extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;

    /**
     * Get All Employees API will return employee data currently available in Web Pay.
     *
     * @param string $companyId       Company Id
     * @param array  $queryParameters {
     *
     *     @var int $pagesize Number of records per page. Default value is 25.
     *     @var int $pagenumber Page number to retrieve; page numbers are 0-based (so to get the first page of results, pass pagenumber=0). Default value is 0.
     *     @var bool $includetotalcount Whether to include the total record count in the header's X-Pcty-Total-Count property. Default value is true.
     * }
     *
     * @param array $headerParameters {
     *
     *     @var string $Authorization Bearer + JWT
     * }
     */
    public function __construct(string $companyId, array $queryParameters = [], array $headerParameters = [])
    {
        $this->companyId = $companyId;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{companyId}'], [$this->companyId], '/v2/companies/{companyId}/employees/');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['pagesize', 'pagenumber', 'includetotalcount']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('pagesize', ['int']);
        $optionsResolver->setAllowedTypes('pagenumber', ['int']);
        $optionsResolver->setAllowedTypes('includetotalcount', ['bool']);

        return $optionsResolver;
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
     * @throws \Paylocity\Api\Exception\GetAllEmployeesUnauthorizedException
     * @throws \Paylocity\Api\Exception\GetAllEmployeesForbiddenException
     * @throws \Paylocity\Api\Exception\GetAllEmployeesNotFoundException
     * @throws \Paylocity\Api\Exception\GetAllEmployeesInternalServerErrorException
     *
     * @return \Paylocity\Api\Model\EmployeeInfo[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Paylocity\\Api\\Model\\EmployeeInfo[]', 'json');
        }
        if (401 === $status) {
            throw new \Paylocity\Api\Exception\GetAllEmployeesUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Paylocity\Api\Exception\GetAllEmployeesForbiddenException();
        }
        if (404 === $status) {
            throw new \Paylocity\Api\Exception\GetAllEmployeesNotFoundException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
        if (500 === $status) {
            throw new \Paylocity\Api\Exception\GetAllEmployeesInternalServerErrorException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
    }
}