<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Response;
use App\Mail\Contact;
use App\Contact as ModelContact;
use \Illuminate\Support\Facades\Mail;
use App\Event;

class ContactController extends Controller
{
    public function contact(Request $request){

        Mail::to("contacto@welcomehome.com.mx", 'Contacto')
            ->send(new Contact($request));

        return Response::json(['data'=>true], 200);
    }

}
