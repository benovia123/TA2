@extends('template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit : Advertiser</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master Data</a></li>
            <li class="breadcrumb-item"><a href="#">Advertiser</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Edit Advertiser</h5>
                      <hr>
                    <form action="{{url()->current()}}" method="post">
                    @csrf
                    <div class="form-group"><input type="text" name="customer" value="{{$advertiser->customer}}" class="form-control"></div>
                    <button type="submit" class="btn btn-block btn-primary"> 
                        Update
                    </button>
                  </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection