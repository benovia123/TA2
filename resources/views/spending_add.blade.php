@extends ('template')

@section ('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add : Spending</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item"><a href="#">Spending</a></li>
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class='content'>
         <div class='container-fluid'>
             <div class='row'>
                 <div class='col-sm-12'>
                     <div class='card'>
                         <div class='card-body'>
                             <h5 class='card-title'> 
                                Add New Spending
                             </h5>
                             <hr>
                             <form action="{{url()->current()}}" method="POST">
                                @csrf
                                <div class='form-group'>
                                    <label for="advertiser">
                                        Choose Advertiser
                                    </label>
                                    <select name="id_advertiser" id="advertiser" class="form-control" required>
                                        @foreach($advertisers as $advertiser)
                                            <option value="{{$advertiser->id}}">
                                                {{$advertiser->customer}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount">
                                        Amount 
                                    </label>
                                    <input type="number" name="amount" id="amount" placeholder="Type Here (Number Only!)" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="month">
                                        Month
                                    </label>
                                    <select name="month" id="month" class="form-control" required>
                                        <option value="Januari">
                                        Januari
                                        </option>
                                        <option value="Februari">
                                        Februari
                                        </option>
                                        <option value="Maret">
                                        Maret
                                        </option>
                                        <option value="April">
                                        April
                                        </option>
                                        <option value="Mei">
                                        Mei
                                        </option>
                                        <option value="Juni">
                                        Juni
                                        </option>
                                        <option value="Juli">
                                        Juli
                                        </option>
                                        <option value="Agustus">
                                        Agustus
                                        </option>
                                        <option value="September">
                                        September
                                        </option>
                                        <option value="Oktober">
                                        Oktober
                                        </option>
                                        <option value="November">
                                        November
                                        </option>
                                        <option value="Desember">
                                        Desember
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="year">
                                        Year
                                    </label>
                                    <select name="year" id="year" class="form-control" required>
                                        @for($year=2017;$year<=2030;$year++)
                                    <option value="{{$year}}">
                                        {{$year}}
                                    </option>
                                        @endfor  

                                    </select>
                                </div>
                                <button class="btn btn-block btn-primary" type="submit">
                                    Submit
                                </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
@endsection