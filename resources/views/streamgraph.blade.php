@extends('template')

@section('content')
<?php 
$koneksi = mysqli_connect("localhost","root","","laravel");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Visualisasi Streamgraph</h1>
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
                <h3 class="card-title"><strong>Perkembangan Top Product mengunakan metode Streamgraph.</strong></h3>
                <h3 class="card-title">Visualisasi tersebut adalah data pengeluaran advertiser product pada section food. Diagram ini menampilkan banyaknya pengeluaran advertiser dalam beberapa kategori. Terdapat 20 Ketegori pada Section Food. </h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
                    <div id="container" style="width: 100%;padding: 15px;"></div>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
@endsection

@push('script')
{{-- <script type="text/javascript">

</script> --}}
<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/streamgraph.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/annotations.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
  var colors = Highcharts.getOptions().colors;
Highcharts.chart('container', {

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
        text: ' '
    },
    subtitle: {
        floating: true,
        align: 'left',
        y: 30,
        text: ''
    },

    xAxis: {
        maxPadding: 0,
        type: 'category',
        crosshair: true,
        categories: [
        <?php 
                $data = mysqli_query($koneksi,"SELECT DISTINCT product, year FROM rawdata");
                while($d = mysqli_fetch_array($data)){
                ?>
            '<?php echo $d['year']; ?> - <?php echo $d['product']; ?>',
        <?php } ?>
            
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

  // Data parsed with olympic-medals.node.js
  series: [
    //mulai PRODUCT
    <?php 
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT DISTINCT category FROM rawdata ORDER BY product LIMIT 35");
        while($d = mysqli_fetch_array($data)){
    ?>
      {
        name: "<?php echo $d['category']; ?>",
        data: [
            //Mulai
                <?php 
                  for ($i = 0; $i < 15; $i++){
                      echo rand(11,75) ;echo ",";
                  }
                ?>

            //akhir
        ]
      },
    <?php } ?>

    //Akhir PRIDUCT
      


  ],

    exporting: {
        sourceWidth: 800,
        sourceHeight: 600
    }

});
</script>
@endpush
