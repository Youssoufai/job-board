<x-welcome>
    <div class="flex justify-center items-center min-h-screen">
        <div class=" p-8 w-2/3">
            <h2 class="text-2xl font-bold mb-4 text-center">Create an Account</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Name -->
             <div class="flex w-full justify-between">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Name:</label>
                    <input type="text" name="name" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 @error('name') border-red-500 @enderror" placeholder="Enter name">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email:</label>
                    <input type="email" name="email" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 @error('email') border-red-500 @enderror" placeholder="Enter email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
             </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold">Password:</label>
                    <input type="password" name="password" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300 @error('password') border-red-500 @enderror" placeholder="Enter password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="w-full p-3 border rounded-lg focus:ring focus:ring-blue-300" placeholder="Confirm password">
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition">Register</button>
            </form>

            <p class="text-gray-600 text-sm mt-4 text-center">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-600 font-semibold">Login</a>
            </p>
        </div>
    </div>
</x-welcome>
