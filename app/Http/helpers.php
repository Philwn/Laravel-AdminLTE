<?php
use App\Tag;

function delete_form($routeParams, $label = "Delete")
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);
    
    $form .= Form::submit($label, ['class' => 'btn btn-danger']);
    
    return $form .= Form::close();
}

function set_active($path, $active = 'active')
{
    $path_array = explode('/', Request::path());
    if(count($path_array)>=2){
        return $path_array[0] == $path ? $active : '';
    } else {
        return Request::is($path) ? $active : '';
    }
}

function tags_to_array($string)
{
    $tags = explode(',', $string);

    // Create an empty array
    $result = array();

    foreach($tags as $tag){
        // Create a new tag if it doesn't exist and push it to the collection
        $result[] = trim($tag);
    }

    return $result;
}