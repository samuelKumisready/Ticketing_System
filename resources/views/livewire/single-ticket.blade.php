<div>
    <section class="bg-gradient-to-r from-red-200 to-blue-300">
        <div class="container mx-auto justify-center md:px-20">
            @if ($ticket)
                <div class="py-10 md:px-40">
                    <div class="bg-white rounded-2xl shadow-xl py-10 px-10 justify-center items-center h-min">
                        <div class="flex justify-between text-center mb-10 mx-auto ">
                            <div class="bg-red-100 py-5 px-5 rounded-lg md:w-36 shadow-md">
                                <h2 class="hidden md:block font-bold">TICKET ID</h2>
                                <h5 class="font-semibold"># {{ $ticket->id }}</h5>
                            </div>
                            <div class="bg-blue-100 py-5 px-5 rounded-lg md:w-36 shadow-md">
                                <h2 class="hidden md:block font-bold">STATUS</h2>
                                <h5 class="font-semibold">{{ $ticket->status }}</h5>
                            </div>
                            <div class="bg-gray-100 py-5 px-5 rounded-lg md:w-36 shadow-md">
                                <h2 class="hidden md:block font-bold">DATE</h2>
                                <h5 class="font-semibold">{{ $ticket->created_at->format('F d, Y') }}</h5>
                            </div>
                            <div class="bg-yellow-100 py-5 px-5 rounded-lg md:w-36 shadow-md">
                                <h2 class="hidden md:block font-bold">CATEGORY</h2>
                                <h5 class="font-semibold">{{ $ticket->category->name }}</h5>
                            </div>
                            <div>

                            </div>
                        </div>
                        <div class="flex space-x-2 items-end mb-10">
                            <div
                                class="h-20 w-20 bg-blue-500 rounded-full mx-auto items-center justify-center shadow-md shrink-0">
                                <h1 class="text-center justify-center text-5xl font-bold py-4 text-white ">
                                    {{ Str::substr(auth()->user()->name, 0, 1) }}</h1>
                            </div>
                            <div class="bg-gray-100 py-4 px-6 rounded-ss-3xl w-full">
                                <h1 class="mb-2 font-bold">{{ $ticket->title }}</h1>
                                <p>{{ $ticket->description }}</p>
                            </div>
                        </div>
                        <div class="flex items-center mb-5">
                            <div class="bg-blue-200 py-3 px-6 rounded-xl shadow-md">
                                <h1 class="font-bold  text-blue-950">Replies</h1>
                            </div>
                            <div class="h-underline bg-gray-100 w-full px-5"></div>
                        </div>
                        <div class="mb-14">
                            @foreach ($comments as $comment)
                                <div class="flex space-x-2 items-end mb-5">
                                    <div
                                        class="h-10 w-10 bg-blue-500 rounded-full mx-auto items-center justify-center shadow-md shrink-0">
                                        <h1 class="text-center justify-center text-3xl font-bold  text-white ">
                                            {{ Str::substr($comment->user->name, 0, 1) }}</h1>
                                    </div>
                                    <div class="bg-gray-100 py-4 px-6 w-full rounded-ss-3xl ">
                                        <p>{{ $comment->comment_text }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-5 relative bg-white rounded-3xl"><input type="text" name=""
                                id=""
                                class="px-5 w-full  py-4 border bg-white rounded-3xl  shadow-lg  focus:outline-none focus:ring-blue-500"
                                placeholder="Add a comment..." wire:model="newComment">
                            <button
                                class="absolute top-2 right-4 bg-blue-500 rounded-2xl py-2 px-6 font-bold text-white"
                                wire:click="createComment()">send</button>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>


</div>
