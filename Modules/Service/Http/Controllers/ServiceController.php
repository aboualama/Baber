<?php

namespace Modules\Service\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Service\Entities\Service;

class ServiceController extends Controller
{
    /**
        * Display a listing of Service.  
    */
    public function index(Request $request)
    { 
        $service = Service::get();

        return responsejson(1 , 'ok' , $service); 
    }
 
    /**
        * Store a newly Service. 
        * @bodyParam name string required The name of the Service.    
        * @bodyParam price time required The price of the Service.    
    */   
    public function store(Request $request)
    { 
        $data = $request->all(); 
        $validator = validator()->make($data, [
            'name'   => 'required|min:6',  
            'price'  => 'required',   
        ]); 
        if ($validator->fails()) 
        {
            return responsejson(1 , $validator->errors()->first() , $validator->errors()); 
        }  
        $service = Service::create($request->all());   
        $service->save();  
        return responsejson(1 , 'OK' ,$service);
    }


    /**
         * Show the Service.
         * @bodyParam  int $id required
     */ 
    public function show($id)
    {   
        $service = Service::find($id); 
        if(! $service)
        {
            return responsejson( 0 , 'OPPs' , 'There Is No Service Request');
        } 
        return responsejson(1 , 'OK' , $service);  
    }  
   
 
    /**
        * Update Service. 
        * @bodyParam name string required The name of the Service.    
        * @bodyParam price time required The price of the Service.  
    */   
    public function update(request $request , $id)
    { 
        $service = Service::find($id); 
        if (!$service)
        {
            return responseJson(0 , 'OPPs' , 'There Is No Service Request');
        } 
        $data = $request->all(); 
        $validator = validator()->make($data, [ 
            'name'   => 'required|min:6',  
            'price'  => 'required',   
        ]); 
        if ($validator->fails()) 
        {
            return responsejson(0 , $validator->errors()->first() , $validator->errors()); 
        }    
        $service->update($data); 
        return responsejson(1 , 'OK' , $service); 
    }   


    /**
         * Remove the Service.
         * @bodyParam  int $id required
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service)
        {
            return responseJson(0 , 'OPPs' , 'There Is No Service Request');
        } 
        $service->delete();
        return responseJson(1 , 'OK' , 'Deleted done successfully');
    }
 
}
