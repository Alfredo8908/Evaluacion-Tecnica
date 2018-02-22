<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


class EmployeeController extends Controller
{
    public function index()
    {
        $dataTemp = file_get_contents("public/element/employees.json");
        $data['employees'] = json_decode($dataTemp, true);

        return view('employee.home', $data);
    }
}