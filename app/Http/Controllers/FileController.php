<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\File as File2; 

class FileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $files = File::all();
        return view('Pages.admin.addnew.uploadimage', ['files' => $files]);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'required'
        ]);
  
        $files = [];
        if($request->hasfile('filenames'))
		{
			foreach($request->file('filenames') as $file)
			{
			    $name = time().rand(1,100).'.'.$file->extension();
			    $file->move(public_path('files'), $name);  
			    $files[] = $name;  
			}
		}
  
		$file= new File();
		$file->filenames = $files;
		$file->save();
  
        return back()->with('success', 'Data Your files has been successfully added');
    }
    
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {	
    	$files = File::find($id);
        return view('Pages.admin.addnew.uploadimage', ['list_images' => $files->filenames, 'id' => $id]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	$input = $request->all();
        $files = [];
        $files_remove = [];
        if($request->hasfile('filenames'))
		{
			foreach($request->file('filenames') as $file)
			{
			    $name = time().rand(1,100).'.'.$file->extension();
			    $file->move(public_path('files'), $name);  
			    $files[] = $name;  
			}
		}

		if (isset($input['images_uploaded'])) {
			$files_remove = array_diff(json_decode($input['images_uploaded_origin']), $input['images_uploaded']);
			$files = array_merge($input['images_uploaded'], $files);
		} else {
			$files_remove = json_decode($input['images_uploaded_origin']);
		}
  
        $file = File::find($input['id']);
		$file->filenames = $files;
		if($file->update()) {
			foreach ($files_remove as $file_name) {
				File2::delete(public_path("files/".$file_name));
			}
		}

        return back()->with('success', 'Data Your files has been successfully updated');
    }
}