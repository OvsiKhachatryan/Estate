<?php

namespace App\Services;

use App\Http\Requests\PropertyCreateRequest;
use App\Http\Requests\PropertyEditRequest;
use App\Models\Property;


class PropertyService
{
    public function get()
    {
        return Property::all();
    }

    public function create(PropertyCreateRequest $request)
    {
        $property = new Property;
        $property->property_type = $request->property_type;
        $property->quarter = $request->quarter;
        $property->name = $request->name;
        $property->about = $request->about;
        $property->starting_price = $request->starting_price;
        $property->price_per_m2 = $request->price_per_m2;
        $property->an_initial_fee = $request->an_initial_fee;

        if ($request->company_logo) {
            $file = $request->company_logo;
            $filename = date('YmdHi') . "." . $file->extension();
            $file->move(public_path('public/Image'), $filename);
            $property->company_logo = $filename;
        }
        $property->save();
    }

    public function edit(PropertyEditRequest $request)
    {
        $edit_property = Property::find($request->property);

        if ($request->company_logo) {
            $path = public_path('public/Image');
            if ($edit_property->company_logo != '' && $edit_property->company_logo != null) {
                $file_old = $path . '/' . $edit_property->company_logo;
                unlink($file_old);
            }

            $filename = date('YmdHi') . "." . $request->company_logo->extension();
            $request->company_logo->move($path, $filename);
        }

        if (!$request->company_logo) {
            $filename = $edit_property->company_logo;
        }

        $edit_property->update(['property_type' => $request->property_type,
            'quarter' => $request->quarter,
            'name' => $request->name,
            'about' => $request->about,
            'starting_price' => $request->starting_price,
            'price_per_m2' => $request->price_per_m2,
            'an_initial_fee' => $request->an_initial_fee,
            'company_logo' => $filename
        ]);
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
