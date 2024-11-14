@extends('backoffice.layouts.app')

@section('content')
    <div class="card">
            <div class="card-body">
                <form action="{{$data != null  ? route('admin.school.update', $data->id):route('admin.school.store')}}" method="post">
                    @csrf

                    @if ($data != null)
                        @method('PUT')
                    @endif
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{$data->name}}" class="form-control">
                    </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
                </form>

        </div>
@endsection
