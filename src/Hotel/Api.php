<?php

namespace Ezlink\Hotel;

class Api extends \Ezlink\Core\EzlinkHotel {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'Authorization' => $this->getDeveloperKey()
        ], $headers);
        return $headers;
    }
    
    public function searchByDestinationOrHotelId(array $body) {
        try {
            $response = $this->http->post("search", [
                'json' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }

    public function quote(array $body) {
        try {
            $responseResult = $this->http->post("quote", [
                'json' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $responseResult->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }

    public function book(array $body) {
        try {
            $response = $this->http->post("book", [
                'json' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }

    public function list(array $body) {
        try {
            $response = $this->http->get("list", [
                'query' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }

    public function details(array $body) {
        try {
            $response = $this->http->get("details", [
                'query' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }

    public function cancel(array $body) {
        try {
            $response = $this->http->post("cancel", [
                'json' => $body,
                'headers' => $this->header()
            ]);
            $responseData = (string) $response->getBody();
            return json_decode($responseData);
        } catch (\GuzzleHttp\Exception\ServerException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\ClientException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\BadResponseException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\GuzzleHttp\Exception\RequestException $ex) {

            throw \Ezlink\Exceptions\EzlinkException::fromGuzzleException($ex);

        } catch (\Exception $ex) {
            throw new \Ezlink\Exceptions\EzlinkException($ex);
        }
    }
}