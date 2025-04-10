<form method="POST" action="{{ route('storeUser') }}">
    @csrf
    <h1 class="font-bold text-center text-4xl mb-8">Register</h1>
    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>
    {{-- <!-- Tailwind CSS Example -->
    <div class="mb-4">
        <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
        <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('username')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div> --}}
    <!-- Email Address -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Password -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input id="password" type="password" name="password" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Confirm Password -->
    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
            Confirm Password
        </label>
        <input id="password_confirmation" type="password" name="password_confirmation" required
            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('password_confirmation')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit">Register</button>
    </div>
</form>
