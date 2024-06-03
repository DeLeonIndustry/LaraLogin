<div class="row justify-content-center mt-5">
    <div class="col-md-8">

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="text-xl font-semibold mb-4">Login</div>
            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" wire:model="email" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('email') border-red-500 @enderror">
                    @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" wire:model="password" class="mt-1 block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('password') border-red-500 @enderror">
                    @error('password')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                    @if (session()->has('error'))
                        <span class="text-sm text-red-500">{{ session('error') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none hover:bg-blue-600">
                        Login
                    </button>
                </div>
                <div class="mb-4">
                    <span wire:loading class="text-sm text-blue-500">Processing...</span>
                </div>
            </form>
        </div>
        
    </div>    
</div>