<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Event;

use App\Models\News;

use App\Models\AdminAppli;

use App\Models\Appointment;

use App\Models\UserAddEvent;

use App\Models\UserAddNews;

use App\Models\UserApplication;

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

    public function viewAbout()
    {
        return view('user.about_us');
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
        $appli = AdminAppli::all();
        return view('user.view_financial_aid',compact('appli'));
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

    public function userAddEvent(Request $request)
    {
        $data=new UserAddEvent;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->category=$request->category;
        $data->topic=$request->topic;
        $data->message=$request->message;
        $data->status='In progress..';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Event request successful!');
    }

    public function userAddNews(Request $request)
    {
        $data=new UserAddNews;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->category=$request->category;
        $data->topic=$request->topic;
        $data->message=$request->message;
        $data->status='In progress..';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Article request successful!');
    }

    public function userApplication(Request $request)
    {
        $data=new UserApplication;

        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->year=$request->year;
        $data->address=$request->address;
        $data->message=$request->message;
        $data->status='In progress..';
        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Application sent successfully!');
    }

    public function viewProfile()
    {
        if(Auth::id())
        {
            $userid = Auth::user()->id;
            $profile_data = Appointment::where('user_id',$userid)->get();
            $profile_news = UserAddNews::where('user_id',$userid)->get();
            $profile_events = UserAddEvent::where('user_id',$userid)->get();
            $profile_applications = UserApplication::where('user_id',$userid)->get();
            return view('user.view_user_profile',compact('profile_data','profile_news','profile_events','profile_applications'));
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

    public function cancelApplication($id)
    {
        $data = UserApplication::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function detailedNews($id)
    {
        $news = News::find($id);

        return view('user.detailed_news', ['news' => $news]);
    }

    public function detailedEvents($id)
    {
        $events = Event::find($id);

        return view('user.detailed_events', ['events' => $events]);
    }

    public function detailedAppli($id)
    {
        $appli = AdminAppli::find($id);

        return view('user.detailed_appli', ['appli' => $appli]);
    }
}
