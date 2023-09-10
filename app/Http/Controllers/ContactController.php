<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();

        // Todo 正しくvalidateされたデータを受け取れなかった場合の処理

        Mail::to(users: env("MAIL_USERNAME"))->send(new ContactAdminMail($validated));

        // Todo Markdownでよりリッチな表現にする
        Mail::send(new ContactUserMail($validated));

        return response()->noContent();
    }
}
