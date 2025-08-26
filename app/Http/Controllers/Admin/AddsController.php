<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAddsRequest;
use App\Http\Requests\Admin\UpdateAddsRequest;
use App\Models\Adds;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class AddsController extends Controller
{
    public function index()
    {
        $adds = Adds::oldest('order')->paginate(12);
        return view('admin.adds.index', compact('adds'));
    }

    public function create()
    {
        return view('admin.adds.create');
    }

    public function store(StoreAddsRequest $request)
    {
        $input = $request->all();
        $input['side_image'] = $this->fileUpload($request, 'side_image');
        $input['full_image'] = $this->fileUpload($request, 'full_image');
        $add = Adds::create($input);
        $add->update(['slug' => Str::slug($request->title)]);
        return redirect()->route('admin.adds.index')->with('message', 'Created Successfully');
    }

    public function edit(Adds $add)
    {
        return view('admin.adds.edit', compact('add'));
    }

    public function update(UpdateAddsRequest $request, Adds $add)
    {
        $old_side_image = $add->side_image;
        $old_full_image = $add->full_image;
        $input = $request->all();
        $side_image = $this->fileUpload($request, 'side_image');
        $full_image = $this->fileUpload($request, 'full_image');

        if ($side_image) {
            $this->removeFile($old_side_image);
            $input['side_image'] = $side_image;
        } else {
            unset($input['side_image']);
        }

        if ($full_image) {
            $this->removeFile($old_full_image);
            $input['full_image'] = $full_image;
        } else {
            unset($input['full_image']);
        }
        $input['slug'] = Str::slug($request->name);
        $add->update($input);
        return redirect()->route('admin.adds.index')->with('message', 'Updated Successfully');
    }

    public function destroy(Adds $add)
    {
        $this->removeFile($add->side_image);
        $this->removeFile($add->full_image);
        $add->delete();
        return redirect()->route('admin.adds.index')->with('message', 'Delete Successfully');
    }
    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/adds';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/adds/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
