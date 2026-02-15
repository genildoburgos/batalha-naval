@if (session('success'))
    <div class="mb-4 rounded-xl border border-emerald-500/30 bg-emerald-500/10 p-3 text-sm text-emerald-200">
        {{ session('success') }}
    </div>
@elseif(session('error'))
    <div class="mb-4 rounded-xl border border-red-500/30 bg-red-500/10 p-3 text-sm text-red-200">
        {{ session('error') }}
    </div>
@endif
