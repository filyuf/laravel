<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends ('layouts.header_lama')
    @section ('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
            <div class="row">
                        <div class="col">
                            <h1>Data Siswa</h1>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{ route('create') }}">Add Data</a>
                        </div>
                    </div>
                </div>

            <div class="card-body">
                @if (session('status')) 
                    <div class="alert alert-success alert-{{session('success')}}">{{session('status')}}</div> 
                @endif
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->class }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                <a class="btn btn-info btn-sm" href="{{route('detail', $student->id)}}">Detail</a>
                                <a class="btn btn-warning btn-sm" href="{{route('edit', $student->id)}}">Edit</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusStudent-{{$student->id}}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hapusStudent-{{$student->id}}" tabindex="-1" aria-labelledby="modalLabelHapus{{$student->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabelHapus{{$student->id}}">Confirm Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this data?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <form method="POST" action='{{url("/delete/{$student->id}")}}' class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


