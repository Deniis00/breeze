<div class="flex">
    <div x-data="{ open: false }" class="bg-gray-200 h-screen p-5 pt-8  duration-300 relative"
        :class="open ? 'w-80' : 'w-20'">
        <img @click="open = ! open" src="<?php echo e(asset('img/flecha-correcta.png')); ?>"
            class="bg-white text-purple text-3xl rounded-full absolute -right-3 top-9
        border border-orange-900 cursor-pointer }"
            :class="open ? 'rotate-180' : ''"/>

        <div class="inline-flex">
            <img src="<?php echo e(asset('img/team.png')); ?>" class="bg-blue-300 text-4xl rounded cursor-pointer
                float-left block mr-2 duration-500" :class="open && 'rotate-[360deg]'"/>
            <h1 class="text-black origin-left font-medium text-2xl duration-300" :class="!open && 'scale-0'">Tailwind</h1>
        </div>
        <div class="flex  items-center rounded-md bg-gray-100 mt-6 py-2" :class="!open ? 'px-4' : 'px-2.5'">
            <img src="<?php echo e(asset('img/search.png')); ?>" class="tex-white text-lg block float-left cursor-pointer mr-2 ">
            <input type="search" placeholder="search" class="txt-base bg-transparent w-full
                    text-orange-200 focus:outline-none"  :class="!open && 'hidden'">
        </div>

    </div>

    <div class="p-7">
        <h1 class="text-2xl font-semibol">Home page</h1>

    </div>

</div>

<?php /**PATH C:\xampp\htdocs\breeze\resources\views/custom/sidebar.blade.php ENDPATH**/ ?>