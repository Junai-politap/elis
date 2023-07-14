<x-app>

    <div class="container">
        <div class="card mt-3 pt-3">
            <div class="card-body">
                <div class="card">
                     <div class="card-header bg-primary">
                        <div class="card-title">
                            <h4>Data Usulan Baru Penelitian</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="container">
                            <table id="table1" class="table table-bordered table-striped">
                                <thead class="btn-primary">
                                    <th width="1%">NO</th>
                                    <th width="20%x">AKSI</th>
                                    <th>STATUS</th>
                                    <th>NAMA PENGUSUL</th>
                                    <th>JUDUL PENGUSUL</th>
                                    <th>TANGGAL PENGAJUAN</th>
                                </thead>
                                @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($list_usulanbaru as $penelitian_usulanbaru)
                                    @if ($penelitian_usulanbaru->status == 1)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url('admin/usulanbaru') }}"
                                                        class="btn btn-info"><i class="fas fa-eye"></i> Lihat
                                                        Pengajuan</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn btn-warning" for="">Belum Di danai</div>
                                            </td>
                                            <td>{{ auth()->user()->nama }}</td>
                                            <td>{{ $penelitian_usulanbaru->judul_penelitian }}</td>
                                            <td>{{ $penelitian_usulanbaru->created_at }}</td>
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
    </div>


</x-app>
