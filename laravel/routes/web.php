<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Редирект с главной на список клубов
Route::get('/', function () {
    return redirect()->route('clubs.index');
});

// Ресурсные маршруты для клубов
// Создаёт все CRUD маршруты автоматически:
// GET     /clubs          -> index   (список)
// GET     /clubs/create   -> create  (форма создания)
// POST    /clubs          -> store   (сохранение)
// GET     /clubs/{club}   -> show    (детальная страница)
// GET     /clubs/{club}/edit -> edit (форма редактирования)
// PUT     /clubs/{club}   -> update  (обновление)
// DELETE  /clubs/{club}   -> destroy (удаление)
Route::resource('clubs', ClubController::class);