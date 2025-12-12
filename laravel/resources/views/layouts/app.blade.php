{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Лига Чемпионов') | Лучшие клубы Европы</title>
    <meta name="description" content="Топ футбольных клубов победителей Лиги Чемпионов УЕФА">
    
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/ru/thumb/0/0a/UEFA_Champions_League_logo.svg/1920px-UEFA_Champions_League_logo.svg.png">
    
    <!-- Compiled CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @stack('styles')
</head>
<body>
    <div class="page">
        
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('clubs.index') }}">
                    <img src="https://upload.wikimedia.org/wikipedia/ru/thumb/0/0a/UEFA_Champions_League_logo.svg/1920px-UEFA_Champions_League_logo.svg.png" 
                         alt="Champions League Logo" 
                         class="img-fluid">
                    <span class="brand-text">Победители Лиги Чемпионов</span>
                </a>
                
                <div class="d-flex gap-2">
                    <a href="{{ route('clubs.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Добавить
                    </a>
                </div>
            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <div class="container">
                
                <!-- Flash Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
                    </div>
                @endif

                <!-- Validation Errors -->
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle me-2"></i>Ошибки валидации:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Закрыть"></button>
                    </div>
                @endif

                @yield('content')
                
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="footer-content">
                    <p>Работу выполнил: Василевич Никита Алексеевич</p>
                    <div class="social">
                        <a href="https://t.me/AlshfjWnnaLhfve" target="_blank" rel="noopener noreferrer" aria-label="Telegram">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/1280px-Telegram_2019_Logo.svg.png" 
                                 alt="Telegram" 
                                 class="img-fluid">
                        </a>
                        <a href="https://ya.ru" target="_blank" rel="noopener noreferrer" aria-label="Яндекс">
                            <img src="https://avatars.mds.yandex.net/i?id=5725b347f97679106c5f8ed73a4c4d6f97219359-5498962-images-thumbs&n=13" 
                                 alt="Yandex" 
                                 class="img-fluid">
                        </a>
                        <a href="https://www.utmn.ru" target="_blank" rel="noopener noreferrer" aria-label="ТюмГУ">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/UTMN_logo_rus_wiki.png" 
                                 alt="UTMN Logo" 
                                 class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Compiled JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @stack('scripts')
</body>
</html>