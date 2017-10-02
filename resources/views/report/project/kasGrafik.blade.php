<script>


Highcharts.chart('myChart', {

    title: {
        text: 'Grafik Profit Proyek Per Tahun'
    },

    subtitle: {
        text: 'C.V DIGITAL KREASI'
    },

    yAxis: {
        title: {
            text: 'Profit'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    xAxis:{
            categories:[@foreach($project as $p){{$p['tahun']}}, @endforeach],
            description:'Tahun'
    },

    series: [{
        name: 'Profit',
        data:[@foreach($project as $p){{$p['profit']}}, @endforeach]
    }]

});
</script>
