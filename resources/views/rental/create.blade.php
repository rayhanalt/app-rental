@extends('app')
@section('content')
    <div class="overflow-x-auto">
        <div class="card shadow-xl">
            <h3 class="sticky top-0 text-lg font-bold">Tambah Data Rental
                <hr>
            </h3>
            <div class="card-body">
                <form action="/rental" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Nik</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="nik" type="text" placeholder="Type here" value="{{ old('nik') }}"
                            class="input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('nik')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Kode Mobil</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="kode_mobil" type="text" placeholder="Type here" value="{{ old('kode_mobil') }}"
                            class="input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('kode_mobil')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Tanggal Rental</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="tanggal_rental" type="date" placeholder="Type here"
                            value="{{ old('tanggal_rental') }}" class="datepicker input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('tanggal_rental')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Tanggal Kembal</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="tanggal_kembali" type="date" placeholder="Type here"
                            value="{{ old('tanggal_kembali') }}"
                            class="datepicker input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('tanggal_kembali')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Durasi</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="durasi" type="text" placeholder="click here" value="{{ old('durasi') }}"
                            class="input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('durasi')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="form-control w-full max-w-full">
                        <label class="label">
                            <span class="label-text">Total Harga</span>
                            <span class="label-text-alt"></span>
                        </label>
                        <input name="total_harga" type="text" placeholder="Type here" value="{{ old('total_harga') }}"
                            class="input-bordered input w-full max-w-full" />
                        <label class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt text-red-600">
                                @error('total_harga')
                                    {{ $message }}
                                @enderror
                            </span>
                        </label>
                    </div>
                    <div class="card-actions justify-end">
                        <button type="submit" class="btn-error btn">Reset</button>
                        <button type="submit"class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
