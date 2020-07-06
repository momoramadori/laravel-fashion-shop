@extends('layouts.app')
@section('page-title','Home')
@section('content')

<div class="row justify-content-center">
    <div class="col-6">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product</th>
                <th scope="col">Color</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($clothes as $clothe)
                <tr>
                    <th scope="row">{{$clothe->id}}</th>
                    <td>{{$clothe->name}}</td>
                    <td>{{$clothe->color}}</td>
                    <td>{{$clothe->price}}</td>
                    <td>{{$clothe->category}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>

@endsection