<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\IndexRequest;
use App\Models\Contact;
use Illuminate\Auth\Events\Login;

class ContactController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $contact = $request->only(['name', 'email', 'password']);
        Contact::create($contact);
        return view('login');
    }

    public function login(RegisterRequest $request)
    {
        $contact = $request->only(['email', 'password']);
        Contact::create($contact);
        return view('admin');
    }

    public function admin()
    {
        return view('admin');
    }

    public function index(Request $request)
    {
        $contact = $request->only(['email', 'password']);
        Contact::create($contact);
        return view('confirm');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('thanks');
    }
}
