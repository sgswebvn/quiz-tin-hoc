<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-72 bg-[#0A0F1C] text-gray-300 flex flex-col flex-shrink-0 transition-all duration-300 border-r border-gray-800">
            <div class="h-20 flex items-center px-8 border-b border-gray-800/50">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center mr-3 shadow-lg shadow-blue-500/30">
                    <i class="fas fa-bolt text-white text-sm"></i>
                </div>
                <span class="text-xl font-bold tracking-wide text-white">Quiz<span class="text-blue-500">Master</span></span>
            </div>
            <nav class="flex-1 px-4 py-8 space-y-2 overflow-y-auto">
                <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">QUẢN TRỊ</p>
                
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-600/10 text-blue-500 ring-1 ring-blue-500/20' : 'hover:bg-white/5 hover:text-white' }} rounded-xl transition-all group">
                    <i class="fas fa-chart-pie w-5 text-center mr-3 {{ request()->routeIs('admin.dashboard') ? 'text-blue-500' : 'text-gray-500 group-hover:text-gray-300' }} transition-colors"></i>
                    <span class="font-medium">Tổng Quan</span>
                </a>
                
                <a href="{{ route('admin.questions.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.questions.*') ? 'bg-blue-600/10 text-blue-500 ring-1 ring-blue-500/20' : 'hover:bg-white/5 hover:text-white' }} rounded-xl transition-all group">
                    <i class="fas fa-layer-group w-5 text-center mr-3 {{ request()->routeIs('admin.questions.*') ? 'text-blue-500' : 'text-gray-500 group-hover:text-gray-300' }} transition-colors"></i>
                    <span class="font-medium">Ngân Hàng Câu Hỏi</span>
                </a>
                
                <a href="{{ route('admin.users.index') }}" class="flex items-center px-4 py-3 {{ request()->routeIs('admin.users.*') ? 'bg-emerald-600/10 text-emerald-500 ring-1 ring-emerald-500/20' : 'hover:bg-white/5 hover:text-white' }} rounded-xl transition-all group">
                    <i class="fas fa-users-cog w-5 text-center mr-3 {{ request()->routeIs('admin.users.*') ? 'text-emerald-500' : 'text-gray-500 group-hover:text-gray-300' }} transition-colors"></i>
                    <span class="font-medium">Người Dùng & Kết Quả</span>
                </a>

                <div class="pt-8">
                    <p class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider mb-4">HỆ THỐNG</p>
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-3 text-gray-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                        <i class="fas fa-external-link-square-alt w-5 text-center mr-3 text-gray-500 group-hover:text-gray-300"></i>
                        <span class="font-medium">Trở Về Web</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col overflow-hidden bg-[#F8FAFC]">
            <!-- Header -->
            <header class="h-20 bg-white/80 backdrop-blur-md border-b border-gray-100 flex items-center justify-between px-8 flex-shrink-0 z-10 sticky top-0">
                <div class="flex items-center">
                    <h2 class="text-2xl font-bold text-gray-800 tracking-tight">@yield('title', 'Dashboard')</h2>
                </div>
                <div class="flex items-center space-x-6">
                    <div class="flex items-center gap-3 pl-6 border-l border-gray-200">
                        <div class="text-right">
                            <p class="font-semibold text-gray-700 text-sm leading-tight">{{ auth()->user()->name }}</p>
                            <p class="text-xs text-blue-600 font-medium whitespace-nowrap">Administrator</p>
                        </div>
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-blue-100 to-blue-50 flex items-center justify-center text-blue-600 font-bold shadow-inner ring-1 ring-black/5">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="flex-1 overflow-y-auto p-8 relative">
                <div class="max-w-7xl mx-auto space-y-6">
                    @if(session('success'))
                        <div class="bg-emerald-50 text-emerald-700 border border-emerald-200 p-4 rounded-2xl flex items-center shadow-sm animate-[slideIn_0.3s_ease-out]">
                            <div class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mr-3 shrink-0">
                                <i class="fas fa-check"></i>
                            </div>
                            <span class="font-medium">{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    
    <!-- Basic slideIn animation -->
    <style>
        @keyframes slideIn {
            from { transform: translateY(-10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</body>
</html>
