<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Phone;

/*one to many*/
use App\Models\Post;
use App\Models\Comment;

/*Has One Through*/
use App\Models\Mechanic;
use App\Models\Car;
use App\Models\Owner;
use Illuminate\Support\Facades\Hash;

/*Has Many Through*/
use App\Models\Project;
use App\Models\Environment;
use App\Models\Deployment;

/*Many To Many*/
// user model
use App\Models\Role;
use App\Models\Role_user;

/*Polymorphic Relationships*/
/*1. One To One (Polymorphic)*/
use App\Models\Image;

/*2. One To Many (Polymorphic)*/
// use App\Models\Post;
// use App\Models\Comment;
use App\Models\Video;

/*3. Many To Many (Polymorphic)*/
use App\Models\Tag;
use App\Models\Taggable;

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
	/*One to One Relation*/
	/*$user = new User;
	$user->name = 'user 1';
    $user->email = 'user1@yopmail.com';
    $user->password = Hash::make('pass@123!');
    $user->save();

    $phone = new Phone;
    $phone->phone = '54654654654';
    $phone->user_id = $user['id'];
    $phone->save();*/

    // $user = User::with('phone')->find(1);

    // $phone = Phone::with('user')->find(1);

    // dd($phone->user->name);
    /*End One to One Relation*/

    /*One To Many Relation*/
    /*$post = new Post;
    $post->title = 'post 1';
    $post->save();

    $comment = Comment::create([
	    'comment' => 'comment 1',
	    'post_id' => $post->id
	]);

	$comment = Comment::create([
	    'comment' => 'comment 2',
	    'post_id' => $post->id
	]);*/

	// $comments = Post::find(3)->comments;

	// $comment = Comment::find(1)->post;
	// dd($comment);
    /*End One To Many Relation*/

    /*Default Models*/
    // $author = Post::find(2)->user;
    // dd($author);
    /*End Default Models*/

    /*Has One Through*/
    // $mechanic = new Mechanic;
    // $mechanic->name = 'mechanic';
    // $mechanic->save();

    // $car = new Car;
    // $car->model= "Ambassidor";
    // $car->mechanic_id = $mechanic->id;
    // $car->save();

    // $owner = new Owner;
    // $owner->name = "owner 1";
    // $owner->car_id = $car->id;
    // $owner->save();

    // $mechanic = Mechanic::find(1)->carOwner;
    // dd($mechanic);

    /*End Has One Through*/

    /*Has Many Through*/

    /*$project = new Project;
    $project->name = "crm";
    $project->save();

    $environment = new Environment;
    $environment->project_id = 2;//$project->id;
    $environment->name = "environment 1";
    $environment->save();

    $deployment = new Deployment;
    $deployment->environment_id = $environment->id;
    $deployment->commit_hash = "345347533";
    $deployment->save();*/

   	/*$projects = Project::find(2)->deployments;
   	dd($projects);*/
    /*End Has Many Through*/

    /*Many To Many*/
    /*$role = new Role;
    $role->name = 'Author';
    $role->save();

    $role = new Role;
    $role->name = 'Editor';
    $role->save();*/

    /*$user = new User;
	$user->name = 'user 2';
    $user->email = 'user2@yopmail.com';
    $user->password = Hash::make('pass@123!');
    $user->save();*/

    /*$roleUser = new Role_user;
    $roleUser->user_id = 2;
    $roleUser->role_id = 2;
    $roleUser->save();*/

    //$userRoles = User::find(1)->roles;
    /*$roleUsers = Role::find(1)->users;
    foreach ($roleUsers as $key => $user) {
    	dd($user->pivot);
    }*/
    /*End Many To Many*/

    /*Polymorphic Relationships*/
    /*1. One To One (Polymorphic)*/

    /*$image = new Image;
    $image->url = "url2";
    $image->imageable_id = 1;
    $image->imageable_type = 'App\Models\User';
    $image->save();*/
    /*$user = User::find(1)->image;
    $post = Post::find(1)->image;
    dd($post);*/
    // $image = Image::find(1)->imageable;
    // dd($image);
    /*End One To One (Polymorphic)*/

    /*2. One To Many (Polymorphic)*/

    /*$video = new Video;
    $video->title = 'video 1';
    $video->save();*/

    /*$comment = new Comment;
    $comment->comment = "post comment 2";
    $comment->commentable_id = 1;
    $comment->commentable_type = 'App\Models\Video';
    $comment->save();*/

    /*$postComments = Post::find(1)->comments;
    dd($postComments);*/

    /*3. Many To Many (Polymorphic)*/

    /*$tag = new Tag;
    $tag->name = "video tag 2";
    $tag->save();*/

    /*$taggable = new Taggable;
    $taggable->taggable_id = 2;
    $taggable->taggable_type = 'App\Models\Video';
    $taggable->save();*/

    // $videoTags = Video::find(1)->tags;
    // dd($videoTags);
    /*End Polymorphic*/
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
