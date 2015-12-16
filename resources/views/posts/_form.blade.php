		<div class="form-group">
  			{!! Form::label('title', 'Title', ['class' => 'col-md-2 control-label']) !!}
  			<div class="col-sm-6">
    			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Post Title']) !!}
    			{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
  			</div>
		</div>
		<div class="form-group">
     		{!! Form::label('image', 'Image', ['class' => 'col-md-2 control-label']) !!}
     		
         	{!! Form::hidden('image', null, ['id' => 'image']) !!}
     		
     		<div class="col-md-3">
        		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#upload">Upload</button>
		    </div>
		</div>
		<div class="form-group">
  			{!! Form::label('excerpt', 'Excerpt', ['class' => 'col-md-2 control-label']) !!}

  			<div class="col-sm-7">
    			{!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => '3']) !!}
        		{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="form-group">
  			{!! Form::label('body', 'Main Content', ['class' => 'col-md-2 control-label']) !!}

  			<div class="col-sm-10">
    			{!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
        		{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
			</div>
		</div>
		<div class="form-group">
    		{!! Form::label('tags', 'Tags', ['class' => 'col-md-2 control-label']) !!}
    		<div class="col-md-10">
        	@if(isset($post) && count($post->tags)>0)
            	<?php $tags = implode(',', $post->tags->lists('name')->toArray()); ?>
        	@else
           		<?php $tags = null; ?>
        	@endif
        	{!! Form::text('tags', $tags, ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
        	{!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
    		</div>
		</div>