<x-app-layout>
    <div class="min-h-screen bg-[#0a0f14] text-white py-12">
        <div class="max-w-2xl mx-auto flex flex-col gap-8 px-4 sm:px-6">

            {{-- Header --}}
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-6xl">⚙️</span>
                <h1 class="text-4xl font-black uppercase tracking-tighter">Configurações</h1>
                <p class="text-white/40 text-sm max-w-md">Gerencie suas informações pessoais e preferências de conta.</p>
            </div>

            {{-- Mensagem de sucesso --}}
            @if (session('status') === 'profile-updated')
                <div class="rounded-2xl bg-green-500/10 border border-green-500/30 px-6 py-4 text-green-400 text-sm font-bold">
                    ✓ Perfil atualizado com sucesso!
                </div>
            @endif
            @if (session('status') === 'password-updated')
                <div class="rounded-2xl bg-green-500/10 border border-green-500/30 px-6 py-4 text-green-400 text-sm font-bold">
                    ✓ Senha alterada com sucesso!
                </div>
            @endif

            {{-- Alterar Nome --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">👤</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Dados Pessoais</h2>
                </div>

                <form method="POST" action="{{ route('profile.update') }}" class="flex flex-col gap-4">
                    @csrf
                    @method('PATCH')

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Nome</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}"
                            class="w-full rounded-2xl bg-white/5 border border-white/10 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-[#137fec] transition-colors"
                            required />
                        @error('name')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Email</label>
                        <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}"
                            class="w-full rounded-2xl bg-white/5 border border-white/10 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-[#137fec] transition-colors"
                            required />
                        @error('email')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-8 py-3 rounded-2xl bg-[#137fec] text-white font-black uppercase tracking-widest text-sm hover:bg-[#137fec]/80 transition-all">
                            Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>

            {{-- Alterar Senha --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🔒</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Alterar Senha</h2>
                </div>

                <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-4">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Senha Atual</label>
                        <input type="password" name="current_password"
                            class="w-full rounded-2xl bg-white/5 border border-white/10 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-[#137fec] transition-colors"
                            placeholder="••••••••" />
                        @error('current_password', 'updatePassword')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Nova Senha</label>
                        <input type="password" name="password"
                            class="w-full rounded-2xl bg-white/5 border border-white/10 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-[#137fec] transition-colors"
                            placeholder="••••••••" />
                        @error('password', 'updatePassword')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Confirmar Nova Senha</label>
                        <input type="password" name="password_confirmation"
                            class="w-full rounded-2xl bg-white/5 border border-white/10 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-[#137fec] transition-colors"
                            placeholder="••••••••" />
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-8 py-3 rounded-2xl bg-[#137fec] text-white font-black uppercase tracking-widest text-sm hover:bg-[#137fec]/80 transition-all">
                            Alterar Senha
                        </button>
                    </div>
                </form>
            </div>

            {{-- Excluir Conta --}}
            <div class="rounded-3xl bg-red-500/5 border border-red-500/20 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">⚠️</span>
                    <h2 class="text-xl font-black uppercase tracking-tight text-red-400">Zona de Perigo</h2>
                </div>
                <p class="text-white/40 text-sm leading-relaxed">
                    Ao excluir sua conta, todos os seus dados, histórico de partidas e posição no ranking serão permanentemente removidos. Esta ação não pode ser desfeita.
                </p>

                <form method="POST" action="{{ route('profile.destroy') }}" class="flex flex-col gap-4"
                      onsubmit="return confirm('Tem certeza? Esta ação é irreversível.')">
                    @csrf
                    @method('DELETE')

                    <div class="flex flex-col gap-2">
                        <label class="text-white/50 text-xs uppercase tracking-widest font-bold">Confirme sua senha para excluir</label>
                        <input type="password" name="password"
                            class="w-full rounded-2xl bg-white/5 border border-red-500/20 px-5 py-3 text-white placeholder-white/20 focus:outline-none focus:border-red-500 transition-colors"
                            placeholder="••••••••" />
                        @error('password', 'userDeletion')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-8 py-3 rounded-2xl bg-red-500/20 border border-red-500/40 text-red-400 font-black uppercase tracking-widest text-sm hover:bg-red-500/30 transition-all">
                            Excluir Minha Conta
                        </button>
                    </div>
                </form>
            </div>

            {{-- Botão voltar --}}
            <div class="flex justify-center pb-6">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 px-8 py-4 rounded-2xl bg-[#137fec] text-white font-black uppercase tracking-widest text-sm hover:bg-[#137fec]/80 transition-all shadow-[0_0_30px_#137fec40]">
                    ← Voltar ao Menu
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
