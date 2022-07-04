<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private $dir = 'app.users.';


    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }


    public function index()
    {
        $users = User::all();
        return view($this->dir. 'index', compact('users'));
    }

    public function create()
    {
        return view($this->dir. 'create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories',
        ]);

        // return Auth::id();

        if (request('status') == 'on') {
            $status = 1;
        } else {
            $status = 0;
        }

        if($request->file('file')){
            $image = $request->file('file');
            $imageName = time() . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$imageName);
        } else {
            $imageName = "category.png";
        }

        Category::create([
            'admin_id' => Auth::id(),
            'title' => request('title'),
            'slug'  => Str::slug(request('title')),
            'description' => request('description'),
            'image' => $imageName,
            'status' => $status
        ]);

        return redirect()->route('admin.category.index');
        // return $response()->json(['success' => $imageName]);
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->get()->first();
        return view($this->dir. 'show', compact('category'));
    }

    public function update($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->get()->first();

        return $request->all();

        // return $slug;

        $category->update([
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return redirect()->route('admin.category.index');
    }

    public function updateAvatar(Request $request, Category $category)
    {
        $file = $request->file('file');
        //add timestamp to original file name
        $name = time() . $file->getClientOriginalName();

        $file->move(public_path('uploads'),$name);

        //retrieve authenticated user
        $category->image = $name;
        $category->save();
        return $name;
    }
}
