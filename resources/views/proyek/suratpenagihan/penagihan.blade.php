<!DOCTYPE html>
<html>
    @include('reportTemplate.style')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <img src="img/koko1.png" width="100%">
    <p>&nbsp;</p>
   
    <p>Nomor&nbsp;&nbsp; :1654/DK/III/{{date('Y')}}</p>
    <p>Palembang, {{$printDate}}</p>
    <p>Kepada Yth,</p>

    <p><strong>{{$data->client->nama}}</strong></p>
    <p><strong>{{$data->client->alamat}}</strong></p>
    <p><strong>&nbsp;</strong></p>
    <p>Perihal&nbsp;&nbsp; : <strong><em><u>Permohonan Pembayaran</u></em></strong></p>
    <p><strong><u>&nbsp;</u></strong></p>
    <p>Dengan hormat,</p>
    <p>Sehubungan dengan Pekerjaan Jasa Pembuatan Dan Pengembangan {{ucwords($data->nama_proyek)}} berdasarkan Surat Perintah Kerja No. {{strtoupper($data->spk)}} Tanggal 05 Desember 2016, dengan ini kami menyampaikan biaya tagihan sebesar <strong>Rp. {{number_format($data->nilai_proyek,2,',','.')}}</strong> biaya tersebut sudah termasuk PPN.</p>
    <p>&nbsp;</p>
    <p>Pembayaran dilakukan secara giral melalui<strong> Bank BNI Cabang Jembatan Ampera </strong>dengan nomor rekening : 674 729 43 atas nama <strong>C.V Digital Kreasi.</strong></p>
    <p>Melengkapi permohonan ini kami lampirkan :</p>
    <ol>
        <li>Faktur Invoice</li>
        <li>Kwitansi</li>
        <li>Faktur Pajak Standar</li>
    </ol>
    <p>Demikian permohonan pembayaran ini kami sampaikan, atas perhatiannya kami ucapkan terima kasih.</p>
    <p>Hormat kami.</p>
    <p>&nbsp;</p>
    <p><strong><u>Yanto, S.Kom</u></strong></p>
    
    <p>Direktur</p>
    

    <p>&nbsp;</p>
    <img src="img/koko2.png" width="100%">
</html>