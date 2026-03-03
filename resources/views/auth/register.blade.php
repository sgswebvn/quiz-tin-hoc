<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-blue-50 flex flex-col justify-center items-center px-4 py-12">
        <!-- Card đăng ký -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-indigo-600 px-8 py-10 text-center">
                <h2 class="text-3xl font-bold text-white">Đăng ký tài khoản</h2>
                <p class="mt-3 text-indigo-100 text-lg">Tham gia quiz Tin học ngay hôm nay</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Họ tên -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Họ và tên</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mật khẩu -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                        <input id="password" name="password" type="password" required autocomplete="new-password"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Xác nhận mật khẩu -->
                    <div class="mb-8">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Xác nhận mật khẩu</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition shadow-md">
                        Đăng ký ngay
                    </button>
                </form>

                <!-- Link đăng nhập -->
                <p class="mt-6 text-center text-gray-600">
                    Đã có tài khoản? 
                    <a href="{{ route('login') }}" class="text-indigo-600 font-medium hover:text-indigo-500 hover:underline">
                        Đăng nhập
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer nhỏ -->
        <p class="mt-8 text-sm text-gray-500">© {{ date('Y') }} Quiz Tin Học </p>
    </div>
</x-guest-layout>