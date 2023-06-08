<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Event;

use App\Models\News;

use App\Models\AdminAppli;

use App\Models\UserAddNews;

use App\Models\UserAddEvent;

use App\Models\UserApplication;

use App\Models\Appointment;

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

    public function approveNews()
    {
        $data = UserAddNews::all();
        return view('admin.approve_news', compact('data'));
    }

    public function approveEvents()
    {
        $data = UserAddEvent::all();
        return view('admin.approve_events', compact('data'));
    }

    public function approveAppointment()
    {
        $data = Appointment::all();
        return view('admin.approve_appointment', compact('data'));
    }

    public function approveAppli()
    {
        $data = UserApplication::all();
        return view('admin.approve_appli', compact('data'));
    }



    public function viewAllData()
    {
        $doctors = Doctor::all();
        $events = Event::all();
        $news = News::all();
        $appli = AdminAppli::all();
        return view('admin.all_data', compact('doctors', 'events', 'news', 'appli'));
    }



    public function approveUserNews($id)
    {
        $data = UserAddNews::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function rejectUserNews($id)
    {
        $data = UserAddNews::find($id);
        $data->status = 'Rejected';
        $data->save();
        return redirect()->back();
    }

    public function approveUserEvent($id)
    {
        $data = UserAddEvent::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function rejectUserEvent($id)
    {
        $data = UserAddEvent::find($id);
        $data->status = 'Rejected';
        $data->save();
        return redirect()->back();
    }

    public function approveUserAppli($id)
    {
        $data = UserApplication::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function rejectUserAppli($id)
    {
        $data = UserApplication::find($id);
        $data->status = 'Rejected';
        $data->save();
        return redirect()->back();
    }

    public function approveUserAppointment($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function rejectUserAppointment($id)
    {
        $data = Appointment::find($id);
        $data->status = 'Rejected';
        $data->save();
        return redirect()->back();
    }

    public function detailedData($body)
    {
        $data = $body;
        return view('admin.detailed_data', ['data' => $data]);
    }

    public function deleteNews($id)
    {
        $data = News::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteEvent($id)
    {
        $data = Event::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteDoc($id)
    {
        $data = Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleteAppli($id)
    {
        $data = AdminAppli::find($id);
        $data->delete();
        return redirect()->back();
    }
}
