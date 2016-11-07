<?php
namespace App\Http\Services\Impl;

use App\Http\Services\ReservationServices;
use App\Http\Repositories\CompanyRepositoryInterface;
/**
 *
 */
class ReservationServicesImpl implements ReservationServices
{
  protected $companyRepository;

  public function __construct(CompanyRepositoryInterface $companyRepository) {
    $this->companyRepository = $companyRepository;
  }

  public function findCompanyByCode($code) {
        return $this->companyRepository->findBy('code', $code);
  }

}
