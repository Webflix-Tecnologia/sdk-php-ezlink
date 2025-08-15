<?php

namespace Ezlink\Static;

class Api extends \Ezlink\Core\EzlinkStatic {
    private function header($headers = []) {
        $headers = array_merge_recursive([
            'Authorization' => $this->getDeveloperKey()
        ], $headers);
        return $headers;
    }

    public function destinations(array $body) {
        try {
            $response = $this->http->get("destinations", [
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

    public function hotels(array $body) {
        try {
            $response = $this->http->get("hotels", [
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

    public function file(array $body) {
        try {
            $response = $this->http->get("file", [
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
}