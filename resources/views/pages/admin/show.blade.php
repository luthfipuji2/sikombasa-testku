@extends('layouts.translator.master')

@section('content')
<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        {{$translator->created_at}}
    </div>
    <div class="card-body">
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->nama}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">NIK</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->nik}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->jenis_kelamin}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->tgl_lahir}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">No. HP / telepon</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->no_telp}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Keahlian</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->keahlian}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Provinsi</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->provinsi}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->kabupaten}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Kecamatan</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->kecamatan}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Kode Pos</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->kode_pos}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Detail Alamat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->alamat}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Bank</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->nama_bank}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">No. Rekening</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->rekening_bank}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">A/N Rekening</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$translator->nama_rekening}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Foto KTP</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/biodata/'.$translator->foto_ktp)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">CV</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/dokumen/'.$dokumen->cv)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Ijazah Terakhir</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/dokumen/'.$dokumen->ijazah_terakhir)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Portofolio</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/dokumen/'.$dokumen->portofolio)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Surat Keterangan Sehat</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/dokumen/'.$dokumen->sk_sehat)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Surat Keterangan Berkelakuan Baik</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/dokumen/'.$dokumen->skck)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            @foreach($skills as $s)
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Sertifikat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$s->nama_sertifikat}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nomor Sertifikat</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$s->no_sertifikat}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Diterbitkan Oleh</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$s->diterbitkan_oleh}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Masa Berlaku</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama" id="nama" readonly value="{{$s->masa_berlaku}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Bukti Dokumen</label>
                <div class="col-sm-9">
                    <img src="{{asset('/img/sertifikat/'.$s->bukti_dokumen)}}" height="90" width="150" alt="" srcset="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection