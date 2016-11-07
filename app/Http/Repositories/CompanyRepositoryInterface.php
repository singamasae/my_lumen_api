<?php

namespace App\Http\Repositories;

interface CompanyRepositoryInterface
{
    public function findAll();
    public function findBy($att, $column);
}
