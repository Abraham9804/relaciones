<?php

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
    /*$user = User::find(5);
    return $user->profile;*/

    /*$profile = Profile::find(1);
    return $profile->user;*/

    /*$course = Course::find(1);
    return $course->lessons;*/

    $post = Post::find(1);
    /*$post->tags()->attach([
        1 => ['data' => 'relacion muchos a muchos'],
        2 => ['data' => 'relacion muchos a muchos'],
        3 => ['data' => 'relacion muchos a muchos'],
    ]);*/
    foreach($post->tags as $tag){
        echo $tag->name.' '.$tag->pivot->tag_id.'<br>';
    }

    //return $post->tags;

    /*$tag = Tag::find(1);
    return $tag->posts;*/
});
