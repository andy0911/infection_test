<?php

namespace App\Http\Controllers;

use App\Logics\SampleLogic;
use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function index(SampleLogic $logic, Request $request) {
        $test = $request->input("test", null);
        $result = $logic->doSomthing(["test" => $test]);
        return response()->json(["result" => $result]);
    }
}
