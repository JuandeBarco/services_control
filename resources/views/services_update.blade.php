@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <h3>Update Service</h3>
            </div>
            <form action="{{ route('upd_service', $service->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Service</label>
                    <input type="text" name="service" id="service" class="form-control" placeholder="Name of the service" value="{{ $service->name }}" required>
                </div>
                <button type="submit" class="btn btn-info">Update</button>
            </form>
        </div>
    </div>
@endsection