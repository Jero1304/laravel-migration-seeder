<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\treno;

class Controller extends BaseController
{
    public function index(){

        $trains = treno::where('departure_time', '>=', now())->get();

        $data =[
            'trains' => $trains
        ];

        return view('trains.index',$data);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
