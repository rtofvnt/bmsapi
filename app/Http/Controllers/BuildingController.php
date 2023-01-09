<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Building;
use App\Models\Flat;

use Illuminate\Http\Request;


class BuildingController extends Controller
{
    



    public function building($building_id){

    
        $user = Auth::user();

        $building = Building::with('flats')->where('id',$building_id)->where('user_id',$user->id)->first();



        if($building){


            return view('building',['building'=>$building]);
           

        } else {
            exit('building record doesnt exists or you have no access right to this record');
        }
        
    }


public function toggle_flat_status($flat_id){

    $user = Auth::user();

    $flat = Flat::with('building')->where('id',$flat_id)->first();
    if($flat && $flat->building->user_id == $user->id) { // its ok 

        $flat->status_id == 0 ? $flat->status_id = 1 : $flat->status_id = 0;

        $flat->save();

        return redirect()->back()->with('message', 'Flat '.$flat->number.' status updated');
       
    } else {

        exit('nice try ... ');
    }

    


}

public function update_fat_record(Request $request){


    dd($request->all());

}
 

}
