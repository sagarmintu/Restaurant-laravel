<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact("data"));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();
        return view('admin.foodmenu', compact("data"));
    }

    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletefoodmenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editfoodmenu($id)
    {
        $data = food::find($id);
        return view('admin.updateview', compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data = new reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservationlists()
    {
        $data = reservation::all();
        return view('admin.adminreservation', compact("data"));
    }

    public function viewchef()
    {
        return view('admin.adminchef');
    }

    public function uploadchef(Request $request)
    {
        $data = new foodchef;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;
        $data->name = $request->name;
        $data->speciality = $request->speciality;
        $data->save();
        return redirect()->back();
    }
}
