@extends('course.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Course</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('course.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terjadi kesalahan input<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('course.update',$course->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Course:</strong>
                    <input type="text" name="name" value="{{ $course->name }}" class="form-control" placeholder="Nama Course">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Course:</strong>
                    <input type="text" name="price" value="{{ $course->price }}" class="form-control" placeholder="Harga Course">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fullday Course:</strong>
                    <input class="form-control" name="days" placeholder="Fullday Course" value="{{ $course->days }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <input class="form-control" name="days" type="checkbox" id="vehicle1" name="vehicle1" value="{{ $course->days }}">
                    <label for="vehicle1"> <strong>Bersertifikat</strong></label><br>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
@endsection