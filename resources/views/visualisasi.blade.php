@extends('template')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Visualisasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Master Data</a></li>
                    <li class="breadcrumb-item active">Visualisasi</li>
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
                        <h5 class="card-title">Grafik</h5>
                        <br>
                        <hr>
                        <figure class="highcharts-figure">
                            <div id="container_steam"></div>
                        </figure>
<?php
$koneksi = mysqli_connect("localhost","root","","bella2");
?>
<script type="text/javascript">
    var colors = Highcharts.getOptions().colors;
    Highcharts.chart('container_steam', {

    chart: {
        type: 'streamgraph',
        marginBottom: 30,
        zoomType: 'x'
    },

    // Make sure connected countries have similar colors
    colors: [
        colors[0],
        colors[1],
        colors[2],
        colors[3],
        colors[4],
        // East Germany, West Germany and Germany
        Highcharts.color(colors[5]).brighten(0.2).get(),
        Highcharts.color(colors[5]).brighten(0.1).get(),

        colors[5],
        colors[6],
        colors[7],
        colors[8],
        colors[9],
        colors[0],
        colors[1],
        colors[3],
        // Soviet Union, Russia
        Highcharts.color(colors[2]).brighten(-0.1).get(),
        Highcharts.color(colors[2]).brighten(-0.2).get(),
        Highcharts.color(colors[2]).brighten(-0.3).get()
    ],

    title: {
        floating: true,
        align: 'left',
        text: 'HAVAS WORLDWIDE'
    },
    subtitle: {
        floating: true,
        align: 'left',
        y: 30,
        text: 'perancangan dan evaluasi visualisasi informasi interaktif data  multidimensional householed product'
    },

    xAxis: {
        maxPadding: 0,
        type: 'category',
        crosshair: true,
        categories: [
            '2014 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2015 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2016 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2017 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2018 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2019 LAUNDRY CLEANSER & CARE, FABRIC SOFT',
            '2014 DISHWASHING LIQUIDS',
            '2015 DISHWASHING LIQUIDS',
            '2016 DISHWASHING LIQUIDS',
            '2017 DISHWASHING LIQUIDS',
            '2018 DISHWASHING LIQUIDS',
            '2019 DISHWASHING LIQUIDS',
            '2014 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2015 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2016 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2017 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2018 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2019 OTHER CLEANSERS, POLISHERS, BLEACHERS',
            '2014 ELEKTRONIK - ELECTRONIC STORE',
            '2015 ELEKTRONIK - ELECTRONIC STORE',
            '2016 ELEKTRONIK - ELECTRONIC STORE',
            '2017 ELEKTRONIK - ELECTRONIC STORE',
            '2018 ELEKTRONIK - ELECTRONIC STORE',
            '2019 ELEKTRONIK - ELECTRONIC STORE',
            '2014 GARDENING & GARDEN SUPPLIES',
            '2015 GARDENING & GARDEN SUPPLIES',
            '2016 GARDENING & GARDEN SUPPLIES',
            '2017 GARDENING & GARDEN SUPPLIES',
            '2018 GARDENING & GARDEN SUPPLIES',
            '2019 GARDENING & GARDEN SUPPLIES',
            '2014 PETS & PET SUPPLIES',
            '2015 PETS & PET SUPPLIES',
            '2016 PETS & PET SUPPLIES',
            '2017 PETS & PET SUPPLIES',
            '2018 PETS & PET SUPPLIES',
            '2019 PETS & PET SUPPLIES',
        ],
        labels: {
            align: 'left',
            reserveSpace: false,
            rotation: 270
        },
        lineWidth: 0,
        margin: 20,
        tickWidth: 0
    },

    yAxis: {
        visible: false,
        startOnTick: false,
        endOnTick: false
    },

    legend: {
        enabled: false
    },

   

    plotOptions: {
        series: {
            label: {
                minFontSize: 5,
                maxFontSize: 15,
                style: {
                    color: 'rgba(255,255,255,0.75)'
                }
            }
        }
    },

    // Data parsed 
    series: [{
        name: "ATTACK - ALL DETERGENT",
        data: [
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    }, {
        name: "AMAZING CLEAN - DISH WASHING LIQUID",
        data: [
           <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    }, {
        name: "AZALEA - CLEANER",
        data: [
           <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    }, {
        name: "ELEKTRONIK",
        data: [
          <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    }, {
        name: "NOGAN - FERTILIZER",
        data: [
          <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='NOGAN - FERTILIZER' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    }, {
        name: "ACANA PET FOOD",
        data: [
          <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2014'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2015'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2016'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2017'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2018'");
                echo mysqli_num_rows($jumlah);
            ?>,
            <?php 
                $jumlah = mysqli_query($koneksi,"select * from grafik where product='ATTACK - ALL DETERGENT' AND tahun='2019'");
                echo mysqli_num_rows($jumlah);
            ?>,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
        ]
    },

    //yang dishwishing liquid
    

    ],

    exporting: {
        sourceWidth: 800,
        sourceHeight: 600
    }

});

</script>
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