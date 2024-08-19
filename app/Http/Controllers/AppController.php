<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
        // Insert
        $param = array(
            "full_name" => "Palden",
        );
        //DB::table("parties")->insert($param);

        // Select
        $party = DB::table("parties")
            -> get();
        
        // Select one specific record
        $party = DB::table("parties")
            ->where('phone_no',"9841098765")
            -> get();
        
        echo "<pre>";
        print_r($party);

        // Update
        $param = array(
            "full_name" => "Hariram Prasad",
        );
        // DB::table("parties")
        // ->where("id",6)
        // ->update($param);

        // Delete
        DB::table("parties")
        ->where("id",7)
        ->delete();

        return "Database Operations";
        //return view("welcome");
    }

    public function about()
    {
        return view("about");
    }
}
