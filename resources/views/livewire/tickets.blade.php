<div>
    @forelse ($tickets as $ticket)
        <div class="relative p-4 bg-white rounded-lg mb-2 hover:shadow-md ease-in hover:shadow-blue-300 cursor-pointer border-gray-300  hover:border-blue-400 border-solid border-2 transform duration-200 "
            wire:click="viewTicket({{ $ticket->id }})">
            <h1 class="flex  font-bold mb-2 capitalize ">{{ $ticket->title }}</h1>
            <p class="hidden md:block font-semibold mb-4  text-slate-500  ">
                {{ Str::limit($ticket->description, 70) }}</p>
            <p class="md:hidden font-semibold mb-4  text-slate-500  ">
                {{ Str::limit($ticket->description, 50) }}</p>
            <div class="bg-gray-100 h-underline mb-2"></div>
            <div class="flex space-x-3 text-sm font-bold text-gray-500 items-center">

                <h4 class="bg-gray-100 py-1 px-2 rounded-xl"> {{ $ticket->created_at->format('F d, Y') }}</h4>

                <h4 class="bg-white border-2 border-gray-200 py-1 px-2 rounded-xl">{{ $ticket->category->name }}</h4>
                <div class="items-center flex">
                    <h4 class="bg-blue-200 py-1 px-2 rounded-xl "> {{ $ticket->status }}</h4>
                </div>
                <h4><i class="fa-regular fa-comment"></i> {{ $ticket->comments_count }}</h4>
            </div>
            <div class="absolute top-8 right-5 flex font-bold  h-16 w-16  px-3 items-center text-center rounded-full ">
                <i
                    class="fa-solid fa-circle-arrow-right text-3xl  rouned-full hover:text-blue-300 transform duration-300"></i>
            </div>
        </div>
    @empty
        <div
            class=" relative p-4 bg-white rounded-lg mb-3 shadow-sm shadow-blue-300 hover:text-blue-500 font-bold items-center capitalize cursor-pointer">
            you dont have any ticket yet !
        </div>
    @endforelse
</div>
