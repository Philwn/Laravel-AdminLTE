@extends('admin')

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Post</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    
                    <form class="form-horizontal">
              
                		<div class="form-group">
                  			<label for="postTitle" class="col-sm-2 control-label">Post Title</label>

                  			<div class="col-sm-10">
                    			<input class="form-control" id="postTitle" placeholder="Title" type="title">
                  			</div>
                		</div>
                		<div class="form-group">
                  			<label for="body" class="col-sm-2 control-label">Body</label>

                  			<div class="col-sm-10">
                    			<textarea name="body" class="form-control"></textarea>
                			</div>
                		</div>
              
              <!-- /.box-body -->
              			<div class="box-footer">
                			<button type="submit" class="btn btn-info pull-right">Sign in</button>
              			</div>
              <!-- /.box-footer -->
            		</form>
                    

                </div><!-- /.box-body -->
                <!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection