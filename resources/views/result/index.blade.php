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
                                        <th>Students:</th>
                                        <th>Semester:</th>
                                    </tr>
                                </thead>
                                @php
                                    $names = ['Moazzam','Khuzaima','Ali','Ahmed','Aqib','Bilal','Hasan'];
                                @endphp
                                <tbody>
                                     @foreach ($names as $item)
                                     <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td> 
                                            <a href="{{ url('upload-result') }}" class="btn btn-sm btn-primary">{{ $item }}</a>
                                        </td>   
                                        <td>Semester-1</td> 
                        
                                    </tr>
                                     @endforeach
                                      
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

