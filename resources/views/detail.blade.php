@extends ('layouts.header_lama')
@section ('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Detail</h1>
                <a class="btn btn-secondary" href="{{route('home')}}">Back</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{$student->name}}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{$student->age}}</td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td>{{$student->class}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$student->address}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
