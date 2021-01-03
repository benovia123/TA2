@extends('template')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Master Data : Advertiser</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                    <li class="breadcrumb-item active">Advertiser</li>
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
                        <h5 class="card-title">add new advertiser</h5>
                        <br>
                        <hr>
                        <form action="{{url()->current()}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="customer">
                                    advertiser name
                                </label>
                                <input type="text" class="form-control" name="customer" id="customer" placeholder="Type here..." required>
                            </div>
                            <button type="submit" class="btn btn-block btn-secondary">submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Advertiser List</h5>
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
                                        action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>
                                        {{$customer->id}}
                                    </td>
                                    <td>
                                        {{$customer->customer}}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{url('advertiser/'.$customer->id.'/delete')}}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                        <a class="btn btn-sm btn-secondary" href="{{url('advertiser/'.$customer->id)}}"
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('/advertiser/edit')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" id="customerid">
                    <div class="form-group">
                        <label for="customeredit">
                            advertiser name
                        </label>
                        <input type="text" class="form-control" name="customer" id="customeredit" placeholder="Type here..." required>
                    </div>
                    <button type="submit" class="btn btn-block btn-secondary">submit</button>
                </form>
            </div>
           
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function(){
        console.log('oioioi')
        $('#editmodal')
        .on('shown.bs.modal', function(event){
            var button=$(event.relatedTarget)
            var id=button.data('id')
            var customer=button.data('customer')
            console.log(id,customer)

            var modal=$(this)
            modal.find('.modal-body #customerid').val(id)
            modal.find('.modal-body #customeredit').val(customer)
        })
    })
</script>
@endpush