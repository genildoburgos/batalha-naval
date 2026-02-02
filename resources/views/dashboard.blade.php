<x-app-layout>


            <div class="flex h-full grow flex-col">
                <div class="flex flex-1 items-center justify-center p-4 sm:p-6 md:p-8">
                    <div class="flex w-full max-w-lg flex-col items-center">
                        <!-- HeroSection -->
                        <div class="w-full">
                            <div class="flex min-h-[200px] flex-col gap-4 items-center justify-center p-4 text-center">
                                <h1 class="text-white text-5xl font-black leading-tight tracking-[-0.033em] sm:text-6xl">
                                    Batalha Naval
                                </h1>
                                <h2 class="text-[#92adc9] text-base font-normal leading-normal sm:text-lg">
                                    Afunde a frota inimiga e conquiste a vitória.
                                </h2>
                            </div>
                        </div>
                        <!-- ButtonGroup -->
                        <div class="flex w-full justify-center mt-6">
                            <div class="flex flex-1 gap-3 max-w-xs flex-col items-stretch px-4 py-3">
                                <a href="{{ route('partida.modos') }}"
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] w-full transition-colors hover:bg-primary/90">
                                    <span class="truncate">Novo Jogo</span>
                                </a>
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-[#233648] text-white text-base font-bold leading-normal tracking-[0.015em] w-full transition-colors hover:bg-[#344a60]">
                                    <span class="truncate">Carregar Jogo</span>
                                </button>
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-[#233648] text-white text-base font-bold leading-normal tracking-[0.015em] w-full transition-colors hover:bg-[#344a60]">
                                    <span class="truncate">Configurações</span>
                                </button>
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 bg-[#233648] text-white text-base font-bold leading-normal tracking-[0.015em] w-full transition-colors hover:bg-[#344a60]">
                                    <span class="truncate">Regras</span>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
