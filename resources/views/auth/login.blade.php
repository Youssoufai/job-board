<x-welcome>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 shadow-md rounded-lg w-96">
            <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                    <input type="email" name="email" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 @error('email') border-red-500 @enderror" placeholder="Enter email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold">Password:</label>
                    <input type="password" name="password" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 @error('password') border-red-500 @enderror" placeholder="Enter password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Login</button>
            </form>

            <p class="text-gray-600 text-sm mt-4 text-center">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-600 font-semibold">Sign up</a>
            </p>
        </div>
    </div>
</x-welcome>