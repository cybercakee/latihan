@extends('backoffice.layouts.app')

@section('content')
    {{$data}}
    <div class="card">
            <div class="card-body">
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
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
@endsection
