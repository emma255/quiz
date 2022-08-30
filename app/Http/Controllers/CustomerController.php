<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use DateTime;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::oldest('firstname')->get()->each(
            function ($cs) {
                $d1 = new DateTime($cs->dob);
                $diff = now()->diff($d1);
                $cs->age = $diff->y;
                $cs->created = date('Y-m-d', strtotime($cs->created_at));
            }

        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:10',
            'lastname' => 'required|max:10',
            'gender' => 'required|string|max:6',
            'dob' => 'nullable|date',
            'photo' => 'nullable|image'
        ]);


        try {
            if ($request->dob) {
                $dob = new DateTime($request->dob);

                $diff = now()->diff($dob);
                if ($diff->y < 18) {
                    throw new Exception("Minimum age required is 18");
                }
            }

            $path = null;
            if ($request->photo) {
                $path = $request->photo->store('public/customers');
            }
            Customer::create($request->post() + ['photo' => str_replace('public', 'storage', $path)]);

            return response()->json([
                'message' => 'Customer registered Successfully!!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Something goes wrong while registering customer!!'
            ], 500);
        }
    }
}
