<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message = DB::table('messages')->paginate(4);
        return view('message.index',compact('message'));
    }

     public function search(Request $request)
{  
    
    //dd($request->all());
     
    $search_message = $request->get('search_message');
    if($search_message){$messages = DB::table('messages')->where('name', 'like','%'.$search_message.'%')->paginate(4);
    } else { 
    $messages = Message::all(); 
    }
     return view('message.index', ['messages' => 
     $messages]); 


}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $message = new Message;

        $message->name =request('name');
        $message->email =request('email');
        $message->messages =request('messages');

        $message->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
        $message =  Message::find($message->id);
       return view('message.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        $message->delete();
        return redirect()->route('message.index');
    }
}
