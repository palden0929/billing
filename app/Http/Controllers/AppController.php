<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $name = "Palden";
        $phone = "9841567890";
        $city = "Kathmandu";

        // #Using compact
        // return view("welcome", compact("name","phone","city"));

        // #Using associative array
        // return view("welcome",array(
        //     'name1' => $name,
        //     'phone' => $phone,
        //     'city' => $city,        ));

        // #Using with method
        // return view("welcome")
        // ->with('name', $name)
        // ->with('phone', $phone)
        // ->with('city', $city);

        $data['name'] = "Palden";
        $data["phone"] = "9841456789";
        $data["city"] = "Kathmandu";
        return view("welcome", $data);
    }

    public function about()
    {
        return view("about");
    }
}
