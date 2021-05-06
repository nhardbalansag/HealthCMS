@extends('home')
@section('home-contents')
    <div>
        <div class="card">
            <div class="card-header">
                <div>
                    <div>
                        <h3 class="mr-2 card-title">Trace Form Category</h3>
                    </div>
                    <div >
                        <a href="{{ route('view-add-form-trace-category') }}">
                            <p>
                                <span>Add Form Category</span>
                                <i class="fas fa-plus-square"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                            ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                            Form Category Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Date Created
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($categories as $key => $value)
                                    <tr role="row" class="{{ ($key % 2) === 0 ? 'even' : 'odd'}}">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $value->id }}</td>
                                        <td>{{ $value->trace_form_category_name }}</td>
                                        <td>{{ $value->trace_form_category_status }}</td>
                                        <td>{{ $value->created_at }}</td>
                                        <td>
                                            <div>
                                                <a class="btn btn-primary" href="" role="button"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('view-add-form-trace') }}" role="button"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">
                                            ID
                                        </th>
                                        <th rowspan="1" colspan="1">
                                            Form Category Name
                                        </th>
                                        <th rowspan="1" colspan="1">
                                            Status
                                        </th>
                                        <th rowspan="1" colspan="1">
                                            Date Created
                                        </th>
                                        <th rowspan="1" colspan="1">
                                            Action
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "info": true, "ordering": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush


