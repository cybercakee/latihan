@extends('backoffice.layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-right">
        <a href="/create" class="btn btn-dark">Add New</a>
    </div>
    <div class="card-body">
        <form action="{{route('admin.school.index')}}" class="mb-5" method="get">
            <div class="input-group">
            <input type="text" name="keyword" id="" class="form-control">
                <button class="btn btn-primary" type="submit">Search Data.</button>
                <a class="btn btn-danger" href="{{route('admin.school.index')}}">Refresh Table.</a>
            </div>
        </form>
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th width="10%">Nomor</th>
                <th width="50%">Nama Sekolah</th>
                <th>Dibuat Pada</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($data as $index => $value)
                <tr>
                    <td>
                        {{$index+1}}
                    </td>
                    <td>
                        {{$value->name}}
                    </td>
                    <td>
                        {{$value->created_at}}
                    </td>
                    <td>
                        <a href="{{route('admin.school.edit', $value->id)}}" class="btn btn-dark">Edit</a>
                        <button class="btn btn-danger delete-item" data-id="{{$value->id}}"
                            type="button">Delete</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('.delete-item').click(function () {
            let school_id = $(this).data('id')
            console.log({
                school_id: school_id
            });

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "/admin/school/"+school_id+"/destroy",
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });
                            window.location.reload()
                        },
                        error:function(error){
                            Swal.fire({
                                title: "Opss...",
                                text: "Delete data gagal dilakukan.",
                                icon: "error"
                            });
                        }
                    });

                }
            });
        })
    });

</script>
@endpush
