@extends ('layouts.header_lama')
@section ('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Add Data</h1>
                <a class="btn btn-secondary" href="{{route('home')}}">Back</a>
            </div>
        </div>
        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="card-body">
                @if (session('status')) 
                    <div class="alert alert-{{session('success')}}">{{session('status')}}</div> 
                @endif

                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div>
                <div class="form-group mb-3">
                    <label for="class">Class</label>
                    <input type="text" class="form-control" id="class" name="class" required>
                </div>
                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
