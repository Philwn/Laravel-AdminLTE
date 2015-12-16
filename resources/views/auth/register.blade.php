@extends('admin')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->


    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ url('dashboard') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Create Admin</span>
            </li>
        </ul>

    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Create
        <small>Admin</small>
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <!-- BEGIN DASHBOARD STATS 1-->
    <div class="row ">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-share font-dark"></i>
                        <span class="caption-subject font-dark bold uppercase">Add a New User</span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-8">
                            <form method="POST" action="./register" class="form-horizontal">
                                {!! csrf_field() !!}

                                <div class="form-group">
                                    {!! Form::label('name', 'Name', ['class' => 'col-md-3 control-label']) !!}
                                    <div class="col-md-6">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('email', 'Email', ['class' => 'col-md-3 control-label']) !!}
                                    <div class="col-md-6">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('password', 'Password', ['class' => 'col-md-3 control-label']) !!}
                                    <div class="col-md-6">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Password', ['class' => 'col-md-3 control-label']) !!}
                                    <div class="col-md-6">
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button class="btn green" type="submit">Register</button>
                                            </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->

@endsection