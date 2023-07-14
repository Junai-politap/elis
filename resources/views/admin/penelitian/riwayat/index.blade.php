<x-app>

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
                                    @foreach ($list_riwayat as $penelitian_usulanbaru)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/showriwayat', $penelitian_usulanbaru) }}"
                                                        class="btn btn-info"><i class="fas fa-eye"></i> Lihat
                                                        Pengajuan</a>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($penelitian_usulanbaru->status == 1)
                                                    <div class="btn btn-warning" for="">Belum Di danai</div>
                                                    @elseif($penelitian_usulanbaru->status == 2)
                                                    <div class="btn btn-success" for="">Didanai</div>
                                                    @elseif($penelitian_usulanbaru->status == 3)
                                                    <div for="" class="btn btn-danger">Tidak Didanai</div>
                                                @endif
                                            </td>
                                            <td>{{ auth()->user()->nama }}</td>
                                            <td>{{ $penelitian_usulanbaru->judul_penelitian }}</td>
                                            <td>{{ $penelitian_usulanbaru->created_at }}</td>
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

</x-app>