@extends('template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Import Raw Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Master Data</a></li>
            <li class="breadcrumb-item active"><a href="#">Import Raw Data</a></li>
            
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
                      <h5 class="card-title">Impoort Raw Data</h5>
                      <hr>
                    <form action="{{url()->current()}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group"><input type="file" name="import" required class="form-control"></div>
                    <button type="submit" class="btn btn-block btn-primary"> 
                        Import
                    </button>
                  </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection