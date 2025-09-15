<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';
$config = parse_ini_file("config.ini");

$apiHotel = new Ezlink\Hotel\Api();
$apiHotel
    ->setDeveloperKey($config['developerKey']);

try {
    $responseDetails = $apiHotel
        ->quote([
            "searchToken" => "ba4eb080-9255-11f0-bca1-ab0fff83538d",
            "roomId" => ["ba73ebc1-9255-11f0-ba60-712ac9b8d95f"]
        ]);
    var_dump($responseDetails);
} catch (\Ezlink\Exceptions\EzlinkException $ex) {
    var_dump($ex);
}

/*try{
    $responseSearch = $apiHotel->searchByDestinationOrHotelId([
        "checkIn" => "2025-08-16",
        "checkOut" => "2025-08-18",
        //"destinationId" => "5d652a0e37f0a05da7a94a8e",
        "hotelIds" => ["5d433db9b9d26646cd01bce9", "5d433dc34da68646fb27e333"],
        "nationality" => "BR",
        "timeout" => 15000,
        "hotelInfo" => true,
        "rooms" => [
            [
                "adults" => 2,
                "children" => 1,
                "childrenAge" => [1],
            ],
        ],
    ]);
    //echo json_encode($responseSearch);
    var_dump($responseSearch);
} catch (\Ezlink\Exceptions\EzlinkException $ex) {
    var_dump($ex);
}*/

$apiStatic = new Ezlink\Static\Api();
$apiStatic
    ->setDeveloperKey($config['developerKey']);

try{
    /*$responseDestinations = $apiStatic->destinations([
        'skip' => 0,
        'limit' => 5,
        'order' => 'desc',
        'countryISO2' => 'br',
    ]);
    echo json_encode($responseDestinations);
    var_dump($responseDestinations);*/
    /*$responseHotel = $apiStatic->searchByHotelInDestination([
        "checkIn" => "2025-08-22",
        "checkOut" => "2025-08-24",
        "nationality" => "BR",
        "skip" => 0,
        "limit" => 500,
        "country" => "BR",
        "city" => "Araçatuba",
        "rooms" => [
            [
                "adults" => 2,
                "children" => 1,
                "childrenAge" => [5],
            ],
            [
                "adults" => 3,
            ],
        ],
    ]);
    print_r($responseHotel);*/
} catch (\Ezlink\Exceptions\EzlinkException $ex) {
    var_dump($ex);
}