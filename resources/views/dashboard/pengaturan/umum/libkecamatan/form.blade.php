<div class="form-group">
  <label class="form-label"><strong>Kode Kecamatan</strong></label>
    {!! Form::text('kode_kecamatan',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Kecamatan','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Nama Kecamatan</strong></label>
    {!! Form::text('nama_kecamatan',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Kecamatan']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Kelompok Kabupaten</strong></label>
    {!! Form::select('kabupaten_id', App\Libkabupaten::lists('nama_kabupaten','id'),null,['class'=>'form-control'] ) !!}
</div>
