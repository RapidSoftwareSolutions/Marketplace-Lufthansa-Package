[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Lufthansa/functions?utm_source=RapidAPIGitHub_LufthansaFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Lufthansa Package
Is the largest German airline and, when combined with its subsidiaries, also the largest airline in Europe, in terms of fleet size.
* Domain: [www.lufthansa.com](https:\/\/www.lufthansa.com)
* Credentials: clientId, clientSecret

## How to get credentials: 
0. Register on the [www.lufthansa.com](https:\/\/www.lufthansa.com)
1. [Create](https:\/\/developer.lufthansa.com\/apps\/mykeys) an application for a new API credentials
2. After creation app , you will see clientId and clientSecret

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## Lufthansa.getAccessToken
Access to our services is controlled via tokens (Oauth 2.0). To get a token you must call our token end-point and supply your client key and client secret. Tokens remain valid for a limited time.

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| Your client id.
| clientSecret| credentials| Your client secret.

## Lufthansa.getAllCountries
Get List all countries. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| language   | String| 2 letter ISO 3166-1 language code.
| limit      | Number| Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number| Number of records skipped. Defaults to 0.

## Lufthansa.getCountryByCode
Get countries by code. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| countryCode| String| 2-letter ISO 3166-1 country code. Example - DK.
| language   | String| 2 letter ISO 3166-1 language code.

## Lufthansa.getAllCities
List all cities. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| language   | String| 2 letter ISO 3166-1 language code.
| limit      | Number| Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number| Number of records skipped. Defaults to 0.

## Lufthansa.getCityByCode
Get one specific city. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| cityCode   | String| 3-letter IATA city code.Example - BER.
| language   | String| 2 letter ISO 3166-1 language code.

## Lufthansa.getAllAirports
Get all airports. All airports response is very large. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| language   | String| 2 letter ISO 3166-1 language code.
| limit      | Number| Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number| Number of records skipped. Defaults to 0.
| LHoperated | Select| Restrict the results to locations with flights operated by LH (false=0, true=1). 

## Lufthansa.getAirportByCode
Get airport by code. All airports response is very large. It is possible to request the response in a specific language.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| airportCode   | String| 3-letter IATA airport code.Example - TXL.
| language   | String| 2 letter ISO 3166-1 language code.
| LHoperated | Select| Restrict the results to locations with flights operated by LH (false=0, true=1). 

## Lufthansa.getNearestAirports
List the 5 closest airports to the given latitude and longitude, irrespective of the radius of the reference point.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| language   | String| 2 letter ISO 3166-1 language code.
| coordinates| Map   | Latitude and Longitude in decimal format to at most 3 decimal places.

## Lufthansa.getAllAirlines
Get List all airlines.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| limit      | Number| Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number| Number of records skipped. Defaults to 0.

## Lufthansa.getAirlineByCode
Get airline by code.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| airlineCode| String| 2-character IATA airline/carrier code.Example - LH.

## Lufthansa.getAllAircraftTypes
Get List all aircraft types.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| limit      | Number| Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number| Number of records skipped. Defaults to 0.

## Lufthansa.getAircraftTypeByCode
Get aircraft type by code.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| aircraftCode| String| 3-character IATA aircraft code.

## Lufthansa.getSeatMap
Cabin layout and seat characteristics.

| Field       | Type      | Description
|-------------|-----------|----------
| accessToken | String    | Access token form getAccessToken method.
| flightNumber| String    | Flight number including carrier code and any suffix (e.g. 'LH2037')
| origin      | String    | Departure airport. 3-letter IATA airport code (e.g. 'TXL').
| destination | String    | Destination airport. 3-letter IATA airport code (e.g. 'MUC').
| date        | DatePicker| Departure date (YYYY-MM-DD).
| cabinClass  | Select    | Cabin class: 'M', 'E', 'C', 'F'. Some flights have fewer classes.

## Lufthansa.getLoungeInformation
Get List all aircraft types.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| language   | String| 2 letter ISO 3166-1 language code.
| location   | String| 3-leter IATA airport or city code (e.g. 'ZRH').
| cabinClass | Select| Cabin class: 'M', 'E', 'C', 'F'. Some flights have fewer classes.

## Lufthansa.getFlightStatus
Get status of a particular flight (boarding, delayed, etc.).

| Field       | Type      | Description
|-------------|-----------|----------
| accessToken | String    | Access token form getAccessToken method.
| date        | DatePicker| The departure date (YYYY-MM-DD) in the local time of the departure airport
| flightNumber| String    | Flight number including carrier code and any suffix (e.g. 'LH400').
| limit       | Number    | Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset      | Number    | Number of records skipped. Defaults to 0.

## Lufthansa.getFlightStatusByRoute
Status of flights between a given origin and destination on a given date.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Access token form getAccessToken method.
| origin     | String    | Departure airport. 3-letter IATA airport code (e.g. 'TXL').
| destination| String    | Destination airport. 3-letter IATA airport code (e.g. 'MUC').
| date       | DatePicker| The departure date (YYYY-MM-DD) in the local time of the departure airport
| limit      | Number    | Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset     | Number    | Number of records skipped. Defaults to 0.

## Lufthansa.getFlightStatusAtArrivalAirport
Status of all arrivals at a given airport up to 4 hours from the provided date time.

| Field       | Type      | Description
|-------------|-----------|----------
| accessToken | String    | Access token form getAccessToken method.
| airportCode | String    | 3-letter IATA aiport code (e.g. 'ZRH').
| fromDateTime| DatePicker| Start of time range in local time of arrival airport (YYYY-MM-DDTHH:mm).
| limit       | Number    | Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset      | Number    | Number of records skipped. Defaults to 0.

## Lufthansa.getFlightStatusAtDepartureAirport
Status of all departures from a given airport up to 4 hours from the provided date time.

| Field       | Type      | Description
|-------------|-----------|----------
| accessToken | String    | Access token form getAccessToken method.
| airportCode | String    | 3-letter IATA aiport code (e.g. 'ZRH').
| fromDateTime| DatePicker| Start of time range in local time of arrival airport (YYYY-MM-DDTHH:mm).
| limit       | Number    | Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset      | Number    | Number of records skipped. Defaults to 0.

## Lufthansa.getFlightSchedules
Scheduled flights between given airports on a given date.

| Field        | Type      | Description
|--------------|-----------|----------
| accessToken  | String    | Access token form getAccessToken method.
| origin       | String    | Departure airport. 3-letter IATA airport code (e.g. 'TXL').
| destination  | String    | Destination airport. 3-letter IATA airport code (e.g. 'MUC').
| directFlights| Select    | Show only direct flights (false=0, true=1). Default is false.
| fromDateTime | DatePicker| Local departure date and optionally departure time (YYYY-MM-DD or YYYY-MM-DDTHH:mm). When not provided, time is assumed to be 00:01.
| limit        | Number    | Number of records returned per request. Defaults to 20, maximum is 100 (if a value bigger than 100 is given, 100 will be taken).
| offset       | Number    | Number of records skipped. Defaults to 0.

## Lufthansa.getShipmentTracking
With this tracking service you can easily retrieve your shipment or flight status information.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token form getAccessToken method.
| aWBPrefix  | String| aWBPrefix : Represents the airline that is the owner of this AWB, i.e. `020` = Lufthansa Cargo, format : [0-9]{3} e.g. 020.
| aWBNumber  | String| aWBNumber : The Air Waybill Number , format : 0-9{8} e.g. 08002050.

## Lufthansa.getAllCargoFlights
Retrieve a list of all possible flights (both direct and connecting) between two airports on a given date. Routes are available for today and up to days in the future.

| Field      | Type      | Description
|------------|-----------|----------
| accessToken| String    | Access token form getAccessToken method.
| origin     | String    | Departure airport. 3-letter IATA airport code (e.g. 'TXL').
| destination| String    | Destination airport. 3-letter IATA airport code (e.g. 'MUC').
| fromDate   | DatePicker| Departure date in the local time of the departure airport. Based on LAT (Latest Acceptance Time). format : yyyy-MM-dd eg : 2017-07-15.
| productCode| Select    | Product code for requested service and specials : 3-letter eg: YNZ.

