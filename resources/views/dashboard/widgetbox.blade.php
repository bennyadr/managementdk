<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" style="font-size:30px;">{{$proyek->count()}}</div>
                        <div>Jumlah Proyek</div>
                    </div>
                </div>
            </div>
            <a href="{{url('proyek')}}">
                <div class="panel-footer">
                    <span class="pull-left">Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" style="font-size:30px;">{{$server}}</div>
                        <div>Dokumentasi Server</div>
                    </div>
                </div>
            </div>
            <a href="{{url('server')}}">
                <div class="panel-footer">
                    <span class="pull-left">Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-cogs fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge" style="font-size:30px;">{{$PelangganHosting->count()}}</div>
                        <div> Pelanggan Hosting</div>
                    </div>
                </div>
            </div>
            <a href="{{url('hosting')}}">
                <div class="panel-footer">
                    <span class="pull-left">Detail</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
   
</div>