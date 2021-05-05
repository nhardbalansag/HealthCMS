@extends('home')
@section('home-contents')
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="far fa-file-alt"></i> Trace Form Category Title</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
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
                        <div class="form-group">
                            <label for="inputName">Question</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="col-12 row">
                            <div class="form-group col-12 col-md-6">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option>Active</option>
                                    <option>Pending</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="inputStatus">Input Type</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option>Radio</option>
                                    <option>CheckBox</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <div class="my-2 row col-12">
                                <div class="d-flex align-items-center col-md-6">
                                    <p><i class="far fa-circle text-secondary"></i></p>
                                    <p class="ml-2">Example choice</p>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-outline-primary" type="submit"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-outline-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </div>
                            <div class="row col-12">
                                <div class="d-flex align-items-center col-md-6">
                                    <p><i class="far fa-circle text-secondary"></i></p>
                                    <p class="ml-2">Example choice</p>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-outline-primary" type="submit"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-outline-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <a href="#">Add option <i class="fas fa-plus"></i></a>
                        </div>
                        <div class="col-12 row w-25">
                            <div class="form-group col-12">
                                <label for="inputName">Option</label>
                                <input type="text" id="inputName" class="form-control" placeholder="Add Option">
                            </div>
                            <div class="form-group col-12">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option>Active</option>
                                    <option>Pending</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <button type="button" class="btn btn-primary">Create Option</button>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Create Question" class="float-right btn btn-success">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
