<?php

namespace Core\Repositories;

use Core\Eloquent\Repository;

class CountryStateRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Core\Contracts\CountryState';
    }
}