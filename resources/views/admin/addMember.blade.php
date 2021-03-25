@extends('adminlayouts.adminlayout')
@section('title')  Create  @stop
@section('content')
<div class="container">
    
                    <form class="well form-horizontal" action="{!! url('/addmember') !!}" method="POST" enctype="multipart/form-data" id="addmovie">
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
                                  <legend><center>  <h2> Add new Member</h2></center></legend>

                    @csrf

                     <div class="form-group">
                        <label for="email">Member Name *</label>
                        <input type="text" class="form-control" placeholder="Enter Member Name" name="member_name">
                    </div>
                    <div class="form-group">
                    <label>Member Catgeory</label><br>
                     <select class="custom-select" id="inputGroupSelect01" name="member_category" value="">
                                    <option selected>Choose Service Catgeory</option>
                                    <option value="Structure">Structure</option>
                                    <option value="Architectural">Architectural</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Estimating">Estimating</option>
                                  </select>
                    </div>
                    <div class="form-group">
                     <label for="email">Member Position *</label>
                        <input type="text" class="form-control" placeholder="Enter Member Name" name="member_position">

                    </div>
                                
                              
                 

                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                </form>
            </div>
       
   
@endsection
