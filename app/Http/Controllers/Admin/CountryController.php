<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCountryRequest;
use App\Http\Requests\Admin\UpdateCountryRequest;
use App\Models\Country;
use App\Models\CountryUniversity;
use App\Models\CountryDocument;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('order', 'ASC')->paginate(10);
        return view('admin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $input['image_2'] = $this->fileUpload($request, 'image_2');
        $input['banner_image'] = $this->fileUpload($request, 'banner_image');
        $input['flag_image'] = $this->fileUpload($request, 'flag_image');
        $country =  Country::create($input);
        $country->update(['slug' => Str::slug($request->name)]);
        return redirect()->route('admin.countries.index', $country->id);
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
    public function edit(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $old_image = $country->image;
        $old_image_2 = $country->image_2;
        $old_banner_image = $country->banner_image;
        $old_flag_image = $country->flag_image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');
        $image_2 = $this->fileUpload($request, 'image_2');
        $banner_image = $this->fileUpload($request, 'banner_image');
        $flag_image = $this->fileUpload($request, 'flag_image');

        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($image_2) {
            $this->removeFile($old_image_2);
            $input['image_2'] = $image_2;
        } else {
            unset($input['image_2']);
        }

        if ($banner_image) {
            $this->removeFile($old_banner_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }
        if ($flag_image) {
            $this->removeFile($old_flag_image);
            $input['flag_image'] = $flag_image;
        } else {
            unset($input['flag_image']);
        }

        $input['slug'] = Str::slug($request->name);
        $country->update($input);
        return redirect()->route('admin.countries.index', $country->id)->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $this->removeFile($country->image);
        $this->removeFile($country->image_2);
        $this->removeFile($country->banner_image);
        $this->removeFile($country->flag_image);
        $country->delete();
        return redirect()->route('admin.countries.index')->with('message', 'Delete Successfully');
    }

    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/country';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/country/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
