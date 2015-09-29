<?php
return array(
    'router' => array(
        'routes' => array(
            'carsite.rest.fillups' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/fillups[/:fillups_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\Fillups\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'carsite.rest.fillups',
        ),
    ),
    'zf-rest' => array(
        'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\Fillups\\FillupsResource',
            'route_name' => 'carsite.rest.fillups',
            'route_identifier_name' => 'fillups_id',
            'collection_name' => 'fillups',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Carsite\\V1\\Rest\\Fillups\\FillupsEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\Fillups\\FillupsCollection',
            'service_name' => 'fillups',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Carsite\\V1\\Rest\\Fillups\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Carsite\\V1\\Rest\\Fillups\\FillupsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.fillups',
                'route_identifier_name' => 'fillups_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\Fillups\\FillupsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.fillups',
                'route_identifier_name' => 'fillups_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(),
    ),
    'zf-content-validation' => array(
        'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\Fillups\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Carsite\\V1\\Rest\\Fillups\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Between',
                        'options' => array(
                            'min' => '0',
                            'max' => '999999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'odometer',
                'description' => 'Odometer must be an integer value between 0 and 999,999',
                'error_message' => 'Odometer must be number between 0 and 999,999',
            ),
            1 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Between',
                        'options' => array(
                            'min' => '0.001',
                            'max' => '9999.999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'price',
                'description' => 'A decimal value up to 9999.999',
                'error_message' => 'Price must be between $0.001 and $9999.999',
            ),
            2 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Between',
                        'options' => array(
                            'min' => '0.001',
                            'max' => '999.999',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'volume',
                'description' => 'Decimal value between 0.001 and 999',
                'error_message' => 'Volume must be between 0.001 and 999',
            ),
            3 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'cost',
                'description' => 'Total cost of a fill-up calculated by multiplying price and volume',
            ),
            4 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'description' => 'Partial is a simple Y/N field',
                'name' => 'partial',
            ),
            5 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'description' => 'Missed is a simple Y/N field',
                'name' => 'missed',
            ),
            6 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'vehicle',
                'description' => 'A user vehicle identifier',
                'error_message' => 'A vehicle must be selected',
            ),
            7 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'date',
                'error_message' => 'Enter the date the vehicle fuel was filled',
                'description' => 'date should be unix date format ex. 2015-08-08T11:45:00.511Z',
            ),
            8 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '15',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'payment_type',
                'description' => 'payment_type identifies how the fill-up was paid for',
                'error_message' => 'Select a payment type',
                'allow_empty' => true,
            ),
            9 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '15',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'fuel_type',
                'description' => 'fuel_type is the type of fuel used in the vehicle',
                'error_message' => 'Select a fuel type',
                'allow_empty' => true,
            ),
            10 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '20',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'fuel_grade',
                'description' => 'fuel_grade is the quality grade of fuel used in the vehicle',
                'error_message' => 'Select a fuel grade',
                'allow_empty' => true,
            ),
            11 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '45',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'station_name',
                'description' => 'station_name is an optional field identifying where the fuel was purchased',
                'error_message' => 'Station name must be 45 characters or less',
                'continue_if_empty' => false,
                'allow_empty' => true,
            ),
            12 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '45',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'station_address',
                'description' => 'station_address is an option field storing the address of the fuel statoin',
                'allow_empty' => true,
                'error_message' => 'Station address must be 45 characters or less',
            ),
            13 => array(
                'required' => false,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '140',
                        ),
                    ),
                ),
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'name' => 'note',
                'description' => 'note is an optional field to store notes about the fill-up',
                'allow_empty' => true,
                'error_message' => 'Note must be 140 characters or less',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Carsite\\V1\\Rest\\Fillups\\FillupsResource' => 'Carsite\\V1\\Rest\\Fillups\\FillupsResourceFactory',
        ),
    ),
    'view_manager' => array(
        'display_exceptions' => true,
    ),
);
