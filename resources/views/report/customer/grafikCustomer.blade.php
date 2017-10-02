<script>


Highcharts.chart('myChart', {

    title: {
        text: 'Grafik Jumlah Pelanggan'
    },

    subtitle: {
        text: 'C.V DIGITAL KREASI'
    },

    yAxis: {
        title: {
            text: 'Jumalh'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    xAxis:{
            categories:[@foreach($customer as $p){{$p['year']}}, @endforeach],
            description:'Tahun'
    },

    series: [{
        name: 'Jumlah',
        data:[@foreach($customer as $p){{$p['countcustomer']}}, @endforeach]
    }]

});
</script>
