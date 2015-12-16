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
                    
                    <form class="form-horizontal">
              
                		<div class="form-group">
                  			<label for="postTitle" class="col-sm-2 control-label">Post Title</label>

                  			<div class="col-sm-6">
                    			<input class="form-control" id="postTitle" placeholder="Title" type="title">
                  			</div>
                		</div>
                		<div class="form-group">
                  			<label for="body" class="col-sm-2 control-label">Body</label>

                  			<div class="col-sm-10">
                    			<textarea name="body" class="form-control ckeditor"></textarea>
                			</div>
                		</div>
              
              <!-- /.box-body -->
              			<div class="box-footer">
                			<button type="submit" class="btn btn-info pull-right">Save Post</button>
              			</div>
              <!-- /.box-footer -->
            		</form>
                    

                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection