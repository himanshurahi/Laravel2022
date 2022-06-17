<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$posts = [
    1 => [
        "id" => 1,
        "title" => "Post 1",
        "body" => "This is post 1",
        "is_new" => true,
        'has_comments' => true,
    ],
    2 => [
        "id" => 2,
        "title" => "Post 2",
        "body" => "This is post 2",
        "is_new" => false,
    ],
    3 => [
        "id" => 3,
        "title" => "Post 3",
        "body" => "This is post 3",
        "is_new" => true,
    ]
];
Route::get('/', function () {
    return view("home.index", ["name" => "himanshurahi"]);
})->name('home.index');

Route::get('/posts', function() use($posts) {
    // dd(request()->all());
    dd(request()->query('page',1));
    return view('posts.index', compact('posts'));
});

Route::get("/posts/{id}", function ($id) {
    $posts = [
        1 => [
            "id" => 1,
            "title" => "Post 1",
            "body" => "This is post 1",
            "is_new" => true,
            'has_comments' => true,
        ],
        2 => [
            "id" => 2,
            "title" => "Post 2",
            "body" => "This is post 2",
            "is_new" => false,
        ],
        3 => [
            "id" => 3,
            "title" => "Post 3",
            "body" => "This is post 3",
            "is_new" => true,
        ]
    ];
    abort_if($id > count($posts), 404);
    return view('posts.show', ["post" => $posts[$id]]);
})->name('posts.index');

// Route::get("contact", function () {
//     return view('contact.index');
// })->name('contact.index');

Route::view("contact", "contact.index")->name('contact.index');

Route::get("/recent-posts/{days_ago?}", function ($days_ago = 10) {
    return "Days Ago: ".$days_ago;
})->name('recent.index');


Route::prefix('fun')->name('fun.')->group(function() use ($posts){
    Route::get("responses", function () {
        return response("himanshurahu", 200)
        ->header('Content-Type', 'application/json')
        ->cookie('name', 'himanshurahu', 3600);
    });
    Route::get("redirect", function(){
        return redirect()->route('home.index');
    });
    
    Route::get("/json", function() use ($posts){
        return response()->json($posts);
    });
    
    Route::get("/download", function(){
        return response()->download(public_path('index.php'));
    });
});
