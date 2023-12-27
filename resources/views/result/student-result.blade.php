@extends('layout.pages-layout')
@section('page-title')
  Techno site - Result Page
@endsection
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>My Results</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Semester</th>
                        <th>Academic Year</th>
                        <th>CGPA Obtained</th>
                        <th>Total CGPA</th>
                        <th>Result Status</th>
                        <th>Exam Date</th>
                        <th>Rank</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $names = ['Programming','Database','Data structure','Management','Software engineering','SQA','Basic Fundamentals'];
                   
                    @endphp

                    @foreach ($names as $i => $name)
                        <tr>
                            <td>{{ 1 + $i }}</td>
                            <td>Khuzima</td>
                            <td>{{ $name }}</td>
                            <td>6</td>
                            <td>2023</td>
                            <td>3.5</td>
                            <td>4</td>
                            <td>Pass</td>
                            <td>10-11-2023</td>
                            <td>5th</td>
                            <td>
                                <img src="{{ asset('template/src/images/photo1.jpg') }}" alt="No image found">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
