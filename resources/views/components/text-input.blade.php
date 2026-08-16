@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-white/10 bg-white/5 text-bright placeholder:text-white/30 focus:border-white/30 focus:ring-white/40 rounded-xl shadow-sm']) }}>