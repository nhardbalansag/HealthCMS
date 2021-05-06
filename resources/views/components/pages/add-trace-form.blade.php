@extends('home')
@section('home-contents')
    <div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0"><i class="far fa-file-alt text-primary"></i> Trace Form Category Title</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis iusto delectus cumque quisquam possimus autem neque quis similique atque, nam eius ratione, facere fugiat accusamus vero consectetur quos quae magni.</h3>
                    </div>
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                    Option Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {{-- @forelse($categories as $key => $value) --}}
                                            <tr role="row" class="even">
                                                <td>Example choice</td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-outline-primary" href="" role="button"><i class="fas fa-edit"></i></a>
                                                        <a class="btn btn-outline-danger" href="{{ route('view-add-form-trace') }}" role="button"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {{-- @empty
                                        @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 row">
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
                                <button type="button" class="btn btn-info">Create Option</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <label for="inputStatus">Input Type</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Select one</option>
                                    <option>Radio</option>
                                    <option>CheckBox</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Create Question" class="float-right btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
