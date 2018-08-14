<?php


namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/welcome')->withPosts($posts);

    }

    public function getAbout()
    {
        $first = 'Smilen';
        $last = 'Lyubenov';
        $fullname = $first . $last;
        $email = 'sml@agag.gaga';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages/about')->withData($data)
            ->withEmail($email);
    }

    public function getContact()
    {
        return view('pages/contact');
    }
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email' ,
            'subject'=> 'min:3',
            'massage' =>'max:255']);
        $data = [
            'email'=>$request->email,
            'subject'=> $request->subject,
            'bodyMassage' =>$request->massage
        ];


    }
}