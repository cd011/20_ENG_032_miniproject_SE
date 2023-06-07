<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Event;

use App\Models\News;

use App\Models\AdminAppli;

class AdminController extends Controller
{
    public function addDoc()
    {
        return view('admin.add_doctor');
    }

    public function addNews()
    {
        return view('admin.add_news');
    }

    public function addEvents()
    {
        return view('admin.add_event');
    }

    public function addAppli()
    {
        return view('admin.add_application');
    }

    public function upDoc(Request $request)
    {
        $doctor=new Doctor;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->email=$request->email;

        $doctor->save();
        return redirect()->back()->with('message','Doctor added successfully!');
    }

    public function upEvent(Request $request)
    {
        $event=new Event;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('eventimage',$imagename);
        $event->image=$imagename;
        $event->title=$request->title;
        $event->category=$request->category;
        $event->body=$request->body;

        $event->save();
        return redirect()->back()->with('message','Event added successfully!');
    }

    public function upNews(Request $request)
    {
        $news=new News;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('newsimage',$imagename);
        $news->image=$imagename;
        $news->title=$request->title;
        $news->category=$request->category;
        $news->body=$request->body;

        $news->save();
        return redirect()->back()->with('message','News added successfully!');
    }

    public function upAppli(Request $request)
    {
        $appli=new AdminAppli;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->image->move('appliimage',$imagename);
        $appli->image=$imagename;
        $appli->title=$request->title;
        $appli->category=$request->category;
        $appli->body=$request->body;

        $appli->save();
        return redirect()->back()->with('message','Application added successfully!');
    }
}
