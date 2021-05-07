<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\CMS\Query\AdminQueryBuilder;

class CreateOptions extends Component
{

    public $formCategory, $trace_form_question_and_choices_status, $trace_form_choices_title, $formId;

    public function render()
    {
        $data['options'] = AdminQueryBuilder::getloopOption($this->formId);

        return view('livewire.create-options', $data);
    }

    public function createOptions(){

        $choiceData = AdminQueryBuilder::create_options($this->trace_form_choices_title);

        $choice = array(
            'formCategory' => $this->formCategory,
            'trace_form_question_and_choices_status' => $this->trace_form_question_and_choices_status,
            'trace_form_category_fkid' => $this->formCategory,
            'trace_form_fkid' => $this->formId,
            'trace_form_choices_fkid' => $choiceData->id
        );

        $data = AdminQueryBuilder::create_trace_q_a_s($choice);

    }
}
