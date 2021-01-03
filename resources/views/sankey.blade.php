@extends('template')

@section('content')
<?php 
$koneksi = mysqli_connect("localhost","root","","bella");
?>
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Sankey</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Sankey</li>
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
                <h3 class="card-title">Tugas Akhir Sankey</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
                    <div id="container-sankey" style="width: 100%;padding: 15px;"></div>
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
<script src="https://code.highcharts.com/modules/sankey.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script type="text/javascript">
    Highcharts.chart('container-sankey', {

  title: {
    text: 'Sankey Diagram'
  },
  accessibility: {
    point: {
      valueDescriptionFormat: '{index}. {point.from} to {point.to}, {point.weight}.'
    }
  },
  series: [{
    keys: ['from', 'to', 'weight'],
    data: [

    //Section ke category
    <?php 
        $TC = mysqli_query($koneksi,"SELECT DISTINCT section,category FROM food ORDER BY id LIMIT 35");
        while($DTC = mysqli_fetch_array($TC)){
        //jumlah dalam sankey
        $category = $DTC['category'];
        $section = $DTC['section'];
        $JTC = mysqli_query($koneksi,"SELECT section,category FROM food WHERE section='$section' AND category='$category'");
        $jumlahJTC  =mysqli_num_rows($JTC);
    ?>
        ['<?php echo $DTC['section']; ?>', '<?php echo $DTC['category']; ?>',<?php echo $jumlahJTC; ?>],
    <?php }  ?>


    //category ke product
    <?php 
        $TC = mysqli_query($koneksi,"SELECT DISTINCT category,product FROM food ORDER BY id");
        while($DTC = mysqli_fetch_array($TC)){
        //jumlah dalam sankey
        $category = $DTC['category'];
        $product = $DTC['product'];
        $JTC = mysqli_query($koneksi,"SELECT category,product FROM food WHERE category='$category' AND product='$product'");
        $jumlahJTC  =mysqli_num_rows($JTC);
    ?>
        ['<?php echo $DTC['category']; ?>', '<?php echo $DTC['product']; ?>',<?php echo $jumlahJTC; ?>],
    <?php }  ?>


    //Product ke advertiser
    <?php 
        $TC = mysqli_query($koneksi,"SELECT DISTINCT product,advertiser FROM food GROUP BY id");
        while($DTC = mysqli_fetch_array($TC)){
        //jumlah dalam sankey
        $advertiser = $DTC['advertiser'];
        $product = $DTC['product'];
        $JTC = mysqli_query($koneksi,"SELECT product,advertiser FROM food WHERE product='$product' AND advertiser='$advertiser'");
        $jumlahJTC  =mysqli_num_rows($JTC);
    ?>
        ['<?php echo $DTC['product']; ?>', '<?php echo $DTC['advertiser']; ?>',<?php echo $jumlahJTC; ?>],
    <?php }  ?>
    

    //advertiser Ke Mothercorp
    <?php 
        $TC = mysqli_query($koneksi,"SELECT DISTINCT advertiser,mothercorp FROM food ORDER BY id");
        while($DTC = mysqli_fetch_array($TC)){
        //jumlah dalam sankey
        $advertiser = $DTC['advertiser'];
        $mothercorp = $DTC['mothercorp'];
        $JTC = mysqli_query($koneksi,"SELECT advertiser,mothercorp FROM food WHERE advertiser='$advertiser' AND mothercorp='$mothercorp'");
        $jumlahJTC  =mysqli_num_rows($JTC);
    ?>
        ['<?php echo $DTC['advertiser']; ?>', '<?php echo $DTC['mothercorp']; ?>',<?php echo $jumlahJTC; ?>],
    <?php }  ?>


    //Mothercorp Ke Penghasilan
    <?php 
        $TC = mysqli_query($koneksi,"SELECT DISTINCT mothercorp, SUM(tv) AS total_tv, SUM(press) AS total_press, SUM(magazine) AS total_magazine FROM food GROUP BY mothercorp ORDER BY id LIMIT 35");
        while($DTC = mysqli_fetch_array($TC)){
        //jumlah dalam sankey
        $mothercorp = $DTC['mothercorp'];
        $tv = $DTC['total_tv'];
        //Jumlah TV
        $JTV = mysqli_query($koneksi,"SELECT mothercorp,tv FROM food WHERE mothercorp='$mothercorp' AND tv > 0");
        $jumlahJTV  =mysqli_num_rows($JTV);
        $press = $DTC['total_press'];
        //Jumlah Press
        $JP = mysqli_query($koneksi,"SELECT mothercorp,press FROM food WHERE mothercorp='$mothercorp' AND press > 0");
        $jumlahJP  =mysqli_num_rows($JP);
        $magazine = $DTC['total_magazine'];
        //Jumlah Magazine
        $JM = mysqli_query($koneksi,"SELECT mothercorp,magazine FROM food WHERE mothercorp='$mothercorp' AND magazine > 0");
        $jumlahJM  =mysqli_num_rows($JM);
    ?>
        ['<?php echo $DTC['mothercorp']; ?>', 'Penghasilan TV : <?php echo $DTC['total_tv']; ?>',<?php echo $jumlahJTV; ?>],
        ['<?php echo $DTC['mothercorp']; ?>', 'Penghasilan PRESS : <?php echo $DTC['total_press']; ?>',<?php echo $jumlahJP; ?>],
        ['<?php echo $DTC['mothercorp']; ?>', 'Penghasilan MAGAZINE : <?php echo $DTC['total_tv']; ?>',<?php echo $jumlahJM; ?>],
    <?php }  ?>

    ],
    type: 'sankey',
    name: ''
  }]

});

</script>
@endpush
