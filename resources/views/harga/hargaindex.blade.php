@extends('layouts.app')

@section('title', 'Harga Tiket')

@section('content')
    @livewire('harga.harga-index')
@endsection

@push('script')
    <script script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk memformat angka
            function formatNumberInput() {
                var input = $(this);
                var value = input.val().replace(/\D/g, ''); // Menghapus karakter non-angka
                var formattedValue = new Intl.NumberFormat().format(value); // Format angka
                input.val(formattedValue);
            }

            // Menambahkan event listener pada input
            $('#vip, #mobil, #ekonomi, #truk').on('input', formatNumberInput);
        });
    </script>
@endpush
