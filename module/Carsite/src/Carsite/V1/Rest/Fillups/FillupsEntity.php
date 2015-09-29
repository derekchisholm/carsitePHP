<?php
namespace Carsite\V1\Rest\Fillups;

class FillupsEntity
{
    public $id;
    public $odmeter;
    public $price;
    public $volume;
    public $cost;
    public $partial;
    public $missed;
    public $date;
    public $paymentType;
    public $fuelType;
    public $fuelGrade;
    public $stationName;
    public $stationAddress;
    public $note;
    
    public function getArrayCopy()
    {
        return array(
            'id'                => $this->id,
            'odometer'          => $this->odmeter,
            'price'             => $this->price,
            'volume'            => $this->volume,
            'cost'              => $this->cost,
            'partial'           => $this->partial,
            'missed'            => $this->missed,
            'date'              => $this->date,
            'payment_type'      => $this->paymentType,
            'fuel_type'         => $this->fuelType,
            'fuel_grade'        => $this->fuelGrade,
            'station_name'      => $this->stationName,
            'station_address'   => $this->stationAddress,
            'note'              => $this->note,
        );
    }
    
    public function exchangeArray(array $array)
    {
        $this->id               = $array['id'];
        $this->odometer         = $array['odometer'];
        $this->price            = $array['price'];
        $this->volume           = $array['volume'];
        $this->cost             = $array['cost'];
        $this->partial          = $array['partial'];
        $this->missed           = $array['missed'];
        $this->date             = $array['date'];
        $this->payment_type     = $array['payment_type'];
        $this->fuel_type        = $array['fuel_type'];
        $this->fuel_grade       = $array['fuel_grade'];
        $this->station_name     = $array['station_name'];
        $this->station_address  = $array['station_address'];
        $this->note             = $array['note'];
    }
}
