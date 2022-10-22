@extends('layouts.master')

@section('title')

Add Products
@endsection

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="input-group col-md-4">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" class="form-control">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
            <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border">
          </div>



          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection
