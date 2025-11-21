<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>@yield('title','República Kalango')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet"/>
    <meta name="supabase-url" content="{{ $supabase_url ?? env('SUPABASE_URL') }}">
    <meta name="supabase-anon" content="{{ $supabase_anon ?? env('SUPABASE_ANON_KEY') }}">
    <style>.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24}</style>
    @stack('head')
</head>
<body class="font-display bg-background-dark">
    @yield('content')
    @stack('scripts')
</body>
</html>
