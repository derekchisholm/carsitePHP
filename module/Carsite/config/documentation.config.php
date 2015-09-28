<?php
return array(
    'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
        'description' => 'The fillups service returns a collection or entity of fill-up records for a logged on user.',
        'collection' => array(
            'description' => 'The fillup collection returns fill-up records for each of a users vehicles.',
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/fillups"
       },
       "first": {
           "href": "/fillups?page={page}"
       },
       "prev": {
           "href": "/fillups?page={page}"
       },
       "next": {
           "href": "/fillups?page={page}"
       },
       "last": {
           "href": "/fillups?page={page}"
       }
   }
   "_embedded": {
       "fillups": [
           {
               "_links": {
                   "self": {
                       "href": "/fillups[/:fillups_id]"
                   }
               }
              "odometer": "Odometer must be an integer value between 0 and 999,999",
              "price": "A decimal value up to 9999.999",
              "volume": "Decimal value between 0.001 and 999",
              "cost": "Total cost of a fill-up calculated by multiplying price and volume",
              "partial": "Partial is a simple Y/N field",
              "missed": "Missed is a simple Y/N field",
              "vehicle": "A user vehicle identifier",
              "date": "date should be unix date format ex. 2015-08-08T11:45:00.511Z",
              "payment_type": "payment_type identifies how the fill-up was paid for",
              "fuel_type": "fuel_type is the type of fuel used in the vehicle",
              "fuel_grade": "fuel_grade is the quality grade of fuel used in the vehicle",
              "station_name": "station_name is an optional field identifying where the fuel was purchased",
              "station_address": "station_address is an option field storing the address of the fuel statoin",
              "note": "note is an optional field to store notes about the fill-up"
           }
       ]
   }
}',
                'description' => 'GET all fill-up records belonging to a user.',
            ),
        ),
        'entity' => array(
            'description' => 'A fillups entity returns details for a single fill-up record.',
            'GET' => array(
                'description' => 'GET a specific fuel record',
                'response' => '{
   "_links": {
       "self": {
           "href": "/fillups[/:fillups_id]"
       }
   }
   "odometer": "Odometer must be an integer value between 0 and 999,999",
   "price": "A decimal value up to 9999.999",
   "volume": "Decimal value between 0.001 and 999",
   "cost": "Total cost of a fill-up calculated by multiplying price and volume",
   "partial": "Partial is a simple Y/N field",
   "missed": "Missed is a simple Y/N field",
   "vehicle": "A user vehicle identifier",
   "date": "date should be unix date format ex. 2015-08-08T11:45:00.511Z",
   "payment_type": "payment_type identifies how the fill-up was paid for",
   "fuel_type": "fuel_type is the type of fuel used in the vehicle",
   "fuel_grade": "fuel_grade is the quality grade of fuel used in the vehicle",
   "station_name": "station_name is an optional field identifying where the fuel was purchased",
   "station_address": "station_address is an option field storing the address of the fuel statoin",
   "note": "note is an optional field to store notes about the fill-up"
}',
            ),
        ),
    ),
);
