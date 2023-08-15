@extends('course.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Master Course</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('course.create') }}"> Tambahkan Course</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Full Day Course</th>
            <th>Bersertifikat</th>
            <th>Kursus Aktif</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dataCourse as $course)
        <tr>
            <td>{{ $course->ID }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->price }}</td>
            <td>{{ $course->days }}</td>
            <td>{{ $course->is_certificate }}</td>
            <td>{{ $course->is_active }}</td>
            <td>
                <form action="{{ route('course.destroy',$course->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('course.edit',$course->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection