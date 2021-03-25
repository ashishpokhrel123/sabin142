@extends('adminlayouts.adminlayout')
@section('title')  Create  @stop
@section('content')
<div class="container">
    
    <form class="well form-horizontal" action="{!! url('/addmovie') !!}" method="POST" enctype="multipart/form-data" id="addmovie">
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
                                  <legend><center>  <h2> Add About</h2></center></legend>

                    @csrf
                    <div class="form-group">
                        <label for="email">Title *</label>
                        <input type="text" class="form-control" placeholder="Enter Title" name="about_title">
                    </div>
                    <div class="form-group">
                        <label for="email">Description</label>
                        <textarea  placeholder="Enter description of movie" class="form-control" name="description" rows="3">
                </textarea>
                    </div>

                  
                    <button type="submit" class="btn btn-primary">Add </button>
                            </fieldset>
                </form>
            </div>
       
   
@endsection