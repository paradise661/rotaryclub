<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAchievementRequest;
use App\Http\Requests\Admin\UpdateAchievementRequest;
use App\Models\Achievement;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        $achievements = Achievement::orderBy('order', 'ASC')->paginate(10);
        return view('admin.achievement.index', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAchievementRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $input['secondimage'] = $this->fileUpload($request, 'secondimage');
        $achievement = Achievement::create($input);
        $achievement->update(['slug' => Str::slug($request->title)]);
        return redirect()->route('admin.achievements.index')->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.achievement.edit', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $old_image = $achievement->image;
        $old_secondimage = $achievement->secondimage;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');
        $secondimage = $this->fileUpload($request, 'secondimage');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($secondimage) {
            $this->removeFile($old_secondimage);
            $input['secondimage'] = $secondimage;
        } else {
            unset($input['secondimage']);
        }
        $input['slug'] = Str::slug($request->title);
        $achievement->update($input);
        return redirect()->route('admin.achievements.index')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        $this->removeFile($achievement->image);
        $this->removeFile($achievement->secondimage);
        $achievement->delete();
        return redirect()->route('admin.achievements.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/achievement';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/achievement/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
