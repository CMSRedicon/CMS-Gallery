<?php

namespace Redicon\CMS_Gallery\App\Http\Controllers\Admin;

use Intervention\Image\Image;
use App\Http\Controllers\Controller;

class GalleriesController extends Controller
{
    public function index(){

        $img = Image::make('foo.jpg')->resize(300, 200);
        dd('oki');
    }
}