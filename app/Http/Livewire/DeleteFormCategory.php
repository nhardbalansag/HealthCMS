<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\CMS\Query\AdminQueryBuilder;

class DeleteFormCategory extends Component
{

    public $form_category_id;

    public function render()
    {
        return view('livewire.delete-form-category');
    }

    public function delete($id){
        AdminQueryBuilder::delete_data($id, "trace_form_category_models");

        return redirect()->to('/admin/trace-category');
    }
}
