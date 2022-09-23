<div class="flex">
    <div x-data="{ open: false }" class="bg-red-200 h-screen p-5 pt-8  duration-300 relative"
        :class="open ? 'w-72' : 'w-16'">
        <img @click="open = ! open" src="{{ asset('img/flecha-correcta.png') }}"
            class="bg-white text-purple text-3xl rounded-full absolute -right-3 top-9
        border border-orange-900 cursor-pointer }"
            :class="open ? 'rotate-180' : ''"/>

        <div class="inline-flex">
            <img src="{{asset('img/team.png')}}" class="bg-amber-300"/>
        </div>

    </div>
    <div class="p-7">
        <h1 class="text-2xl font-semibol">Home page</h1>

    </div>
</div>
