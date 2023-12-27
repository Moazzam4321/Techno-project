@extends('layout.pages-layout')
@section('page-title')
  Techno site
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-12 text-end">
                        <a href="{{ url('add-course-index') }}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="" class="table table-striped table-bordered data-table"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Course Code:</th>
                                        <th>Course Title:</th>
                                        <th>Course Description:</th>
                                        <th>Credit Hours:</th>
                                        <th>Class Schedule:</th>
                                        <th>Grading Criteria:</th>
                                        <th>Class Size:</th>
                                        <th>Course Type:</th>
                                        <th>Instructor/Professor:</th>
                                        <th>Semester code:</th>
                                        <th>Department code:</th>
                                        <th>Action:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                PF-1
                                            </td>
                                            <td>
                                                Programming fundamentals
                                            </td>
                                            <td>Basics of programming</td>
                                            <td>60 </td>
                                            <td>9:00 am to 11:00 am</td>
                                            <td>40 number teacher own and 60 number of paper</td>
                                            <td>50 max</td>
                                            <td>Onsite</td>
                                            <td>Sir XYZ</td>
                                            <td>semester-12</td>
                                            <td>IT-123</td>
                                            <td> <button class="btn btn-danger btn-sm">Course Coordinator</button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

