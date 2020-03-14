<?php

namespace Core\Repositories;

use Core\Eloquent\Repository;

class CountryRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Core\Contracts\Country';
    }
}