@extends('layouts.app')

@section('title', 'Login - República Kalango')

@section('content')
    <!DOCTYPE html>
    <html class="dark" lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>República Kalango - Login</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
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
                            "display": ["Plus Jakarta Sans", "sans-serif"]
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
            body {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }

            .parallax-bg {
                background-image: url('image-23c8e5ca8a484859a72173111f122558');
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>

    <body class="bg-background-dark font-display parallax-bg">
        <div class="relative flex min-h-screen w-full flex-col overflow-hidden">
            <div class="absolute inset-0 bg-black/60"></div>
            <div class="relative z-10 flex min-h-screen w-full grow items-center justify-center p-6 sm:p-8">
                <main class="w-full max-w-md">
                    <div class="rounded-xl border border-white/10 bg-black/20 p-8 shadow-2xl backdrop-blur-lg">
                        <div class="mb-8 text-center">
                            <a class="inline-flex items-center gap-3 text-2xl font-bold text-white" href="#">
                                <span class="material-symbols-outlined text-primary text-4xl">
                                    cottage
                                </span>
                                <span>República Kalango</span>
                            </a>
                        </div>
                        <div class="text-center">
                            <h1 class="font-display text-3xl font-bold tracking-tight text-white">Acesse sua conta</h1>
                            <p class="mt-2 text-base font-normal leading-normal text-slate-300">Faça login para continuar.
                            </p>
                        </div>
                        <div class="mt-8 flex w-full flex-col gap-6">
                            <form action="#" class="flex flex-col gap-4">
                                <div class="flex flex-col">
                                    <label class="font-display pb-2 text-sm font-medium text-slate-300"
                                        for="email">Email</label>
                                    <div class="relative flex w-full items-center">
                                        <span class="material-symbols-outlined absolute left-4 text-slate-400">person</span>
                                        <input
                                            class="form-input h-12 w-full flex-1 rounded-lg border border-slate-700 bg-white/5 py-2. 5    pl-12    pr-4   text-base font-normal text-white placeholder:text-slate-400   focus:border-primary/ 50      focus:outline-none  focus:ring-4 focus:ring-primary/20"
                                            id="email" placeholder="Digite seu   email" type="email" />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="font-display pb-2 text-sm font-medium text-slate-300"
                                        for="password">Senha</label>
                                    <div class="relative flex w-full items-center">
                                        <span class="material-symbols-outlined absolute left-4 text-slate-400">lock</span>
                                        <input
                                            class="form-input h-12 w-full flex-1 rounded-lg border border-slate-700 bg-white/5 py-2. 5    pl-12    pr-4   text-base font-normal text-white placeholder:text-slate-400   focus:border-primary/ 50      focus:outline-none  focus:ring-4 focus:ring-primary/20"
                                            id="password" placeholder="Digite  sua senha" type="password" />
                                    </div>
                                    <a class="mt-2 text-right text-sm font-medium text-primary/80 hover:text-primary"
                                        href="#">Esqueceu a senha? </a>
                                </div>
                                <button
                                    class="flex h-12 w-full items-center justify-center rounded-lg bg-primary px-6    text-base      font-bold  text-background-dark transition-colors hover:bg-primary/90    focus:outline-none  focus:ring-4     focus:ring-primary/30"
                                    type="submit">Entrar</button>
                            </form>
                            <div class="text-center">
                                <p class="text-sm text-slate-400">Ainda não tem conta? <a
                                        class="font-bold text-primary/80 hover:text-primary" href="#">Registre-se</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </body>

    </html>
@endsection

@push('scripts')
    <script>
        // Initialize Supabase client (loads keys from meta or env-blade)
        window.SUPABASE_URL = document.querySelector('meta[name="supabase-url"]').content;
        window.SUPABASE_ANON = document.querySelector('meta[name="supabase-anon"]').content;

        // Load supabase-js dynamically (CDN)
        (function() {
            const s = document.createElement('script');
            s.src = 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2/dist/umd/supabase.min.js';
            s.onload = () => {
                const supabase = supabaseJs.createClient(window.SUPABASE_URL, window.SUPABASE_ANON);

                const form = document.querySelector('form');
                form.addEventListener('submit', async function(e) {
                    e.preventDefault();
                    const email = document.getElementById('email').value;
                    const password = document.getElementById('password').value;
                    // try sign-in (email/password)
                    const {
                        data,
                        error
                    } = await supabase.auth.signInWithPassword({
                        email,
                        password
                    });
                    if (error) {
                        alert('Erro: ' + error.message);
                        return;
                    }
                    // data will contain session with access_token
                    const token = data.session.access_token;
                    // Redirect to dashboard using Authorization header via fetch to confirm token,
                    // We'll open dashboard in same window and include token in a POST to a small endpoint which sets it as cookie (optional).
                    // Simpler approach: store token in localStorage and then navigate to /dashboard where frontend will call a backend endpoint with token.
                    localStorage.setItem('supabase_token', token);
                    // navigate to dashboard (we'll let middleware verify when the browser requests protected resources)
                    // Because Laravel middleware expects header, we perform a small fetch to /dashboard/me to verify and then redirect
                    const resp = await fetch('/dashboard/me', {
                        method: 'GET',
                        headers: {
                            'Authorization': 'Bearer ' + token
                        }
                    });
                    if (resp.ok) {
                        window.location.href = '/dashboard';
                    } else {
                        alert(
                            'Falha na autenticação no servidor. Verifique as configurações de SUPABASE_URL/SUPABASE_ANON_KEY no backend.'
                            );
                    }
                });
            };
            document.head.appendChild(s);
        })();
    </script>
@endpush
