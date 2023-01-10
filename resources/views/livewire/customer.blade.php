<div>
    <div class="mb-2 flex flex-grow justify-between">
        <div>
            <a href="/customer/create" class="btn-outline btn-success btn-sm btn">➕ Data</a>
        </div>
        <div>
            @include('layout.notif')
        </div>
        <div>
            <input wire:model="search" type="text" class="input-info input input-sm" placeholder="Search">
        </div>
    </div>
    <table class="table w-full">
        <!-- head -->
        <thead class="sticky top-0">
            <tr>
                <th></th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration + $data->FirstItem() - 1 }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>
                        <a href="/customer/{{ $item->nik }}/edit" class="btn-outline btn-accent btn-sm btn mb-1">
                            ✎
                        </a>
                        <form action="/customer/{{ $item->nik }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="btn-outline btn-error btn-sm btn"
                                onclick="return confirm('yakin hapus data {{ $item->nama }} ?')">
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
