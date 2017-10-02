<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
@include('reportTemplate.style')
                <img src="img/koko1.png" width="100%">

<table>
    <tr class="title-row">
        <td colspan="7">
        </td>
    </tr>
    <tr>
        <td colspan="7">&nbsp;</td>
    </tr>
   
            <tr>
                <td>
                   
                </td>
                <td colspan="6">
                 
                </td>
            </tr>
       
            <tr>
                <td colspan="6">
                @if($year!= null)
                    <h3>Laporan Data Profit Proyek Tahun {{$year}}</h3>
                @else
                    <h3>Laporan Seluruh Data Profit Proyek</h3>
                @endif
                </td>
                <td>
                  
                </td>
            </tr>
    
    <tr>
        <td colspan="7">&nbsp;</td>
    </tr>
    <tr class="header-row">
        <th>Nama Proyek</th>
        <th>Nilai Kontrak</th>
        <th>Biaya Operasional</th>
        <th>Status Proyek</th>
        <th>Status Pembayaran</th>
        <th>Profit</th>
        <th>Tahun</th>
    </tr>
    @foreach($data as $p)
        <tr class="data-row">
            <td>{{$p->nama_proyek}}</td>
            <td>{{$p->format_rupiah_nilai}}</td>
            <td>{{$p->nilai_operasional}}</td>
            <td>{{strtoupper($p->status_proyek)}}</td>
            <td>{{strtoupper($p->status_pembayaran_text)}}</td>
            <td>Rp. {{number_format($p->profit,2,',','.')}}</td>
            <td>{{$p->tahun}}</td>
        </tr>
    @endforeach
    @if($year != null)
    <tr class="footer-row" style="text-align: right;">
        <td colspan="7">
            <strong>Total Profit Tahun {{$year}}: Rp. {{number_format($p->sum('profit'),2,',','.')}}</strong> 
        </td>
    </tr>
    @endif
    <tr class="footer-row">
        <td colspan="7">
            <i>Digital Kreasi </i> &copy; {{date('Y')}}
        </td>
    </tr>
</table>
</html>