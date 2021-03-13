@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('user.new_service') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">New Service</label>
                    <input type="text" name="service" id="service" class="form-control" placeholder="Name of the service" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if (session('service_created'))
                <div class="alert alert-success mt-4">
                    {{ session('service_created') }}
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service</th>
                        <th>Status</th>
                        <th>User ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                    
                    <tr>
                        <td scope="row">{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>
                            <a href="{{ route('user.update_service', $item) }}" class="btn btn-info btn-sm mb-3">Update</a>
                            <form action="{{ route('dlt_service', $item) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm mb-3">Delete</button>
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
            @if (count($services) == 0)
                <div class="text-center">
                    <h3>No services available</h3>
                </div>
            @endif
    
            @if (session('service_deleted'))
                <div class="alert alert-danger mt-4">
                    {{ session('service_deleted') }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection