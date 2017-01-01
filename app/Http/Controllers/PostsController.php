<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Teamposts;
use App\User;
use App\Partners;
use Redirect;
use App\Teams;
use App\Datafile;
use App\Jurnals;
use App\Galeryposts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $primary = Teams::orderBy('id', 'ASC')->where('name', 'Mulia Ichsan')->paginate(1);
      $posts = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(4);
      $news = Posts::orderBy('updated_at', 'DESC')->where('category_id', '2')->paginate(4);
      $title = 'Latest Post';
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(4);
      $works = Teamposts::orderBy('updated_at', 'DESC')->paginate(4);
      $galery = Galeryposts::orderBy('updated_at', 'DESC')->paginate(7);
      $partners = Partners::orderBy('updated_at', 'DESC')->paginate(7);
      return view('index')->withPosts($posts)->withNews($news)->withRecent($recent)->withTitle($title)->withWorks($works)->withGalery($galery)->withPartners($partners)->withPrimary($primary);

    }


    public function indexPost()
    {

      $posts = Posts::orderBy('updated_at', 'DESC')->paginate(6);

      $title = 'Latest Post';
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(6);
        return view('p.post')->withPosts($posts)->withRecent($recent)->withTitle($title);
    }


    public function indexNews()
    {
      $news = Posts::orderBy('updated_at', 'DESC')->where('category_id', '2')->paginate(6);
      $title = 'Latest Post';
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(4);
        return view('p.news')->withNews($news)->withRecent($recent)->withTitle($title);
    }

    public function getSK()
    {

      $data =  Datafile::orderBy('updated_at', 'DESC')->paginate(7);
      $news = Posts::orderBy('updated_at', 'DESC')->where('category_id', '2')->paginate(4);
      $title = 'Latest Post';
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(4);
        return view('data.index')->withNews($news)->withRecent($recent)->withTitle($title)->withData($data);
    }
    public function getJurnal()
    {

    $jurnal = Jurnals::orderBy('updated_at', 'DESC')->paginate(7);
      $news = Posts::orderBy('updated_at', 'DESC')->where('category_id', '2')->paginate(4);
      $title = 'Latest Post';
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(6);
        return view('jurnal.index')->withNews($news)->withRecent($recent)->withTitle($title)->withJurnal($jurnal);
    }


    public function show($slug)
    {

        $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '1')->paginate(4);
        $news = Posts::orderBy('updated_at', 'DESC')->where('category_id', '2')->paginate(4);
        $post = Posts::where('slug',$slug)->first();
        if (!$post) {
          return redirect()->back()->withErrors('requested page not found');
        }
        $comments = $post->comments;
        return view('p.show')->withPost($post)->withRecent($recent)->withNews($news)->withComments($comments);
    }
}
