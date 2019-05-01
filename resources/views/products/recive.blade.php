@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">Recive Products</div>
      <div class="card-body ">
        {{-- product recive form --}}
        <div class="row">
          <div class="col-md-12">
              <form action="{{route('add.products')}}" method="post" class="form-inline ">
                  @csrf
                  @method('post')
                  <div class="form-group col-md-5 mb-2">
                    <label for="product_id" class="sr-only">Products</label>
                    <select name="product_id" class="form-control w-100 @error('product_id') is-invalid @enderror" id="product_id">
                      <option value="">Select Products</option>
                      @foreach ($allProducts as $product)
                         <option value="{{$product->id}}">{{$product->name}}</option>
                      @endforeach
                    </select> 
                    @error('product_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
        
                  <div class="form-group col-md-2 mb-2">
                    <label for="quantity" class="sr-only">Quantity</label>
                    <input type="number" class="form-control w-100 @error('product_id') is-invalid @enderror" id="quantity" name="quantity" placeholder="quantity" value="{{ old('quantity') }}" required>
                    @error('quantity')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
        
                  <div class="form-group col-md-4 mb-2">
                    <label for="supplier_id" class="sr-only">Supplier</label>
                    <select name="supplier_id" class="form-control w-100 @error('product_id') is-invalid @enderror" id="supplier_id">
                        <option value="">Select Supplier</option>
                        @foreach ($supplyers as $supplyer)
                            <option value="{{$supplyer->id}}">{{$supplyer->name}}</option>
                        @endforeach
                      </select>
        
                      @error('supplier_id')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
        
                  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                </form>
                {{-- product recive form end--}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <table class="table table-stripped text-center">
                <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>Products Name</th>
                    <th>Quantity</th>
                    <th>Suppliers</th>
                    <th>Recived Time</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($recivedProducts)
                  @php
                      $sl = 1
                  @endphp
                    @foreach ($recivedProducts as $rpinfo)
                     <tr>
                        <td>{{$sl}}</td>
                        <td>{{$rpinfo->product->name}}</td>
                        <td>{{$rpinfo->quantity}}</td>
                        <td>{{$rpinfo->supplyer->name}}</td>
                        <td>{{$rpinfo->created_at->diffForHumans()}}</td>
                        <td><form action="{{route('delete.products')}}" method="POST"> @method('delete') @csrf <input type="hidden" value="{{$rpinfo->id}}" name="id"> <button type="submit" class="btn btn-sm btn-danger">Delete</button></form></td>
                      </tr>
                      @php
                          $sl++
                      @endphp
                    @endforeach
                </tbody>
              </table>
              <div class="text-center">
                {{$recivedProducts->links()}}
              </div>
              @endif
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
@endsection