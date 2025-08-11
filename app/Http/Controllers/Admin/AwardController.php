<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAwardController;
use App\Http\Requests\Admin\StoreAwardRequest;
use App\Http\Requests\Admin\UpdateAwardRequest;
use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class AwardController extends Controller
{
    public function index(Request  $request)
    {
        $awards = Award::oldest('order')->paginate(10);
        return view('admin.award.index', compact('awards'));
    }

    public function create()
    {
        return view('admin.award.create');
    }

    public function store(StoreAwardRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $award =  Award::create($input);
        $award->update(['slug' => Str::slug($request->name)]);
        return redirect()->route('admin.awards.index')->with('message', 'Created Successfully');
    }

    public function edit(Award $award)
    {
        return view('admin.award.edit', compact('award'));
    }

    public function update(UpdateAwardRequest $request, Award $award)
    {
        $old_image = $award->image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $input['slug'] = Str::slug($request->name);
        $award->update($input);
        return redirect()->route('admin.awards.index')->with('message', 'Update Successfully');
    }

    public function destroy(Award $award)
    {
        $this->removeFile($award->image);
        $award->delete();
        return redirect()->route('admin.awards.index')->with('message', 'Deleted Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/award';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/award/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
