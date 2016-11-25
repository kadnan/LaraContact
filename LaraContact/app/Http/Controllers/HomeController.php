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
        $contacts = Contact::all();
        foreach ($contacts as $contact) {
            print_r($contact->first_name);
            $cards[] = [
                'id' => $contact->id,
                'image' => asset('app/' . $contact->cover_photo),
                'name' => $contact->first_name . ' ' . $contact->last_name,
                'title' => $contact->title,
                'email' => $contact->email,
                'avatar' => md5($contact->email),
                'address' => $contact->address,
                'city' => $contact->city,
                'country' => $contact->country,
                'phone_home' => $contact->phone_home,
                'phone_office' => $contact->office_phone,
                'mobile' => $contact->mobile
            ];
        }


        return view('home')
            ->with('cards', $cards);
    }

    public function create()
    {
        return view('new');
    }

    public function add(Request $request)
    {

        $title = $request->get('title');
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
        $contact->title = $title;
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

    public function view($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('view')
            ->with('contact', $contact);
    }

    public function edit($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        return view('edit')
            ->with('contact', $contact);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $address = $request->get('address');
        $city = $request->get('city');
        $country = $request->get('country');
        $email = $request->get('email');
        $home_phone = $request->get('home_phone');
        $office_phone = $request->get('office_phone');
        $mobile = $request->get('mobile');
        if ($request->file('cover_photo') != null) {
            $cover_photo = $request->file('cover_photo')->storePublicly('covers');
        }

        $contact = Contact::where('id', $id)->firstOrFail();
        $contact->title = $title;
        $contact->first_name = $first_name;
        $contact->last_name = $last_name;
        $contact->address = $address;
        $contact->city = $city;
        $contact->country = $country;
        $contact->email = $email;
        $contact->home_phone = $home_phone;
        $contact->office_phone = $office_phone;
        $contact->mobile = $mobile;
        if ($request->file('cover_photo') != null) {
            $contact->cover_photo = $cover_photo;
        }
        if ($contact->save()) {
            return redirect('/')->with('status', 'Contact updated successfully!');
        }
    }

    public function delete($id)
    {
        $contact = Contact::where('id', $id)->firstOrFail();
        if($contact != null) {
            $contact->delete();
            return redirecct('/');
        }
    }
}
