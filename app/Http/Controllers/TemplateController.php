<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Templates\Store;
use Illuminate\Support\Facades\Validator;

class TemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(Store $request)
    {
        $all = $request->all()['data']['attributes'];
        $validator = Validator::make($all['checklist'], ['description' => 'required|string']);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        foreach($all['items'] as $item) {
            $validator = Validator::make($item, [
                'description' => 'required|string',
                'due_unit' => 'in:minute,day,hour,week,month',
                'due_interval' => 'numeric',
                'urgency' => 'numeric'
            ]);

            if ($validator->fails()) {
                return response()->json($validator->errors());
            }
        }



        return response()->json();
    }
}
