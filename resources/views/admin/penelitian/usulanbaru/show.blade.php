<x-app>

    <div class="container">
        <div class="card-header">
            <h1>Usulan Baru</h1>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true"> Identitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-one-profile" role="tab"
                                    aria-controls="custom-tabs-one-profile" aria-selected="false">Proposal & RAB</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-one-messages" role="tab"
                                    aria-controls="custom-tabs-one-messages" aria-selected="false">Luaran & Capaian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                    href="#custom-tabs-one-settings" role="tab"
                                    aria-controls="custom-tabs-one-settings" aria-selected="false">Persetujuan</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <!-- Identitas -->
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card bg-primary text-white">
                                            <div class="card-header">
                                                <h2 class="card-title">Usulan Penelitian</h2>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
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

                                    <div class="card-body">
                                        <div class="card bg-primary text-white">
                                            <div class="card-header">
                                                <h2 class="card-title">Identitas Pengusul</h2>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
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

                                    <div class="card-body">
                                        <div class="card bg-primary text-white">
                                            <div class="card-header">
                                                <h2 class="card-title">Anggota Penelitian</h2>
                                            </div>
                                        </div>
                                        <label class="col-sm-5 col-form-label"><b style="color: red">Anggota
                                                1</b></label>
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama Anggota</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->nama_gelar1 }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Bidang
                                                    Keahlian</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->bidang_keahlian1 }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tugas</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->tugas_penelitian1 }} --}}
                                                </div>
                                            </div>

                                            <hr>

                                            <label class="col-sm-5 col-form-label"><b style="color: red">Anggota
                                                    2</b></label>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nama Anggota</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->nama_gelar2 }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Bidang
                                                    Keahlian</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->bidang_keahlian2 }} --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tugas</label>
                                                <div class="col-sm-9">
                                                    {{-- {{ $dosen__penelitian_usulanbaru->tugas_penelitian2 }} --}}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Proposal & RAB -->
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
                                                                <button class="btn btn-primary fa fa-download"
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
                                                               {{ $dosen__penelitian_usulanbaru->jumlah_pendanaan }} 
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">File RAB</label>
                                                            <div class="col-sm-9">
                                                                <img src="{{ url('public/template') }}/dist/img/exel.png"
                                                                    alt="User Avatar" style="width: 5%"
                                                                    class="img-box">
                                                                <button class="btn btn-primary fa fa-download"
                                                                    href="{{ url("$dosen__penelitian_usulanbaru->dokumen2") }}"
                                                                    target="_blank"> Download</button>

                                                            </div>
                                                        </div>
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
                            <!-- Luaran & Capaian -->
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
                                                                <a class="btn btn-primary fa fa-download" target="popup"
                                                                onclick="window.open('{{ url("$penelitian_usulanbaru->formatproposaldokumen_mitra") }}','popup'); 
                                                                return-false;"> Download</a>
                                                            </div>
                                                        </div>
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
                            <!-- Persetujuan -->
                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                aria-labelledby="custom-tabs-one-settings-tab">
                                    <div class="card-body">
                                        <div class="card bg-primary text-white">
                                            <div class="card-header">
                                                <h2 class="card-title">Status Penelitian</h2>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" action="{{ url('update', $penelitian_usulanbaru->id) }}"
                                            method="post">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                    <select name="status" id="" class="form-control"
                                                        onchange="">
                                                        <option value="">-- Pilih Status Pengajuan --</option>
                                                       
                                                        <option value="2">Di Danai</option>
                                                
                                                        <option value="3">Tidak DI Danai</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-success float-right mb-3"><i
                                                    class="fa fa-save"></i>
                                                Simpan </button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </div>

</x-app>
