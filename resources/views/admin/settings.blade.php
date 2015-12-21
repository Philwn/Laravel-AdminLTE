@extends('admin')

@section('PageHeader')
    <h1>
        Website Settings
        <small>Alter About Info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Settings</li>
      </ol>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                
                <div class="box-body">
                    
                    {!! Form::model($settings, array('route' => array('settings.update', 1), 'role' => 'form', 'class' => 'form-horizontal', 'method' => 'PUT')) !!}
              
                    <div class="form-group">
  						{!! Form::label('company', 'Company', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Company']) !!}
    						{!! $errors->first('company', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('name', 'Name', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
    						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('email', 'E-Mail Address', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
    						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('telephone', 'Telephone', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => 'Telephone No']) !!}
    						{!! $errors->first('telephone', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('street', 'Street', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Street Address']) !!}
    						{!! $errors->first('street', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('address2', 'Address Line 2', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('address2', null, ['class' => 'form-control', 'placeholder' => 'District']) !!}
    						{!! $errors->first('address2', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('town', 'Town', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('town', null, ['class' => 'form-control', 'placeholder' => 'Town']) !!}
    						{!! $errors->first('town', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('county', 'County', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('county', null, ['class' => 'form-control', 'placeholder' => 'County']) !!}
    						{!! $errors->first('county', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('postcode', 'Postcode', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('postcode', null, ['class' => 'form-control', 'placeholder' => 'Postcode']) !!}
    						{!! $errors->first('postcode', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('facebook', 'Facebook', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Facebook Page']) !!}
    						{!! $errors->first('facebook', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('twitter', 'Twitter', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Twitter Account']) !!}
    						{!! $errors->first('twitter', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('instagram', 'Instagram', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Instagram Handle']) !!}
    						{!! $errors->first('instagram', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>
					<div class="form-group">
  						{!! Form::label('pinterest', 'Pinterest', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('pinterest', null, ['class' => 'form-control', 'placeholder' => 'Pinterest Page']) !!}
    						{!! $errors->first('pinterest', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>

					<div class="form-group">
  						{!! Form::label('youtube', 'Youtube', ['class' => 'col-md-2 control-label']) !!}
  						<div class="col-sm-6">
    						{!! Form::text('youtube', null, ['class' => 'form-control', 'placeholder' => 'Youtube Channel']) !!}
    						{!! $errors->first('youtube', '<span class="help-block">:message</span>') !!}
  						</div>
					</div>
		

                		
              
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