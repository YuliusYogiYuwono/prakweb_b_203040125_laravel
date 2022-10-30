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
     return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yulius Yogi Yuwono",
        "email" => "yogi@gmail.com",
        "image" => "yogi.jpeg"
    ]);
});
Route::get('/blog', function () {
     $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yulius Yogi Yuwono",
            "body" => "Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. Hic dolorum debitis minus
         asperiores sint, voluptate suscipit consequuntur possimus esse tempore repudiandae? Consequuntur aperiam exercitationem sit molestiae autem, velit id iure numquam, consectetur labore in nemo? Rerum reiciendis, corrupti animi tempora maxime dignissimos fuga neque incidunt, magnam ut perspiciatis soluta, fugit commodi. Quas non laborum, nulla eveniet rem, distinctio blanditiis nihil ducimus repellat dicta unde possimus aperiam numquam aut ullam. Ab quam nostrum, dolore quis earum
         iusto magnam consequatur laboriosam nemo."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "My Profile",
            "body" => "La suscipit nobis consectetur non voluptas praesentium quod explicabo dignissimos nisi ea quas aspernatur saepe aperiam sed nesciunt molestias repudiandae iste? Earum id, harum nulla voluptatibus saepe dolore repudiandae dicta temporibus inventore accusamus distinctio soluta modi, eius ratione placeat assumenda eos! Officiis, laboriosam, quod, dignissimos temporibus natus aperiam animi odio commodi accusamus minima eius illum. Tempore pariatur voluptates vel impedit a explicabo necessitatibus aliquam, repellendus natus libero eligendi quia fuga iure beatae aut omnis odio illum qui amet quos soluta sit quisquam. Excepturi officia numquam est? 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, alias est beatae optio adipis i officia numquam est?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//Halaman Single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yulius Yogi Yuwono",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore, quo! Quibusdam reiciendis ex cupiditate dignissimos, numquam facere adipisci cumque quaerat distinctio libero laboriosam pariatur, natus laborum! Blanditiis deserunt odio fuga neque ratione rerum fugit similique qui necessitatibus? Dignissimos reprehenderit itaque quod ad, temporibus suscipit quisquam repellendus, similique possimus ut dolorum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yulius Yogi Yuwono",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo obcaecati quibusdam saepe quam hic sunt. Dolorem ratione minus recusandae nisi sunt, quas, beatae ea culpa aliquam ipsum nihil saepe quidem debitis nam temporibus delectus quo. Eveniet accusamus cupiditate iure nostrum corporis culpa quasi aperiam quos laborum officia eaque doloremque deserunt atque praesentium, natus quo ullam illum neque modi unde voluptatum veniam accusantium esse! Ipsam animi reiciendis possimus dolorem debitis consequatur aspernatur, voluptatibus obcaecati sed facilis eveniet temporibus eos, unde veritatis laudantium. Fugiat, facere velit? Enim consectetur explicabo quasi nostrum, excepturi qui eaque sunt nesciunt. Molestias aliquam aperiam consectetur facere corrupti?"
        ],
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
