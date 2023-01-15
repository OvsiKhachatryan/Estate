<?php

namespace App\Services;

use App\Models\Property;

class PropertyService
{
    public function get()
    {
        return Property::all();
    }

    public function create($property_type, $quarter, $name, $about, $starting_price, $price_per_m2, $an_initial_fee, $company_logo)
    {
        $property = new Property;
        $property->property_type = $property_type;
        $property->quarter = $quarter;
        $property->name = $name;
        $property->about = $about;
        $property->starting_price = $starting_price;
        $property->price_per_m2 = $price_per_m2;
        $property->an_initial_fee = $an_initial_fee;

        if ($company_logo) {
            $file = $company_logo;
            $filename = date('YmdHi') . "." . $file->extension();
            $file->move(public_path('public/Image'), $filename);
            $property->company_logo = $filename;
        }
        $property->save();
    }

    public function edit($id, $property_type, $quarter, $name, $about, $starting_price, $price_per_m2, $an_initial_fee, $company_logo)
    {
        $edit_property = Property::find($id);

        if ($company_logo) {
            $path = public_path('public/Image');
            if ($edit_property->company_logo != '' && $edit_property->company_logo != null) {
                $file_old = $path . '/' . $edit_property->company_logo;
                unlink($file_old);
            }

            $filename = date('YmdHi') . "." . $company_logo->extension();
            $company_logo->move($path, $filename);
        }

        if (!$company_logo) {
            $filename = $edit_property->company_logo;
        }

        $edit_property->update(['property_type' => $property_type,
            'quarter' => $quarter,
            'name' => $name,
            'about' => $about,
            'starting_price' => $starting_price,
            'price_per_m2' => $price_per_m2,
            'an_initial_fee' => $an_initial_fee,
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
