<?php

use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {

    $project = Project::getProjects();


    dd($project);

    // $product = Product::create([
    //     'title' => 'Dress Shirt',
    //     'description' => 'Wear your amazing stuff.'
    // ]);

    // dd($product);
    // dd(Product::get()->toArray());


    // $project = Project::create([
    //     'project_title' => '6cash Agent',
    //     'price' => 20000,
    //     'discount' => 300
    // ]);

    // $project = Project::find(1);
    // $project->delete();

    $project = Project::get();

    // $project = Project::withTrashed()->find(1);
    // $project->restore();
    // dd("done");

    dd($project->toArray());
});
