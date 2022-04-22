<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\AdminRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    private $adminRepository;

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function login(Request $request)
    {
        $adminData = $this->adminRepository->getDataByUserName($request->username);

        if($adminData->pasword == $request->password)
        {
            session()->set('current_admin', $adminData->id);
        }
        else
        {
            //show errors
            return Redirect::back();
        }

        return Redirect::route();//redirect to client panel
    }

    public function logout(Request $request)
    {
        session()->forget('current_admin');
        return Redirect::route();//redirect to login page
    }
}
