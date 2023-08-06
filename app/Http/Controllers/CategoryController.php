<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $cat;
    protected $subCat;

public function __construct(){
        $this->cat = new Category();
        $this->subCat = new Subcategory();
}
    public function save(Request $request){
        $this->cat->create($request->all());
        $this->subCat->create($request->all());
        return redirect()->back();
    }
}
