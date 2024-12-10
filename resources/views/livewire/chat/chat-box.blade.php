<div>

    {{----- header ------}}

    <header class="w-full sticky inset-x-0 flex pb-[5px] pt-[5px] top-0 z-10 bg-white border-b">

        <div class="flex w-full item-center ppx-2 lg:px-4 gap-2 md:gap-5">

            <a class="shrink-0 lg:hidden mt-3 ml-1" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>

            </a>

            {{----- Avatar ------}}

            <div class="shrink-0">
                <x-avatar class="h-9 w-9 lg:w-11 lg:h-11" />
            </div>

            <h6 class="font-bold truncate mt-4">{{fake()->name()}}</h6>

        </div>



    </header>


    {{------- body -------}}



    {{------- footer -------}}

</div>