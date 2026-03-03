<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-blue-50 flex flex-col justify-center items-center px-4">
        <div class="bg-white rounded-2xl shadow-2xl p-10 max-w-lg w-full text-center">
            <h1 class="text-4xl font-bold text-indigo-800 mb-8">Kết quả làm bài</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <div>
                    <div class="text-6xl font-extrabold text-green-600">{{ $result->score }}</div>
                    <p class="text-xl text-gray-600 mt-2">Điểm số</p>
                </div>
                <div>
                    <div class="text-6xl font-extrabold text-indigo-600">{{ floor($result->time_taken / 60) }}:{{ str_pad($result->time_taken % 60, 2, '0', STR_PAD_LEFT) }}</div>
                    <p class="text-xl text-gray-600 mt-2">Thời gian</p>
                </div>
            </div>

            <div class="mb-10">
                <div class="w-full bg-gray-200 rounded-full h-4 mb-2">
                    <div class="bg-green-600 h-4 rounded-full transition-all" style="width: {{ ($result->score / 50) * 100 }}%"></div>
                </div>
                <p class="text-lg font-medium text-gray-700">Tỷ lệ đúng: {{ number_format(($result->score / 50) * 100, 1) }}%</p>
            </div>

            <a href="{{ route('quiz.index') }}" 
               class="inline-block bg-indigo-600 text-white px-10 py-4 rounded-xl text-xl font-bold hover:bg-indigo-700 shadow-lg transition transform hover:scale-105">
                Làm bài lại
            </a>
        </div>
    </div>
</x-app-layout>