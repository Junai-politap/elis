<x-dosen>

    <div class="container">
        <div class="card-header">
            <h1>Usulan Baru Penelitian</h1>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-tabs">
                    <!-- Judul -->
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true"> Identitas Usulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-one-profile" role="tab"
                                    aria-controls="custom-tabs-one-profile" aria-selected="false">Substabsi
                                    Usulan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-one-messages" role="tab"
                                    aria-controls="custom-tabs-one-messages" aria-selected="false">RAB</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                    href="#custom-tabs-one-settings" role="tab"
                                    aria-controls="custom-tabs-one-settings" aria-selected="false">Dokumen
                                    Pendukung</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-two-home-tab" data-toggle="pill"
                                    href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home"
                                    aria-selected="false">Kirim Usulan</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <!-- Identitas Usulan -->
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-identitas"
                                                role="tabpanel" aria-labelledby="custom-tabs-one-identitas-tab">

                                                <!-- Identitas Usulan -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Identitas Usulan</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Judul
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="judul_penelitian" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">TKT Saat
                                                                Ini</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tkt_new" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Target Akhir
                                                                TKT</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="end_tkt" value="" required>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                                <!-- Skema -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Pemilihan Skema</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan/lanjutan', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Skema
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <select name="" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Skema Kegiatan
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Rumpun
                                                                Ilmu</label>
                                                            <div class="col-sm-9">
                                                                <select name="rumpun_ilmu1" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Rumpun Ilmu
                                                                        Level 1</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <select name="rumpun_ilmu2" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Rumpun Ilmu
                                                                        Level 2</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"></label>
                                                            <div class="col-sm-9">
                                                                <select name="rumpun_ilmu3" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Rumpun Ilmu
                                                                        Level 3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang Fokus
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <select name="bidang_penelitian" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Bidang Fokus
                                                                        Penelitian</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang Fokus
                                                                PRN</label>
                                                            <div class="col-sm-9">
                                                                <select name="bidang_prn" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Bidang Fokus PRN
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tema
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <select name="tema_penelitian" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Tema Penelitian
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Topik
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <select name="topik_penelitian" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value="">Pilihan Topik Penelitian
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Lama
                                                                Kegiatan</label>
                                                            <div class="col-sm-4">
                                                                <select name="lama_kegiatan" id=""
                                                                    class="form-control" onchange="">
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                                <!-- Identitas Anggota 1 -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Identitas Anggota Penelitian 1
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan/lanjutanAnggota1', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Lengkap Dan
                                                                Gelar</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="nama_gelar1" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang
                                                                Keahlian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="bidang_keahlian1" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Peran</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="peran1" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tugas Dalam
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <textarea style="height: 100px" name="tugas_penelitian1" id="" class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                                <!-- Identitas Anggota 2 -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Identitas Anggota Penelitian 2
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan/lanjutanAnggota2', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Lengkap Dan
                                                                Gelar</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="nama_gelar2" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang
                                                                Keahlian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="bidang_keahlian2" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Peran</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="peran2" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tugas Dalam
                                                                Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <textarea style="height: 100px" name="tugas_penelitian2" id="" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-substansi" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-substansi-tab">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Substansi Usulan -->
                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-one-profile-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-identitas"
                                                role="tabpanel" aria-labelledby="custom-tabs-one-identitas-tab">

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Proposal Penelitian</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan/lanjutanProposal', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="label"><b>Unduh Format Proposal Disini</b>
                                                                    <div class="col-md-5">
                                                                        <img src="{{ url('public/template') }}/dist/img/word.png"
                                                                            alt="User Avatar" style="width: 10%"
                                                                            class="img-box">
                                                                        <button class="btn btn-primary"><i
                                                                                class="fa fa-download"> Download</i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="label"><b>Unggah Dokumen Proposal
                                                                        Usulan</b>
                                                                    <input type="file" class="form-control"
                                                                        name="dokumen" id="file" accept=".pdf">
                                                                    <div class="">
                                                                        <p><i style="color: red; font-size: 12px">*Format
                                                                                File PDF dengan ukuran maks 5MB</i></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Luaran Dan target Capaian</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"
                                                                style="color: red">Luaran Wajib</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tkt_new" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"
                                                                style="color: red">Luaran Tambahan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tkt_new" value="">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="custom-tabs-one-substansi" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-substansi-tab">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- RAB -->
                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                aria-labelledby="custom-tabs-one-messages-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-identitas"
                                                role="tabpanel" aria-labelledby="custom-tabs-one-identitas-tab">

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Rancangan Anggaran Kegiatan
                                                            </h2>
                                                        </div>

                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('dosen/lanjutan/lanjutanRab', $dosen__penelitian_usulanbaru->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="label"><b>Unduh Format RAB Disini</b>
                                                                    <div class="col-md-5">
                                                                        <img src="{{ url('public/template') }}/dist/img/exel.png"
                                                                            alt="User Avatar" style="width: 10%"
                                                                            class="img-box">
                                                                        <button class="btn btn-primary"><i
                                                                                class="fa fa-download"> Download</i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="label"><b>Unggah Dokumen Proposal
                                                                        Usulan</b>
                                                                    <input type="file" class="form-control"
                                                                        name="dokumen2" id="file"
                                                                        accept=".xls">
                                                                    <div class="">
                                                                        <p><i style="color: red; font-size: 12px">*Format
                                                                                File Excel (xls/xlsx) dengan ukuran maks
                                                                                5MB</i></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dokumen Pendukung -->
                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-one-settings-tab">
                                <div class="card-body">
                                    <div class="card bg-primary text-white">
                                        <div class="card-header">
                                            <h2 class="card-title">Mitra Penelitian</h2>
                                        </div>
                                    </div>
                                    <form class="form-horizontal"
                                        action="{{ url('dosen/lanjutan/lanjutanMitra', $dosen__penelitian_usulanbaru->id) }}"
                                        method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nama Mitra</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama_mitra"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Bidang Mitra</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bidang_mitra"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="alamat_mitra"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Dokumen Pernyataan</label>
                                            <div class="col-sm-3">
                                                <input type="file" class="form-control" name="dokumen_mitra"
                                                    accept=".pdf">
                                                <div class="">
                                                    <p><i style="color: red; font-size: 12px">*Format
                                                            File PDF dengan ukuran maks 5MB</i></p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary float-right mb-3"><i class="fa fa-save"></i>
                                            Simpan </button>
                                    </form>
                                </div>
                            </div>
                            <!-- Kirim Usulan -->
                            <div class="tab-pane fade" id="custom-tabs-two-home" role="tabpanel"
                                aria-labelledby="custom-tabs-two-home">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-identitas"
                                                role="tabpanel" aria-labelledby="custom-tabs-one-identitas-tab">

                                                <!-- Usulan -->
                                                <form class="form-horizontal"
                                                    action="{{ url('dosen/usulanbaru', $dosen__penelitian_usulanbaru->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body">
                                                        <div class="card bg-primary text-white">
                                                            <div class="card-header">
                                                                <h2 class="card-title">Usulan Penelitian</h2>
                                                            </div>
                                                        </div>
                                                        <form class="form-horizontal" method="post"
                                                            enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Judul
                                                                    Penelitian</label>
                                                                <div class="col-sm-9">
                                                                    {{ $dosen__penelitian_usulanbaru->judul_penelitian }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Skema
                                                                    Penelitian</label>
                                                                <div class="col-sm-9">
                                                                    {{ $dosen__penelitian_usulanbaru->skema_penelitian }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Tema
                                                                    Penelitian</label>
                                                                <div class="col-sm-9">
                                                                    {{ $dosen__penelitian_usulanbaru->tema_penelitian }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Topik
                                                                    Penelitian</label>
                                                                <div class="col-sm-9">
                                                                    {{ $dosen__penelitian_usulanbaru->topik_penelitian }}
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </form>

                                                <!-- Identitas -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Identitas Pengusul</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->nama }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">NIDN</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->nidn }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Email</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->email }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                                            <div class="col-sm-9">
                                                                {{ auth()->user()->alamat }}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Identitas Anggota -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Anggota Penelitian</h2>
                                                        </div>
                                                    </div>
                                                    <label class="col-sm-5 col-form-label"><b
                                                            style="color: red">Anggota 1</b></label>
                                                    <form class="form-horizontal" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Anggota</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->nama_gelar1 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang
                                                                Keahlian</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->bidang_keahlian1 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tugas</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->tugas_penelitian1 }}
                                                            </div>
                                                        </div>

                                                        <hr>

                                                        <label class="col-sm-5 col-form-label"><b
                                                                style="color: red">Anggota 2</b></label>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Anggota</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->nama_gelar2 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang
                                                                Keahlian</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->bidang_keahlian2 }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tugas</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->tugas_penelitian2 }}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <!-- Proposal -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Proposal Usulan</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Proposal</label>
                                                            <div class="col-sm-9">
                                                                <img src="{{ url('public/template') }}/dist/img/pdf.png"
                                                                    alt="User Avatar" style="width: 5%"
                                                                    class="img-box">
                                                                <button class="btn btn-primary"
                                                                    href="{{ url("$dosen__penelitian_usulanbaru->dokumen") }}"
                                                                    target="_blank"> Download</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tanggal
                                                                Unggah</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->updated_at }}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- RAB -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Rencana Anggaran Biaya</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Jumlah
                                                                Pendanaan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="jumlah_pendanaan" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">File RAB</label>
                                                            <div class="col-sm-9">
                                                                <img src="{{ url('public/template') }}/dist/img/exel.png"
                                                                    alt="User Avatar" style="width: 5%"
                                                                    class="img-box">
                                                                <button class="btn btn-primary"
                                                                    href="{{ url("$dosen__penelitian_usulanbaru->dokumen2") }}"
                                                                    target="_blank"> Download</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Luaran -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Luaran Dan target Capaian</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"
                                                                style="color: red">Luaran Wajib</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tkt_new" value="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label"
                                                                style="color: red">Luaran Tambahan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tkt_new" value="">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- Mitra Pendukung -->
                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Mitra Penelitian</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Mitra</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->nama_mitra }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Bidang Mitra</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->bidang_mitra }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->alamat_mitra }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Dokumen
                                                                Pernyataan</label>
                                                            <div class="col-sm-9">
                                                                {{ $dosen__penelitian_usulanbaru->dokumen_mitra }}
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa-brands fa-telegram"></i> Kirim Usulan
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-substansi" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-substansi-tab">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>

</x-dosen>
