<div class="form-group">
  <label class="form-label"><strong>Kode Kabupaten</strong></label>
    {!! Form::text('kode_kabupaten',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Kabupaten','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Nama Kabupaten</strong></label>
    {!! Form::text('nama_kabupaten',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Kabupaten']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Kelompok Provinsi</strong></label>
    {!! Form::select('provinsi_id', App\Libprovinsi::lists('nama_provinsi','id'),null,['class'=>'form-control'] ) !!}
</div>
