{!! Form::text('kode_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Surat','autofocus']) !!}<br><br>
{!! Form::text('nama_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Surat']) !!}<br><br>
{!! Form::select('parent_id', App\ParentSurat::lists('nama_parent','id'),null,['class'=>'form-control'] ) !!}
