@extends('layout.pages-layout')
@section('page-title')
  Techno site
@endsection
@section('content')
   

<!-- Default Basic Forms Start -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Upload Result</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Student Roll no:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            placeholder="Student ID or Roll Number."
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Student Name:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            type="text"
                            placeholder="Student name."
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label" for="course">Course:</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" id="course">
                            <option>Select course </option>
                            <option>Programming Fundamentals</option>
                            <option>Networking</option>
                            <option>Database</option>
                            <option>Software Engineering</option>
                            <option>Web Designing</option>
                            <option>Overall Result</option>
                        </select>
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Course Code:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            placeholder="Search Here"
                            type="search"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Course Title:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            placeholder="Search Here"
                            type="search"
                        />
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Semester Code or name:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="bootstrap@example.com"
                            type="email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Academic Year:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="bootstrap@example.com"
                            type="email"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Marks Obtained:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Maximum Marks:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Grade:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Result Status :</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Exam Date:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Exam Type (Midterm/Final):</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Rank or Position:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            value="https://getbootstrap.com"
                            type="url"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">File Upload:</label>
                    <div class="col-sm-12 col-md-10">
                        <input
                            class="form-control"
                            type="file"
                        />
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <a href="{{ url('upload-result-index') }}" class="btn btn-sm btn-primary">Upload</a>
                </div>
            </form>
        </div>
    </div>
</div>
				

@endsection

