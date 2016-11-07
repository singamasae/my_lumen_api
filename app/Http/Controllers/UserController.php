<?php
namespace App\Http\Controllers;
use App\Http\Services\ReservationServices;
/**
 *
 */
class UserController extends Controller
{

        protected $reservationServices;

        public function __construct(ReservationServices $reservationServices)
        {
        	$this->reservationServices = $reservationServices;
        }

        public function findCompanyInfo($companyId)
        {
          return response()->json($this->reservationServices->findCompanyByCode($companyId));
        }
}
