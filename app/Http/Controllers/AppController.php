<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
    public function index()
    {
        // Insert
        $party = new Party();
        $party->full_name = "Palden Lama";
        $party->phone_no = "9845554151";
        //$party->save();

        // Insert - option 2
        $param = array(
            "full_name" => "Ajit",
            "phone_no" => "9841098765",
            "city" => "Sundarijal",
            "address" => "Fata Tol",
        );
        //Party::create($param);

        // Select all records
        $parties = Party::all();
        //dd($parties);

        // Select one record by id
        // $id = 1;
        //$party = Party::find($id);
        //dd($party);

        // Select one record by another column/field
        // $party = Party::where("phone_no","9841098765")->get();
        // dd($party);

        //Update
        $id = 1;
        $party = Party::find($id);
        $party->full_name = "Suman Shrestha";
        $party->phone_no = "9841567890";
        //$party->save();

        //Delete
        $id = 3;
        $party = Party::find($id);
        $party->delete();

        return "Database Operations";
        //return view("welcome");
    }

    public function about()
    {
        return view("about");
    }
}
