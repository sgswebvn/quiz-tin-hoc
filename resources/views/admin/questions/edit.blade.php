@extends('layouts.admin')
@section('title', 'Chỉnh Sửa Câu Hỏi')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 max-w-3xl">
    <div class="p-6 border-b border-gray-100">
        <h3 class="text-lg font-semibold text-gray-800">Nội dung câu hỏi #{{ $question->id }}</h3>
    </div>
    <form action="{{ route('admin.questions.update', $question) }}" method="POST" class="p-6">
        @csrf
        @method('PUT')
        
        <div class="mb-8">
            <textarea name="question_text" rows="3" placeholder="Nhập nội dung câu hỏi..." class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-4 text-gray-700 bg-gray-50 focus:bg-white" required>{{ old('question_text', $question->question_text) }}</textarea>
            @error('question_text')<p class="text-sm text-red-600 mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>@enderror
        </div>

        <div class="mb-6 space-y-4">
            <h4 class="text-sm font-semibold text-gray-700 uppercase tracking-wider mb-2">Các đáp án lựa chọn</h4>
            @foreach($question->answers as $index => $answer)
            <div class="flex items-center gap-4 bg-white p-4 rounded-xl border border-gray-200 hover:border-blue-300 transition-colors shadow-sm focus-within:ring-2 focus-within:ring-blue-500/20 focus-within:border-blue-500">
                <div class="flex items-center h-5 w-5 justify-center">
                    <input id="answer_{{$index}}" name="correct_answer" type="radio" value="{{$index}}" {{ (old('correct_answer') == (string)$index) || $answer->is_correct ? 'checked' : '' }} class="w-5 h-5 text-emerald-500 focus:ring-emerald-500 border-gray-300 cursor-pointer">
                </div>
                <div class="flex-1 flex gap-3 items-center">
                    <span class="text-sm font-bold text-gray-400 bg-gray-100 w-8 h-8 flex items-center justify-center rounded-lg">{{ chr(65 + $index) }}</span>
                    <input type="text" name="answers[{{$index}}][text]" placeholder="Nhập nội dung đáp án..." value="{{ old('answers.'.$index.'.text', $answer->answer_text) }}" class="w-full border-0 focus:ring-0 p-0 text-gray-700" required>
                </div>
            </div>
            @endforeach
            @error('correct_answer')<p class="text-sm text-red-600 mt-2"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>@enderror
        </div>

        <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-100">
            <a href="{{ route('admin.questions.index') }}" class="px-6 py-2.5 text-sm font-medium text-gray-700 bg-gray-50 border border-gray-200 rounded-xl hover:bg-gray-100 transition-colors">Hủy Bỏ</a>
            <button type="submit" class="px-6 py-2.5 text-sm font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition-colors shadow-md shadow-blue-600/20 flex items-center">
                <i class="fas fa-save mr-2"></i> Cập Nhật Lại
            </button>
        </div>
    </form>
</div>
@endsection
