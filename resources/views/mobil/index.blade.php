@extends('app')
@section('content')
    <div>
        <div class="mb-2">
            <a href="/mobil/create" class="btn-outline btn-success btn-sm btn">➕ Data</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table w-full">
                <!-- head -->
                <thead class="sticky top-0">
                    <tr>
                        <th></th>
                        <th>Kode</th>
                        <th>Nopol</th>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Tahun</th>
                        <th>Warna</th>
                        <th>Harga Sewa</th>
                        <th>gambar</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_mobil }}</td>
                            <td>{{ $item->nopol }}</td>
                            <td>{{ $item->merk }}</td>
                            <td>{{ $item->model }}</td>
                            <td>{{ date('d F Y', strtotime($item->tahun)) }}</td>
                            <td>{{ $item->warna }}</td>
                            <td>{{ 'Rp. ' . number_format($item->harga_sewa, 0, ',', '.') }}</td>
                            <td><img src="{{ asset('gambar/' . $item->gambar) }}" width="100px"></td>
                            <td>
                                <form action="/mobil/{{ $item->kode_mobil }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn-outline btn-error btn-sm btn"
                                        onclick="return confirm('yakin hapus data {{ $item->nopol }} ?')">
                                        🗑
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
