<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function about(): string
    {
        return view('fahrianjg');
    }

    public function contact(): string
    {
        return 'My name is Fahri Anjg contact me on 08123456789';
    }
    
    public function faqs(): string
    {
        return 'welcome_message is fahri anjg faqs';
    }
}
