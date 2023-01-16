@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-description"></p>
                <form class="forms-sample" action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="add_property_type" class="ps-3">Property_type</label>
                        <input type="number" min="0" name="property_type" class="form-control" id="add_property_type">
                    </div>
                    <div class="form-group">
                        <label for="add_quarter" class="ps-3">Quarter</label>
                        <input type="number" min="0" name="quarter" class="form-control" id="add_quarter">
                    </div>
                    <div class="form-group">
                        <label for="add_name" class="ps-3">Name</label>
                        <input type="text" name="name" class="form-control" id="add_name">
                    </div>
                    <div class="form-group">
                        <label class="ps-3">Company_logo</label>
                        <input type="file" name="company_logo" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                             <button type="button" class="btn btn-gradient-danger btn-icon-text file-upload-browse">
                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                          </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_starting_price" class="ps-3">Starting_price</label>
                        <input type="number" min="0" name="starting_price" class="form-control" id="add_starting_price">
                    </div>
                    <div class="form-group">
                        <label for="add_price_per_m2" class="ps-3">Price_per_m2</label>
                        <input type="number" min="0" name="price_per_m2" class="form-control" id="add_price_per_m2">
                    </div>
                    <div class="form-group">
                        <label for="add_an_initial_fee" class="ps-3">An_initial_fee</label>
                        <input type="number" min="0" name="an_initial_fee" class="form-control" id="add_an_initial_fee">
                    </div>
                    <div class="form-group">
                        <label for="add_about" class="ps-3">About</label>
                        <textarea name="about" class="form-control" id="add_about" rows="4"></textarea>
                    </div>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div style="color: red;">{{$error}}</div>
                        @endforeach
                    @endif
                    @if(session('message'))
                        <p class="text-center mt-3 text-success">{{session('message')}}</p>
                    @endif
                    <button type="submit" class="btn btn-gradient-primary me-2">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
