@extends('layouts.admin')
@section('title', 'Quản Lý Người Dùng')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b border-gray-100">
        <h3 class="text-lg font-semibold text-gray-800">Danh Sách Học Viên</h3>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 border-b border-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Tài khoản</th>
                    <th scope="col" class="px-6 py-4 font-medium">Email</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center">Số bài đã làm</th>
                    <th scope="col" class="px-6 py-4 font-medium">Ngày đăng ký</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Lịch sử test</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-b border-gray-100">
                @forelse($users as $user)
                <tr class="hover:bg-gray-50/50 transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">{{ substr($user->name, 0, 1) }}</div>
                            <span class="font-semibold text-gray-800">{{ $user->name }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-gray-600 font-medium">{{ $user->email }}</td>
                    <td class="px-6 py-4 text-center">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full font-semibold text-xs">{{ $user->results_count }}</span>
                    </td>
                    <td class="px-6 py-4">{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('admin.users.results', $user) }}" class="inline-flex items-center gap-2 px-3 py-1.5 bg-white border border-gray-200 hover:border-blue-300 text-blue-600 hover:bg-blue-50 text-xs font-semibold rounded-lg transition-colors">
                            <i class="fas fa-eye"></i> Xem lịch sử
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                        <i class="fas fa-box-open text-3xl mb-3 opacity-50"></i>
                        <p>Chưa có học viên nào.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6">
        {{ $users->links() }}
    </div>
</div>
@endsection
