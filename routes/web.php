<?php

use App\Models\Book;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    /*$user = User::find(5); retornamos la relacion 1 a 1
    return $user->profile;*/

    /*$profile = Profile::find(1);
    return $profile->user;*/

    /*$course = Course::find(1); retornamos la relacion 1 a muchos
    return $course->lessons;*/

    /*$post = Post::find(1); 
    return $post->image;*/

    //return $post->tags;

    /*$tag = Tag::find(1);
    return $tag->posts;*/

    /*$book = Book::find(1);
    return $book;*/
    $post = Post::find(1);
    //$post->coments()->create(['body' => 'Este es el comentario 3 del post']);
    //return $post->coments;

    /*foreach($post->coments as $coment){
        echo $coment->body."<br>";
    }*/
    //$post->tags()->attach([1,2,2]);
    $book = Book::find(1);
    $book->tags()->sync([4,5]);
    return $book->tags;

});
