function toast(type, msg) {
    toastr.options = {
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "showDuration": "5000",
        "hideDuration": "5000",
        "timeOut": "5000",
        "preventDuplicates": true,
    };

    switch (type) {
        case 'success':
            toastr.success(msg);
            break;
        case 'info':
            toastr.info(msg);
            break;
        case 'warning':
            toastr.warning(msg);
            break;
        case 'danger':
        case 'error':
            toastr.error(msg);
            break;
    }

    $(document).ready(function() {
        $('.mdb-select').material_select();
    });
}
