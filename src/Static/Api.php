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

    private function searchDestination(array $body) {
        try {
            $destino = null;
            $resultDestination = $this->destinations([
                'skip' => $body['skip'] ?? 0,
                'limit' => $body['limit'],
                'order' => 'asc',
                'countryISO2' => $body['country'],
            ]);
            $busca = $body['VariationsDestiniesSearched'];
            [$destinationListResults, $totalAfterFilter] = $resultDestination->destinationListResponse;
            if ($totalAfterFilter > 0) {
                foreach ($destinationListResults->destinations as $index => $destination) {
                    if (in_array($destination->name, $busca)) {
                        $destino = $destination;
                        break;
                    }
                }
            }
            if($destino || $totalAfterFilter == 0) {
                return $destino;
            }else {
                $body['skip'] += $body['limit'];
                return $this->searchDestination($body);
            }
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

    public function searchHotelInDestination(array $body) {
        try {
            $destino = $this->searchDestination($body);
            if($destino) {
                $apiHotel = new \Ezlink\Hotel\Api();
                return $apiHotel->searchByDestinationOrHotelId([
                    'checkIn' => $body['checkIn'],
                    'checkOut' => $body['checkIn'],
                    'destinationId' => $destino->id,
                    'nationality' => $body['nationality'],
                    'timeout' => 15000,
                    'hotelInfo' => true,
                    'rooms' => $body['rooms'],
                ]);
            }else{
                return [
                    "Status" => "Error",
                    "Code" => ""
                ];
            }
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