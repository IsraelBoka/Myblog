<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full rounded-full group border border-transparent bg-brand-black py-2 px-4 text-base font-semibold text-white shadow-sm  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2']) }}>
    {{ $slot }} <span class="opacity-0 transition-[opacity,transform] duration-300 ease-in-out -translate-x-full group-hover:opacity-100 group-hover:translate-x-0 inline-flex ">&rarr;</span>
</button>
