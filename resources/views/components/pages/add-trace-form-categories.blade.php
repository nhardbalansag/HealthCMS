@extends('home')
@section('home-contents')
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create Form Category</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('create-add-form-trace-category') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputName">Form Category Name</label>
                                <input name="trace_form_category_name" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Form Category Description</label>
                                <textarea name="trace_form_category_description"  id="inputDescription" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select name="trace_form_category_status"  id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option value='active'>Active</option>
                                    <option value='pending'>Pending</option>
                                    <option value='inactive'>Inactive</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Create new Category" class="float-right btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
