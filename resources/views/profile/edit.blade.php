<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hồ sơ cá nhân
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <!-- Thông tin cá nhân -->
            <div class="bg-white shadow sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold mb-4">Thông tin cá nhân</h3>
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            <!-- Đổi mật khẩu -->
            <div class="bg-white shadow sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold mb-4">Đổi mật khẩu</h3>
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            <!-- Lịch sử làm bài quiz -->
            <div class="bg-white shadow sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold mb-4">Lịch sử làm bài</h3>
                    <p class="text-gray-600 mb-6">Bạn đã hoàn thành {{ $results->count() }} lần quiz Tin học.</p>

                    @if ($results->isEmpty())
                        <div class="text-center py-10 bg-gray-50 rounded-lg">
                            <p class="text-gray-500">Bạn chưa làm bài quiz nào.</p>
                            <a href="{{ route('quiz.index') }}" 
                               class="mt-4 inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                                Bắt đầu làm bài ngay
                            </a>
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ngày giờ</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Điểm số</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số câu đúng</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thời gian</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($results as $result)
                                        <tr class="hover:bg-gray-50 transition">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                {{ $result->created_at->format('d/m/Y H:i') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-green-600">
                                                {{ $result->score }} / {{ $result->total }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                                {{ $result->score }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                                {{ floor($result->time_taken / 60) }} phút {{ $result->time_taken % 60 }} giây
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Xóa tài khoản -->
            <div class="bg-white shadow sm:rounded-lg">
                <div class="p-6 sm:p-8">
                    <h3 class="text-xl font-bold mb-4 text-red-600">Xóa tài khoản</h3>
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>