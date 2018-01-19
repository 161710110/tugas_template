@extends('layout.index2')
@section('konten')<br><br><br><br>
<center>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><font face="magneto" color="grey">Data</font></div>
<table class="table table-bordered table-striped">
	<th>NIM</th>
	<th>Nama</th>
	<th>Tempat Lahir</th>
	<th>Tanggal Lahir</th>
	<th>Alamat</th>
	<th>Cita-cita</th>
	<th>Hobi</th>
	<th>Foto</th>
<tr>
	@foreach($a as $utun)
	<td>{{$utun -> NIM}}</td>
	<td>{{$utun -> Nama}}</td>
	<td>{{$utun -> Tempat_Lahir}}</td>
	<td>{{$utun -> Tanggal_Lahir}}</td>
	<td>{{$utun -> Alamat}}</td>
	<td>{{$utun -> Cita_Cita}}</td>
	<td>{{$utun -> Hobi}}</td>
	<td><img src="{{ asset('poto/'.$utun->Photo) }}" style="max-height: 125px;max-width: 125px; margin-top: 7px;"></td>
</tr>
@endforeach
</table></center>

</div>
@endsection