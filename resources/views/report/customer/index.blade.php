@extends('layouts.dash')
@section('page_heading','Laporan Data Jumlah Customer')
@section('section')
<div class="col-sm-12">
    <div class="row">
        <div class="col-md-12">
            @section ('chart_panel_title','Grafik Jumlah Pelanggan Per tahun')
            @section ('chart_panel_body')
            <div id="myChart" width="340" height="220"></div>
            @endsection
            @include('widget.panel', array('header'=>true, 'as'=>'chart'))
        </div>
    </div>
    <div id="myChart" width="350" height="220"></div>
    <div class="row">
        <div class="col-md-12">
            @section ('proyek_panel_title','Laporan Data Jumlah Pelanggan')
            @section ('proyek_panel_body')
            <form action="{{url('report/pelanggan')}}" method="post">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('tahun') ? ' has-error' : '' }}">
                    <label for="">Tahun</label>
                    <select name="tahun" id="" class="form-control">
                        <option value="all">Seluruh Laporan Jumlah data Pelanggan</option>
                        @foreach($customer as $p)
                        <option value="{{$p['tahun']}}">{{$p['tahun']}}</option>
                        @endforeach
                        @if ($errors->has('tahun'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tahun') }}</strong>
                        </span>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <button class="btn btn-warning col-md-12">Generate</button>
                </div>
            </form>
            @endsection
            @include('widget.panel', array('header'=>true, 'as'=>'proyek'))
        </div>
     

    </div>
  
</div>
@endsection
@section('script')
    @include('report.customer.grafikCustomer')
   
@endsection



