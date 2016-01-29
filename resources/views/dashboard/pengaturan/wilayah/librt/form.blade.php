<div class="form-group">
  <label class="form-label"><strong>Nomor RT</strong></label>
    {!! Form::text('nomor_rt',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor RT','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Ketua RT</strong></label>
    {!! Form::select('penduduk_ketuart_id', App\Datapenduduk::lists('nama','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Nomor RW</strong></label>
    {!! Form::select('librw_id', App\Librw::lists('nomor_rw','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
</div>
