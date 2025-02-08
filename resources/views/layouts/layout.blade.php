<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Model Viewer</title>
</head>

<body>
    @yield('content')
    {{-- <script type="module" src="https://unpkg.com/@google/model-viewer@latest/dist/model-viewer.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        @if (session('success'))
            toastr.success("{{ session('success') }}", "Success", {
                positionClass: "toast-top-right",
                closeButton: true,
                progressBar: true,
                timeOut: 5000,
            });
        @elseif (session('error'))
            toastr.error("{{ session('error') }}", "Error", {
                positionClass: "toast-top-right",
                closeButton: true,
                progressBar: true,
                timeOut: 5000,
            });
        @endif
    </script>
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        </script>
    @endif
</body>

</html>
