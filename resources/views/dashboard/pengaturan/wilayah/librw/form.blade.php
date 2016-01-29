<div class="form-group">
  <label class="form-label"><strong>Nomor RW</strong></label>
    {!! Form::text('nomor_rw',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor RW','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Ketua RW</strong></label>
    {!! Form::select('penduduk_ketuarw_id', App\Datapenduduk::lists('nama','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Nama Dusun</strong></label>
    {!! Form::select('libdusun_id', App\Libdusun::lists('nama_dusun','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
</div>
