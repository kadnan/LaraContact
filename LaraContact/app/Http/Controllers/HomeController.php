<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function create()
    {
        return view('new');
    }

    public function add(Request $request)
    {

        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $address = $request->get('address');
        $city = $request->get('city');
        $country = $request->get('country');
        $email = $request->get('email');
        $home_phone = $request->get('home_phone');
        $office_phone = $request->get('office_phone');
        $mobile = $request->get('mobile');
        $cover_photo = $request->file('cover_photo')->storePublicly('covers');

        $contact = new Contact();
        $contact->first_name = $first_name;
        $contact->last_name = $last_name;
        $contact->address = $address;
        $contact->city = $city;
        $contact->country = $country;
        $contact->email = $email;
        $contact->home_phone = $home_phone;
        $contact->office_phone = $office_phone;
        $contact->mobile = $mobile;
        $contact->cover_photo = $cover_photo;
        if ($contact->save()) {
            return redirect('/')->with('status', 'Contact added successfully!');
        }
    }
}
