@extends('layouts.app')

@section('title','República Kalango - Sinta-se em casa')

@section('content')
<!DOCTYPE html>
<html class="dark" lang="pt-BR"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>República Kalango - Sinta-se em casa</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            background-image: linear-gradient(rgba(16, 34, 22, 0.9), rgba(16, 34, 22, 0.95)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAohHVGCZ_4bvt9Xvvo6hBZ6QH4CDGUzzmmefdomPmAVldw5-RPdVksbnNC5bOqQpXpyY0YXoA_1Nj63GTny5Y4YuO15tzalUHrdyAsdz-KQ8a5v3gdl2VB4KSjGv9SwZk10b27Qv2xybkP7A5x_egSa4JJO7RMbSxpROoKoUNQ_2oI3ohNPza_RAd57_hPTVHpqvWz-D_2p8iKAAbxuglnnSm7EfyHnz4nOsD2yQyYaVVawkXddIgx4uobBJacFMv041SEhCVx3wMJ");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#34D399",
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
</head>
<body class="font-display bg-background-dark">
<div class="relative flex min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1">
<header class="sticky top-5 z-50 flex items-center justify-between whitespace-nowrap border border-solid border-white/10 bg-background-dark/50 backdrop-blur-md rounded-lg px-6 py-3">
<div class="flex items-center gap-4 text-white">
<div class="size-6 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">República Kalango</h2>
</div>
<div class="hidden md:flex flex-1 justify-end gap-8">
<div class="flex items-center gap-9">
<a class="text-white/80 hover:text-white text-sm font-medium leading-normal transition-colors" href="#a-casa">A Casa</a>
<a class="text-white/80 hover:text-white text-sm font-medium leading-normal transition-colors" href="#localizacao">Localização</a>
<a class="text-white/80 hover:text-white text-sm font-medium leading-normal transition-colors" href="#fotos">Fotos</a>
<a class="text-white/80 hover:text-white text-sm font-medium leading-normal transition-colors" href="#contato">Contato</a>
</div>
<div class="flex gap-2">
<a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-background-dark text-sm font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors" href="#agendar-visita">
<span class="truncate">Agendar Visita</span>
</a>
<?php if (!Session::has('supabase_user')){
    echo('<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-white/10 text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-white/20 transition-colors">
    <span class="truncate">nao ta logado morador</span> </button>');
}?>
    
<!--<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-white/10 text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-white/20 transition-colors">
<span class="truncate">teste</span> verificar se está logado
</button>-->
</div>
</div>
</header>
<main class="flex flex-col gap-12 md:gap-20">
<section class="mt-8 @container" id="hero">
<div class="@[480px]:p-0">
<div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 rounded-xl items-start justify-end px-4 pb-10 @[480px]:px-10" data-alt="Fachada iluminada da república à noite, com luzes quentes e um ambiente acolhedor" style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDJW9zbXho5-x-nch_-O0TaprL_eoGfEbH2qOu93qxEXiTQowuLXPrdfpII6pv6ZyOgDfGcUBJQnKg7lvOJAv32bMqJ23mx-U7UAGOFjxcVg0uIDBsUgBF9sUxnpzdv0iZIQcQUNLwIXFMd8FwfhXRd1_zYDrEX2dxfrGWz5CcgiUQvEaQ82q7fBfU928_5LBhEfbI1jAC5m98AL90i5Y6dKu63c7aStAd2Mp9h64bMSfu9BmA_WtzrJHC7tTbK1kOBQRxEkL4w7Pzj");'>
<div class="flex flex-col gap-2 text-left max-w-xl">
<h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">Sinta-se em casa na República Kalango</h1>
<h2 class="text-white/90 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">Mais que um lugar para morar, uma família para chamar de sua. Venha fazer parte da nossa história.</h2>
</div>
<a class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-background-dark text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] hover:bg-opacity-90 transition-colors" href="#agendar-visita">
<span class="truncate">Agende sua Visita</span>
</a>
</div>
</div>
</section>
<section class="flex flex-col gap-10 px-6 py-10 @container bg-black/20 backdrop-blur-lg border border-white/5 rounded-xl" id="a-casa">
<div class="flex flex-col gap-6">
<div class="flex flex-col gap-4">
<h1 class="text-white tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]">Por que morar na Kalango?</h1>
<p class="text-white/70 text-base font-normal leading-normal max-w-[720px]">Descubra os benefícios que tornam nossa república a escolha ideal para sua vida universitária.</p>
</div>
</div>
<div class="grid grid-cols-[repeat(auto-fit,minmax(240px,1fr))] gap-4 p-0">
<div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-4 flex-col">
<div class="text-primary"><span class="material-symbols-outlined !text-3xl">location_on</span></div>
<div class="flex flex-col gap-1">
<h2 class="text-white text-base font-bold leading-tight">Localização Privilegiada</h2>
<p class="text-white/60 text-sm font-normal leading-normal">A poucos minutos da universidade e dos principais pontos da cidade.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-4 flex-col">
<div class="text-primary"><span class="material-symbols-outlined !text-3xl">groups</span></div>
<div class="flex flex-col gap-1">
<h2 class="text-white text-base font-bold leading-tight">Integração e Amizade</h2>
<p class="text-white/60 text-sm font-normal leading-normal">Eventos, churrascos e um ambiente que promove amizades para a vida toda.</p>
</div>
</div>
<div class="flex flex-1 gap-4 rounded-xl border border-white/10 bg-white/5 p-4 flex-col">
<div class="text-primary"><span class="material-symbols-outlined !text-3xl">home</span></div>
<div class="flex flex-col gap-1">
<h2 class="text-white text-base font-bold leading-tight">Infraestrutura Completa</h2>
<p class="text-white/60 text-sm font-normal leading-normal">Quartos confortáveis, área de estudo equipada e espaço de lazer.</p>
</div>
</div>
</div>
</section>
<section class="px-6 py-10 bg-black/20 backdrop-blur-lg border border-white/5 rounded-xl" id="fotos">
<h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] pb-3">Conheça nosso cantinho</h2>
<div class="flex overflow-x-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden -mx-6 px-6">
<div class="flex items-stretch p-4 gap-4 -mx-4 px-4">
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white/5 shadow-[0_0_4px_rgba(0,0,0,0.1)] min-w-60 w-72">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col" data-alt="Sala de estar espaçosa com sofás confortáveis, uma grande TV e decoração moderna" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA6bfwCnwr5j1dHAvEIezhSXBwIiv7dWZQmfTHBYSfP2xkggSCGfQ03XVi-j_G92kY6b-qN70ggQ49Qu-9m4DDH7bZyNhR3YXhf0-sVrF-SKhmhdMRajmU6aej6eXBOSdxc1smr-8iS7KE83yO0Tz8lPZTe-dvZ-43DjwwSPOJQRybVpjypeJeoX424YXgm52-0J2WakbQc0T_EVBemAsGwXWLNuKCXykOVL5D9J5wYJO1Y6u5-53osrnzC_BMFEYihYsKxUkpgqRqv");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-white text-base font-medium leading-normal">Sala de Estar</p>
<p class="text-white/60 text-sm font-normal leading-normal">O lugar perfeito para relaxar e assistir a filmes com os amigos.</p>
</div>
</div>
</div>
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white/5 shadow-[0_0_4px_rgba(0,0,0,0.1)] min-w-60 w-72">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col" data-alt="Mesa de estudos grande e bem iluminada com cadeiras ergonômicas e estantes de livros" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD3fDvfnzjcxPy81mIW7AGOR0VHsmf6CsMJW4-AWC10X4n_aoL5U2pymKUWGOV3j5Dp9lNNavuRvwPxkmj4LyCs10L0RSnMIERGBLaUyoAUvSSduTXOMUP-5PWIeKq66XuSqfuNq97pMPju1w80F1JOIdSJeRmUaTcmdz-xjn0PmbsYGkAvz-h0RZIXrPXgLDr0lLZQ4MDYEucxve6dsE77jjSbo-6-5LnZqJeMiJOYRrBiHWWnhZSfqIaWFL71EsnzcVdjYYeNCL9B");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-white text-base font-medium leading-normal">Área de Estudos</p>
<p class="text-white/60 text-sm font-normal leading-normal">Um ambiente silencioso e equipado para garantir seu foco nos estudos.</p>
</div>
</div>
</div>
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white/5 shadow-[0_0_4px_rgba(0,0,0,0.1)] min-w-60 w-72">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col" data-alt="Quarto individual arrumado com cama, escrivaninha e guarda-roupa" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCq5ILHsIV2EbGUfAgu7w_wFytFUe6fq26boFJX4bOFu7GdSqCrNsVkBUWowsdP0v8U0w1n5jD_x3gHVbBqw_b_k1_LseMehAOj_ny1MeBceMIhQc0hLAGwzXL1Y4E3W5C0wwfWWa70bdLIQbIYdFREMRGEsuBsfVhJWxiM-IKmLV8AZv1YRNTslzxlQab9aC-hpt0Kl45mwTgG3DfvJ1My8ho0X4Nkl3uyejZXn2n5IQTGDs_nGZe-LKQ99kUbSqL4arP3tgaJB5I1");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-white text-base font-medium leading-normal">Quartos Confortáveis</p>
<p class="text-white/60 text-sm font-normal leading-normal">Seu espaço privativo para descansar e recarregar as energias.</p>
</div>
</div>
</div>
<div class="flex h-full flex-1 flex-col gap-4 rounded-xl bg-white/5 shadow-[0_0_4px_rgba(0,0,0,0.1)] min-w-60 w-72">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex flex-col" data-alt="Área externa com churrasqueira, mesas e um grupo de jovens confraternizando" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAohHVGCZ_4bvt9Xvvo6hBZ6QH4CDGUzzmmefdomPmAVldw5-RPdVksbnNC5bOqQpXpyY0YXoA_1Nj63GTny5Y4YuO15tzalUHrdyAsdz-KQ8a5v3gdl2VB4KSjGv9SwZk10b27Qv2xybkP7A5x_egSa4JJO7RMbSxpROoKoUNQ_2oI3ohNPza_RAd57_hPTVHpqvWz-D_2p8iKAAbxuglnnSm7EfyHnz4nOsD2yQyYaVVawkXddIgx4uobBJacFMv041SEhCVx3wMJ");'></div>
<div class="flex flex-col flex-1 justify-between p-4 pt-0 gap-4">
<div>
<p class="text-white text-base font-medium leading-normal">Área de Lazer</p>
<p class="text-white/60 text-sm font-normal leading-normal">Onde a mágica acontece: churrascos, festas e muita integração.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-6 py-10 flex flex-col gap-6 bg-black/20 backdrop-blur-lg border border-white/5 rounded-xl" id="localizacao">
<div class="flex flex-col items-start gap-2">
<h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em]">Nossa Localização Privilegiada</h2>
<p class="text-white/70 text-base font-normal leading-normal max-w-2xl">Estamos localizados no coração do bairro universitário, perto de tudo que você precisa para uma vida prática e divertida.</p>
</div>
<div class="aspect-video w-full overflow-hidden rounded-xl">
<img class="h-full w-full object-cover" data-alt="Mapa mostrando a localização da República Kalango com um pino, próximo à universidade e a pontos de interesse como supermercados e bares." data-location="Bairro Universitário" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTxlMbbb0Yv0R_dNI12AOubsgzfFcAhB5GH0sOlXGJXOVjdzSJUVrTGj5oBF8pUZhLV4Q3DwY1R_b0RFIRYnddFPBGWh1ZEWXdm9JiMxumyfdMYJoTNZ5rXrGFXKqHfA1dkvCkFhumB14C_8V5rYcp4KQEFt2JuhOipEC9NCxSMswh30oyKKHhOJi_cnlox-99qRYMaoazvDJ4hx_dG_MPGbaNFp_Q6ERA86z4P_VKf_EnBLhTA48bTep8hxHdCsJXpHjyk1mRzjIT"/>
</div>
</section>
<section class="px-6 py-10 bg-black/20 backdrop-blur-lg border border-white/5 rounded-xl" id="agendar-visita">
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
<div class="flex flex-col gap-4">
<h2 class="text-white text-[32px] font-bold leading-tight tracking-[-0.015em]">Agende uma Visita</h2>
<p class="text-white/70 text-base font-normal leading-normal">Venha nos conhecer pessoalmente! Preencha o formulário e marcaremos um horário para você ver de perto como é fazer parte da família Kalango.</p>
</div>
<form class="flex flex-col gap-4">
<div>
<label class="block text-sm font-medium text-white/80 mb-1" for="name">Nome</label>
<input class="w-full rounded-lg border-white/20 bg-background-dark/80 text-white focus:border-primary focus:ring-primary/50 transition" id="name" name="name" placeholder="Seu nome completo" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-white/80 mb-1" for="contact">Email ou WhatsApp</label>
<input class="w-full rounded-lg border-white/20 bg-background-dark/80 text-white focus:border-primary focus:ring-primary/50 transition" id="contact" name="contact" placeholder="seuemail@exemplo.com" type="text"/>
</div>
<div>
<label class="block text-sm font-medium text-white/80 mb-1" for="date">Data e Hora de Preferência</label>
<input class="w-full rounded-lg border-white/20 bg-background-dark/80 text-white focus:border-primary focus:ring-primary/50 transition" id="date" name="date" style="color-scheme: dark;" type="datetime-local"/>
</div>
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-background-dark text-base font-bold leading-normal tracking-[0.015em] hover:bg-opacity-90 transition-colors" type="submit">
<span class="truncate">Enviar Pedido de Agendamento</span>
</button>
</form>
</div>
</section>
<footer class="flex flex-col md:flex-row items-center justify-between gap-6 border-t border-solid border-white/10 px-4 py-8 mt-10" id="contato">
<div class="flex items-center gap-4 text-white">
<div class="size-5 text-primary">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-white/80 text-base font-bold leading-tight">República Kalango</h2>
</div>
<div class="flex items-center gap-4">
<a class="text-white/60 hover:text-primary transition-colors" href="#">
<svg aria-hidden="true" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path clip-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.024.06 1.378.06 3.808s-.012 2.784-.06 3.808c-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.024.048-1.378.06-3.808.06s-2.784-.012-3.808-.06c-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427C2.013 14.784 2 14.43 2 12s.013-2.784.06-3.808c.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zM12 8.25a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zm0 9a5.25 5.25 0 110-10.5 5.25 5.25 0 010 10.5z" fill-rule="evenodd"></path></svg>
<span class="sr-only">Instagram</span>
</a>
<a class="text-white/60 hover:text-primary transition-colors text-sm font-medium" href="mailto:contato@republicakalango.com">contato@republicakalango.com</a>
</div>
</footer>
</main>
</div>
</div>
</div>
</div>

</body></html>
@endsection

@push('scripts')
<script>
  // expose supabase config to client from meta tags
  window.SUPABASE_URL = document.querySelector('meta[name="supabase-url"]').content;
  window.SUPABASE_ANON = document.querySelector('meta[name="supabase-anon"]').content;
</script>
@endpush
