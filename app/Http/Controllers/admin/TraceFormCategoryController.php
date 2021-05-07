<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CMS\Query\AdminQueryBuilder;
use Illuminate\Support\Facades\Validator;

class TraceFormCategoryController extends Controller
{

    public function index(){
        $data['categories'] = AdminQueryBuilder::getAll('trace_form_category_models');

        return view('components.pages.trace-form-categories', $data);
    }

    public function View_AddFormCategory(){
        return view('components.pages.add-trace-form-categories');
    }

    public function Create_AddFormCategory(Request $request){
        $rules = [
			'trace_form_category_name' => ['required', 'string'],
            'trace_form_category_description' => ['required', 'string'],
            'trace_form_category_status' => ['required', 'string', 'max:10']
		];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

			return redirect()->back()->with('error', 'Error adding data');

		}else{

            unset($request['_token']);

            if(AdminQueryBuilder::create_formCategory($request)){
                return redirect()->to('admin/trace-category');
            }else{
                return redirect()->back()->with('error', 'Error adding data');
            }
        }

    }

}
