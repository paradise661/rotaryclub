<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCountryUniversityRequest;
use App\Http\Requests\Admin\UpdateCountryUniversityRequest;
use App\Models\Country;
use App\Models\CountryUniversity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class CountryUniversityController extends Controller
{
    public function index($countryid)
    {
        $universities = CountryUniversity::where('country_id', $countryid)->orderBy('order', 'ASC')->paginate(10);
        $country = Country::where('id', $countryid)->first();
        return view('admin.country.university.index', compact('universities', 'country'));
    }

    public function create($countryid)
    {
        return view('admin.country.university.create', compact('countryid'));
    }

    public function store(StoreCountryUniversityRequest $request, $countryid)
    {
        $input = $request->all();
        $input['image'] = $this->fileUpload($request, 'image');
        $input['country_id'] = $countryid;
        CountryUniversity::create($input);
        return redirect()->route('admin.country.university.index', $countryid)->with('message', 'University created');
    }

    public function edit(CountryUniversity $countryuniversity, $countryid)
    {
        return view('admin.country.university.edit', compact('countryuniversity', 'countryid'));
    }

    public function update(UpdateCountryUniversityRequest $request, CountryUniversity $countryuniversity, $countryid)
    {
        $old_image = $countryuniversity->image;
        $input = $request->all();
        $image = $this->fileUpload($request, 'image');


        if ($image) {
            $this->removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $countryuniversity->update($input);
        return redirect(url('admin/country/universities/' . $countryid))->with('message', 'University updated');

        // return redirect()->route('admin.country.university.index', ['country_id' => $countryid])->with('message', 'University updated');
    }

    public function destroy(CountryUniversity $countryuniversity, $countryid)
    {
        $this->removeFile($countryuniversity->image);
        $countryuniversity->delete();
        return redirect()->route('admin.country.university.index', $countryid)->with('message', 'Delete Successfully');
    }


    public function fileUpload(Request $request, $name)
    {
        $imageName = '';
        if ($image = $request->file($name)) {
            $destinationPath = public_path() . '/admin/images/country/university/';
            $imageName = date('YmdHis') . $name . "-" . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $image = $imageName;
        }
        return $imageName;
    }

    public function removeFile($file)
    {
        $path = public_path() . '/admin/images/country/university/' . $file;
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}