<?php

namespace App\Http\Controllers\Crowdtize;

use App\Exports\Crowdtize\AllUsersExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PageContoller extends Controller
{
    //

    public function export(){


        return (new AllUsersExport(request()->input()))->download( 'users.xlsx');


    }


}
