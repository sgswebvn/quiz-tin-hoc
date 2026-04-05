@extends('layouts.admin')
@section('title', 'Ngân Hàng Câu Hỏi')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
        <h3 class="text-lg font-semibold text-gray-800">Danh Sách Câu Hỏi</h3>
        <a href="{{ route('admin.questions.create') }}" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-xl transition-colors shadow-md shadow-blue-600/20">
            <i class="fas fa-plus mr-1"></i> Thêm mới
        </a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50/50 border-b border-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">ID</th>
                    <th scope="col" class="px-6 py-4 font-medium w-1/2">Nội dung câu hỏi</th>
                    <th scope="col" class="px-6 py-4 font-medium text-center">Số đáp án</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Thao tác</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-b border-gray-100">
                @forelse($questions as $question)
                <tr class="hover:bg-gray-50/50 transition-colors group">
                    <td class="px-6 py-4 font-semibold text-gray-600 uppercase">#{{ $question->id }}</td>
                    <td class="px-6 py-4 text-gray-800 font-medium">
                        <p class="truncate max-w-xl">{{ $question->question_text }}</p>
                    </td>
                    <td class="px-6 py-4 text-center text-xs font-semibold">
                        <span class="px-2.5 py-1 bg-gray-100 rounded-lg text-gray-600">{{ $question->answers->count() }}</span>
                    </td>
                    <td class="px-6 py-4 text-right flex items-center justify-end gap-2">
                        <a href="{{ route('admin.questions.edit', $question) }}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.questions.destroy', $question) }}" method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xoá câu hỏi này?');" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-gray-500">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-50 mb-4 border border-gray-100 shadow-sm">
                            <i class="fas fa-inbox text-2xl text-gray-400"></i>
                        </div>
                        <p class="font-medium text-gray-600">Chưa có câu hỏi nào trong ngân hàng</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <div class="p-6">
        {{ $questions->links() }}
    </div>
</div>
@endsection
