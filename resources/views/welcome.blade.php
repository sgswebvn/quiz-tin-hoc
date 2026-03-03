<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-100 to-blue-100 relative flex flex-col justify-center items-center px-4 overflow-hidden">
        <!-- Hình nền full màn hình -->
        <div class="absolute inset-0 z-0">
            <img src="https://cdn-media.sforum.vn/storage/app/media/giakhanh/h%C3%ACnh%20n%E1%BB%81n%20powerpoint%20ch%E1%BB%A7%20%C4%91%E1%BB%81%20gi%C3%A1o%20d%E1%BB%A5c/hinh-nen-powerpoint-chu-de-giao-duc-thumb.jpg" 
                 alt="Hình nền Tin học giáo dục" 
                 class="w-full h-full object-cover opacity-30">
            <!-- Lớp overlay để chữ nổi bật hơn -->
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/30 to-white/70"></div>
        </div>

        <!-- Nội dung chính (nổi lên trên nền) -->
        <div class="relative z-10 text-center max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-extrabold text-indigo-900 mb-6 drop-shadow-lg">
                Quiz Tin Học
            </h1>
            <p class="text-xl md:text-2xl text-gray-800 mb-10 drop-shadow-md">
                Kiểm tra kiến thức Tin học với 50 câu hỏi random từ 70 câu, trong 45 phút!
            </p>

            @auth
                <a href="{{ route('quiz.index') }}" 
                   class="inline-block bg-indigo-600 text-white px-10 py-5 rounded-2xl text-xl font-bold hover:bg-indigo-700 shadow-2xl transition transform hover:scale-105">
                    Bắt đầu làm bài ngay!
                </a>
                <p class="mt-6 text-xl text-indigo-800 font-medium drop-shadow">
                    Chào mừng quay lại, {{ Auth::user()->name }}!
                </p>
            @else
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('login') }}" 
                       class="inline-block bg-indigo-600 text-white px-10 py-5 rounded-2xl text-xl font-bold hover:bg-indigo-700 shadow-2xl transition transform hover:scale-105">
                        Đăng nhập
                    </a>
                    <a href="{{ route('register') }}" 
                       class="inline-block bg-blue-600 text-white px-10 py-5 rounded-2xl text-xl font-bold hover:bg-blue-700 shadow-2xl transition transform hover:scale-105">
                        Đăng ký miễn phí
                    </a>
                </div>
            @endauth

            <!-- Thêm icon hoặc hiệu ứng nhỏ để bắt mắt -->
            <div class="mt-12 flex justify-center gap-8 text-4xl opacity-80">
                <span>💻</span>
                <span>📚</span>
                <span>🖱️</span>
                <span>🌐</span>
            </div>
        </div>
    </div>
</x-app-layout>