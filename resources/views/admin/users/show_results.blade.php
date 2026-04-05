@extends('layouts.admin')
@section('title', 'Lịch Sử Làm Bài')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <a href="{{ route('admin.users.index') }}" class="w-10 h-10 rounded-xl bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:bg-gray-50 hover:text-blue-600 transition-colors shadow-sm">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div>
            <h2 class="text-xl font-bold text-gray-800">{{ $user->name }}</h2>
            <p class="text-sm text-gray-500">{{ $user->email }}</p>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 border-b border-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Bắt đầu lúc</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center">Điểm số</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center">Tỷ lệ</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Thời gian hoàn thành</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-b border-gray-100">
                @forelse($results as $result)
                @php
                    $percentage = $result->total > 0 ? round(($result->score / $result->total) * 100) : 0;
                    $colorClass = $percentage >= 80 ? 'text-emerald-500 bg-emerald-50' : ($percentage >= 50 ? 'text-amber-500 bg-amber-50' : 'text-red-500 bg-red-50');
                @endphp
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-800">{{ $result->created_at->format('d/m/Y H:i:s') }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="font-bold text-gray-700">{{ $result->score }}</span>
                        <span class="text-gray-400 text-xs">/ {{$result->total}}</span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-2.5 py-1 rounded-lg font-bold text-xs {{ $colorClass }}">{{ $percentage }}%</span>
                    </td>
                    <td class="px-6 py-4 text-right font-medium text-gray-600">
                        {{ floor($result->time_taken / 60) }} phút {{ $result->time_taken % 60 }} giây
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                        <i class="fas fa-medal text-3xl mb-3 opacity-30"></i>
                        <p>Học viên chưa thực hiện bài thi nào.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6">
        {{ $results->links() }}
    </div>
</div>
@endsection
