<script>


Highcharts.chart('myChart', {

    title: {
        text: 'Grafik Jumlah Pelanggan Hosting Per tahun'
    },

    subtitle: {
        text: 'C.V DIGITAL KREASI'
    },

    yAxis: {
        title: {
            text: 'Jumlah '
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },
    xAxis:{
            categories:[@foreach($hostcustYear->toArray() as $p){{$p['tahun']}}, @endforeach],
            description:'Tahun'
    },

    series: [{
        name: 'Jumlah Pelanggan',
        data:[@foreach($hostcustYear->toArray() as $p){{$p['jumlah']}}, @endforeach]
    }]

});
</script>
