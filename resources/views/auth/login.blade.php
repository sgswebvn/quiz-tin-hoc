<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-blue-50 flex flex-col justify-center items-center px-4 py-12">
        <!-- Card đăng nhập -->
        <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-indigo-600 px-8 py-10 text-center">
                <h2 class="text-3xl font-bold text-white">Đăng nhập</h2>
                <p class="mt-3 text-indigo-100 text-lg">Truy cập hệ thống quiz Tin học ngay</p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Mật khẩu</label>
                        <input id="password" name="password" type="password" required autocomplete="current-password"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember me & Forgot password -->
                    <div class="flex items-center justify-between mb-8">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Ghi nhớ đăng nhập</label>
                        </div>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-500 hover:underline">
                                Quên mật khẩu?
                            </a>
                        @endif
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition shadow-md">
                        Đăng nhập ngay
                    </button>
                </form>

                <!-- Link đăng ký -->
                <p class="mt-6 text-center text-gray-600">
                    Chưa có tài khoản? 
                    <a href="{{ route('register') }}" class="text-indigo-600 font-medium hover:text-indigo-500 hover:underline">
                        Đăng ký miễn phí
                    </a>
                </p>
            </div>
        </div>

        <!-- Footer nhỏ -->
        <p class="mt-8 text-sm text-gray-500">© {{ date('Y') }} Quiz Tin Học</p>
    </div>
</x-guest-layout>