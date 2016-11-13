<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cards = [];
        $cards[] = [
            'image' => 'http://eskipaper.com/images/scenery-background-2.jpg',
            'name' => 'Adnan Siddiqi',
            'title' => 'Freelance Consultant',
            'email' => 'kadnan@gmail.com',
            'avatar' => md5('kadnan@gmail.com'),
            'address' => 'A-270, Block H, North Nazimabad',
            'city' => 'Karachi',
            'country' => 'Pakistan',
            'phone_home' => '021-36415041',
            'phone_office' => '111-222-333 x 345',
            'mobile' => '0300-9290538',
        ];
        $cards[] = [
            'image' => 'https://www.walldevil.com/wallpapers/a78/wallpapers-desktop-background-scenic-scenery-nature-backgrounds.jpg',
            'name' => 'Ahmad Siddiqi',
            'title' => 'Technology Consultant',
            'email' => 'kadynan@yahoo.com',
            'avatar' => md5('kadynan@yahoo.com'),
            'address' => 'B-270, Block I, North Nazimabad',
            'city' => 'Karachi',
            'country' => 'Pakistan',
            'phone_home' => '021-36677755',
            'phone_office' => '3454555',
            'mobile' => '0300-9290538',
        ];
        return view('home')
            ->with('cards', $cards);
    }
}
