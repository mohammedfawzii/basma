@extends('layouts.layout-dash')
@section('title', 'Doctor')
@section('content')


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>
            <form method="POST" action="{{route('doctor.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Number</label>
                    <div class="col-sm-10">
                        <input type="number"  name="phone"  class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Bio</label>
                    <div class="col-sm-10">
                        <input type="text" name="bio"  class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <input type="text" name="position"  class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="img"  type="file" id="formFile">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" name=""  class="btn btn-primary">Submit Form</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
