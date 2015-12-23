@extends('admin')

@section('PageHeader')
    <h1>
        Edit Post
        <small>Edit/Amend Existing Post</small>
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
                    
                    {!! Form::model($post, ['url' => route('posts.update', ['id' => $post->id]), 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}
              
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