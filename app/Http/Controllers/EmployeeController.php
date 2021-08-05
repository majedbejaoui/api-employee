<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getEmployees(){

     return response()->json(Employee::all(),200);

    }

    public function getEmployeeId($id){

        return response()->json(Employee::find($id),200);
   
       }


       public function addEmployee(Request $request){

        $employee = Employee::create($request->all());


        return response($employee,201);

       }


       public function updateEmployee(Request $request, $id){


        $employee=Employee::find($id);

        $employee -> update($request->all());


        return response($employee,200);
    
}
public function deleteEmployee(Request $request, $id){


    $employee=Employee::find($id);

    $employee-> delete();


    return response()->json(null,204);

}
}