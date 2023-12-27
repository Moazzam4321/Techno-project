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
                        <a href="{{ url('add-department-index') }}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-plus"></i></a>
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
                                        <th>Department Code:</th>
                                        <th>Head of Department:</th>
                                        <th>Description:</th>
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
                                            <td> IT-123</td>
                                            <td> Maam XYZ</td>
                                            <td> IT department offers multiple courses</td>
                                            <td> <button class="btn btn-danger btn-sm">Faculty Members</button></td>
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

