<div>
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
                    <td>{{ $loop->iteration + $data->FirstItem() - 1 }}</td>
                    <td>{{ $item->kode_mobil }}</td>
                    <td>{{ $item->nopol }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ date('d F Y', strtotime($item->tahun)) }}</td>
                    <td>{{ $item->warna }}</td>
                    <td>{{ 'Rp. ' . number_format($item->harga_sewa, 0, ',', '.') }}</td>
                    <td><img src="{{ asset('gambar/' . $item->gambar) }}" width="70px"></td>
                    <td>
                        <a href="/mobil/{{ $item->kode_mobil }}/edit" class="btn-outline btn-accent btn-sm btn mb-1">
                            ✎
                        </a>
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

    @if ($data->total() >= 3)
        <div class="mt-10 flex place-content-center">
            <div class="btn-group grid w-fit grid-cols-2">
                <button wire:click="previousPage" @if ($data->onFirstPage()) disabled @endif
                    class="btn-outline btn-sm btn">previous</button>

                <button wire:click="nextPage" @if (!$data->hasMorePages()) disabled @endif
                    class="btn-outline btn-sm btn">next</button>
            </div>
        </div>
    @endif
</div>
