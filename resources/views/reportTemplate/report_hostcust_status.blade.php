<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @include('reportTemplate.style')
    <table>
        <tr class="title-row">
            <td colspan="7">
                <h3 style="text-align: center">C.V Digital Kreasi</h3>
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
                <h3>Laporan Hosting </h3>
            </td>
            <td>
                
            </td>
        </tr>
        
        <tr>
            <td colspan="7">&nbsp;</td>
        </tr>
        <tr class="header-row">
            <th>Nama </th>
            <th>Domain</th>
            <th>Paket Hosting</th>
            <th>Status</th>
            <th>Tanggal Jatuh Tempo</th>
            <th>Email</th>
            <th>Tahun Daftar</th>
        </tr>
        @foreach($data as $p)

        <tr class="data-row">
            <td>{{$p->hostcust->name}}</td>
            <td>{{$p->hostcust->domain}}</td>
            <td>{{$p->hostcust->hosting}}</td>
            <td>{{$p->status}}</td>
            <td>{{date('d-m-Y',strtotime($p->due_date))}}</td>
            <td>{{$p->hostcust->email}}</td>
            <td>{{$p->hostcust->year}}</td>
        </tr>
        @endforeach
        <tr class="footer-row">
            <td colspan="7">
                <i>Digital Kreasi </i> &copy; {{date('Y')}}
            </td>
        </tr>
    </table>
</html>