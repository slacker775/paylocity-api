Updated API can be generated via:

```
vendor/bin/jane-openapi generate
```

API definition resides in swagger.yaml

Simple use-case:

```
$companyId = '12345';
$token = 'ABCXDFDSF';
$authHeader = ['Authorization' => 'Bearer ' . $token];

$employees = $apiClient->getAllEmployees($companyId, [], ['Authorization' => $auth ]);

```