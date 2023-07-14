<x-dosen>

    <div class="container">
        <div class="card-header">
            <h1>Usulan Penelitian Berjalan</h1>
        </div>


        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                    href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                    aria-selected="true"> Laporan Kemajuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-one-profile" role="tab"
                                    aria-controls="custom-tabs-one-profile" aria-selected="false">laporan Akhir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                    href="#custom-tabs-one-messages" role="tab"
                                    aria-controls="custom-tabs-one-messages" aria-selected="false">Luaran Penelitian</a>
                            </li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">

                            <!-- Laporan Kemajuan -->
                            <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                aria-labelledby="custom-tabs-one-home-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade show active" id="custom-tabs-one-identitas"
                                                role="tabpanel" aria-labelledby="custom-tabs-one-identitas-tab">

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Format Laporan Kemajuan</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Laporan Kemajuan
                                                                Kegiatan</label>
                                                            <div class="col-sm-7">
                                                                <img src="{{ url('public/template') }}/dist/img/word.png"
                                                                    alt="User Avatar" style="width: 5%" class="img-box">
                                                                <button class="btn btn-primary"> Download</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Upload Laporan Kemajuan</h2>
                                                        </div>
                                                    </div>
                                                    <form class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-sm-5 col-form-label">Nama
                                                                    Dokumen</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" class="form-control"
                                                                        name="" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="col-sm-5 col-form-label">File</label>
                                                                <input type="file" class="form-control"
                                                                        name="" id=""
                                                                        accept=".pdf">
                                                            </div>
                                                            <button class="btn btn-success float-right mb-3"><i
                                                                    class="fa fa-save"></i> Simpan </button>
                                                        </div>

                                                    </form>
                                                </div>

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Data Pendukung</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
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

                            <!-- Laporan Akhir -->
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
                                                            <h2 class="card-title">Format Laporan Akhir</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Laporan Kemajuan
                                                                Kegiatan</label>
                                                            <div class="col-sm-7">
                                                                <img src="{{ url('public/template') }}/dist/img/word.png"
                                                                    alt="User Avatar" style="width: 5%"
                                                                    class="img-box">
                                                                <button class="btn btn-primary"> Download</button>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Laporan Kemajuan
                                                                Keuangan</label>
                                                            <div class="col-sm-7">
                                                                <img src="{{ url('public/template') }}/dist/img/word.png"
                                                                    alt="User Avatar" style="width: 5%"
                                                                    class="img-box">
                                                                <button class="btn btn-primary"> Download</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Upload Laporan Akhir</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">Nama
                                                                        Dokumen</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">File</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control"
                                                                        name="" id=""
                                                                        accept=".pdf">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">Jenis
                                                                        Laporan</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="" id=""
                                                                            class="form-control" onchange="">
                                                                            <option value="">-- Pilih Jenis Laporan
                                                                                --
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
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

                            <!-- Luaran Penelitian -->
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
                                                            <h2 class="card-title">Kewajiban</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Luaran Wajib</label>
                                                            <div class="col-sm-9">
                                                                <i>.........................</i>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Luaran
                                                                Tambahan</label>
                                                            <div class="col-sm-9">
                                                                <i>.........................</i>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-success float-right mb-3"><i
                                                                class="fa fa-save"></i> Simpan </button>
                                                    </form>
                                                </div>

                                                <div class="card-body">
                                                    <div class="card bg-primary text-white">
                                                        <div class="card-header">
                                                            <h2 class="card-title">Tanggungan</h2>
                                                        </div>
                                                    </div>
                                                    <form class="form-horizontal">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">Nama Dokumen</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" class="form-control"
                                                                            name="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">File</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="file" class="form-control"
                                                                        name="" id=""
                                                                        accept=".pdf">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-5 col-form-label">Status</label>
                                                                    <div class="col-sm-9">
                                                                        <select name="" id=""
                                                                            class="form-control" onchange="">
                                                                            <option value="">-- Pilih Jenis Status
                                                                                --
                                                                            </option>
                                                                        </select>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>

</x-dosen>
