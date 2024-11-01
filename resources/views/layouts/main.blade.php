<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="KAC Play menyediakan kelas bermain untuk anak, membantu tumbuh kembang secara kreatif dan menyenangkan.">
    <meta name="keywords"
        content="kac play, kelas bermain, kelas main bekasi, kelas main tambun, kelas main cibitung, kelas main cikarang, kelas main jababeka, kelas bermain anak, kelas bermain bekasi, kelas bermain cibitung, kelas bermain cikarang, kelas bermain tambun, baby class bekasi, sensory class bekasi, cooking class, field trip anak bekasi, field trip anak jakarta, making pizza for kids, event anak, event anak jakarta, event anak bekasi, kelas main anak">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAC Play - Kelas Bermain Anak</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Boostrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Style --}}
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="/css/app.css?v={{ time() }}">

    <style></style>
</head>

<body style="margin-top: 50px;">

    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="js/script.js"></script>

</body>

</html>
