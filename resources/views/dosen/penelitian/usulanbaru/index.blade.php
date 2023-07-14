<x-dosen>

    <div class="row">
        <div class="col-md-12">
            <div class="mt-3 pt-3">

                <div class="card">
                    <div class="card-header">

                        <h4 class="card-title"> Data Usulan Baru Penelitian</h4>
                        <a href="{{ url('dosen/usulanbaru/create') }}" class="btn btn-primary float-right"><i
                                class="fa fa-plus"></i> Data Usulan Baru
                            Penelitian</a>

                    </div>

                    <div class="card-body">

                        <table id="table1" class="table table-bordered table-striped">
                            <thead class="btn-primary">
                                <th style="width: 1%">NO</th>
                                <th style="width: 20%">AKSI</th>
                                <th>STATUS</th>
                                <th>NAMA PENGUSUL</th>
                                <th>JUDUL PENELITIAN</th>
                                <th>TANGGAL PENGAJUAN</th>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_usulanbaru as $dosen__penelitian_usulanbaru)
                                    @if ($dosen__penelitian_usulanbaru->status == 1)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('dosen/lanjutan', $dosen__penelitian_usulanbaru) }}"
                                                        class="btn btn-info"><i class="fas fa-eye"></i> Lihat
                                                        Pengajuan</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn btn-warning" for="">Belum Di danai</div>
                                            </td>
                                            <td>{{ auth()->user()->nama }}</td>
                                            <td>{{ $dosen__penelitian_usulanbaru->judul_penelitian }}</td>
                                            <td>{{ $dosen__penelitian_usulanbaru->created_at }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dosen>
