

@extends('admin.layouts.main')

@section('title')
Show Company
@endsection

@section('content')

<div class="bg-light p-5 rounded">
  <div class="card bg-light border-0">
    <div class="row justify-content-center">


      <div class="col-lg-8 col-md-6 col-12 card-body">
        <div class="mb-4 text-center py-2">
          <h2 class="fw-bold bg-light card-header">{{$company->company}}</h2>
        </div>



        <div class="text-md-end">
          <a href="{{route('company.index')}}" class="btn mt-4 btn-primary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Back to All company
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
