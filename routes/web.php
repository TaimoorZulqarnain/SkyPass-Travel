<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AirlineController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\FrontpageController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Agent\FrontpageController as AgentFrontpageController;
use App\Http\Controllers\Admin\AgentsController;
use App\Http\Controllers\Admin\TicketsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\DepartureController;
use App\Http\Controllers\Agent\TicketsController as AgentTicktetsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/customer/{customer}', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';


Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/agent-dashboard', function () {
    return view('agent/dashboard');
})->middleware(['auth', 'verified'])->name('agent-dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/notification', [HomeController::class, 'notification']);
Route::get('/notification_agent', [HomeController::class, 'notification_agent']);


Route::controller(AirlineController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/create_airline','create')->name('airline.create');
    Route::post('create_airline','store')->name('airline.store');
    Route::get('/airline','index')->name('airline.index');
    Route::get('/airline/{id}','edit')->name('airline.edit');
    Route::post('/airline/{id}','update')->name('airline.edit');
    Route::get('/airline_delete/{id}','destroy')->name('airline.delete');

});
Route::controller(TicketsController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/create_ticket','create')->name('ticket.create');
    Route::post('create_ticket','store')->name('ticket.store');
    Route::get('/ticket','index')->name('ticket.index');
    Route::get('ticket-data','ticket_list')->name('ticket-data');
    Route::get('ticket_sector/{id}','ticket_sector')->name('ticket.sector');
    Route::get('/ticket/{id}','edit')->name('ticket.edit');
    Route::post('/ticket/{id}','update')->name('ticket.edit');
    Route::get('ticket_delete/{id}','destroy')->name('ticket.delete');
});

Route::controller(DepartureController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/create_departure','create')->name('departure.create');
    Route::post('create_departure','store')->name('departure.store');
    Route::get('/departure','index')->name('departure.index');
    Route::get('/departure/{id}','edit')->name('departure.edit');
    Route::post('/departure/{id}','update')->name('departure.edit');
    Route::get('/departure_delete/{id}','destroy')->name('departure.delete');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('agents', AgentsController::class);
        Route::get('agents-data', [AgentsController::class, 'agents_list'])->name('agents-data');

        Route::resource('settings', SettingsController::class);
        Route::resource('frontpage', FrontpageController::class);
    });
    
    Route::prefix('agents')->group(function () {
        Route::resource('tickets', AgentTicktetsController::class);
        Route::get('book-tickets', [AgentTicktetsController::class, 'index'])->name('book-tickets');
        Route::post('book-tickets/booking-details', [AgentTicktetsController::class, 'booking_details'])->name('book-tickets/booking-details');
        Route::post('submit-ticket-booking', [AgentTicktetsController::class, 'submit_ticket_booking'])->name('submit-ticket-booking');
        Route::resource('frontpage', AgentFrontpageController::class);
        Route::get('book-tickets-2', [AgentTicktetsController::class, 'ticket_2'])->name('book-tickets-2');
        Route::get('all-on-hold-bookings', [AgentTicktetsController::class, 'all_on_hold_bookings'])->name('all-on-hold-bookings');
        Route::get('view-booking/{booking}', [AgentTicktetsController::class, 'view_booking'])->name('view-booking');
    });
});

Route::controller(UsersController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/create_user','create')->name('user.create');
    Route::post('create_user','store')->name('user.store');
    Route::get('/user','index')->name('user.index');
    Route::get('user-data','user_list')->name('user-data');
    Route::get('/user/{id}','edit')->name('user.edit');
    Route::post('/user/{id}','update')->name('user.edit');
    Route::get('user_delete/{id}','destroy')->name('user.delete');
});


// Route::group(['middleware' => ['auth', 'permission.check']] , function() {
    Route::get('create_per',[PermissionController::class,'create'])->name('permissions.create');
    Route::post('create_per', [PermissionController::class,'store'])->name('permissions.store');
    Route::get('/permissions', [PermissionController::class,'index'])->name('permissions.index');
    Route::get('/per_edit/{id}', [PermissionController::class,'edit'])->name('permissions.edit');
    Route::post('/per_edit/{id}', [PermissionController::class,'update'])->name('permissions.update');
    Route::get('/per_show/{id}', [PermissionController::class,'show'])->name('permissions.show');
    Route::get('/per_delete/{id}', [PermissionController::class,'destroy'])->name('permissions.destroy');

    // Route::get('create_user', [UserController::class,'create'])->name('users.create');
    // Route::post('create_user', [UserController::class,'store'])->name('users.store');
    // Route::get('/users', [UserController::class,'index'])->name('users.index');
    // Route::get('/user_edit/{id}', [UserController::class,'edit'])->name('users.edit');
    // Route::post('/user_edit/{id}', [UserController::class,'update'])->name('users.update');
    // Route::get('/user_show/{id}', [UserController::class,'show'])->name('users.show');
    // Route::get('/user_delete/{id}', [UserController::class,'destroy'])->name('users.destroy');
    // Route::get('/user_profile/{id}', [UserController::class,'profile'])->name('users.user_profile');

    Route::get('create_role', [RoleController::class,'create'])->name('roles.create');
    Route::post('create_role', [RoleController::class,'store'])->name('roles.store');
    Route::get('/role', [RoleController::class,'index'])->name('roles.index');
    Route::get('/role_edit/{id}', [RoleController::class,'edit'])->name('roles.edit');
    Route::post('/role_edit/{id}', [RoleController::class,'update'])->name('roles.update');
    Route::post('/role_show/{id}', [RoleController::class,'show'])->name('roles.show');
    Route::get('/role_delete/{id}', [RoleController::class,'destroy'])->name('roles.destroy');
// });

Route::controller(FrontpageController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/header','header')->name('front.header');
    Route::get('/banner','banner')->name('front.banner');
    Route::get('/about','about')->name('front.about');
});

Route::controller(HomepageController::class)->middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/header','home_header')->name('home.header');
    Route::post('/header','post_home_header')->name('home.header.post');
    Route::get('/banner','home_banner')->name('home.banner');
    Route::get('/about','home_about')->name('home.about');
    Route::get('/feature','home_feature')->name('home.feature');
    Route::get('/partners','home_partners')->name('home.partners');
    Route::get('/footer','home_footer')->name('home.footer');
});




