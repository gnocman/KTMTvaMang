@extends('layouts.main')

@section('content')
<div class="row my-2">
    <div class="offset-9 col-3">
        <a class="btn btn-primary" href="{{ route('company.create')}}">Create New Company</a>
    </div>
</div>
<div class="row my-2">
    <div class="col-12">
        <table class="table table-striped table-bordered table-hover table-inverse" id="tableDataCompany">
            <thead>
                <tr id="list-header">
                    <th class="text-center" style="width: 1vw">ID</th>
                    <th class="text-center" id="" style="width: 7vw;">ID Company</th>
                    {{-- <th id="">User ID</th>  --}}
                    <th class="text-center" id="" style="width: 13vw;">Name</th>
                    <th class="text-center" id="">Description</th>
                    <th class="text-center" id="">Address</th>
                    <th class="text-center" id="" style="width: 7vw;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 1?>
                @foreach($companies as $company)
                {{-- {{$company}} --}}
                <tr>
                    <td class="text-center">{{$index++}}</td>
                    <td class="text-center">{{$company->id}}</td>
                    <td class="text-center">{{$company->name}}</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <img src=" {{$company->image_path}}" alt="image" />
                    </td>
                    <td class="text-justify p-4">
                        {{$company->description}}
                    </td>
                    <td class="text-center">
                        <a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script defer>
    let table =$('#tableDataCompany');
        table.on('click', 'a.editor_remove', function (e) {
            e.preventDefault();

            $('#modal__delete').modal('show');
        } );
        function initTableDataCompany() {
            let endpoint = "{{route('company.get')}}";
            table.DataTable({
                'processing': true,
                ajax: {
                    url: endpoint,
                    method: "GET",
                    dataSrc: function (response) {
                        let data = JSON.stringify(response);
                        return JSON.parse(data);
                    },
                },
                columns: [
                    {data: 'id'},
                    // {data: 'user_id'},
                    {data: 'name'},
                    {data: 'description'},
                    {data: 'address'},
                    {
                        data: null,
                        className: "center",
                        defaultContent: '<a href="" class="editor_edit">Edit</a> / <a href="" class="editor_remove">Delete</a>'
                    }
                ]
            })
        }
        // initTableDataCompany()
</script>
@endsection

<!-- Modal -->
<div class="modal fade" id="modal__delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="display:none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{trans('message.delete')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sure</button>
            </div>
        </div>
    </div>
</div>
