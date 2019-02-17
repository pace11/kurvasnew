<section class="content-header">
    <h1>Grafik </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
    </ol>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                        	<div id="container"></div>

                            <!-- <?php 
                                // include "lib/koneksi.php";
                                // $id = @$_GET ['id_pekerjaan'];
                                // $query = mysqli_query($conn,"select * from tbl_input2 where id_pekerjaan = '$id' ") or die(mysqli_error());
                                // $target =  ($conn);
                                // $tampil = $target->tampil();
                                // $value_pekerjaan = array();
                                // while( $data = $tampil->fetch_object($query)){
                                    $value_pekerjaan[] = $data->$value_pekerjaan;
                                // }
                                // print_r($value_pekerjaan);
                             ?> -->

                        	<script src="dist/highcharts/highcharts.js"></script>
                        	<script src="dist/highcharts/series-label.js"></script>
                        	<script src="dist/highcharts/exporting.js"></script>
                        	<script src="dist/highcharts/export-data.js"></script>

             
                        	<script type="text/javascript">
                        		
                        		Highcharts.chart('container', {

                        		    title: {
                        		        text: 'Grafik Target'
                        		    },

                        		    subtitle: {
                        		        text: 'Source: PLN Bulungan'
                        		    },

                        		    yAxis: {
                        		        title: {
                        		            text: 'Persentase'
                        		        }
                        		    },
                                    xAxis: {
                                        categories: [
                                                    'Week 1',
                                                   'Week 2',
                                                   'Week 3',
                                                   'Week 4',
                                                   'Week 5',
                                                   'Week 6',
                                                   'Week 7'
                                                   ]
                                               
                                    },
                        		    legend: {
                        		        layout: 'vertical',
                        		        align: 'right',
                        		        verticalAlign: 'middle'
                        		    },

                        		    series: [{
                        		        name: 'Target',
                        		        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133 ]
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
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
