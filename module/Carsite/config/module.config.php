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
        'db-connected' => array(
            'Carsite\\V1\\Rest\\Fillups\\FillupsResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'fillups',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\Fillups\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\Fillups\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Carsite\\V1\\Rest\\Fillups\\Validator' => array(
            0 => array(
                'name' => 'odometer',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            1 => array(
                'name' => 'price',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'volume',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'partial',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'missed',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            5 => array(
                'name' => 'vehicle',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'date',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            7 => array(
                'name' => 'payment_type',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'fuel_type',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'fuel_grade',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '20',
                        ),
                    ),
                ),
            ),
            10 => array(
                'name' => 'station_name',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'station_address',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            12 => array(
                'name' => 'note',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '140',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
