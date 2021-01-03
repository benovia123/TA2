@extends ('template')

@section ('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit : Spending</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item"><a href="#">Spending</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
                                Edit Spending
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
                                            <option value="{{$advertiser->id}}" @if($spending->advertiser->id === $advertiser->id) selected @endif>
                                                {{$advertiser->customer}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="amount">
                                        Amount 
                                    </label>
                                <input value="{{$spending->amount}}" type="number" name="amount" id="amount" placeholder="Type Here (Number Only!)" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="month">
                                        Month
                                    </label>
                                    <select name="month" id="month" class="form-control" required>
                                        <option value="Januari" @if($spending->month === 'Januari') selected @endif>
                                        Januari
                                        </option>
                                        <option value="Februari" @if($spending->month === 'Februari') selected @endif>
                                        Februari
                                        </option>
                                        <option value="Maret" @if($spending->month === 'Maret') selected @endif>
                                        Maret
                                        </option>
                                        <option value="April" @if($spending->month === 'April') selected @endif>
                                        April
                                        </option>
                                        <option value="Mei" @if($spending->month === 'Mei') selected @endif>
                                        Mei
                                        </option>
                                        <option value="Juni" @if($spending->month === 'Juni') selected @endif>
                                        Juni
                                        </option>
                                        <option value="Juli" @if($spending->month === 'Juli') selected @endif>
                                        Juli
                                        </option>
                                        <option value="Agustus" @if($spending->month === 'Agustus') selected @endif>
                                        Agustus
                                        </option>
                                        <option value="September" @if($spending->month === 'September') selected @endif>
                                        September
                                        </option>
                                        <option value="Oktober" @if($spending->month === 'Oktober') selected @endif>
                                        Oktober
                                        </option>
                                        <option value="November" @if($spending->month === 'November') selected @endif>
                                        November
                                        </option>
                                        <option value="Desember" @if($spending->month === 'Desember') selected @endif>
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
                                    <option value="{{$year}}" @if($spending->year === strval($year)) selected @endif>
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