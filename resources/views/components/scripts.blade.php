<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    var Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 6000
        , timerProgressBar: true
        // , showConfirmButton: true
    });

    $(function() {
        if ("<?php echo(Session::has('success')) ?>") {
            Toast.fire({
                icon: 'success'
                , title: ' Success,'
                , text: "{{ Session::get('success') }}"
            })
        } else if ("<?php echo(Session::has('warning')) ?>") {
            Toast.fire({
                icon: 'warning'
                , title: ' Warning,'
                , text: "{{ Session::get('warning') }}"
            })
        } else if ("<?php echo(Session::has('error')) ?>") {
            Toast.fire({
                icon: 'error'
                , title: ' Error,'
                , text: "{{ Session::get('error') }}"
            })
        }
    })

</script>
@livewireScripts
<script type="text/javascript">
    window.livewire.on('select2', (placeholder, another) => {
        $('#s2').select2({
            width: '100%'
            , placeholder: placeholder
            , containerCssClass: "form-control form-control-sm"
        , })
        if (another) {
            $('#' + another).select2({
                width: '100%'
                , placeholder: placeholder
                , containerCssClass: "form-control form-control-sm"
            , })
        }
    });
    window.livewire.on('success', (message, modal) => {
        if (modal) {
            $('#' + modal).modal('hide');
        } else {
            $('#modal-add').modal('hide');
            $('#modal-edit').modal('hide');
            $('#modal-confirm').modal('hide');
        }
        Toast.fire({
            icon: 'success'
            , title: ' Success,'
            , text: message
        , })
    });

    window.livewire.on('error', (message) => {
        $('#modal-confirm').modal('hide');
        Toast.fire({
            icon: 'error'
            , title: ' Error,'
            , text: message
        })
    });

    window.livewire.on('warning', (message) => {
        $('#modal-confirm').modal('hide');
        Toast.fire({
            icon: 'warning'
            , title: ' Warning,'
            , text: message
        })
    });

    window.livewire.on('update', (modal) => {
        if (modal) {
            $("#" + modal).modal('show');
        } else {
            $('#modal-edit').modal('show');
        }
    });

    window.livewire.on('modal-show', (modal) => {
        if (modal) {
            $("#" + modal).modal('show');
        }
    });

    window.livewire.on('confirm', (message) => {
        $('#modal-confirm').modal('show');
    });

    window.livewire.on('confirm-convert', (message) => {
        $('#modal-confirm-convert').modal('show');
    });

    window.livewire.on('refresh', () => location.reload());

</script>