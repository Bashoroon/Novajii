@extends('layouts.app')

    <div class="main main-app p-3 p-lg-4">
        <div class="container">
            <div class="row">
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
                <div class="col-12">
                    
                 
                          
                                <form  method="POST" action="{{route('update', $product->id)}}"  >
                                 
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="text" name="name" value="{{ $product->name }}">
                                <input type="text" name="desc" value="{{ $product->desc }}">
                                <input type="text" name="price" value="{{ $product->price }}">
                                <input type="file" name="image" value="{{ $product->image }}">
                                <button type="submit" class="btn btn-primary">Update</button>
                                {{-- <td>{{$teacher->session}}</td> --}}
                            </form>
                         

                </div>
            </div>
        </div>
    </div>

