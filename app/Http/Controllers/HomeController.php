<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;
class HomeController extends Controller
{
   public function index()
   {


       $data = ['title' => 'Гостевая книга Laravel 5.1',
           //Number of posts
           'messages' => Message::latest()->paginate(1),
           'count' => Message::count()

       ];
      return view('pages.messages.index', $data);
   }
   public function  edit($id)
   {
       $data = [
           'title' => 'Гостевая книга Laravel 5.1',
       'pagetitle' => 'Редактирование: Гостевая книга Laravel 5.1',
       ];
    return view('pages.messages.edit');
   }


}
