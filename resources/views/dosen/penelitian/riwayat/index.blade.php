<x-dosen>

    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title">
                            <h4>Riwayat Data Penelitian</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="container">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead class="btn-primary">
                                    <th style="width: 1%">NO</th>
                                    <th style="width: 20%">AKSI</th>
                                    <th>STATUS</th>
                                    <th>NAMA PENGUSUL</th>
                                    <th>JUDUL PENELITIAN</th>
                                    <th>TANGGAL PENGAJUAN</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_riwayat as $dosen__penelitian_usulanbaru)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('dosen/riwayat', $dosen__penelitian_usulanbaru) }}"
                                                        class="btn btn-info"><i class="fas fa-eye"></i> Lihat
                                                        Pengajuan</a>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($dosen__penelitian_usulanbaru->status == 1)
                                                    <div class="btn btn-warning" for="">Belum Di danai</div>
                                                    @elseif($dosen__penelitian_usulanbaru->status == 2)
                                                    <div class="btn btn-success" for="">Didanai</div>
                                                    @elseif($dosen__penelitian_usulanbaru->status == 3)
                                                    <div class="btn btn-danger" for="">Tidak Didanai</div>
                                                @endif
                                            </td>
                                            <td>{{ auth()->user()->nama }}</td>
                                            <td>{{ $dosen__penelitian_usulanbaru->judul_penelitian }}</td>
                                            <td>{{ $dosen__penelitian_usulanbaru->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-dosen>
