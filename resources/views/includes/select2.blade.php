@push('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/template/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/template/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('/template/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        //Initialize Select2 Elements
        $(".select2").select2({
            placeholder: "Silahkan Pilih",
        });
    </script>
@endpush
