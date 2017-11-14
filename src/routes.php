<?php
$routes = [
    'metadata',
    'getAccessToken',
    'getAllCountrys',
    'getCountryByCode',
    'getAllCities',
    'getCityByCode',
    'getAllAirports',
    'getAirportByCode',
    'getNearestAirports',
    'getAllAirlines',
    'getAirlineByCode',
    'getAllAircraftTypes',
    'getSeatMap',
    'getLoungeInformation',
    'getFlightStatus',
    'getFlightStatusByRoute',
    'getFlightStatusAtArrivalAirport',
    'getFlightStatusAtDepartureAirport',
    'getFlightSchedules',
    'getShipmentTracking',
    'getAllCargoFlights'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

