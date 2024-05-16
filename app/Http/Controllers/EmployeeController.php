<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('form');   
    }


    // public function create()
    // {
    //   $url = url('/employee');
    //   $result = compact('url');
    //   return view('employee')->with('$result');  
    // }


    public function store(Request $request)
    {
      $request->validate(
        [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'department' => 'required',
        'mobile' => 'required|numeric',
        ]
      );


              
      
      $employee = new Employee;
      $employee->first_name = $request['first_name'];
      $employee->last_name = $request['last_name']; 
      $employee->gender = $request['gender'];
      $employee->email = $request['email'];
      $employee->address = $request['address'];
      $employee->department = $request['department'];
      $employee->mobile = $request['mobile'];
      $employee->save();

      return redirect('/employee/view')->with("Employee registered successfully");
    }

    public function view(Request $request)
    {
      $search = $request['search'] ?? "";
      if($search != "")
      {
        $employees= Employee::where('first_name', 'LIKE', "%$search%")->orWhere('last_name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
      } 
      else{
        $employees = Employee::all();
      }   
       
      // echo "<pre>";
      // print_r($employees->toArray());
      $data = compact('employees', 'search');
      return view('employee-view')->with($data);

    }
    public function delete($id)
    {
      $data = Employee::find($id)->delete();
      // echo "<pre>";
      // print_r($data);
      return redirect()->back();
    }

    public function edit($id)
    {
      
      
      
      $data =Employee::findOrFail($id);
      return view('edit',[
        'data' => $data
      ]);
    }

    public function update($id, Request $request)
    {
      $data =Employee::findOrFail($id);

      

      $request->validate(
        [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'department' => 'required',
        'mobile' => 'required|numeric',
        ]
        );

        $data->first_name = $request['first_name'];
        $data->last_name = $request['last_name']; 
        $data->gender = $request['gender'];
        $data->email = $request['email'];
        $data->address = $request['address'];
        $data->department = $request['department'];
        $data->mobile = $request['mobile'];
        $data->save();
        return redirect('/employee/view')->with('Employee updated successfully');        

        
    }
  }


