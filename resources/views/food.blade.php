@extends('template')

@section('content')
<!-- Content Header (Page header) -->
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
              <!-- /.card-header -->
              <br>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4">
                    <form method="post" action="{{url('/food/proses')}}">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Year</label>
                            <select  name="year" class="form-control">
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $koneksi = mysqli_connect("localhost","root","","laravel");
                                $data = mysqli_query($koneksi,"SELECT DISTINCT year FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['year']; ?>"><?php echo $d['year']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('year'))
                                <div class="text-danger">
                                    {{ $errors->first('year')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Month</label>
                            <select  name="month" class="form-control">
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
                            @if($errors->has('month'))
                                <div class="text-danger">
                                    {{ $errors->first('month')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Section</label>
                            <select  name="section" class="form-control">
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT section FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['section']; ?>"><?php echo $d['section']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('section'))
                                <div class="text-danger">
                                    {{ $errors->first('section')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select  name="category" class="form-control">
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT category FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['category']; ?>"><?php echo $d['category']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('category'))
                                <div class="text-danger">
                                    {{ $errors->first('category')}}
                                </div>
                            @endif
                        </div>
                  </div>

                  <div class="col-md-4">
                     <div class="form-group">
                            <label>Advertiser</label>
                            <select  name="advertiser" class="form-control">
                              <option value=" - "> Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT advertiser FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['advertiser']; ?>"><?php echo $d['advertiser']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('advertiser'))
                                <div class="text-danger">
                                    {{ $errors->first('advertiser')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>mothercorp</label>
                            <select  name="mothercorp" class="form-control">
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT mothercorp FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['mothercorp']; ?>"><?php echo $d['mothercorp']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('mothercorp'))
                                <div class="text-danger">
                                    {{ $errors->first('mothercorp')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>product</label>
                            <select  name="product" class="form-control">
                              <option value=" - ">- Pilih -</option>
                              <?php 
                                $data = mysqli_query($koneksi,"SELECT DISTINCT product FROM rawdata");  
                                while($d = mysqli_fetch_array($data)){
                              ?>
                              <option value="<?php echo $d['product']; ?>"><?php echo $d['product']; ?></option>
                            <?php } ?>
                            </select>
                            @if($errors->has('product'))
                                <div class="text-danger">
                                    {{ $errors->first('product')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>TV</label>
                            <input type="number" name="tv" class="form-control" placeholder="Penghasilan TV">
                            @if($errors->has('tv'))
                                <div class="text-danger">
                                    {{ $errors->first('tv')}}
                                </div>
                            @endif
                        </div>
                  </div>

                  <div class="col-md-4">
                    
                        <div class="form-group">
                            <label>Press</label>
                            <input type="number" name="press" class="form-control" placeholder="Penghasilan Press">
                            @if($errors->has('press'))
                                <div class="text-danger">
                                    {{ $errors->first('press')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Magazine</label>
                            <input type="number" name="magazine" class="form-control" placeholder="Penghasilan Magazine">
                            @if($errors->has('magazine'))
                                <div class="text-danger">
                                    {{ $errors->first('magazine')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" name="total" class="form-control" placeholder="Penghasilan Total">
                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif
                        </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Food</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Category</th>
                          <th>Product</th>
                          <th>OPSI</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($food as $p)
                      <tr>
                          <td>{{ $p->category }}</td>
                          <td>{{ $p->product }}</td>
                          <td>
                              <a href="food/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                              <a href="food/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          
        </div>
      </div>
    </div>
    <!-- /.content -->
@endsection

@push('script')
{{--  --}}
@endpush
