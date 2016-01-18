<div class="form-group">
  <label class="form-label"><strong>Kode Desa</strong></label>
    {!! Form::text('kode_desa',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Desa','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Nama Desa</strong></label>
    {!! Form::text('nama_desa',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Desa']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Kelompok Kecamatan</strong></label>
    {!! Form::select('kecamatan_id', App\Libkecamatan::lists('nama_kecamatan','id'),null,['class'=>'form-control'] ) !!}
</div>
