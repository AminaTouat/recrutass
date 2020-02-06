
    
     <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../releases/v5-0-9/css/all.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('../vcard/css/styles.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('../vcard/css/template-colors/green.css')}}" />
    <link href="{{ asset('../vendor/jquery/jquery.js" rel="stylesheet')}}">
    <script src="{{asset('https://code.highcharts.com/highcharts.js')}}"></script>
     

    <script src="{{asset('https://code.highcharts.com/modules/exporting.js')}}"></script>
    <script src="{{asset('https://code.highcharts.com/modules/export-data.js')}}"></script>
    <script src="{{asset('https://code.highcharts.com/modules/accessibility.js')}}"></script>
    <script src="{{asset('https://code.highcharts.com/stock/modules/export-data.js')}}"></script>
    <script src="{{asset('https://code.highcharts.com/stock/modules/data.js')}}"></script>

   <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-5">
                
                        <h4>LineChart</h4>
                    </div>
                    <div class="col-md-7">
                      
                            <ol class="breadcrumb">
                                <li><a href="javascript:void(0)">Accueil</a></li>
                              
                            </ol>
                        
                            
            
                    </div>
                </div>

                <div class="card-inner1 animated active">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="panel-title">New Offres Growth</h3>
                    </div>
                    <div class="col-md-3"> 
                    <form id ="monForm" action="{{route('chart')}}" method="GET">
                       {{ csrf_field() }}
                       <select name="year" id="year" class="form-control" onchange="document.getElementById('monForm').submit();">
                             <option value="">Select Year</option>
                             <option value="2015">2015</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2018">2018</option>
                             <option value="2019">2019</option>
                             <option value="2020">2020</option>
                        </select>
                    </form>  
                    </div>
                </div>
            </div>
        <br>
        <br>
        <div id="container" style="height: 400px; min-width: 600px"></div>
        <div class="pull-right">
              <button>  <a class="btn btn-primary" href="{{ route('recruteur.indexo') }}"> Back</a><button>
            </div>
</div>




<div class="page-container">
           <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    </div>



<script type="text/javascript">
   let chart =  JSON.parse(`<?php echo $chart ?>`);
    
    Highcharts.chart('container', {
        title: {
            text: 'Nombre d\'offre'
        },
    
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Numbre d\'offre'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'les offres ',
            data: chart
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
    </div></div></div></div> 
</body>