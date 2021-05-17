<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class ImageController extends Controller
{
    public function uploadimage(Request $request)
    {
        // $file = $request->file('image');
        // $name =Str::random($length=10);
        // $url = Storage::putFileAs('images', $file, $name . '.' . $file->extension());
        // return [
        //     'url' => env('APP_URL') . '/' . $url
        // ];

        $images = $request->file('image');
		$imageName='';
		foreach($images as $image)
		{
			$new_name = rand() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('/uploads/images'), $new_name);
			$imageName =$imageName . $new_name.",";
		}
		$imagedb=$imageName;
        return response()->json($imagedb);
    }
    public function deletimg(Request $request) {

    }
}
