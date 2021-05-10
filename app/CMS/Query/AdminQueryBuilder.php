<?php

namespace App\CMS\Query;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\CMS\Model\{TraceFormCategoryModel, TraceFormModel, TraceQA, TraceFormChoicesModel};

class AdminQueryBuilder extends Model
{
    public static function getAll($model){
        $data = DB::table($model)->get();
        return $data;
    }

    public static function create_formCategory($request){
        $data = TraceFormCategoryModel::create([
            'trace_form_category_name' => $request['trace_form_category_name'],
            'trace_form_category_description' => $request['trace_form_category_description'],
            'trace_form_category_status' => $request['trace_form_category_status']
        ]);

        return $data;
    }

    public static function delete_data($request, $model){
        $data = DB::table($model)
                ->where('id', $request)
                ->delete();

        return $data;
    }

    public static function get_all($model, $param_id){
        $data = DB::table($model)
                ->where('id', $param_id)
                ->first();

        return $data;
    }

    public static function loop_all($model, $param_id, $param_fkid){
        $data = DB::table($model)
                ->where($param_fkid, $param_id)
                ->get();

        return $data;
    }

    public static function create_formQuestion($request, $id){
        $data = TraceFormModel::create([
            'trace_form_question' => $request['trace_form_question'],
            'trace_form_description' => $request['trace_form_description'],
            'trace_form_input_type' => $request['trace_form_input_type'],
            'trace_form_category_fkid' => $id
        ]);

        return $data;
    }

    public static function create_options($request){
        $data = TraceFormChoicesModel::create([
            'trace_form_choices_title' => $request
        ]);

        return $data;
    }

    public static function create_trace_q_a_s($request){
        $data = TraceQA::create([
            'trace_form_choices_fkid' => $request['trace_form_choices_fkid'],
            'trace_form_fkid' => $request['trace_form_fkid'],
            'trace_form_category_fkid' => $request['trace_form_category_fkid'],
            'trace_form_question_and_choices_status' => $request['trace_form_question_and_choices_status']
        ]);

        return $data;
    }

    public static function getloopOption($formId){
        $data = DB::table('trace_q_a_s')
                ->join('trace_form_choices_models', 'trace_q_a_s.trace_form_choices_fkid', '=', 'trace_form_choices_models.id')
                ->select(
                    'trace_form_choices_models.trace_form_choices_title as optionTitle',
                    'trace_form_choices_models.id as optionId'
                )
                ->where('trace_q_a_s.trace_form_fkid', $formId)
                ->get();

        return $data;
    }

    public static function editData($model, $whereid, $column, $request){
        $data = DB::table($model)
                ->where('id', $whereid)
                ->update(
                    [
                        $column => $request['optionTitle']
                    ]);
    }
}
