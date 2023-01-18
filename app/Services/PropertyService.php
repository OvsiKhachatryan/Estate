<?php

namespace App\Services;

use App\Http\Requests\Admin\Property\PropertyCreateRequest;
use App\Http\Requests\Admin\Property\PropertyEditRequest;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;


class PropertyService
{
    public function get()
    {
        return Property::all();
    }

    public function create(PropertyCreateRequest $request)
    {
        $property = new Property;

        $filename = Storage::putFile(
            'public/uploads/properties',
            $request->file('company_logo'));

        $filename = basename($filename);
        $arr = $request->all();
        $arr['company_logo'] = $filename;
        $property->fill($arr)->save();
    }

    public function edit(PropertyEditRequest $request)
    {
        $edit_property = Property::find($request->property);

        if ($request->company_logo) {
            $path = storage_path('app/public/uploads/properties');
            if ($edit_property->company_logo != '' && $edit_property->company_logo != null) {
                $file_old = $path . '/' . $edit_property->company_logo;
                unlink($file_old);
            }
            $filename = Storage::putFile(
                'public/uploads/properties',
                $request->file('company_logo'));

            $filename = basename($filename);
            $arr = $request->all();
            $arr['company_logo'] = $filename;
        }

        if (!$request->company_logo) {
            $arr['company_logo'] = $edit_property->company_logo;
        }
        $edit_property->update($arr);
    }

    public function getById($id)
    {
        return Property::find($id);
    }

    public function delete($id)
    {
        return Property::find($id)->delete();
    }
}
