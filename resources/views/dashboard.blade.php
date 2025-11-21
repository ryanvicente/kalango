@extends('layouts.app')

@section('title','Painel do Morador - República Kalango')

@section('content')
<!DOCTYPE html>
<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Painel do Morador - República Kalango</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec5b",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
    </style>
</head>
<body class="font-display bg-background-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col">
<div class="flex h-full min-h-screen w-full">
<aside class="flex h-screen min-h-[700px] flex-col justify-between bg-[#111813] p-4 w-64 sticky top-0 border-r border-white/10 z-30">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-4 text-white px-3 py-3">
<div class="size-6 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">República Kalango</h2>
</div>
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-300 hover:bg-white/10 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">calendar_month</span>
<p class="text-sm font-medium leading-normal">Agendamentos</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-300 hover:bg-white/10 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">gavel</span>
<p class="text-sm font-medium leading-normal">Regras</p>
</a>
</div>
</div>
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 text-gray-300 hover:bg-white/10 rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<p class="text-sm font-medium leading-normal">Sair</p>
</a>
</div>
</aside>
<main class="flex-1 relative">
<div class="absolute inset-0 h-full w-full bg-[url('https://images.unsplash.com/photo-1620641788421-7a1c362ea42e?q=80&amp;w=1974&amp;auto=format&amp;fit=crop')] bg-cover bg-center bg-no-repeat opacity-10"></div>
<div class="fixed inset-0 h-[300vh] w-full bg-[url('https://images.unsplash.com/photo-1620641788421-7a1c362ea42e?q=80&amp;w=1974&amp;auto=format&amp;fit=crop')] bg-cover bg-center bg-no-repeat opacity-10 z-0"></div>
<div class="relative z-10">
<header class="flex items-center justify-end whitespace-nowrap border-b border-solid border-white/10 px-10 py-3 sticky top-0 bg-background-dark/80 backdrop-blur-sm z-20">
<div class="flex items-center gap-4">
<div class="flex flex-col text-right">
<h1 class="text-white text-base font-medium leading-normal">Nome do Usuário</h1>
<p class="text-gray-400 text-sm font-normal leading-normal">Morador</p>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Avatar de usuário com fundo gradiente abstrato" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_F219qSpnY4hsCuMqAlX7YoSHtjUucjQs48gHBd8juH5gULC19qHMgkZ4v2NU306ttPbOpCdVOMcZDC7wPaOscdcntBh_sldr1wNlJKmop4V_APwNJeGAVghgD9qJixXvJLBwi161TQxt6AjuMGuiNnsqsu1pvAY7EVj_vLoIlbo9nJSBXJh_bJri3ShvUcpjBOddO-K3ybJ-rMYzfMdvcGK_6u89q0KTx9GlsaXeVrW00klF4IA78TkUAE1qZwKj1p5oJQ8xFUlg");'></div>
</div>
</header>
<div class="p-10">
<div class="flex flex-wrap justify-between gap-3 pb-6">
<p class="text-white text-4xl font-black leading-tight tracking-[-0.033em] min-w-72">Painel do Morador</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 bg-black/30 backdrop-blur-lg border border-white/10 rounded-xl p-6">
<div class="flex items-center justify-between">
<h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Quadro de Fazeres</h2>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#111813] gap-2 text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-lg">add</span>
<span class="truncate">Adicionar Tarefa</span>
</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
<div class="flex flex-col gap-4">
<h3 class="font-bold text-lg text-white/90 px-2">A Fazer</h3>
<div class="space-y-4">
<div class="p-4 rounded-lg bg-white/5 border border-white/10">
<p class="font-semibold text-white">Limpar a cozinha</p>
<div class="flex items-center justify-between mt-3 text-sm">
<span class="text-gray-400">Prazo: 25/07</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-6" data-alt="Avatar de João" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDdLCBJOC1A8g7EzY8MwruZyOznaNlMesfJpj2uMAm7p0XHyYRdFzel2kc6SIvYxu0ZZdHEE_aL_HeKX2R1ffEnQ8wYM3TFLywUwpk0j5dxcaGkVcg6WEr0V8VqMl84DJgv0kvm-MqsOw5-28TLCOhxC6e-uNWojvyaFP-mtGfZiFpMcJ5FoHMmTX3uBNrLeEcdf-1eRYha6WApw1C8WEGGURVoPuzaGPZUcAZ16S3OmClkJReQqbepNN9RuA0mFOWqlydw0O7ARaQo");'></div>
</div>
</div>
<div class="p-4 rounded-lg bg-white/5 border border-white/10">
<span class="text-xs font-semibold uppercase tracking-wider px-2 py-1 rounded-full bg-red-500/20 text-red-400 mb-2 inline-block">Urgente</span>
<p class="font-semibold text-white">Consertar vazamento do banheiro</p>
<div class="flex items-center justify-between mt-3 text-sm">
<span class="text-gray-400">Prazo: Hoje</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-6" data-alt="Avatar de Maria" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBPDrTtheCE22NPdlaeg_fgMXQ6h8CDIf1UIIjA5CfGMcl9E4Ks_e0baCqIrsniR6ZNP8GtURQu9-kdPSuIEFMEWTyrNcfK3jfWyUATQellzakr5PLm5twJUeayz_x1nAGUs9RGyEPV7qqMw_tVGpLlCgZSInUH0wWq1QhbnZrmrCZxz7vG8g7Q_rTT40IBRUmcL0gn6Oc81O4_fzXvstcKr0O-ykXRHMZvdnYkMj6MGclNnhcvZfEQWFDixSz4RIYeJnTs6Uu-OHRb");'></div>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-4">
<h3 class="font-bold text-lg text-white/90 px-2">Em Andamento</h3>
<div class="space-y-4">
<div class="p-4 rounded-lg bg-white/5 border border-white/10">
<p class="font-semibold text-white">Compras do mês</p>
<div class="flex items-center justify-between mt-3 text-sm">
<span class="text-gray-400">Prazo: 28/07</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-6" data-alt="Avatar de Pedro" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAk-l5ATt10niYEECRdNUZeHYJ6_N5hu2Rdu4nuV46rHmQuf2eBW12EQ-DS1WZXFsarANCDSisbgVN9CWCL5kgx5xbRJSAdKOj7f5JMdRNp51W15ncItD96-eWR3zsCAVNQJyCK-C49LfdYI-9PyVYVpK-xJgCSOU4SR327rqGDpm31wfOWEbik6GiQyqREt3gigKDBRl0j6KBB9tnvnEnxBtkd0KisGyvpddp2yNxKdyttCiksk4cVNaJWJeUF0zkFagftJKAqpXPs");'></div>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-4">
<h3 class="font-bold text-lg text-white/90 px-2">Concluído</h3>
<div class="space-y-4">
<div class="p-4 rounded-lg bg-white/5 border border-white/10 opacity-60">
<p class="font-semibold text-white line-through">Organizar festa de integração</p>
<div class="flex items-center justify-between mt-3 text-sm">
<span class="text-gray-400">Feito em: 20/07</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-6" data-alt="Avatar de Ana" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAp_R7V-Ai346neHtSm8xH4moYWIWUd7OZPtyjwh3NpJD4z9l6P7U2LZR6JLsDPmj7bj6fnT9UQ6JOUys7EhEOhnBv6IKbFY-R43aE2CEScsi2aPP-OzNAnelw17YHn49CsSz7KIu8KmXFCMQsuUwgwlIBVbQR7A6D5RC_ATp4rpgB5ZeP4_fJNVI1wHQwbHXJiHVtF6cvX0M9VhEUqbeskHOgMZe1RofQYrHfwo-mxq45LIXhxstVWb6i_N9Zk8bUDVwgi63md4mYF");'></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="lg:col-span-1 bg-black/30 backdrop-blur-lg border border-white/10 rounded-xl p-6">
<h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Quadro de Pinga</h2>
<div class="mt-4">
<div class="space-y-3">
<div class="grid grid-cols-5 gap-4 px-2 text-sm font-bold text-gray-400">
<div class="col-span-2">Nome</div>
<div class="col-span-3 text-center">Contagem</div>
</div>
<div class="grid grid-cols-5 gap-4 items-center bg-white/5 p-2 rounded-lg">
<div class="col-span-2 text-white font-medium">João Silva</div>
<div class="col-span-3 flex items-center justify-center gap-2">
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">-</button>
<input class="w-14 bg-transparent border-0 text-white text-center font-bold text-lg focus:ring-0 p-0" type="number" value="5"/>
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">+</button>
</div>
</div>
<div class="grid grid-cols-5 gap-4 items-center bg-white/5 p-2 rounded-lg">
<div class="col-span-2 text-white font-medium">Maria Oliveira</div>
<div class="col-span-3 flex items-center justify-center gap-2">
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">-</button>
<input class="w-14 bg-transparent border-0 text-white text-center font-bold text-lg focus:ring-0 p-0" type="number" value="12"/>
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">+</button>
</div>
</div>
<div class="grid grid-cols-5 gap-4 items-center bg-white/5 p-2 rounded-lg">
<div class="col-span-2 text-white font-medium">Pedro Costa</div>
<div class="col-span-3 flex items-center justify-center gap-2">
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">-</button>
<input class="w-14 bg-transparent border-0 text-white text-center font-bold text-lg focus:ring-0 p-0" type="number" value="8"/>
<button class="flex items-center justify-center size-8 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors">+</button>
</div>
</div>
</div>
<div class="mt-6 flex gap-4">
<button class="flex-1 flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#111813] gap-2 text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
<span class="truncate">Salvar Alterações</span>
</button>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-white/10 text-white gap-2 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-white/20 transition-colors">
<span class="truncate">Zerar Contagem</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</div>

</body></html>
@endsection

@push('scripts')
<script>
  // send Authorization header when loading dashboard assets or making API calls
  (function(){
    const token = localStorage.getItem('supabase_token');
    if (!token) {
      // no token, redirect to login
      window.location.href = '/login';
      return;
    }
    // Optionally, fetch /dashboard/me to get user info
    fetch('/dashboard/me', { headers: { 'Authorization': 'Bearer ' + token }})
      .then(r => {
        if (!r.ok) window.location.href = '/login';
        return r.json();
      })
      .then(user => {
        // replace "Nome do Usuário" in template with real name/email if present
        try {
          const nameEl = document.querySelector('header h1') || document.querySelector('header .text-white.text-base');
          if (nameEl && user && (user.email || user.user_metadata?.full_name)) {
            nameEl.textContent = user.user_metadata?.full_name || user.email;
          }
        } catch(e){}
      }).catch(()=>{ window.location.href='/login'; });
  })();
</script>
@endpush
