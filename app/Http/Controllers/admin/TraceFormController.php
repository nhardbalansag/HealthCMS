<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CMS\Query\AdminQueryBuilder;
use Illuminate\Support\Facades\Validator;

class TraceFormController extends Controller
{
    public function index(){

        $categoryId = $_GET['form_category_id'];

        if(!$data['categoryForm'] = AdminQueryBuilder::get_all("trace_form_category_models", $categoryId)){
            $data['categoryForm'] = null;
        }

        if(!$data['formQuestion'] = AdminQueryBuilder::loop_all("trace_form_models", $categoryId, "trace_form_category_fkid")){
            $data['formQuestion'] = null;
        }

        return view('components.pages.add-trace-form', $data);
    }

    public function create_FormQuestion(Request $request){

        $categoryId = $_GET['form_category_id'];

        $rules = [
			'trace_form_question' => ['required', 'string'],
            'trace_form_description' => ['required', 'string'],
            'trace_form_input_type' => ['required', 'string', 'max:20']
		];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

			return redirect()->back()->with('error', 'Error adding data');

		}else{

            unset($request['_token']);

            if($data = AdminQueryBuilder::create_formQuestion($request, $categoryId)){

                return redirect()->back()->with('message', 'Data successfully added');
            }else{
                return redirect()->back()->with('error', 'Error adding data');
            }
        }
    }
}
