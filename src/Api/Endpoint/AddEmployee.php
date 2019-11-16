<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Paylocity\Api\Endpoint;

class AddEmployee extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $companyId;

    /**
     * New Employee API sends new employee data directly to Web Pay. Companies who use the New Hire Template in Web Pay may require additional fields when hiring employees. New Employee API Requests will honor these required fields.
     *
     * @param string                        $companyId        Company Id
     * @param \Paylocity\Api\Model\Employee $json             Employee Model
     * @param array                         $headerParameters {
     *
     *     @var string $Authorization Bearer + JWT
     * }
     */
    public function __construct(string $companyId, \Paylocity\Api\Model\Employee $json, array $headerParameters = [])
    {
        $this->companyId = $companyId;
        $this->body = $json;
        $this->headerParameters = $headerParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{companyId}'], [$this->companyId], '/v2/companies/{companyId}/employees');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
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
     * @throws \Paylocity\Api\Exception\AddEmployeeBadRequestException
     * @throws \Paylocity\Api\Exception\AddEmployeeUnauthorizedException
     * @throws \Paylocity\Api\Exception\AddEmployeeForbiddenException
     * @throws \Paylocity\Api\Exception\AddEmployeeInternalServerErrorException
     *
     * @return \Paylocity\Api\Model\EmployeeIdResponse[]|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'Paylocity\\Api\\Model\\EmployeeIdResponse[]', 'json');
        }
        if (400 === $status) {
            throw new \Paylocity\Api\Exception\AddEmployeeBadRequestException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
        if (401 === $status) {
            throw new \Paylocity\Api\Exception\AddEmployeeUnauthorizedException();
        }
        if (403 === $status) {
            throw new \Paylocity\Api\Exception\AddEmployeeForbiddenException();
        }
        if (500 === $status) {
            throw new \Paylocity\Api\Exception\AddEmployeeInternalServerErrorException($serializer->deserialize($body, 'Paylocity\\Api\\Model\\Error[]', 'json'));
        }
    }
}