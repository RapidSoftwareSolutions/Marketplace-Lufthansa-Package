<?php
$routes = [
    'metadata',
    'getAccessToken',
    'getAllCountries',
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
    'getAllCargoFlights',
    'getAircraftTypeByCode'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

