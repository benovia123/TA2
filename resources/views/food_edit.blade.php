@extends('template')

@section('content')
<!-- Content Header (Page header) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>

                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>

                <!-- disini mulai data -->

                <div class="container-fluid"> 
                <div class="card-body">
                    <form method="post" action="/TA/public/food/update/{{ $food->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Year</label>
                            <select  name="year" class="form-control">
                              <option value="{{ $food->year }}" selected="">{{ $food->year }}</option>
                              <?php 
                                $koneksi = mysqli_connect("localhost","root","","laravel");
                                $data = mysqli_query($koneksi,"SELECT DISTINCT year FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['year']; ?>"><?php echo $d['year']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Month</label>
                            <select  name="month" class="form-control">
                              <option value="{{ $food->month }}" selected="">{{ $food->month }}</option>
                              <option value=" - ">- Pilih -</option>
                              <option value="januari">Januari</option>
                              <option value="februari">Februari</option>
                              <option value="maret">Maret</option>
                              <option value="april">April</option>
                              <option value="mei">Mei</option>
                              <option value="juni">Juni</option>
                              <option value="juli">Juli</option>
                              <option value="agustus">Agustus</option>
                              <option value="september">September</option>
                              <option value="oktober">Oktober</option>
                              <option value="november">November</option>
                              <option value="desember">Desember</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <select  name="section" class="form-control">
                              <option value="{{ $food->section }}" selected="">{{ $food->section }}</option>
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT section FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['section']; ?>"><?php echo $d['section']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select  name="category" class="form-control">
                              <option value="{{ $food->category }}" selected="">{{ $food->category }}</option>
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT category FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['category']; ?>"><?php echo $d['category']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Advertiser</label>
                            <select  name="advertiser" class="form-control">
                              <option value="{{ $food->advertiser }}" selected="">{{ $food->advertiser }}</option>
                              <option value=" - "> Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT advertiser FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['advertiser']; ?>"><?php echo $d['advertiser']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>mothercorp</label>
                            <select  name="mothercorp" class="form-control">
                              <option value="{{ $food->mothercorp }}" selected="">{{ $food->mothercorp }}</option>
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT mothercorp FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['mothercorp']; ?>"><?php echo $d['mothercorp']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>product</label>
                            <select  name="product" class="form-control">
                              <option value="{{ $food->product }}" selected="">{{ $food->product }}</option>
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT product FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['product']; ?>"><?php echo $d['product']; ?></option>
                            <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>TV</label>
                            <input value="{{ $food->tv }}" type="text" name="tv" class="form-control" placeholder="Penghasilan TV">
                        </div>
                        <div class="form-group">
                            <label>Press</label>
                            <input value=" {{ $food->press }}" type="text" name="press" class="form-control" placeholder="Penghasilan Press">
                        </div>
                        <div class="form-group">
                            <label>Magazine</label>
                            <input value=" {{ $food->magazine }}" type="text" name="magazine" class="form-control" placeholder="Penghasilan Magazine">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input value=" {{ $food->total }}" type="text" name="total" class="form-control" placeholder="Penghasilan Total">
                        </div>
 
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
                </div>

                <!-- disini akhir data -->
   
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
@endsection

@push('script')
{{-- 
 <script src="{{asset('dist/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('dist/jquery.dataTables.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable();
    } );
    </script>
--}}


@endpush
