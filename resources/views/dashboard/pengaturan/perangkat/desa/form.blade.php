<div class="col-md-6">
  <div class="form-group">
    <label class="form-label"><strong>Nama Perangkat Desa</strong></label>
      {!! Form::text('datapenduduk_id',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Perangkat Desa','autofocus']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Jabatan</strong></label>
      {!! Form::select('jabatan_id', App\Libperangkatjabatan::lists('perangkat_jabatan','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label class="form-label"><strong>NIAP</strong></label>
      {!! Form::text('niap',null,['class'=>'form-control','placeholder'=>'Ketikkan NIAP']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>NIP</strong></label>
      {!! Form::text('nip',null,['class'=>'form-control','placeholder'=>'Ketikkan NIP']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Pangkat Golongan</strong></label>
      {!! Form::text('pangkat_golongan',null,['class'=>'form-control','placeholder'=>'Ketikkan Pangkat Golongan']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>No Tgl Keputusan Pengangkatan</strong></label>
      {!! Form::text('no_tgl_keputusan_pengangkatan',null,['class'=>'form-control','placeholder'=>'Ketikkan No Tgl Keputusan Pengangkatan']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>No Tgl Keputusan Pemberhentian</strong></label>
      {!! Form::text('no_tgl_keputusan_pemberhentian',null,['class'=>'form-control','placeholder'=>'Ketikkan No Tgl Keputusan Pemberhentian']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Keterangan</strong></label>
      {!! Form::text('keterangan',null,['class'=>'form-control','placeholder'=>'Ketikkan Keterangan']) !!}
  </div>
</div>
