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
                        <a href="{{ url('add-semester-index') }}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-plus"></i></a>
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
                                        <th>Department Name:</th>
                                        <th>Semester Name:</th>
                                        <th>Semester Code:</th>
                                        <th>Start Date and End Date:</th>
                                        <th>Academic Year:</th>
                                        <th>Semester Type:</th>
                                        <th>Credits and Grading System:</th>
                                        <th>Examination Schedule:</th>
                                        <th>Action:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                IT (information technology)
                                            </td>
                                            <td>Semester-1</td>
                                            <td>{{ 'Semester-1' .$i }}  </td>
                                            <td> Start from feb 10 2024 to sep 10 2023</td>
                                            <td>2024</td>
                                            <td>Regular</td>
                                            <td>120 credit hours</td>
                                            <td>August 28 2024</td>
                                            <td> 
                                                <a href="{{ url('semester-index') }}" class="btn btn-sm btn-primary">Semester Coordinator</a>
                                                <a href="{{ url('course-index') }}" class="btn btn-sm btn-primary">Courses</a>
                                            </td>
                            
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

