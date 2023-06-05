<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Event;

use App\Models\News;

use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctors = Doctor::all();
                $events = Event::all();
                $news = News::all();
                return view('user.home',compact('doctors', 'events', 'news'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $doctors = Doctor::all();
            $events = Event::all();
            $news = News::all();
    
            return view('user.home',compact('doctors', 'events', 'news'));
        }

    }

    public function viewNews()
    {
        $news = News::all();
        return view('user.view_news',compact('news'));
    }

    public function viewEvents()
    {
        $events = Event::all();
        return view('user.view_events',compact('events'));
    }

    public function viewCounselling()
    {
        $doctors = Doctor::all();
        return view('user.view_counselling',compact('doctors'));
    }

    public function viewFinancial()
    {
        $news = News::all();
        return view('user.view_financial_aid',compact('news'));
    }

    public function appointment(Request $request)
    {
        $data=new Appointment;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->number;
        $data->doctor=$request->doctor;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->status='In progress..';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Appointment request successful!');
    }

    public function viewProfile()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $profile_data = Appointment::where('user_id',$userid)->get();
            return view('user.view_user_profile',compact('profile_data'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancelAppointment($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
