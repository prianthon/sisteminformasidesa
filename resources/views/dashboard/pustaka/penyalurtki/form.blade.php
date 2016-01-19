<div class="col-md-8">
  <div class="form-group">
    <label class="form-label"><strong>Nama PPTKIS</strong></label>
      {!! Form::text('nama_pptkis',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama PPTKIS','autofocus']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Nama Penanggung Jawab</strong></label>
      {!! Form::text('penanggung_jawab',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Nomor PPTKIS</strong></label>
      {!! Form::text('nomor_pptkis',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor Izin PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Tanggal Izin</strong></label>
      {!! Form::date('tanggal_izin',null,['class'=>'form-control','placeholder'=>'Ketikkan Tanggal Izin PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Nomor Telepon</strong></label>
      {!! Form::text('nomor_telepon',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor Telepon PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Nomor FAX</strong></label>
      {!! Form::text('nomor_fax',null,['class'=>'form-control','placeholder'=>'Ketikkan Nomor Fax PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Alamat Kantor</strong></label>
      {!! Form::text('alamat_kantor',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Kantor PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Alamat Penampungan</strong></label>
      {!! Form::text('alamat_penampungan',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Penampung dari PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Alamat Email</strong></label>
      {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Email PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Alamat Website</strong></label>
      {!! Form::text('website',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Website PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Negara Penempatan</strong></label>
      {!! Form::select('negarapenempatan_id', App\Libnegarapenempatan::lists('nama_negara','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Anggota Assosiasi</strong></label>
      {!! Form::text('anggota_assosiasi',null,['class'=>'form-control','placeholder'=>'Ketikkan Anggota Assosiasi PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Kantor Cabang</strong></label>
      {!! Form::text('kantor_cabang',null,['class'=>'form-control','placeholder'=>'Ketikkan Alamat Kantor Cabang PPTKIS']) !!}
  </div>
  <div class="form-group">
    <label class="form-label"><strong>Provinsi</strong></label>
      {!! Form::select('provinsi_id', App\Libprovinsi::lists('nama_provinsi','id'),null,['class'=>'form-control','data-live-search'=>'true'] ) !!}
  </div>
</div>
