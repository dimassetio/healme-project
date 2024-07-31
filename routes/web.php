<?php

use App\Http\Controllers\Application\HomeController;
use App\Http\Controllers\Application\KomunitasController;
use App\Http\Controllers\Application\PsikologController;
use App\Http\Controllers\Application\TesGratisController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app.feature.home.homePage');
});

// Authentication
Route::get('/login', [AuthController::class, 'loginView'])->name('auth.login');
Route::post('/login', [AuthController::class, 'loginAction'])->name(
    'auth.login-action'
);
Route::get('/register', [AuthController::class, 'registerView'])->name(
    'auth.register'
);
Route::post('/register', [AuthController::class, 'store'])->name(
    'auth.register-action'
);

// Application
// FITUR HOMEPAGE <-
Route::get('/home', [HomeController::class, 'homeView'])->name('app.home');

// FITUR TES GRATIS: display <-
Route::get('/tes-stress', [
    TesGratisController::class,
    'stressTestHomeView',
])->name('app.tes-stress');

Route::get('/tes-depresi', [
    TesGratisController::class,
    'depressionTestHomeView',
])->name('app.tes-depression');

Route::get('/tes-trauma', [
    TesGratisController::class,
    'traumaTestHomeView',
])->name('app.tes-trauma');

Route::get('/tes-mood', [
    TesGratisController::class,
    'moodTestHomeView',
])->name('app.tes-mood');

Route::get('/tes-anxiety', [
    TesGratisController::class,
    'anxietyTestHomeView',
])->name('app.tes-anxiety');

Route::get('/tes-gratis', [
    TesGratisController::class,
    'freeTestHomeView',
])->name('app.tes-free');

//  fitur run tes gratis <-
Route::middleware('auth')->group(function () {
    Route::get('/start-test/{tesType}', [
        TesGratisController::class,
        'runTestView',
    ])->name('app.run-test');

    Route::post('/count/{tesType}', [
        TesGratisController::class,
        'countScoreStressTest',
    ])->name('app.count-test-stress');

    Route::get('/result-test', [
        TesGratisController::class,
        'resultDebug',
    ])->name('app.result-test');

    Route::get('/request-consultation/{psikolog}', [
        PsikologController::class,
        'psikologMakeRequestView',
    ])->name('psikolog.make-request');

    Route::get('/psikolog-whatsapp/{psikologId}/chat', [
        PsikologController::class,
        'psikologWhatsapp',
    ])->name('app.psikolog-whatsapp');

    Route::post('/store-request-consultation', [
        PsikologController::class,
        'storeRequestConsultation',
    ])->name('psikolog.store-request-consultation');

    Route::delete('/logout', [AuthController::class, 'logoutAction'])->name(
        'auth.logout'
    );
});

// fitur komunitas <-
Route::get('/komunitas', [
    KomunitasController::class,
    'komunitasHomeView',
])->name('app.komunitas');
Route::get('/komunitas-options', [
    KomunitasController::class,
    'komunitasOptions',
])->name('app.komunitas-options');

// fitur psikolog <-

Route::middleware('psikolog.auth')->group(function () {
    Route::get('/dashboard-psikolog', [
        PsikologController::class,
        'psikologDashboardView',
    ])->name('app.psikolog-dashboard');

    Route::delete('/psikolog-logout', [
        PsikologController::class,
        'logoutPsikolog',
    ])->name('app.psikolog-logout');
});

Route::get('/psikolog', [PsikologController::class, 'psikologHomeView'])->name(
    'app.psikolog'
);

Route::get('/psikolog-profile/{psikolog}/show', [
    PsikologController::class,
    'psikologProfile',
])->name('app.psikolog-profile');

Route::get('/join-psikolog', [
    PsikologController::class,
    'psikologJumbotronView',
])->name('app.psikolog-join');

Route::get('/register-psikolog', [
    PsikologController::class,
    'psikologRegisterView',
])->name('app.psikolog-register');

Route::get('/login-psikolog', [
    PsikologController::class,
    'psikologLoginView',
])->name('app.psikolog-login');

Route::post('/store-psikolog', [
    PsikologController::class,
    'registerPsikolog',
])->name('app.store-psikolog');

Route::post('/login-psikolog', [
    PsikologController::class,
    'loginPsikolog',
])->name('app.checkLogin-psikolog');
