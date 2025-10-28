<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Models\Blog;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);


Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('blog', compact('blogs'));
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string'
    ]);
    
    return back()->with('success', 'Pesan berhasil dikirim!');
});

Route::get('/send-get', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'method' => 'GET',
        'data' => $request->all(),
        'message' => 'Data berhasil diterima via GET method'
    ]);
});

Route::post('/send-post', function (\Illuminate\Http\Request $request) {
    return response()->json([
        'method' => 'POST',
        'data' => $request->all(),
        'message' => 'Data berhasil diterima via POST method'
    ]);
});
?>

