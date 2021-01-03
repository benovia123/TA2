@extends('template')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Master : Spending</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Master Data</a></li>
              <li class="breadcrumb-item active">Spending</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <a href="{{url('/spending/add')}}" class="btn btn-block btn-primary">
                         <i class="fas fa-plus"></i> Add new spending    
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Spending List</h5>
                        <br>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        id
                                    </th>
                                    <th>
                                        customer
                                    </th>
                                    <th>
                                        amount
                                    </th>
                                    <th>
                                        month
                                    </th>
                                    <th>
                                        year
                                    </th>
                                    <th>
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($spendings as $spending)
                                <tr>
                                    <td>
                                        {{$spending->id}}
                                    </td>
                                    <td>
                                        {{$spending->advertiser->customer}}
                                    </td>
                                    <td>
                                         {{$spending->amount}}
                                    </td>
                                    <td>
                                        {{$spending->month}}
                                    </td>
                                    <td>
                                        {{$spending->year}}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{url('spending/'.$spending->id.'/delete')}}"
                                            data-toggle="tooltip" data-placement="left" title="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-secondary" href="{{url('spending/'.$spending->id)}}"
                                            data-toggle="tooltip" data-placement="right" title="edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                      
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection