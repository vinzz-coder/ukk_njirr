<div class="modal fade" id="modal-{{ md5($date) }}" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5>Detail {{ \Carbon\Carbon::parse($date)->format('d F Y') }}</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jam</th>
                            <th>Tipe</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($info['transaksi'] as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($d->created_at)->format('H:i') }}</td>
                            <td>{{ $d->tipe }}</td>
                            <td>Rp {{ number_format($d->jumlah, 0, ',', '.') }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
