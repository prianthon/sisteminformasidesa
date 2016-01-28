<div class="form-group">
  <label class="form-label"><strong>Nama Dusun</strong></label>
    {!! Form::text('nama_dusun',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Dusun','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Kepala Dusun</strong></label>
    {!! Form::select('penduduk_kadus_id', App\Datapenduduk::lists('nama','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
</div>
