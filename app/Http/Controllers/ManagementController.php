<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Group;
use App\Models\Kid;
use App\Models\Worker;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function articles()
    {
        return view('user.articles', [
            'articles' => Article::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    public function article($article)
    {
        return view('user.article', [
            'article' => Article::where('id', $article)->first(),
        ]);
    }

    public function workers()
    {
        return view('user.workers', [
            'workers' => Worker::get(),
        ]);
    }

    public function groups()
    {
        return view('user.groups', [
            'groups' => Group::paginate(10),
        ]);
    }

    public function group($group)
    {
        return view('user.group', [
            'group' => Group::where('id', $group)->first(),
        ]);
    }

    public function kid($kid)
    {

        return view('user.kid', [
            'kid' => Kid::where('id', $kid)->first(),
        ]);
    }

    public function contacts()
    {
        return view('user.contacts', [
            'contacts' => Contact::get(),
        ]);
    }

    public function main() {
        return view('user.home', [
            'articles' => Article::lastArticles(3),
            'articless' => Article::get(),
            'count_articles' => Article::count(),
        ]);
    }
}
