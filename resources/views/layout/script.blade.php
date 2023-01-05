<script src="{{ asset('js/flatpickr.js') }}"></script>
<script>
    flatpickr('.datepicker', {
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d'
    });
</script>

@livewireScripts
