<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Mail;
use Input;

class ForMechanicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("forMechanics");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Request::all();

        Mail::send('emails.forMechanicsWelcome', $input, function ($message) {
            $message->from('contactform@autofox.ca', 'Autofox');
            $message->replyTo(Request::input('email'));
            $message->subject("New mechanics");
            $message->to("fhuntley@kingstonsf.com");
        });

        Mail::send('emails.forMechanicsWelcome', $input, function ($message) {
            $message->from('contactform@autofox.ca', 'Autofox');
            $message->replyTo(Request::input('email'));
            $message->subject("New mechanics");
            $message->to("eden.dhaliwal@autofox.ca");
        });

        return $input;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
