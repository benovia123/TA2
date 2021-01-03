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
                <h3 class="card-title">Top 10 Advertisers by Spending</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <select id="toptwenty-select" class="form-control">
                    <option value="0">All</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                  </select>
                </div>
                <div id="barchart_material"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Top 10 Positive growth</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <select id="barchart_interactive" class="form-control">
                    <option value="0">All</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>
                <div id="barchart_material2"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Top 10 Negative growth</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <select id="barchart_interactive" class="form-control">
                    <option value="0">All</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>
                <div id="barchart_material3"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Spending (in billions rupiah)</h3>
                <div class="card-tools">
                  <!-- Collapse Button -->
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select id="detail-advertiser" class="form-control">
                        {{-- @foreach ($advertisers as $advertiser)
                      <option value="{{$advertiser->id}}">{{$advertiser->customer}}</option>   
                        @endforeach --}}
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <select id="barchart_interactive" class="form-control">
                        <option value="0">All</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div id="barchart_material4"></div>
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
{{-- <script type="text/javascript">

  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(fetchData('/dashboard/top-twenty', 'barchart_material'));

  function fetchData(url, chartID) {
    fetch(url)
    .then(data => data.json())
    .then(json => {
      let data = google.visualization.arrayToDataTable(json.data)
      let options = {
        bars: 'horizontal',
        height: 400,
      };

      let chart = new google.charts.Bar(document.getElementById(chartID));
      chart.draw(data, google.charts.Bar.convertOptions(options));
    })
  }

  $(document).ready(function(){
    $('#toptwenty-select').on('change', function(){
      let year = ($(this).val() == '0') ? '' : $(this).val();
      fetchData('/dashboard/top-twenty/'+year, 'barchart_material')
    })
  })

  function drawChart() {
    var datatopspending = google.visualization.arrayToDataTable([
        ['Advertisers', 'Amount'],
        ['Indofood', 50050],
        ['Unilever', 150550],
        ['Telkom University', 25000],
        ['Indomilk', 5500],
        ['Mie Sedap', 65000],
        ['Logitech', 10000],
        ['Steel Series', 95000],
        ['Havas', 99999],
        ['Indosat', 55000],
        ['Pt. Marlong', 7777],
        ['Indofood', 5000],
        ['Unilever', 15050],
        ['Telkom University', 25000],
        ['Indomilk', 55005],
        ['Mie Sedap', 65000],
        ['Logitech', 10000],
        ['Steel Series', 95000],
        ['Havas', 99999],
        ['Indosat', 55000],
    ]);

    var positivegrowth = google.visualization.arrayToDataTable([
        ['Advertisers', 'Percent'],
        ['Indofood', 20],
        ['Unilever', 30],
        ['Telkom University', 25],
        ['Indomilk', 15],
        ['Mie Sedap', 10],
        ['Logitech', 20],
        ['Steel Series', 10],
        ['Havas', 35],
        ['Indosat', 50],
        ['Pt. Marlong', 40],
        ['Indofood', 45],
        ['Unilever', 35],
        ['Telkom University', 10],
        ['Indomilk', 20],
        ['Mie Sedap', 15],
        ['Logitech', 10],
        ['Steel Series', 35],
        ['Havas', 20],
        ['Indosat', 30],
    ]);

    var negativegrowth = google.visualization.arrayToDataTable([
        ['Advertisers', 'Percent'],
        ['Indofood', 20],
        ['Unilever', 30],
        ['Telkom University', 25],
        ['Indomilk', 15],
        ['Mie Sedap', 10],
        ['Logitech', 20],
        ['Steel Series', 10],
        ['Havas', 35],
        ['Indosat', 50],
        ['Pt. Marlong', 40],
        ['Indofood', 45],
        ['Unilever', 35],
        ['Telkom University', 10],
        ['Indomilk', 20],
        ['Mie Sedap', 15],
        ['Logitech', 10],
        ['Steel Series', 35],
        ['Havas', 20],
        ['Indosat', 30],
    ]);

    var detail = google.visualization.arrayToDataTable([
        ['Years', 'Amount'],
        ['2016', 1000],
        ['2017', 3000],
        ['2018', 2500],
       
    ]);


    
    var options = {
      bars: 'horizontal',
      height: 400
    };
    var chart = new google.charts.Bar(document.getElementById('barchart_material'));
    chart.draw(datatopspending, google.charts.Bar.convertOptions(options));

    var chart2 = new google.charts.Bar(document.getElementById('barchart_material2'));
    chart2.draw(positivegrowth, google.charts.Bar.convertOptions(options));

    var chart3 = new google.charts.Bar(document.getElementById('barchart_material3'));
    chart3.draw(negativegrowth, google.charts.Bar.convertOptions(options));


    var options4 = {
      bars: 'vertical',
      height: 400
    };

    var chart4 = new google.charts.Bar(document.getElementById('barchart_material4'));
    chart4.draw(detail, google.charts.Bar.convertOptions(options4));
  }
</script> --}}

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/sunburst.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
var data2 =  [{
    id: '0.0',
    parent: '',
    name: 'FOOD'
}];
var sections =  <?php echo json_encode($sections) ?>;
var categories =  <?php echo json_encode($categories) ?>;
var mothercorps =  <?php echo json_encode($mothercorps) ?>;
var products =  <?php echo json_encode($products) ?>;

data2 = sections.concat(categories).concat(mothercorps).concat(products);

console.log(data2);

// java script buat high chart
Highcharts.getOptions().colors.splice(0, 0, 'transparent');


Highcharts.chart('barchart_material', {

    chart: {
        height: '100%'
    },

    title: {
        text: 'Food Section Advertisment Spending'
    },
    subtitle: {
        text: 'Courtesy Of <href="https://havasmedia.com/">Havas Worldwide Jakarta</a>'
    },
    series: [{
        type: "sunburst",
        data: data2,
        allowDrillToNode: true,
        cursor: 'pointer',
        dataLabels: {
            format: '{point.name}',
            filter: {
                property: 'innerArcLength',
                operator: '>',
                value: 16
            },
            rotationMode: 'circular'
        },
        levels: [{
            level: 1,
            levelIsConstant: false,
            dataLabels: {
                filter: {
                    property: 'outerArcLength',
                    operator: '>',
                    value: 64
                }
            }
        }, {
            level: 2,
            colorByPoint: true
        },
        {
            level: 3,
            colorVariation: {
                key: 'brightness',
                to: -0.5
            }
        }, {
            level: 4,
            colorVariation: {
                key: 'brightness',
                to: 0.5
            }
        }],
        turboThreshold: 2600,

    }],
    tooltip: {
        headerFormat: "",
        pointFormat: 'The population of <b>{point.name}</b> is <b>{point.value}</b>'
    }
});
</script>
@endpush
