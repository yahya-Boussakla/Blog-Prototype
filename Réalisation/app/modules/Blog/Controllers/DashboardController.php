<?php

namespace Modules\Blog\Controllers;

use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Comment;
use Modules\Blog\Models\User;
use Modules\Blog\App\Requests;

class DashboardController extends Controller
{


    public function index(){

        $totalUsers = User::count();
        $totalComments = Comment::count();
        $totalCategories = Category::count();
        $totalArticles = Article::count();
        return view('admin.dashboard',
        compact('totalUsers','totalComments','totalCategories','totalArticles'));
    }
}

