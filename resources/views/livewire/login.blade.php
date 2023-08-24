<div class="py-2 w-60">
    <h2 class="text-2xl text-blue-600 font-bold mb-6 text-center">Login</h2>
    <form wire:submit.prevent="login()">
        <div class="mb-4">
            <label class="block text-gray-600 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="appearance-none border rounded-2xl w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg shadow-blue-400"
                id="email" type="email" placeholder="Enter your email" wire:model="email">
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-600 text-sm font-bold mb-2" for="password">
                Password
            </label>
            <input
                class="appearance-none border rounded-2xl w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline shadow-lg shadow-blue-400"
                id="password" type="password" placeholder="Enter your password" wire:model="password">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <button
            class="bg-blue-700 w-1/2 hover:bg-blue-400 hover:text-gray-200 text-white font-bold py-2 px-4 rounded-2xl focus:outline-none focus:shadow-outline transition duration-200 ml-14 mb-3"
            type="submit">
            Login
        </button>
        <div class="text-center text-sm  flex justify-center">
            <h4> Don't have an account?</h4> <span class="font-bold pl-2  hover:text-blue-400""><a href="/signup">
                    Signup
                </a></span>
        </div>
    </form>
</div>
