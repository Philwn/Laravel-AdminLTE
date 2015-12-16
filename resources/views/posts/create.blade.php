@extends('admin')

@section('PageHeader')
    <h1>
        Add New Post
        <small>create a new blog post</small>
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
                    
                    {!! Form::open(['url' => route('posts.store'), 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
              
                    @include('posts._form')

                		
              
              <!-- /.box-body -->
              			<div class="box-footer">
                			<button type="submit" class="btn btn-info pull-right">Save Post</button>
              			</div>
              <!-- /.box-footer -->
            		{!! Form::close() !!}
                    

                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection