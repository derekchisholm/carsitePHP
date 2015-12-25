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
            'carsite.rest.service' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service[/:service_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\Service\\Controller',
                    ),
                ),
            ),
            'carsite.rest.service-item' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service_item[/:service_item_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\ServiceItem\\Controller',
                    ),
                ),
            ),
            'carsite.rest.service-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service_type[/:service_type_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\ServiceType\\Controller',
                    ),
                ),
            ),
            'carsite.rest.service-fee' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service_fee[/:service_fee_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\ServiceFee\\Controller',
                    ),
                ),
            ),
            'carsite.rest.service-labor' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service_labor[/:service_labor_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\ServiceLabor\\Controller',
                    ),
                ),
            ),
            'carsite.rest.service-part' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/service_part[/:service_part_id]',
                    'defaults' => array(
                        'controller' => 'Carsite\\V1\\Rest\\ServicePart\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'carsite.rest.fillups',
            1 => 'carsite.rest.service',
            2 => 'carsite.rest.service-item',
            3 => 'carsite.rest.service-type',
            4 => 'carsite.rest.service-fee',
            5 => 'carsite.rest.service-labor',
            6 => 'carsite.rest.service-part',
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
        'Carsite\\V1\\Rest\\Service\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\Service\\ServiceResource',
            'route_name' => 'carsite.rest.service',
            'route_identifier_name' => 'service_id',
            'collection_name' => 'service',
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
            'collection_query_whitelist' => array(
                0 => 'vehicle_id',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Carsite\\V1\\Rest\\Service\\ServiceEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\Service\\ServiceCollection',
            'service_name' => 'service',
        ),
        'Carsite\\V1\\Rest\\ServiceItem\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemResource',
            'route_name' => 'carsite.rest.service-item',
            'route_identifier_name' => 'service_item_id',
            'collection_name' => 'service_item',
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
            'entity_class' => 'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemCollection',
            'service_name' => 'service_item',
        ),
        'Carsite\\V1\\Rest\\ServiceType\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeResource',
            'route_name' => 'carsite.rest.service-type',
            'route_identifier_name' => 'service_type_id',
            'collection_name' => 'service_type',
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
            'entity_class' => 'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeCollection',
            'service_name' => 'service_type',
        ),
        'Carsite\\V1\\Rest\\ServiceFee\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeResource',
            'route_name' => 'carsite.rest.service-fee',
            'route_identifier_name' => 'service_fee_id',
            'collection_name' => 'service_fee',
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
            'entity_class' => 'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeCollection',
            'service_name' => 'service_fee',
        ),
        'Carsite\\V1\\Rest\\ServiceLabor\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborResource',
            'route_name' => 'carsite.rest.service-labor',
            'route_identifier_name' => 'service_labor_id',
            'collection_name' => 'service_labor',
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
            'entity_class' => 'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborCollection',
            'service_name' => 'service_labor',
        ),
        'Carsite\\V1\\Rest\\ServicePart\\Controller' => array(
            'listener' => 'Carsite\\V1\\Rest\\ServicePart\\ServicePartResource',
            'route_name' => 'carsite.rest.service-part',
            'route_identifier_name' => 'service_part_id',
            'collection_name' => 'service_part',
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
            'entity_class' => 'Carsite\\V1\\Rest\\ServicePart\\ServicePartEntity',
            'collection_class' => 'Carsite\\V1\\Rest\\ServicePart\\ServicePartCollection',
            'service_name' => 'service_part',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Carsite\\V1\\Rest\\Fillups\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\Service\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\ServiceItem\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\ServiceType\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\ServiceFee\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\ServiceLabor\\Controller' => 'HalJson',
            'Carsite\\V1\\Rest\\ServicePart\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\Service\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceItem\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceType\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceFee\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceLabor\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServicePart\\Controller' => array(
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
            'Carsite\\V1\\Rest\\Service\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceItem\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceType\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceFee\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServiceLabor\\Controller' => array(
                0 => 'application/vnd.carsite.v1+json',
                1 => 'application/json',
            ),
            'Carsite\\V1\\Rest\\ServicePart\\Controller' => array(
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
            'Carsite\\V1\\Rest\\Service\\ServiceEntity' => array(
                'entity_identifier_name' => 'service_id',
                'route_name' => 'carsite.rest.service',
                'route_identifier_name' => 'service_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\Service\\ServiceCollection' => array(
                'entity_identifier_name' => 'service_id',
                'route_name' => 'carsite.rest.service',
                'route_identifier_name' => 'service_id',
                'is_collection' => true,
            ),
            'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemEntity' => array(
                'entity_identifier_name' => 'service_item_id',
                'route_name' => 'carsite.rest.service-item',
                'route_identifier_name' => 'service_item_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemCollection' => array(
                'entity_identifier_name' => 'service_item_id',
                'route_name' => 'carsite.rest.service-item',
                'route_identifier_name' => 'service_item_id',
                'is_collection' => true,
            ),
            'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-type',
                'route_identifier_name' => 'service_type_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-type',
                'route_identifier_name' => 'service_type_id',
                'is_collection' => true,
            ),
            'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-fee',
                'route_identifier_name' => 'service_fee_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-fee',
                'route_identifier_name' => 'service_fee_id',
                'is_collection' => true,
            ),
            'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-labor',
                'route_identifier_name' => 'service_labor_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-labor',
                'route_identifier_name' => 'service_labor_id',
                'is_collection' => true,
            ),
            'Carsite\\V1\\Rest\\ServicePart\\ServicePartEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-part',
                'route_identifier_name' => 'service_part_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Carsite\\V1\\Rest\\ServicePart\\ServicePartCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'carsite.rest.service-part',
                'route_identifier_name' => 'service_part_id',
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
            'Carsite\\V1\\Rest\\Service\\ServiceResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\Service\\Controller',
                'entity_identifier_name' => 'service_id',
                'table_service' => 'Carsite\\V1\\Rest\\Service\\ServiceResource\\Table',
            ),
            'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service_item',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\ServiceItem\\Controller',
                'entity_identifier_name' => 'service_item_id',
                'table_service' => 'Carsite\\V1\\Rest\\ServiceItem\\ServiceItemResource\\Table',
            ),
            'Carsite\\V1\\Rest\\ServiceType\\ServiceTypeResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service_type',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\ServiceType\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'Carsite\\V1\\Rest\\ServiceFee\\ServiceFeeResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service_fee',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\ServiceFee\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'Carsite\\V1\\Rest\\ServiceLabor\\ServiceLaborResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service_labor',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\ServiceLabor\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'Carsite\\V1\\Rest\\ServicePart\\ServicePartResource' => array(
                'adapter_name' => 'CarsiteDb',
                'table_name' => 'service_part',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'Carsite\\V1\\Rest\\ServicePart\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Carsite\\V1\\Rest\\Fillups\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\Fillups\\Validator',
        ),
        'Carsite\\V1\\Rest\\Service\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\Service\\Validator',
        ),
        'Carsite\\V1\\Rest\\ServiceItem\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\ServiceItem\\Validator',
        ),
        'Carsite\\V1\\Rest\\ServiceType\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\ServiceType\\Validator',
        ),
        'Carsite\\V1\\Rest\\ServiceFee\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\ServiceFee\\Validator',
        ),
        'Carsite\\V1\\Rest\\ServiceLabor\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\ServiceLabor\\Validator',
        ),
        'Carsite\\V1\\Rest\\ServicePart\\Controller' => array(
            'input_filter' => 'Carsite\\V1\\Rest\\ServicePart\\Validator',
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
        'Carsite\\V1\\Rest\\Service\\Validator' => array(
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
                'name' => 'invoice_total',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
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
            3 => array(
                'name' => 'vehicle_id',
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
            4 => array(
                'name' => 'date',
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
                            'max' => '25',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'service_writer',
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
                            'max' => '25',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'service_location',
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
            7 => array(
                'name' => 'service_location_address',
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
            8 => array(
                'name' => 'service_note',
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
        ),
        'Carsite\\V1\\Rest\\ServiceItem\\Validator' => array(
            0 => array(
                'name' => 'quantity',
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
            1 => array(
                'name' => 'unit_price',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'total_price',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'technician',
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
                            'max' => '25',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'type_id',
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
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'CarsiteDb',
                            'table' => 'service_type',
                            'field' => 'type_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '10',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'part_id',
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
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'CarsiteDb',
                            'table' => 'service_part',
                            'field' => 'part_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '10',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'labor_id',
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
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'CarsiteDb',
                            'table' => 'service_labor',
                            'field' => 'labor_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '10',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'fee_id',
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
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'CarsiteDb',
                            'table' => 'service_fee',
                            'field' => 'fee_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '10',
                        ),
                    ),
                ),
            ),
        ),
        'Carsite\\V1\\Rest\\ServiceType\\Validator' => array(
            0 => array(
                'name' => 'type_description',
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
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
        'Carsite\\V1\\Rest\\ServiceFee\\Validator' => array(
            0 => array(
                'name' => 'fee_description',
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
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
        'Carsite\\V1\\Rest\\ServiceLabor\\Validator' => array(
            0 => array(
                'name' => 'labor_description',
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
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
        'Carsite\\V1\\Rest\\ServicePart\\Validator' => array(
            0 => array(
                'name' => 'part_description',
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
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
    ),
);
