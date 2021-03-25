@extends('adminlayouts.adminlayout')
@section('title')Admin-Home @endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="section>
               
            <section class="content-header">
               
              </section>
      
              <!-- Main content -->
              <section class="content">
                <!-- Info boxes -->
                <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-aqua"><i class="far fa-play-circle"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Total project</span>
                        <span class="info-box-number">0</small></span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-red"><i class="fas fa-users"></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">Total Members</span>
                        <span class="info-box-number">0</span>
                      </div><!-- /.info-box-content -->
                    </div><!-- /.info-box -->
                  </div><!-- /.col -->
      
                  <!-- fix for small devices only -->
              <div class="clearfix visible-sm-block"></div>
      
                 
                  </section>
                  </div>
                
      </div><!-- /.content-wrapper -->
@endsection
