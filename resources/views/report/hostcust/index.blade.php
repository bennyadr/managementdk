@extends('layouts.dash')
@section('page_heading','Laporan data Hosting')
@section('section')
<div class="col-sm-12">
    <div class="row">
        <div class="col-md-12">
            @section ('chart_panel_title','Grafik Kas Profit Proyek Per tahun')
            @section ('chart_panel_body')
            <div id="myChart" width="340" height="220"></div>
            @endsection
            @include('widget.panel', array('header'=>true, 'as'=>'chart'))
        </div>
    </div>
    <div id="myChart" width="350" height="220"></div>
    <div class="row">
        
        <div class="col-md-12">
            @section ('pelanggan_panel_title','Laporan Data Hosting per Tahun')
            @section ('pelanggan_panel_body')
            <form action="{{url('report/hosting')}}" method="post" data-parsley-validate="parsley">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Tahun</label>
                    <select name="tahun"  class="form-control" data-parsley-required = "true"
                        data-parsley-required-message = "Pilih Tahun"
                        data-parsley-trigger= "change focusout">
                        <option value="">Pilih Tahun</option>
                        <option value="all">Seluruh Laporan data hosting</option>
                        @foreach($hostcustYear as $h)
                        <option value="{{$h->tahun}}">{{$h->tahun}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <button class="btn btn-primary col-md-12">Generate</button>
                </div>
            </form>
            @endsection
            @include('widget.panel', array('header'=>true, 'as'=>'pelanggan'))
            
        </div>
        
        
    </div>
</div>
@endsection
@section('script')
@include('report.hostcust.hostCustgrafik')
@endsection