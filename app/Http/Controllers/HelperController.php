<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HelperController extends Controller
{

    public static  function validate_data($response_type = 'Redirect', array $data = array(), array $rules = array(), array $messages = array())
    {
        // $options = array_merge(array(
        //     'property1' => 'default1',
        //     'property2' => 'default2',
        // ), $data);

        $validator = Validator::make($data, $rules, $messages);

        if ($validator->fails()) {
            if ($response_type == 'Redirect') {
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            } else if ($response_type == 'Json') {
                return response()->json($validator->errors(), 400);
            }
        } else {
            // for checking 
            return response()->json([
                'data' => $validator->validated()
            ]);
        }
    }
}
