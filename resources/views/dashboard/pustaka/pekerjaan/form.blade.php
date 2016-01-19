<div class="form-group">
  <label class="form-label"><strong>Nama Pekerjaan</strong></label>
    {!! Form::text('pekerjaan',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Pekerjaan','autofocus']) !!}
</div>
<div class="form-group">
  <label class="form-label"><strong>Tipe "A untuk PNS dan Mandiri, B sebaliknya"</strong></label>
    {!! Form::select('tipe', array('A' => 'A', 'B' => 'B'), null,['class'=>'form-control'] ) !!}
</div>
