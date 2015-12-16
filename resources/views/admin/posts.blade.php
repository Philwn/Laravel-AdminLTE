@extends('admin')

@section('PageHeader')
    <h1>
        Posts List
        <small>view all existing Posts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Posts</li>
      </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                
                <div class="box-body">
                    
                    <table class="table table-striped table-bordered table-advance table-hover" id="Table_List">
                        <thead>
                            <tr>
                                <th>Edit</th>
                                <th>Show</th>
                                <th>Hide</th>
                                <th>Status</th>
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>View</th>
                                <th class="hidden-phone">Date</th>
                                <th class="hidden-phone">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                                <tr>
                                    <td class="highlight">
                                        <div class="warning"></div>
                                        <a href="#" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    </td>
                                    <td><a href="#" class="btn btn-sm btn-success"><i class="fa fa-thumbs-up"></i></a></td>
                                    <td><a href="#" class="btn btn-sm btn-warning"><i class="fa fa-thumbs-down"></i></a></td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>Post Title</td>
                                    <td>Short excerpt about post (also used for meta)</td>
                                    <td><a href="#" class="btn mini red">Preview</a></td>
                                    <td class="hidden-phone">Date</td>
                                    <td class="hidden-phone"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                    
                            </tbody>
                        </table>
                    

                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->
      

    </div><!-- /.row -->
@endsection