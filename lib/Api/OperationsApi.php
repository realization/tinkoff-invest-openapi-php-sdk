<?php
/**
 * OperationsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenAPI
 *
 * tinkoff.ru/invest OpenAPI.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: n.v.melnikov@tinkoff.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * OperationsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperationsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation operationsGet
     *
     * Получение списка операций
     *
     * @param  \DateTime $from Начало временного промежутка (required)
     * @param  \DateTime $to Конец временного промежутка (required)
     * @param  string $figi Figi инструмента для фильтрации (optional)
     * @param  string $broker_account_id Номер счета (по умолчанию - Тинькофф) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\OperationsResponse
     */
    public function operationsGet($from, $to, $figi = null, $broker_account_id = null)
    {
        list($response) = $this->operationsGetWithHttpInfo($from, $to, $figi, $broker_account_id);
        return $response;
    }

    /**
     * Operation operationsGetWithHttpInfo
     *
     * Получение списка операций
     *
     * @param  \DateTime $from Начало временного промежутка (required)
     * @param  \DateTime $to Конец временного промежутка (required)
     * @param  string $figi Figi инструмента для фильтрации (optional)
     * @param  string $broker_account_id Номер счета (по умолчанию - Тинькофф) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\OperationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function operationsGetWithHttpInfo($from, $to, $figi = null, $broker_account_id = null)
    {
        $returnType = '\Swagger\Client\Model\OperationsResponse';
        $request = $this->operationsGetRequest($from, $to, $figi, $broker_account_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\OperationsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation operationsGetAsync
     *
     * Получение списка операций
     *
     * @param  \DateTime $from Начало временного промежутка (required)
     * @param  \DateTime $to Конец временного промежутка (required)
     * @param  string $figi Figi инструмента для фильтрации (optional)
     * @param  string $broker_account_id Номер счета (по умолчанию - Тинькофф) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function operationsGetAsync($from, $to, $figi = null, $broker_account_id = null)
    {
        return $this->operationsGetAsyncWithHttpInfo($from, $to, $figi, $broker_account_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation operationsGetAsyncWithHttpInfo
     *
     * Получение списка операций
     *
     * @param  \DateTime $from Начало временного промежутка (required)
     * @param  \DateTime $to Конец временного промежутка (required)
     * @param  string $figi Figi инструмента для фильтрации (optional)
     * @param  string $broker_account_id Номер счета (по умолчанию - Тинькофф) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function operationsGetAsyncWithHttpInfo($from, $to, $figi = null, $broker_account_id = null)
    {
        $returnType = '\Swagger\Client\Model\OperationsResponse';
        $request = $this->operationsGetRequest($from, $to, $figi, $broker_account_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'operationsGet'
     *
     * @param  \DateTime $from Начало временного промежутка (required)
     * @param  \DateTime $to Конец временного промежутка (required)
     * @param  string $figi Figi инструмента для фильтрации (optional)
     * @param  string $broker_account_id Номер счета (по умолчанию - Тинькофф) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function operationsGetRequest($from, $to, $figi = null, $broker_account_id = null)
    {
        // verify the required parameter 'from' is set
        if ($from === null || (is_array($from) && count($from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $from when calling operationsGet'
            );
        }
        // verify the required parameter 'to' is set
        if ($to === null || (is_array($to) && count($to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $to when calling operationsGet'
            );
        }

        $resourcePath = '/operations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from, 'date-time');
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to, 'date-time');
        }
        // query params
        if ($figi !== null) {
            $queryParams['figi'] = ObjectSerializer::toQueryValue($figi, null);
        }
        // query params
        if ($broker_account_id !== null) {
            $queryParams['brokerAccountId'] = ObjectSerializer::toQueryValue($broker_account_id, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
