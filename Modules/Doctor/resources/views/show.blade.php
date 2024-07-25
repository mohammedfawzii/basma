
@extends('layouts.layout-dash')
@section('title','Doctor')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="head-table d-flex align-items-center  justify-content-between">
            <h5 class="card-title">Default Table</h5>
            <a href="{{route('doctor.create')}}" type="button" class="btn btn-primary">Add A New Doctor </a>
        </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">img</th>
            <th scope="col">Start Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td><img src="" alt="doctor"></td>
            <td>2016-05-25</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
@endsection
