<?php

namespace App\Http\Controllers;

use App\ImageModel;
use App\Setting;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function modal_images() {
        $images = ImageModel::orderBy('id', 'desc')->limit(40)->get();
        return view('admin.modal_images', compact('images'));
    }

    public function settings() {
    	$settings = Setting::find(1);
    	return view('admin.settings', compact('settings'));
    }

    public function updateSettings(Request $request) {
    	$settings = Setting::find(1);
    	$settings->fill($request->input())->save();

    	return redirect(route('admin.dashboard'));
    }

    public function dashboard() {
    	return view('admin.dashboard');
    }

    public function posts() {
        $posts = Post::orderBy('updated_at', 'desc')->get();
    	return view('admin.posts')->with([
            'posts' => $posts,
            ]);
    }
}
