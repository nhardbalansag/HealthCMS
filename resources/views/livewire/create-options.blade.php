<div>
    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <div class="row">
            <div class="col-sm-12">
                @if(count($options) > 0)
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
                        @forelse($options as $key => $value)
                            <tr role="row" class="even" >
                                <td id="{{ 'titleoption' .  $value->optionId}}"><i class="mr-2 far fa-circle"></i>{{ $value->optionTitle }}</td>
                                <td hidden id="{{ 'input_' .  $value->optionId}}">
                                    <form action="{{ route('edit-options', ['optionId' => $value->optionId]) }}" method="post">
                                        @csrf
                                        <input name="optionTitle" type="text" id="inputName" class="mb-2 form-control" placeholder="{{ $value->optionTitle }}">
                                        <button type="submit" class="btn btn-info">Submit Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <div class="row col-12">
                                        <div class="mr-2">
                                            <button onclick="editOption({{ $value->optionId }})" type="button" class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
                                        </div>
                                        <div>
                                            <a class="btn btn-outline-danger" href="{{ route('delete-options', ['id' => $value->optionId]) }}" role="button"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 row">
        <div class="form-group col-12">
            <label for="inputName">Option</label>
            <input wire:model.defer='trace_form_choices_title' type="text" id="inputName" class="form-control" placeholder="Add Option">
        </div>
        <div class="form-group col-12">
            <label for="inputStatus">Status</label>
            <select wire:model.defer='trace_form_question_and_choices_status' id="inputStatus" class="form-control custom-select">
                <option selected="">Select one</option>
                <option value="active">Active</option>
                <option value="pending">Pending</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <div class="form-group col-12">
            <button wire:click='createOptions' type="button" class="btn btn-info">Create Option</button>
        </div>
    </div>
    <div wire:loading>
        @include('components.includes.loading-state')
    </div>
</div>
<script>
    function editOption(id){
        var titleoption = document.getElementById('titleoption' + id);
        var inputoption = document.getElementById('input_' + id);

        titleoption.classList.add('d-none')
        inputoption.classList.add('d-block')
    }
</script>
