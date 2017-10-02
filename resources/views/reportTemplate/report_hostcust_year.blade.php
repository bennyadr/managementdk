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
                @if(!isset($year))
                <h3>Laporan Data Pelanggan Hosting {{$year}}</h3>
                @else
                <h3>Laporan Data Pelanggan Hosting</h3>
                @endif
            </td>
            <td>
                
            </td>
        </tr>
        
        <tr>
            <td colspan="7">&nbsp;</td>
        </tr>
        <tr class="header-row">
            <th>Nama </th>
            <th>Perwakilan</th>
            <th>Paket Hosting</th>
            <th>Domain</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Tahun Daftar</th>
            <th>Status</th>
        </tr>
        @foreach($data as $p)
        <tr class="data-row">
            <td>{{$p->nama}}</td>
            <td>{{$p->perwakilan}}</td>
            <td>{{$p->paket->nama_paket}}</td>
            <td>{{$p->domain}}</td>
            <td>{{$p->hp}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->tahun}}</td>
            <td>{{$p->status_text}}</td>
        </tr>
        @endforeach
        <tr class="footer-row">
            <td colspan="7">
                <i>Digital Kreasi </i> &copy; {{date('Y')}}
            </td>
        </tr>
    </table>
</html>