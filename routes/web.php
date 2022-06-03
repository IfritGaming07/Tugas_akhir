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

Route::get('/', function () {
    return view('F', [
        "tittle" => ""
    ]);
});

Route::get('/L', function () {
    return view('L');
});
Route::get('/S', function () {
    return view('S');
});
Route::get('/home', function () {
    return view('home', [
        "tittle" => "HOME"
    ]);
});
Route::get('/shop', function () {
    $shop_post = [
        [
            "tittle" => "Kaos Distro",
            "slug" => "Distro t-shirt",
            "author" => "Eiger",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde vitae ab labore sunt ducimus architecto est consectetur ipsam doloremque id dolor nulla accusamus facilis laboriosam corrupti nam rem earum suscipit saepe possimus impedit, harum, obcaecati rerum necessitatibus! Dignissimos iure alias accusantium natus, similique voluptates illo harum laudantium, facilis fugiat, architecto sint officia tempore labore enim. Consequatur molestiae iusto expedita facere similique, cupiditate in officiis. Maxime harum sint dolore facilis praesentium, dolorum magni necessitatibus tenetur obcaecati laboriosam reiciendis atque veniam odio quis ad labore repellendus nisi. Consequuntur hic, reiciendis molestiae perferendis quia sequi magni, nobis alias quae necessitatibus ipsam, minus beatae."
        ],
        [
            "tittle" => "Sandal",
            "slug" => "Carvil sandals",
            "author" => "Carvil",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde vitae ab labore sunt ducimus architecto est consectetur ipsam doloremque id dolor nulla accusamus facilis laboriosam corrupti nam rem earum suscipit saepe possimus impedit, harum, obcaecati rerum necessitatibus! Dignissimos iure alias accusantium natus, similique voluptates illo harum laudantium, facilis fugiat, architecto sint officia tempore labore enim. Consequatur molestiae iusto expedita facere similique, cupiditate in officiis. Maxime harum sint dolore facilis praesentium, dolorum magni necessitatibus tenetur obcaecati laboriosam reiciendis atque veniam odio quis ad labore repellendus nisi. Consequuntur hic, reiciendis molestiae perferendis quia sequi magni, nobis alias quae necessitatibus ipsam, minus beatae."
        ]
        ];

    return view('shop', [
        "tittle" => "TaptapShop",
        "posts" => $shop_post
    ]);
});
Route::get('/sell', function () {
    return view('sell', [
        "tittle" => "TaptapSell"
    ]);
});

