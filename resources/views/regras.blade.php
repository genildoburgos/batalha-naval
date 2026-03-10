<x-app-layout>
<div class="min-h-screen bg-[#0a0f14] text-white py-12">
    <div class="max-w-2xl mx-auto flex flex-col gap-8 px-4 sm:px-6">

            {{-- Header --}}
            <div class="flex flex-col items-center text-center gap-3">
                <span class="text-6xl">⚓</span>
                <h1 class="text-4xl font-black uppercase tracking-tighter">Regras do Jogo</h1>
                <p class="text-white/40 text-sm max-w-md">Aprenda como posicionar sua frota, atacar o inimigo e conquistar a vitória nos mares.</p>
            </div>

            {{-- Objetivo --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-4">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🎯</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Objetivo</h2>
                </div>
                <p class="text-white/60 leading-relaxed">
                    Afunde <strong class="text-white">todos os navios</strong> da frota inimiga antes que a IA afunde os seus.
                    Vence quem destruir completamente a frota adversária primeiro.
                </p>
            </div>

            {{-- Frota --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🚢</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">A Frota</h2>
                </div>
                <p class="text-white/60 text-sm">Cada jogador posiciona os seguintes navios no tabuleiro 10×10:</p>
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between rounded-2xl bg-[#6366f1]/10 border border-[#6366f1]/30 px-5 py-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#6366f1]"></span>
                            <span class="font-bold">Porta-aviões</span>
                        </div>
                        <div class="flex items-center gap-6 text-sm text-white/50">
                            <span>6 blocos</span>
                            <span class="text-white/30">×</span>
                            <span class="text-white font-bold">2 unidades</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between rounded-2xl bg-[#0ea5e9]/10 border border-[#0ea5e9]/30 px-5 py-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#0ea5e9]"></span>
                            <span class="font-bold">Navio de Guerra</span>
                        </div>
                        <div class="flex items-center gap-6 text-sm text-white/50">
                            <span>4 blocos</span>
                            <span class="text-white/30">×</span>
                            <span class="text-white font-bold">2 unidades</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between rounded-2xl bg-[#f59e0b]/10 border border-[#f59e0b]/30 px-5 py-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#f59e0b]"></span>
                            <span class="font-bold">Encouraçado</span>
                        </div>
                        <div class="flex items-center gap-6 text-sm text-white/50">
                            <span>3 blocos</span>
                            <span class="text-white/30">×</span>
                            <span class="text-white font-bold">1 unidade</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between rounded-2xl bg-[#10b981]/10 border border-[#10b981]/30 px-5 py-4">
                        <div class="flex items-center gap-3">
                            <span class="w-3 h-3 rounded-full bg-[#10b981]"></span>
                            <span class="font-bold">Submarino</span>
                        </div>
                        <div class="flex items-center gap-6 text-sm text-white/50">
                            <span>1 bloco</span>
                            <span class="text-white/30">×</span>
                            <span class="text-white font-bold">1 unidade</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Como jogar --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">📋</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Como Jogar</h2>
                </div>
                <div class="flex flex-col gap-4">
                    @foreach([
                        ['num' => '01', 'titulo' => 'Posicione sua frota', 'desc' => 'Selecione um navio na barra lateral, escolha a direção com o botão girar e clique no tabuleiro para posicioná-lo. Clique em um navio já posicionado para removê-lo.'],
                        ['num' => '02', 'titulo' => 'Inicie a batalha', 'desc' => 'Após posicionar todos os navios, clique em "Confirmar Implantação". A IA posicionará sua frota automaticamente.'],
                        ['num' => '03', 'titulo' => 'Ataque o inimigo', 'desc' => 'Clique em qualquer célula do tabuleiro "Fogo no Inimigo". Acertou? Você atira novamente. Errou? A vez passa para a IA.'],
                        ['num' => '04', 'titulo' => 'Afunde todos os navios', 'desc' => 'Um navio é afundado quando todos os seus blocos são atingidos. O jogo termina quando uma das frotas é completamente destruída.'],
                    ] as $passo)
                    <div class="flex gap-5 items-start">
                        <span class="text-3xl font-black text-white/10 leading-none mt-1">{{ $passo['num'] }}</span>
                        <div>
                            <p class="font-bold text-white">{{ $passo['titulo'] }}</p>
                            <p class="text-white/50 text-sm mt-1 leading-relaxed">{{ $passo['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Dificuldades --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">⚡</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Dificuldades</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="rounded-2xl bg-green-500/10 border border-green-500/30 p-5 flex flex-col gap-2">
                        <span class="text-green-400 font-black uppercase text-sm">Fácil</span>
                        <p class="text-white/50 text-xs leading-relaxed">A IA atira aleatoriamente. Boa para aprender o jogo.</p>
                        <span class="text-green-400 font-black text-lg mt-1">100 pts</span>
                    </div>
                    <div class="rounded-2xl bg-yellow-500/10 border border-yellow-500/30 p-5 flex flex-col gap-2">
                        <span class="text-yellow-400 font-black uppercase text-sm">Médio</span>
                        <p class="text-white/50 text-xs leading-relaxed">A IA persegue navios atingidos até afundá-los.</p>
                        <span class="text-yellow-400 font-black text-lg mt-1">250 pts</span>
                    </div>
                    <div class="rounded-2xl bg-red-500/10 border border-red-500/30 p-5 flex flex-col gap-2">
                        <span class="text-red-400 font-black uppercase text-sm">Difícil</span>
                        <p class="text-white/50 text-xs leading-relaxed">A IA usa estratégia avançada para localizar sua frota.</p>
                        <span class="text-red-400 font-black text-lg mt-1">500 pts</span>
                    </div>
                </div>
            </div>

            {{-- Pontuação --}}
            <div class="rounded-3xl bg-white/5 border border-white/10 p-8 flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <span class="text-2xl">🏆</span>
                    <h2 class="text-xl font-black uppercase tracking-tight">Pontuação</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-4 flex flex-col gap-1">
                        <span class="text-white/40 text-xs uppercase tracking-widest">Bônus Precisão</span>
                        <span class="text-white font-black text-xl">até 200 pts</span>
                        <span class="text-white/30 text-xs">Baseado na % de acertos</span>
                    </div>
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-4 flex flex-col gap-1">
                        <span class="text-white/40 text-xs uppercase tracking-widest">Bônus Tempo</span>
                        <span class="text-white font-black text-xl">até 300 pts</span>
                        <span class="text-white/30 text-xs">-1 pt a cada 10 segundos</span>
                    </div>
                    <div class="rounded-2xl bg-white/5 border border-white/10 p-4 flex flex-col gap-1">
                        <span class="text-white/40 text-xs uppercase tracking-widest">Bônus Vitória</span>
                        <span class="text-white font-black text-xl">300 pts</span>
                        <span class="text-white/30 text-xs">Apenas se vencer</span>
                    </div>
                    <div class="rounded-2xl bg-[#137fec]/10 border border-[#137fec]/30 p-4 flex flex-col gap-1">
                        <span class="text-white/40 text-xs uppercase tracking-widest">Máximo possível</span>
                        <span class="text-[#137fec] font-black text-xl">1.300 pts</span>
                        <span class="text-white/30 text-xs">Difícil + perfeito + rápido</span>
                    </div>
                </div>
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
