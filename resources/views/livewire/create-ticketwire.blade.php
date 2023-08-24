<div class="w-full ">
    @if (session()->has('success'))
        <div class="px-10">
            <div class="bg-green-500 rounded-xl py-5 text-white text-lg text-center mb-4">
                {{ session('success') }} <span class="font-bold"><a href="/tickets">View Ticket</a></span>
            </div>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="bg-red-500  rounded-xl py-5 text-white text-lg text-center mb-4">
            {{ session('error') }}
        </div>
        <div class="px-10"></div>
    @endif
    <form wire:submit.prevent="submitTicket">
        <div class="px-10">
            <div class="mb-8"> <label for="selectField" class="block text-sm font-bold uppercase text-gray-700">Issue
                    Category</label>
                <select id="selectField" name="selectField"
                    class="mt-2 block w-full py-1 px-2 border border-gray-300 bg-white
                    h-12 rounded-2xl font-semi shadow-lg shadow-blue-300 focus:outline-none focus:ring-blue-900 focus:border-blue-900 sm:text-sm "
                    wire:model="category_id">
                    <option value="">--Select Category--</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select> @error('category_id')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <label for="email" class="block text-sm font-bold uppercase text-gray-700 mb-2">Email</label>
            <input type="email" name="email" id="email" placeholder="{{ auth()->user()->email }}" disabled
                class="block w-full py-2 px-3 border border-gray-300 bg-slate-100 h-12 rounded-2xl shadow-lg shadow-blue-300 mb-5">
        </div>
        <div class="h-underline w-full bg-white mb-5"></div>
        <div class="px-10">
            <label for="subject" class="block text-sm font-bold uppercase text-gray-700 mb-2">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Enter Subject of your Issue "
                class="block w-full py-2 px-3 border border-gray-300 bg-white h-12 rounded-2xl shadow-lg shadow-blue-300 focus:outline-none focus:ring-blue-900 focus:border-blue-900 sm:text-sm  "
                wire:model.debounce.350ms="subject">
            @error('subject')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            <label for="description"
                class="block text-sm font-bold uppercase text-gray-700 mb-2 mt-8">Description</label>

            <textarea wire:model.debounce.350ms="description"
                class="w-full px-4 py-2 border border-gray-300 resize-none rounded-2xl shadow-lg shadow-blue-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 h-32 "
                placeholder="Explain your Issue here..."></textarea>
            @error('description')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror


            <div class="flex items-center justify-between">
                <input type="file" id="file" wire:model="file" class="mt-2 flex "
                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" @disabled(true)>
                @error('file')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
                <button type="submit" class="bg-blue-900 text-white px-1 md:px-4 py-2 rounded-2xl mt-4">Submit</button>
            </div>
        </div>
    </form>
</div>
