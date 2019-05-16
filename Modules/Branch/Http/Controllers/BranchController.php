<?php

namespace Modules\Branch\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Branch\Entities\Branch;

class BranchController extends Controller
{
    /**
        * Display a listing of Branch.  
    */
    public function index()
    { 
        $branch = Branch::where(function($query) use($request)
            { 
                if($request->has('branch_id')) 
                {
                    $query->where('branch_id' , $request->branch_id);
                } 
            })->paginate(10);

        return responsejson(1 , 'ok' , $branch);  
    }
 
    /**
        * Store a newly Branch. 
        * @bodyParam name string required The name of the Branch.    
        * @bodyParam open_time time required The time opening of the Branch.   
        * @bodyParam close_time time required The time closeing of the Branch.   
        * @bodyParam city_id int required The name of city the Branch was located.  
    */   
    public function store(Request $request)
    { 
        $data = $request->all(); 
        $validator = validator()->make($data, [
            'name'          => 'required|min:6',  
            'open_time'     => 'required|date_format:H:i',  
            'close_time'    => 'required|date_format:H:i|after:time_start',
            'city_id'       => 'required|numeric',  
        ]); 
        if ($validator->fails()) 
        {
            return responsejson(1 , $validator->errors()->first() , $validator->errors()); 
        }  
        $branch = Branch::create($request->all());   
        $branch->save();  
        return responsejson(1 , 'OK' ,$branch);
    }


    /**
         * Show the Branch.
         * @bodyParam  int $id required
     */ 
    public function show($id)
    {   
        $branch = Branch::find($id); 
        if(! $branch)
        {
            return responsejson( 0 , 'OPPs' , 'There Is No Branch Request');
        } 
        return responsejson(1 , 'OK' , $branch);  
    }  
   
 
    /**
        * Update Branch. 
        * @bodyParam name string required The name of the Branch.    
        * @bodyParam open_time time required The time opening of the Branch.   
        * @bodyParam close_time time required The time closeing of the Branch.   
        * @bodyParam city_id int required The name of city the Branch was located. 
    */   
    public function update(request $request , $id)
    { 
        $branch = Branch::find($id); 
        if (!$branch)
        {
            return responseJson(0 , 'OPPs' , 'There Is No Branch Request');
        } 
        $data = $request->all(); 
        $validator = validator()->make($data, [ 
            'name'          => 'required|min:6',  
            'open_time'     => 'required|date_format:H:i',  
            'close_time'    => 'required|date_format:H:i|after:time_start',
            'city_id'       => 'required|numeric',  
        ]); 
        if ($validator->fails()) 
        {
            return responsejson(0 , $validator->errors()->first() , $validator->errors()); 
        }    
        $branch->update($data); 
        return responsejson(1 , 'OK' , $branch); 
    }   


    /**
         * Remove the Branch.
         * @bodyParam  int $id required
     */
    public function destroy($id)
    {
        $branch = Branch::find($id);
        if (!$branch)
        {
            return responseJson(0 , 'OPPs' , 'There Is No Branch Request');
        } 
        $branch->delete();
        return responseJson(1 , 'OK' , 'Deleted done successfully');
    }
 
}
