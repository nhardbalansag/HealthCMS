@extends('home')
@section('home-contents')
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="far fa-file-alt text-primary"></i> {{ $categoryForm->trace_form_category_name }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                @forelse($formQuestion as $key => $value)
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><span class="font-weight-bold">Section {{ ++$key }}. </span> {{ $value->trace_form_question }}</h3>
                        </div>
                        <div class="card-body">
                            @livewire('create-options', ['formCategory' => $_GET['form_category_id'], 'formId' => $value->id])
                        </div>
                    </div>
                @empty
                @endforelse
                @if(Route::currentRouteName() !== 'view-form-trace')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Question</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('create-add-form-trace', ["form_category_id" => $_GET['form_category_id']]) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="inputName">Question</label>
                                    <input name="trace_form_question" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea name="trace_form_description" id="inputDescription" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-12 row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="inputStatus">Input Type</label>
                                        <select name="trace_form_input_type" id="inputStatus" class="form-control custom-select">
                                            <option selected="" disabled="">Select one</option>
                                            <option value="radio">Radio</option>
                                            <option value="checkbox">CheckBox</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" value="Create Question" class="float-right btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
