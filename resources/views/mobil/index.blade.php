@extends('app')
@section('content')
    <div class="place-items-start">

        <div class="mb-2">
            <a href="/mobil/create" class="btn-outline btn-success btn-sm btn">➕ Data</a>
        </div>
        @livewire('mobil')
    </div>
@endsection
