<x-app-layout>
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 items-center justify-center p-4 sm:p-6 md:p-8">
                <div class="layout-content-container flex w-full max-w-4xl flex-col items-center gap-8 py-10">
                    <!-- PageHeading -->
                    <div class="flex w-full flex-col gap-3 text-center">
                        <h1 class="text-4xl font-bold leading-tight tracking-tight text-slate-900 dark:text-white sm:text-5xl">
                            Modo Campanha: Nível de Dificuldade
                        </h1>
                        <p class="text-base font-normal leading-normal text-slate-600 dark:text-slate-400 sm:text-lg">
                            Selecione o nível de dificuldade da IA para iniciar a batalha.
                        </p>
                    </div>

                    <!-- Difficulty Cards -->
                    <form id="campanha_store" action="{{ route('partida.store') }}" method="post" class="w-full">
                        @csrf
                        <input type="hidden" name="modo" value="{{ $modo }}">

                        <div class="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3" id="dificuldade-cards">

                            <!-- Card 1: Fácil -->
                            <div
                                class="group relative flex cursor-pointer flex-col gap-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 p-6 transition-all duration-300 hover:border-primary/50 hover:shadow-lg hover:shadow-primary/10 dificuldade-card"
                            >
                                <input
                                    type="radio"
                                    name="dificuldade"
                                    id="dif_facil"
                                    value="facil"
                                    class="sr-only"
                                    {{ old('dificuldade', 'facil') === 'facil' ? 'checked' : '' }}
                                >

                                <div class="selected-bg absolute inset-0 z-0 rounded-xl bg-primary/10 opacity-0 transition-opacity duration-300"></div>

                                <div class="relative z-10 flex flex-col items-center text-center gap-4">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400">
                                        <span class="material-symbols-outlined text-4xl">gps_not_fixed</span>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-lg font-bold leading-normal text-slate-900 dark:text-white">
                                            Marinheiro Recruta
                                        </h2>
                                        <p class="text-sm font-normal leading-normal text-slate-600 dark:text-slate-400">
                                            A IA dispara aleatoriamente pelo tabuleiro, sem memória de acertos anteriores. Ideal para iniciantes.
                                        </p>
                                    </div>

                                    <div class="selected-icon absolute -top-3 -right-3 flex h-6 w-6 items-center justify-center rounded-full bg-primary text-white opacity-0 transition-opacity duration-300">
                                        <span class="material-symbols-outlined text-base">check</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2: Médio -->
                            <div
                                class="group relative flex cursor-pointer flex-col gap-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 p-6 transition-all duration-300 hover:border-primary/50 hover:shadow-lg hover:shadow-primary/10 dificuldade-card"
                            >
                                <input
                                    type="radio"
                                    name="dificuldade"
                                    id="dif_medio"
                                    value="medio"
                                    class="sr-only"
                                    {{ old('dificuldade') === 'medio' ? 'checked' : '' }}
                                >

                                <div class="selected-bg absolute inset-0 z-0 rounded-xl bg-primary/10 opacity-0 transition-opacity duration-300"></div>

                                <div class="relative z-10 flex flex-col items-center text-center gap-4">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400">
                                        <span class="material-symbols-outlined text-4xl">radar</span>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-lg font-bold leading-normal text-slate-900 dark:text-white">
                                            Capitão Experiente
                                        </h2>
                                        <p class="text-sm font-normal leading-normal text-slate-600 dark:text-slate-400">
                                            Após um acerto, a IA concentra os disparos na área ao redor para afundar o navio rapidamente. Um desafio equilibrado.
                                        </p>
                                    </div>

                                    <div class="selected-icon absolute -top-3 -right-3 flex h-6 w-6 items-center justify-center rounded-full bg-primary text-white opacity-0 transition-opacity duration-300">
                                        <span class="material-symbols-outlined text-base">check</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3: Difícil -->
                            <div
                                class="group relative flex cursor-pointer flex-col gap-3 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 p-6 transition-all duration-300 hover:border-primary/50 hover:shadow-lg hover:shadow-primary/10 dificuldade-card"
                            >
                                <input
                                    type="radio"
                                    name="dificuldade"
                                    id="dif_dificil"
                                    value="dificil"
                                    class="sr-only"
                                    {{ old('dificuldade') === 'dificil' ? 'checked' : '' }}
                                >

                                <div class="selected-bg absolute inset-0 z-0 rounded-xl bg-primary/10 opacity-0 transition-opacity duration-300"></div>

                                <div class="relative z-10 flex flex-col items-center text-center gap-4">
                                    <div class="flex h-16 w-16 items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400">
                                        <span class="material-symbols-outlined text-4xl">psychology</span>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-lg font-bold leading-normal text-slate-900 dark:text-white">
                                            Almirante Estrategista
                                        </h2>
                                        <p class="text-sm font-normal leading-normal text-slate-600 dark:text-slate-400">
                                            Utiliza análise probabilística para determinar as posições mais prováveis dos navios inimigos. Desafio máximo.
                                        </p>
                                    </div>

                                    <div class="selected-icon absolute -top-3 -right-3 flex h-6 w-6 items-center justify-center rounded-full bg-primary text-white opacity-0 transition-opacity duration-300">
                                        <span class="material-symbols-outlined text-base">check</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                    <!-- Buttons -->
                    <div class="flex w-full max-w-lg flex-col items-center gap-3 pt-6 sm:flex-row">
                        <a href="{{ route('dashboard') }}"
                            class="flex h-12 w-full min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-slate-200 dark:bg-slate-800 text-slate-900 dark:text-white text-base font-bold leading-normal tracking-wide transition-colors hover:bg-slate-300 dark:hover:bg-slate-700"
                        >
                            <span class="truncate">Voltar ao Menu</span>
                        </a>

                        <button
                            form="campanha_store"
                            class="flex h-12 w-full min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary text-white text-base font-bold leading-normal tracking-wide shadow-lg shadow-primary/30 transition-colors hover:bg-primary/90"
                        >
                            <span class="truncate">Iniciar Campanha</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const container = document.getElementById('dificuldade-cards');
        if (!container) return;

        const cards = Array.from(container.querySelectorAll('.dificuldade-card'));

        function setSelected(card, selected) {
          // visual selecionado (igual ao seu "médio" original)
          card.classList.toggle('border-primary/70', selected);
          card.classList.toggle('dark:border-primary/70', selected);
          card.classList.toggle('shadow-lg', selected);
          card.classList.toggle('shadow-primary/20', selected);

          // visual padrão quando não selecionado
          card.classList.toggle('border-slate-200', !selected);
          card.classList.toggle('dark:border-slate-800', !selected);

          const bg = card.querySelector('.selected-bg');
          const icon = card.querySelector('.selected-icon');

          if (bg) {
            bg.classList.toggle('opacity-100', selected);
            bg.classList.toggle('opacity-0', !selected);
          }
          if (icon) {
            icon.classList.toggle('opacity-100', selected);
            icon.classList.toggle('opacity-0', !selected);
          }
        }

        function selectCard(card) {
          cards.forEach(c => setSelected(c, false));
          setSelected(card, true);

          const radio = card.querySelector('input[type="radio"][name="dificuldade"]');
          if (radio) radio.checked = true;
        }

        cards.forEach(card => {
          card.addEventListener('click', () => selectCard(card));
        });

        // aplica visual com base no checked (old())
        const checked = container.querySelector('input[name="dificuldade"]:checked');
        if (checked) {
          selectCard(checked.closest('.dificuldade-card'));
        } else if (cards[0]) {
          selectCard(cards[0]);
        }
      });
    </script>
    @endpush
</x-app-layout>
