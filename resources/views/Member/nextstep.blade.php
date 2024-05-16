@extends('dashboard-member.layouts.main')
@section('content')
    {{-- @dd($member->id) --}}
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Form Wizard</h3>
            </div>
        </div>
    </div>
    @if($member->jenis_usaha_id === 1)
    <form id="form_store" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="member_id" value="{{ $member->id }}">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav">
                                <li class="nav-item">
                                    <a href="#informasi" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Informasi">
                                            <i class="fa-solid fa-1"></i>

                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pic" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="PIC">
                                            <i class="fa-solid fa-2"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#legalisasi" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Legalisasi">
                                            <i class="fa-solid fa-3"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#ruangan" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Ruangan">
                                            <i class="fa-solid fa-4"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#meeting" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Meeting">
                                            <i class="fa-solid fa-5"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#karyawan" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Karyawan">
                                            <i class="fa-solid fa-6"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="informasi">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jenis
                                                    Usaha</label>
                                                <select class="form-select">
                                                    @foreach ($jenis as $j)
                                                        @if (old('jenis_usaha_id', $member->jenis_usaha_id) == $j->id)
                                                            <option value="{{ $j->id }}" selected disabled>{{ $j->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Klasifikasi
                                                    Usaha</label>
                                                <select class="form-select">
                                                    <option selected @readonly(true)>silahkan pilih</option>
                                                    @foreach ($klasifikasi as $k)
                                                        @if (old('klasifikasi_usaha_id', $member->klasifikasi_usaha_id) == $k->id)
                                                            <option value="{{ $k->id }}" selected disabled>{{ $k->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama Usaha</label>
                                                <input type="text" id="nama_usaha" name="nama_usaha" class="form-control"
                                                    value="{{ $member->nama_usaha }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Rating
                                                    Usaha</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="1"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '1' ? 'checked' : '' }}>
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="2"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '2' ? 'checked' : '' }}>
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="3"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '3' ? 'checked' : '' }}>
                                                        3
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="4"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '4' ? 'checked' : '' }}>
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="5"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '5' ? 'checked' : '' }}>
                                                        5
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-16">
                                            <label class="form-label">Alamat</label>
                                            <textarea rows="5" class="form-control" placeholder="Enter text here" name="alamat">{{ old('alamat', $member->alamat ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="{{ route('dashboard-member.index') }}"
                                                class="btn btn-secondary"><i class="bx bx-chevron-left me-1"></i>
                                                Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="pic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama
                                                    Pemilik</label>
                                                <input type="text" id="nama_pemilik" name="nama_pemilik"
                                                    class="form-control" value="{{ $member->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jabatan</label>
                                                <input type="text" id="jabatan" name="jabatan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    Indentitas</label>
                                                <input type="text" id="no_identitas_pemilik"
                                                    name="no_identitas_pemilik" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    Handphone</label>
                                                <input type="number" id="no_hp_pemilik" name="no_hp_pemilik"
                                                    class="form-control" value="{{ $member->no_hp }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Email</label>
                                                <input type="email" id="email_pemilik" name="email_pemilik"
                                                    class="form-control" value="{{ $member->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama PIC</label>
                                                <input type="text" id="nama_pic" name="nama_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jabatan
                                                    PIC</label>
                                                <input type="text" id="jabatan_pic" name="jabatan_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Indentitas
                                                    PIC</label>
                                                <input type="text" id="no_identitas_pic" name="no_identitas_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Handphone
                                                    PIC</label>
                                                <input type="number" id="no_hp_pic" name="no_hp_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Email
                                                    PIC</label>
                                                <input type="email" id="email_pic" name="email_pic"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="legalisasi">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama Badan Hukum
                                                    Perusahaan</label>
                                                <input type="text" id="nama_badan_hukum_perusahaan"
                                                    name="nama_badan_hukum_perusahaan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Induk
                                                    Berusaha
                                                    (NIB)</label>
                                                <input type="text" id="nomor_induk_berusaha"
                                                    name="nomor_induk_berusaha" class="form-control"
                                                    placeholder="opsional">
                                            </div>

                                            <fieldset>
                                                <legend>SIU Information</legend>
                                                <ul class="siu-choice">
                                                    <li>
                                                        <input type="radio" id="siu-perdagangan-radio"
                                                            name="siu_choice" value="siu_perdagangan">
                                                        <label for="siu-perdagangan-radio">Nomor SIU Perdagangan</label>
                                                        <input type="radio" id="siu-pariwisata-radio" name="siu_choice"
                                                            value="siu_pariwisata">
                                                        <label for="siu-pariwisata-radio">Nomor SIU Pariwisata</label>
                                                    </li>
                                                </ul>
                                                <div class="siu-inputs">
                                                    <div class="mb-3 siu-perdagangan-input">
                                                        <label for="siu-perdagangan" class="form-label">Nomor SIU
                                                            Perdagangan</label>
                                                        <input type="text" id="siu-perdagangan"
                                                            name="nomor_siu_perdagangan" class="form-control"
                                                            title="Enter your SIU Perdagangan number">
                                                    </div>
                                                    <div class="mb-3 siu-pariwisata-input">
                                                        <label for="siu-pariwisata" class="form-label">Nomor SIU
                                                            Pariwisata</label>
                                                        <input type="text" id="siu-pariwisata"
                                                            name="nomor_siu_pariwisata" class="form-control"
                                                            title="Enter your SIU Pariwisata number">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Akte
                                                    Pendirian
                                                    Perusahaan</label>
                                                <input type="text" id="nomor_akte_pendirian_perusahaan"
                                                    name="nomor_akte_pendirian_perusahaan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    TDUP</label>
                                                <input type="text" id="nomor_tdup" name="nomor_tdup"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">FIle</label>
                                                <input type="file" id="file" name="file" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="ruangan">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah
                                                    Kamar</label>
                                                <input type="number" id="jumlah_kamar" name="total_jumlah_kamar"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah
                                                    Karyawan</label>
                                                <input type="number" id="jumlah_karyawan" name="total_jumlah_karyawan"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Ruang
                                                    Pertemuan</label>
                                                <select name="ruang_pertemuan" class="form-select">
                                                    <option value="ya">Ya</option>
                                                    <option value="tidak">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Tipe
                                                    Kamar</label>
                                                <select name="tipe_kamar" id="" class="form-select">
                                                    <option value="presidential">Presidential</option>
                                                    <option value="deluxe">Deluxe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama
                                                    Kamar</label>
                                                <input type="text" id="nama_kamar" name="nama_kamar"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah
                                                    Kamar</label>
                                                <input type="number" id="jumlah" name="jumlah" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="meeting">
                                    <div class="row">
                                        <div class="col-lg-16">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama
                                                    Ruangan</label>
                                                <input type="text" id="nama_ruangan" name="nama_ruangan"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-16">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Kapasitas
                                                    Maksimal</label>
                                                <input type="number" id="kapasitas_maksimal" name="kapasitas_maksimal"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="karyawan">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Tetap</label>
                                                <input type="number" id="jumlah_karyawan_tetap"
                                                    name="jumlah_karyawan_tetap" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Kontrak</label>
                                                <input type="number" id="jumlah_karyawan_kontrak"
                                                    name="jumlah_karyawan_kontrak" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Harian</label>
                                                <input type="number" id="jumlah_karyawan_harian"
                                                    name="jumlah_karyawan_harian" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Outsource</label>
                                                <input type="number" id="jumlah_karyawan_outsource"
                                                    name="jumlah_karyawan_outsource" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="float-end">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <button type="submit" class="btn btn-primary">Submit Data</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @elseif($member->jenis_usaha_id === 2)
    <form id="form_resto" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="member_id" value="{{ $member->id }}">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav">
                                <li class="nav-item">
                                    <a href="#informasi" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Informasi">
                                            <i class="fa-solid fa-1"></i>

                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pic" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="PIC">
                                            <i class="fa-solid fa-2"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#legalisasi" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Legalisasi">
                                            <i class="fa-solid fa-3"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#karyawan" class="nav-link" data-toggle="tab">
                                        <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Karyawan">
                                            <i class="fa-solid fa-4"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="informasi">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jenis
                                                    Usaha</label>
                                                <select class="form-select">
                                                    @foreach ($jenis as $j)
                                                        @if (old('jenis_usaha_id', $member->jenis_usaha_id) == $j->id)
                                                            <option value="{{ $j->id }}" selected disabled>{{ $j->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Klasifikasi
                                                    Usaha</label>
                                                <select class="form-select">
                                                    @foreach ($klasifikasi as $k)
                                                        @if (old('klasifikasi_usaha_id', $member->klasifikasi_usaha_id) == $k->id)
                                                            <option value="{{ $k->id }}" selected disabled>{{ $k->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama Usaha</label>
                                                <input type="text" id="nama_usaha" name="nama_usaha" class="form-control"
                                                    value="{{ $member->nama_usaha }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Rating
                                                    Usaha</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="1"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '1' ? 'checked' : '' }}>
                                                        1
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="2"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '2' ? 'checked' : '' }}>
                                                        2
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="3"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '3' ? 'checked' : '' }}>
                                                        3
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="4"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '4' ? 'checked' : '' }}>
                                                        4
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="rating_usaha" value="5"
                                                            {{ old('rating_usaha', $member->rating_usaha) == '5' ? 'checked' : '' }}>
                                                        5
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-16">
                                            <label class="form-label">Alamat</label>
                                            <textarea rows="5" class="form-control" placeholder="Enter text here" name="alamat">{{ old('alamat', $member->alamat ?? '') }}</textarea>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous"><a href="{{ route('dashboard-member.index') }}"
                                                class="btn btn-secondary"><i class="bx bx-chevron-left me-1"></i>
                                                Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="pic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama
                                                    Pemilik</label>
                                                <input type="text" id="nama_pemilik" name="nama_pemilik"
                                                    class="form-control" value="{{ $member->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jabatan</label>
                                                <input type="text" id="jabatan" name="jabatan" class="form-control"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    Indentitas</label>
                                                <input type="text" id="no_identitas_pemilik"
                                                    name="no_identitas_pemilik" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    Handphone</label>
                                                <input type="number" id="no_hp_pemilik" name="no_hp_pemilik"
                                                    class="form-control" value="{{ $member->no_hp }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Email</label>
                                                <input type="email" id="email_pemilik" name="email_pemilik"
                                                    class="form-control" value="{{ $member->email }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama PIC</label>
                                                <input type="text" id="nama_pic" name="nama_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jabatan
                                                    PIC</label>
                                                <input type="text" id="jabatan_pic" name="jabatan_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Indentitas
                                                    PIC</label>
                                                <input type="text" id="no_identitas_pic" name="no_identitas_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Handphone
                                                    PIC</label>
                                                <input type="number" id="no_hp_pic" name="no_hp_pic"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Email
                                                    PIC</label>
                                                <input type="email" id="email_pic" name="email_pic"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="legalisasi">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nama Badan Hukum
                                                    Perusahaan</label>
                                                <input type="text" id="nama_badan_hukum_perusahaan"
                                                    name="nama_badan_hukum_perusahaan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Induk
                                                    Berusaha
                                                    (NIB)</label>
                                                <input type="text" id="nomor_induk_berusaha"
                                                    name="nomor_induk_berusaha" class="form-control"
                                                    placeholder="opsional">
                                            </div>

                                            <fieldset>
                                                <legend>SIU Information</legend>
                                                <ul class="siu-choice">
                                                    <li>
                                                        <input type="radio" id="siu-perdagangan-radio"
                                                            name="siu_choice" value="siu_perdagangan">
                                                        <label for="siu-perdagangan-radio">Nomor SIU Perdagangan</label>
                                                        <input type="radio" id="siu-pariwisata-radio" name="siu_choice"
                                                            value="siu_pariwisata">
                                                        <label for="siu-pariwisata-radio">Nomor SIU Pariwisata</label>
                                                    </li>
                                                </ul>
                                                <div class="siu-inputs">
                                                    <div class="mb-3 siu-perdagangan-input">
                                                        <label for="siu-perdagangan" class="form-label">Nomor SIU
                                                            Perdagangan</label>
                                                        <input type="text" id="siu-perdagangan"
                                                            name="nomor_siu_perdagangan" class="form-control"
                                                            title="Enter your SIU Perdagangan number">
                                                    </div>
                                                    <div class="mb-3 siu-pariwisata-input">
                                                        <label for="siu-pariwisata" class="form-label">Nomor SIU
                                                            Pariwisata</label>
                                                        <input type="text" id="siu-pariwisata"
                                                            name="nomor_siu_pariwisata" class="form-control"
                                                            title="Enter your SIU Pariwisata number">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor Akte
                                                    Pendirian
                                                    Perusahaan</label>
                                                <input type="text" id="nomor_akte_pendirian_perusahaan"
                                                    name="nomor_akte_pendirian_perusahaan" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Nomor
                                                    TDUP</label>
                                                <input type="text" id="nomor_tdup" name="nomor_tdup"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">FIle</label>
                                                <input type="file" id="file" name="file" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="next">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <a id="next-tab-btn" class="btn btn-primary">Selanjutnya <i
                                                    class="fa-solid fa-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-pane" id="karyawan">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah
                                                    Karyawan Keseluruhan</label>
                                                <input type="number" id="jumlah_karyawan" name="total_jumlah_karyawan"
                                                    class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Tetap</label>
                                                <input type="number" id="jumlah_karyawan_tetap"
                                                    name="jumlah_karyawan_tetap" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Harian</label>
                                                <input type="number" id="jumlah_karyawan_harian"
                                                    name="jumlah_karyawan_harian" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Outsource</label>
                                                <input type="number" id="jumlah_karyawan_outsource"
                                                    name="jumlah_karyawan_outsource" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Jumlah Karyawan
                                                    Kontrak</label>
                                                <input type="number" id="jumlah_karyawan_kontrak"
                                                    name="jumlah_karyawan_kontrak" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="previous">
                                            <a id="prev-tab-btn" class="btn btn-secondary"><i
                                                    class="bx bx-chevron-left me-1"></i> Kembali</a>
                                        </li>
                                        <li class="float-end">
                                            <button id="clear-btn" class="btn btn-danger" type="button">Kosongkan
                                                Semua</button>
                                            <button type="submit" class="btn btn-primary">Submit Data</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif
@endsection
@section('script')
    <script>
        $(function() {
            $(document).on('submit', '#form_store', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('store.data') }}",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                window.location.href='{{ route('dashboard-member.index') }}';
                            }, 4000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.error,
                                icon: "error"
                            });
                        }
                    }
                });
            });
            $(document).on('submit', '#form_resto', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ route('store.data-resto') }}",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                window.location.href='{{ route('dashboard-member.index') }}';
                            }, 4000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.error,
                                icon: "error"
                            });
                        }
                    }
                });
            });
        })
        document.addEventListener("DOMContentLoaded", function() {
            const prevTabBtn = document.getElementById("prev-tab-btn");
            prevTabBtn.addEventListener("click", prevTab);

            function prevTab(event) {
                event.preventDefault();
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const clearBtn = document.getElementById("clear-btn");
            clearBtn.addEventListener("click", clearAll);

            function clearAll(event) {
                event.stopPropagation();
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const nextTabBtn = document.getElementById("next-tab-btn");
            nextTabBtn.addEventListener("click", nextTab);

            function nextTab(event) {
                event.preventDefault();
            }
        });
    </script>
@endsection
