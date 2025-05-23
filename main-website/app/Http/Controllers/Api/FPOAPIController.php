<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FPOModel;
use Illuminate\Http\Request;

class FPOAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "name" => 'Punjab',
                "value" => 2,
                "url" => "punjab"
            ],
            [
                "name" => 'Rajasthan',
                "value" => 117,
                "url" => "rajasthan"
            ],
            [
                "name" => 'Uttar Pradesh',
                "value" => 6,
                "url" => "uttar-pradesh"
            ],
            [
                "name" => 'Gujarat',
                "value" => 82,
                "url" => "gujarat"
            ],
            [
                "name" => 'Jharkhand',
                "value" => 1,
                "url" => "jharkhand"
            ],
            [
                "name" => 'Madhya Pradesh',
                "value" => 144,
                "url" => "madhya-pradesh"
            ],
            [
                "name" => 'West Bengal',
                "value" => 4,
                "url" => "west-bengal"
            ],
            [
                "name" => 'Bihar',
                "value" => 28,
                "url" => "bihar"
            ],
            [
                "name" => 'Maharashtra',
                "value" => 214,
                "url" => "maharashtra"
            ],
            [
                "name" => 'Karnataka',
                "value" => 19,
                "url" => "karnataka"
            ],
            [
                "name" => 'Telangana',
                "value" => 44,
                "url" => "telangana"
            ],
            [
                "name" => 'Kerala',
                "value" => 1,
                "url" => "kerala"
            ],
            [
                "name" => 'Chhattisgarh',
                "value" => 5,
                "url" => "chhattisgarh"
            ],
            [
                "name" => 'Odisha',
                "value" => 3,
                "url" => "Odisha"
            ],
            [
                "name" => 'Andhra Pradesh',
                "value" => 6,
                "url" => "andhra-pradesh"
            ],
            [
                "name" => 'Tamil Nadu',
                "value" => 6,
                "url" => "tamil-nadu"
            ],
        ];

        $values = array_column($data, 'value');
        $max = max($values);
        $min = min($values);

        if(request()->input('state')){
            $states = array_column($data, 'name');
            foreach ($states as $key => $value) {
                if(request()->input('state') == $value){
                    $tdata = $data[$key];
                    break;
                } else {
                    $tdata = [
                        "name" => $value,
                        "value" => 000,
                        "url" => null
                    ];
                }
            }
            return response()->json([
                'status' => true,
                'data' => $tdata
            ]);
        } else {
            return response()->json([
                'status' => true,
                'data' => $data
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FPOModel $fPOModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FPOModel $fPOModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FPOModel $fPOModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FPOModel $fPOModel)
    {
        //
    }
}
