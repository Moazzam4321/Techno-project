@extends('layout.pages-layout')
@section('page-title')
  Techno site
@endsection
@section('content')
<div class="container">
  <div class="mt-3">
    <h3 class="text-bold">All Records </h3>
  </div>
  <div class="row mt-4">
    
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar bg-light-info p-50 mb-1">
                        <div class="avatar-content">
                            <i class="fa fa-home"></i>
                        </div>
                    </div>
                    <h2 class="fw-bolder">2</h2>
                    <p class="card-text">Departments</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar bg-light-warning p-50 mb-1">
                        <div class="avatar-content">
                          <i class="fa fa-university"></i>
                        </div>
                    </div>
                    <h2 class="fw-bolder">4</h2>
                    <p class="card-text">Semesters</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card text-center">
                <div class="card-body">
                    <div class="avatar bg-light-danger p-50 mb-1">
                        <div class="avatar-content">
                          <i class="fa-solid fa-book"></i>
                        </div>
                    </div>
                    <h2 class="fw-bolder">5</h2>
                    <p class="card-text">Courses</p>
                </div>
            </div>
        </div>  
        <div class="col-lg-4 col-md-6 col-sm-6 mt-2">
          <div class="card text-center">
              <div class="card-body">
                  <div class="avatar bg-light-danger p-50 mb-1">
                      <div class="avatar-content">
                        <i class="fa-solid fa-book"></i>
                      </div>
                  </div>
                  <h2 class="fw-bolder">50</h2>
                  <p class="card-text">Students</p>
              </div>
          </div>
      </div>  
  </div>
</div>
@endsection
