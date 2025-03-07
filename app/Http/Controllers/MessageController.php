<?php

namespace App\Http\Controllers;

use App\Mail\AdminNotificationMail;
use App\Mail\SendContactReceivedMail;
use App\Models\Message;
use Error;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

use function Pest\Laravel\json;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        try {

            $message = Message::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message
            ]);

            // Send email
            Mail::to($request->email)->send(new SendContactReceivedMail($request->name));
            Mail::to(config('mail.from.address'))->send(new AdminNotificationMail($message->toArray()));
            return;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw ValidationException::withMessages([
                'email' => 'Error sending message'
            ]);
        }
    }
}
