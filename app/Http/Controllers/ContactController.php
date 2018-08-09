<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\InboxMessage;
use App\Admin;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {
        $admin->notify(new InboxMessage($message));
        return redirect()->back()->with('message', 'Dziękujemy za wiadomość, odpiszemy najszybciej jak to możliwe!');
    }
}
