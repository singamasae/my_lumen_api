<?php
namespace App\Http\Repositories\Impl;

use App\Http\Repositories\CompanyRepositoryInterface;
use App\Company;
/**
 *
 */
class CompanyRepository implements CompanyRepositoryInterface
{
          protected $model;

          public function __construct(Company $model)
          {
                  $this->model = $model;
          }

          public function findAll()
          {
                  return $this->model->all();
          }

          public function findBy($att, $column)
          {
                  return $this->model->where($att, $column)->get();

          }
}
