<?php
					$cekayar		=	mysql_query("select * from analiz where anid='1'");
						while($al	=	mysql_fetch_assoc($cekayar)){
								$stil	=$al["analizstil"];

						
						}
?>
 <div class="footer">
    	<div class="footerleft">Haber Yazılımı</div>
    	<div class="footerright">&copy; Kodlayan - <a href="http://www.keykubad.com">Keykubad</a></div>
    </div><!--footer-->

    
</div><!--mainwrapper-->
<script type="text/javascript">
    jQuery(document).ready(function(){
                                    
        //Replaces data-rel attribute to rel.
        //We use data-rel because of w3c validation issue
        jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
    });
</script>
	<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: '<?php echo $stil;?>'
            },
            title: {
                text: 'Tekil ve Çoğul Hit'
            },
            xAxis: {
                tickInterval: 1
            },
            yAxis: {
                title: {
                    text: 'Google Analytics Verileri'
                },
                labels: {
                    formatter: function() {
                        return this.value / 1000 +'k';
                    }
                }
            },
            tooltip: {
                formatter: function() {
                    return this.series.name +': <b>'+
                        Highcharts.numberFormat(this.y, 0) +'</b><br /><?php echo date("Y.d"); ?>.'+ this.x;
                }
            },
            plotOptions: {
                area: {
                    pointStart: 1,
                    marker: {
                        enabled: false,
                        symbol: 'circle',
                        radius: 2,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Tekil Hit',
                data: [<?php echo implode(",", $tekil); ?>]
            }, {
                name: 'Çoğul Hit',
                data: [<?php echo implode(",", $cogul); ?>]
            }]
        });
    });
    
});
</script>
</body>
</html>