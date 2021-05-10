<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CMS\Query\AdminQueryBuilder;
use Illuminate\Support\Facades\Validator;

class TraceFormChoicesController extends Controller
{
    public function deleteOption(){

        if(AdminQueryBuilder::delete_data($_GET['id'], "trace_form_choices_models")){
            return redirect()->back();
        }

    }

    public function editOption(Request $request){

        $optionId = $_GET['optionId'];

        $rules = [
			'optionTitle' => ['required', 'string']
		];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

			return redirect()->back()->with('error', 'Error adding data');

		}else{

            unset($request['_token']);

            if($data = AdminQueryBuilder::editData('trace_form_choices_models', $optionId, 'trace_form_choices_title', $request)){
                return redirect()->back()->with('message', 'Data successfully added');
            }else{
                return redirect()->back()->with('error', 'Error adding data');
            }
        }

    }

}
