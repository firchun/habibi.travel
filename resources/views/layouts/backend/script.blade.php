<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
@stack('js')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true
        });
    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor-create'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    function initCKEditor(targetId) {
        ClassicEditor
            .create(document.querySelector(`#${targetId}`))
            .then(editor => {
                // Handle editor instances if needed
                console.log(`CKEditor initialized for ${targetId}`);
            })
            .catch(error => {
                console.error(error);
            });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const ckeditorElements = document.querySelectorAll('.ckeditor');
        ckeditorElements.forEach(element => {
            const targetId = element.id;
            initCKEditor(targetId);
        });
    });
</script>
