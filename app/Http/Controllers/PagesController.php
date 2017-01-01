<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;
use App\Teams;
use App\Partners;
use App\Datafile;
use App\Jurnals;

class PagesController extends Controller
{

    public function getContact(){

      $partners = Partners::orderBy('updated_at', 'DESC')->paginate(7);
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '4')->paginate(4);
      return view('/p/contact-us')->withRecent($recent)->withPartners($partners);
    }
    public function getAbout()
    {
      $primary = Teams::orderBy('id', 'ASC')->where('categories', 'primary')->paginate(3);
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '4')->paginate(4);
      return view('/p/about-us')->withRecent($recent)->withPrimary($primary);
    }
    public function getTeam()
    {

      $primary = Teams::orderBy('id', 'ASC')->where('categories', 'primary')->paginate(4);
      $secondary = Teams::orderBy('id', 'ASC')->where('categories', 'secondary')->paginate(4);
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '4')->paginate(4);
      return view('/p/our-team')->withRecent($recent)->withPrimary($primary)->withSecondary($secondary);
    }
    public function getProfile()
    {
      $recent = Posts::orderBy('updated_at', 'DESC')->where('category_id', '4')->paginate(4);
      return view('/p/profile')->withRecent($recent);
    }
}
