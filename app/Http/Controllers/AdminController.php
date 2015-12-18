<?php

namespace App\Http\Controllers;

use App\ImageModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function modal_images() {
        $images = ImageModel::orderBy('id', 'desc')->limit(40)->get();
        return view('admin.modal_images', compact('images'));
    }
}
