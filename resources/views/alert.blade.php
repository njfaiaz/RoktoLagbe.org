<script src="{{ asset('assets/coustom/js/toastr.min.js') }}"></script>
@if (Session::has('message'))
    <script>
        var type = "{{ Session::get('alert', 'info') }}"
        switch (type) {
            case 'info':
                toastr.ingfo("{{ Session::get('message') }}", 'Success!', {
                    timeOut: 2000
                });
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}", 'Success!', {
                    timeOut: 2000
                });
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}", 'Success!', {
                    timeOut: 2000
                });
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
    </script>
@endif



<script src="{{ asset('assets/coustom/js/sweetalert.min.js') }}"></script>

<script>
    $(document).on("submit", ".delete-form", function(e) {
        e.preventDefault();

        let form = this;

        swal({
            title: "Are you sure?",
            text: "Once deleted, this cannot be recovered!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit(); // ✅ real DELETE request
            } else {
                swal("Your data is safe!");
            }
        });
    });
</script>


<script>
    $(document).on("click", "#block", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");

        swal({
                title: "Are you sure you want to block this user?",
                text: "Once Inactive,",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;

                } else {
                    swal("Your imaginary file is safe!");
                }

            });
    });
</script>
<script>
    $(document).on("click", "#unBlock", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");

        swal({
                title: "Are you sure you want to un-block this user?",
                text: "Once Inactive,",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;

                } else {
                    swal("Your imaginary file is safe!");
                }

            });
    });
</script>
