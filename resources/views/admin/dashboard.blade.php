@extends('layouts.admin')

@section('title', 'Tổng Quan Bảng Điều Khiển')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <!-- Card 1 -->
    <div class="bg-white rounded-3xl shadow-[0_2px_10px_-4px_rgba(0,0,0,0.1)] border border-gray-100 p-6 flex flex-col justify-between group hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm tracking-wide">TỔNG NGƯỜI DÙNG</h3>
            <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class="fas fa-users text-xl"></i>
            </div>
        </div>
        <div>
            <div class="text-4xl font-extrabold text-gray-800 tracking-tight">{{ $totalUsers }}</div>
            <p class="text-xs text-gray-400 mt-2 font-medium">Lượt đăng ký trên hệ thống</p>
        </div>
    </div>
    
    <!-- Card 2 -->
    <div class="bg-white rounded-3xl shadow-[0_2px_10px_-4px_rgba(0,0,0,0.1)] border border-gray-100 p-6 flex flex-col justify-between group hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm tracking-wide">CÂU HỎI TRONG KHO</h3>
            <div class="w-12 h-12 bg-emerald-50 text-emerald-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class="fas fa-layer-group text-xl"></i>
            </div>
        </div>
        <div>
            <div class="text-4xl font-extrabold text-gray-800 tracking-tight">{{ $totalQuestions }}</div>
            <p class="text-xs text-emerald-500 mt-2 font-medium flex items-center"><i class="fas fa-arrow-up mr-1 text-[10px]"></i> Sẵn sàng cho các bài thi</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-3xl shadow-[0_2px_10px_-4px_rgba(0,0,0,0.1)] border border-gray-100 p-6 flex flex-col justify-between group hover:shadow-[0_8px_30px_-4px_rgba(0,0,0,0.1)] hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm tracking-wide">LƯỢT LÀM BÀI</h3>
            <div class="w-12 h-12 bg-indigo-50 text-indigo-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class="fas fa-history text-xl"></i>
            </div>
        </div>
        <div>
            <div class="text-4xl font-extrabold text-gray-800 tracking-tight">{{ $totalTestsTaken }}</div>
            <p class="text-xs text-gray-400 mt-2 font-medium">Tổng lịch sử tham gia</p>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-3xl shadow-[0_2px_10px_-4px_rgba(0,0,0,0.1)] bg-gradient-to-br from-white to-amber-50/30 border border-amber-100 p-6 flex flex-col justify-between group hover:shadow-[0_8px_30px_-4px_rgba(251,191,36,0.2)] hover:-translate-y-1 transition-all duration-300">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-600 font-medium text-sm tracking-wide">ĐIỂM TRUNG BÌNH</h3>
            <div class="w-12 h-12 bg-amber-100 text-amber-500 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-white transition-all duration-300 shadow-inner">
                <i class="fas fa-star text-xl"></i>
            </div>
        </div>
        <div>
            <div class="text-4xl font-extrabold text-gray-800 tracking-tight">{{ number_format($averageScore, 1) }} <span class="text-lg text-gray-400 font-medium">/ 50</span></div>
            <p class="text-xs text-amber-600 mt-2 font-medium">Điểm bài thi trung bình của toàn mạng</p>
        </div>
    </div>
</div>

<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <!-- Welcome section -->
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 flex flex-col justify-center relative overflow-hidden">
        <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-blue-50 rounded-full blur-3xl opacity-60"></div>
        <div class="relative z-10">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Chào mừng trở lại, {{ auth()->user()->name }}! 👋</h3>
            <p class="text-gray-500 leading-relaxed mb-6 max-w-md">Bảng điều khiển cung cấp cho bạn cái nhìn bao quát về tình hình học viên và ngân hàng câu hỏi hiện tại.</p>
            <div class="flex gap-4">
                <a href="{{ route('admin.questions.create') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-xl transition-colors shadow-md shadow-blue-600/20">
                    <i class="fas fa-plus mr-2"></i> Tạo câu hỏi mới
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
