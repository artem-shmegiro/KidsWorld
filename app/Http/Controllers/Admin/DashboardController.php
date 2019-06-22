<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Group;
use App\Models\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard', [
            'articles' => Article::lastArticles(5),
            'comments' => Comment::lastComments(5),
            'count_articles' => Article::count(),
            'count_workers' => Worker::count()
        ]);
    }
}
