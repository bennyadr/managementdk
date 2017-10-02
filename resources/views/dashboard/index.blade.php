@extends('layouts.dash')
@section('page_heading','Dashboard Aplikasi')
@section('section')
<div class="col-sm-12">
    @if(Session::has('message'))
      {!!alert()->error('You Dont Have Access','Ooops')!!}
    @endif
      <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-default height">
                <div class="panel-heading">Proyek Terbaru</div>
                <div class="panel-body">
                @php($no=1)
                   <table class="table table-stripped table-bordered">
                       <tr>
                           <th>No</th>
                           <th>Nama Proyek</th>
                           <th>Tanggal</th>
                           <th>Action</th>
                       </tr>
                       @foreach($data as $d)
                       <tr>
                           <td>{{$no++}}</td>
                           <td>{{$d->nama_proyek}}</td>
                           <td>{{$d->created_at->diffForHumans()}}</td>
                           <td>
                                <a href="{{url('proyek/detail')}}/{{$d->id_proyek}}" class="btn btn-primary fa fa-link"></a>
                           </td>
                       </tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
         <div class="col-xs-6">
            <div class="panel panel-default height">
                <div class="panel-heading">Pelanggan Hosting Terbaru</div>
                <div class="panel-body">
                @php($no=1)
                   <table class="table table-stripped table-bordered">
                       <tr>
                           <th>No</th>
                           <th>Nama Proyek</th>
                           <th>Tanggal</th>
                           <th>Action</th>
                       </tr>
                       @foreach($PelangganHosting as $d)
                       <tr>
                           <td>{{$no++}}</td>
                           <td>{{$d->nama}}</td>
                           <td>{{$d->created_at->diffForHumans()}}</td>
                           <td>
                                <a href="{{url('proyek/detail')}}/{{$d->id_proyek}}" class="btn btn-info fa fa-link"></a>
                           </td>
                       </tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.widgetbox')
  @if(Auth::user()->role =='pm')
    <div class="row">
        <div class="col-md-12">
            @section ('chart_panel_title','Grafik Kas Profit Proyek Per tahun')
            @section ('chart_panel_body')
            <div id="myChart" width="350" height="220"></div>
            @endsection
            @include('widget.panel', array('header'=>true, 'as'=>'chart'))
        </div>
    </div>
  @endif
</div>
@endsection
@section('script')
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
        categories:[@foreach($proyek as $p){{$p['tahun']}}, @endforeach],
        description:'Tahun'
        },
        series: [{
        name: 'Profit',
        data:[@foreach($proyek as $p){{$p['profit']}}, @endforeach]
        }]
        });
</script>
@endsection