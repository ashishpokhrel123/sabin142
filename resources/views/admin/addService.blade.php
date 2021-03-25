@extends('adminlayouts.adminlayout')
@section('title')  Create  @stop
@section('content')
<div class="container">
    
                    <form class="well form-horizontal" action="{!! url('/addservice') !!}" method="POST" enctype="multipart/form-data" id="addmovie">
                        @if(session()->has('success'))
                        <div class="alert-success">
                            <h1> {!! session()->get('success') !!}</h1>
                        </div>
                    @endif
                
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li> {{ $error  }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            <fieldset>
                                  <legend><center>  <h2> Add Services</h2></center></legend>

                    @csrf

                        <div class="form-group">
                                       
                                <label for="movie_lang">Service Catgeory  *</label><br>
                                 <select class="custom-select" id="inputGroupSelect01" name="service_category" value="">
                                    @foreach($category as $cats)
                                    <option selected>Choose Service Catgeory</option>
                                    <option value="{{ $cats->id}}">{{ $cats->name}}</option>
                                   
                    @endforeach
                                  </select>
                    </div>
                            <div class="form-group">
                                       
                                <label for="movie_lang">Service name  *</label>
                               <input type="text" class="form-control" placeholder="Enter Service Name" name="add_service">
                    </div>

                    <div class="form-group">
                                       
                                <label for="movie_lang">Service description  *</label>
                               <input type="text" class="form-control" placeholder="Enter Service description" name="service_description">
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                </form>
            </div>
       
   
@endsection
