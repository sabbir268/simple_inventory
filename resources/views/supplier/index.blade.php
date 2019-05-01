@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">All Sent Products</div>
      <div class="card-body ">
        {{-- product sent to the company --}}
        <div class="row">
          <div class="col-md-12">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>Sl.</th>
                    <th>Products Name</th>
                    <th>Products Description</th>
                    <th>Quantity</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                  @if ($sendProducts)
                  @php
                      $sl = 1
                  @endphp
                    @foreach ($sendProducts as $spinfo)
                     <tr>
                        <td>{{$sl}}</td>
                        <td>{{$spinfo->product->name}}</td>
                        <td class="text-left">{{$spinfo->product->description}}</td>
                        <td>{{$spinfo->quantity}}</td>
                        <td>{{$spinfo->created_at->diffForHumans()}}</td>
                      </tr>
                      @php
                          $sl++
                      @endphp
                    @endforeach
                </tbody>
              </table>
              <div class="text-center">
                {{$sendProducts->links()}}
              </div>
              @endif
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
@endsection