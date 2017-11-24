<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\StoreBlogCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $redirectTo = '/category/';
    public function index()
    {
        $categories = Category::all();

        return view('category.list', ['items' => $categories]);

        /*
        //foreach ($categories as $category) {
        //    echo $category->label . '<br>';
        //}
        */

        /*
        //Retrieve a model by its primary key...
        // $category = Category::find(1);

        //Retrieve the first model matching the query constraints...
        // $categories = Category::where('idCategories', 1)->orWhere('label', "essai")->limit(2)->orderBy('label');
        //Va afficher la requête que soummet Laravel à MySQL
        // var_dump($categories->toSql());

        // $categories = Category::find([1, 2, 3]);

        //Make a query
        // $category = Category::query('SELECT * FROM `categories`;');
        // var_dump($categories->first()->label);
        */
    }

    public function create(){
        return view('category.create');
    }

    public function store(StoreBlogCategory $request){
        $category = new Category();
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }

    // http://laravel.dev/category/update/1
    public function update($id){
        $category = Category::find($id);
        return view('category.update', ['category' => $category]);
    }

    public function edit(StoreBlogCategory $request, $id){
        $category = Category::find($id);
        $category->label = $request->label;
        $category->save();

        return redirect($this->redirectTo);
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect($this->redirectTo);
    }
}
