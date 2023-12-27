@extends('layout.pages-layout')
@section('page-title')
  Techno site
@endsection
@section('content')
   

<!-- Default Basic Forms Start -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Add Department</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Department Name:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            placeholder="Johnny Brown"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Department Code:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            placeholder="Search Here"
                            type="search"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Head of Department:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="bootstrap@example.com"
                            type="email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Description:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <a href="{{ url('department-index') }}" class="btn btn-sm btn-primary">Add Department</a>
                </div>
            </form>
        </div>
    </div>
</div>
				

@endsection

