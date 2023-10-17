<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    public function create(){
        return view('company/create');
    }

    public function store(CompanyRequest $request){
        
        $company = new Companies;

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->country = $request->country;
        $company->address = $request->address;
        $company->city = $request->city;
    
        $company->save();
        return redirect()->back()->with('message','Company are created');
    }

     public function delete($id){
        Companies::where('id',$id)->firstOrFail()->delete();
        return redirect()->back()->with('danger_message','Company are deleted');
    }

    public function edit($id){

       
        return view('company/edit',
            ['edit'=>Companies::find($id)
            ]);
             

    }

    public function update(CompanyRequest $request,$id){

        $company = Companies::find($id);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->country = $request->country;
        $company->city = $request->city;
        $company->address = $request->address;
        
        $company->update();

        return redirect()->back()->with('message','Company are updated');
    }

}

