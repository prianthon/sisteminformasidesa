{!! Form::text('kode_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Kode Surat','autofocus']) !!}<br><br>
{!! Form::text('nama_surat',null,['class'=>'form-control','placeholder'=>'Ketikkan Nama Surat']) !!}<br><br>
{!! Form::select('id', App\User::lists('name','id'),null,['class'=>'form-control'] ) !!}
{!! Form::select('parent_id',array(
                                          '01'      => '01 - Surat Pengantar',
                                          '470'     => '470 - Kependudukan',
                                          '471.1'   => '471.1 - WNI Asli',
                                          '471.2'   => '471.2 - WNI Keturunan Asing',
                                          '471.21'  => '471.2 - Permohonan Kewarganegaraan',
                                          '471.22'  => '471.2 - Permohonan Ganti Kelamin',
                                          '471.3'   => '471.3 - Asimilasi',
                                          '472'     => '472 - Kewarganegaraan Asing',
                                          '473'     => '473 - Tidak Berkewarganegaraan(state less)',
                                          '474'     => '474 - Pendaftaran Penduduk',
                                          '474.1'   => '474.1 - Kelahiran',
                                          '474.11'  => '474.11 - Adopsi',
                                          '474.2'   => '474.2 - Perkawinan/Perceraian/Rujuk',
                                          '474.3'   => '474.3 - Kematian',
                                          '474.4'   => '474.4 - Kartu Penduduk',
                                          '475'     => '475 - Perpindahan Penduduk',
                                          '475.1'   => '475.1 - Transmigrasi',
                                          '475.2'   => '475.2 - Urbanisasi'
                                        )) !!}
