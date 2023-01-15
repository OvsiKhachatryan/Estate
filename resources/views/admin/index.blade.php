@extends('admin.layouts.layout')
@section('content')
<div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
        </h3>
    </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" style="table-layout: fixed; width:100%;">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Quarter</th>
                    <th scope="col">Name</th>
                    <th scope="col">Logo</th>
                    <th scope="col">About</th>
                    <th scope="col">Starting_price</th>
                    <th scope="col">Price_per_m2</th>
                    <th scope="col">An_initial_fee</th>
                    <th class="text-center" scope="col">Edit</th>
                    <th class="text-center" scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($property as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td class="text-center">{{ $item->property_type }}</td>
                        <td class="text-center">{{ $item->quarter }}</td>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="py-1 text-center">
                            <img src="{{asset('public/Image')}}/{{$item->company_logo}}" alt="logo">
                        </td>
                        <td class="text-center"><span class="d-block wrap-text">{{ $item->about }}</span></td>
                        <td class="text-center">{{ $item->starting_price }}</td>
                        <td class="text-center">{{ $item->price_per_m2 }}</td>
                        <td class="text-center">{{ $item->an_initial_fee }}</td>
                        <td class="text-center"><a href="{{ route('property.edit', $item->id) }}"
                                                   class="btn btn-gradient-success btn-rounded btn-fw table-btn">Edit</a>
                        </td>
                        <form action="{{ route('property.destroy', $item->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <td class="text-center"><button class="btn btn-gradient-danger btn-rounded btn-fw table-btn">Delete</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
