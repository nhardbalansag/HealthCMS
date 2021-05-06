<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CMS\Query\AdminQueryBuilder;

class TraceFormCategoryController extends Controller
{

    public function index(){
        $data['categories'] = AdminQueryBuilder::getAll('trace_form_category_models');

        return view('components.pages.trace-form-categories', $data);
    }

    public function View_AddFormCategory(){
        return view('components.pages.add-trace-form-categories');
    }

}
