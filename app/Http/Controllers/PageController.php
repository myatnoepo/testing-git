<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
  public function home($value='')
  {
    $items = Item::all();
    return view('frontend.home',compact('items'));
  }

  public function itemdetail($value='')
  {
    return view('frontend.detail');
  }

  public function promotions($value='')
  {
    return view('frontend.promotions');
  }

  public function filteritems($value='')
  {
    return view('frontend.filteritems');
  }

  public function shoppingcart($value='')
  {
    return view('frontend.shoppingcart');
  }

  public function itemsbybrand($value='')
  {
    return view('frontend.itemsbybrand');
  }

  public function login($value='')
  {
    return view('frontend.login');
  }

  public function register($value='')
  {
    return view('frontend.register');
  }
  
}
