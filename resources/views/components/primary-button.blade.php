<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-3 bg-[#333335] border border-white/10 rounded-xl font-semibold text-sm text-bright transition-all duration-300 hover:bg-[#444446] hover:border-white/20 focus:outline-none focus:ring-2 focus:ring-white/40 focus:ring-offset-2 focus:ring-offset-[#0E0E11]']) }}>
    {{ $slot }}
</button>