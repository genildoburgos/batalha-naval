<x-guest-layout>
    <div class="min-h-screen bg-slate-950 text-slate-100">
        <div class="relative min-h-screen overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-950 to-black"></div>
                <div class="absolute -top-28 left-1/2 h-72 w-[46rem] -translate-x-1/2 rounded-full bg-blue-500/10 blur-3xl"></div>
                <div class="absolute -bottom-36 right-[-8rem] h-80 w-[42rem] rounded-full bg-indigo-500/10 blur-3xl"></div>
            </div>

            <div class="relative mx-auto flex min-h-screen max-w-6xl items-center px-6 py-14">
                <div class="grid w-full items-center gap-10 lg:grid-cols-2">

                    <section class="text-center lg:text-left">
                        <p class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1 text-xs text-slate-300 ring-1 ring-white/10">
                            <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                            Bem-vindo ao Batalha Naval
                        </p>

                        <h1 class="mt-5 text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                            Batalha Naval
                        </h1>

                        <p class="mt-4 max-w-xl text-base text-slate-300 sm:text-lg">
                            Afunde a frota inimiga e conquiste a vitória.
                            Entre para continuar sua progressão e acessar partidas salvas.
                        </p>

                        <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row lg:justify-start">
                            <a href="{{ route('register') }}"
                               class="inline-flex items-center justify-center rounded-xl bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300/60">
                                Criar conta
                            </a>

                            @if (Route::has('rules'))
                                <a href="{{ route('rules') }}"
                                   class="inline-flex items-center justify-center rounded-xl bg-white/5 px-5 py-3 text-sm font-semibold text-white ring-1 ring-white/10 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-white/20">
                                    Ver regras
                                </a>
                            @else
                                <button type="button"
                                        class="inline-flex items-center justify-center rounded-xl bg-white/5 px-5 py-3 text-sm font-semibold text-white ring-1 ring-white/10">
                                    Ver regras
                                </button>
                            @endif
                        </div>
                    </section>

                    <aside class="mx-auto w-full max-w-md">
                        <div class="rounded-2xl bg-white/5 p-6 ring-1 ring-white/10 backdrop-blur">
                            <div class="mb-6">
                                <h2 class="text-xl font-bold text-white">Entrar</h2>
                                <p class="mt-1 text-sm text-slate-300">Acesse sua conta para jogar.</p>
                            </div>

                            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                                @csrf

                                <div>
                                    <x-input-label for="email" value="Email" class="text-slate-200" />
                                    <x-text-input id="email"
                                                  class="mt-1 block w-full rounded-xl border-white/10 bg-slate-950/40 text-slate-100 focus:border-blue-400/60 focus:ring-blue-300/30"
                                                  type="email"
                                                  name="email"
                                                  :value="old('email')"
                                                  required
                                                  autofocus
                                                  autocomplete="username" />
                                </div>

                                <div>
                                    <x-input-label for="password" value="Senha" class="text-slate-200" />
                                    <x-text-input id="password"
                                                  class="mt-1 block w-full rounded-xl border-white/10 bg-slate-950/40 text-slate-100 focus:border-blue-400/60 focus:ring-blue-300/30"
                                                  type="password"
                                                  name="password"
                                                  required
                                                  autocomplete="current-password" />
                                </div>

                                <div class="flex items-center justify-between">
                                    <label class="inline-flex items-center gap-2 text-sm text-slate-300">
                                        <input id="remember_me" type="checkbox"
                                               class="h-4 w-4 rounded border-white/20 bg-slate-950/40 text-blue-600 focus:ring-blue-300/30"
                                               name="remember">
                                        Lembrar-me
                                    </label>

                                    @if (Route::has('password.request'))
                                        <a class="text-sm text-slate-300 hover:text-white"
                                           href="{{ route('password.request') }}">
                                            Esqueceu a senha?
                                        </a>
                                    @endif
                                </div>

                                <button type="submit"
                                        class="mt-2 w-full rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300/60">
                                    Entrar
                                </button>

                                <p class="pt-2 text-center text-sm text-slate-300">
                                    Novo por aqui?
                                    <a class="font-semibold text-blue-300 hover:text-blue-200"
                                       href="{{ route('register') }}">
                                        Registre-se
                                    </a>
                                </p>
                            </form>
                        </div>

                        <p class="mt-4 text-center text-xs text-slate-500">
                            © {{ date('Y') }} Batalha Naval
                        </p>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
