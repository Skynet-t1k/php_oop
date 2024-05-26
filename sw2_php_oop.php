<?php


class Continent
{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }

    public function getMyCurrentLocation()
    {
        return "Mi trovo in " . $this->nameContinent;
    }
}

class Country extends Continent
{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }

    public function getMyCurrentLocation()
    {
        return parent::getMyCurrentLocation() . ", " . $this->nameCountry;
    }
}

class Region extends Country
{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }

    public function getMyCurrentLocation()
    {
        return parent::getMyCurrentLocation() . ", " . $this->nameRegion;
    }
}

class Province extends Region
{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }

    public function getMyCurrentLocation()
    {
        return parent::getMyCurrentLocation() . ", " . $this->nameProvince;
    }
}

class City extends Province
{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }

    public function getMyCurrentLocation()
    {
        return parent::getMyCurrentLocation() . ", " . $this->nameCity;
    }
}

class Street extends City
{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation()
    {
        return parent::getMyCurrentLocation() . ", " . $this->nameStreet;
    }
}

$myLocation = new Street("Europa", "Italia", "Sicilia", "Sr", "Siracusa", "Strada San Giorgio Martire 2D");
echo $myLocation->getMyCurrentLocation();
