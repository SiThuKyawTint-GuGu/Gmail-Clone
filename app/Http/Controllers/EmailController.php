<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\User;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    //sent mail to db
    public function sentmail(Request $request)
    {
        $data = $this->getdata($request);
        $this->needValidation($request);
        if ($request->hasFile('img')) {

            $newimage =  uniqid().$request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public', $newimage);
            $data['img'] = $newimage;
        }
        Email::create($data);
        return redirect()->route('user#content');
    }

    //Account view user
    public function accountview()
    {
        return view('user.account.accountdetail');
    }

    //Account Edit Page
    public function accountedit()
    {
        return view('user.account.accountedit');
    }

    //update data 
    public function updatedata(Request $request, $id)
    {
        $this->checkvalidation($request);
        $thing = $this->database($request);
        if ($request->hasFile('image')) {
            $dbimage = User::where('id', $id)->first();
            $dbimage = $dbimage->image;

            if ($dbimage != null) {
                Storage::delete('public', $dbimage);
            }

            $newimage =  uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public', $newimage);
            $thing['image'] = $newimage;
        }

        User::where('id', $id)->update($thing);
        return redirect()->route('user#content');
    }

    //Password Change Page
    public function passwordchange()
    {
        return view('user.account.passwordchange');
    }


    //delete item
    public function delitem($id){
       Email::where('id',$id)->delete();
       return back();
    }

    //Password Update
    public function passwordupdate(Request $request, $id)
    {
        $this->passwordvalidation($request);
        $oldid = Auth::user()->id;
        $oldpassword = $request->oldpassword;
        $dbpsw = User::where('id', $oldid)->first();
        $ddhashpsw = $dbpsw->password;
        if (Hash::check($oldpassword, $ddhashpsw)) {
            $updatedata = [
                'password' => Hash::make($request->newpassword)
            ];

            User::where('id', $oldid)->update($updatedata);
            return redirect()->route('password#change');
        } else {
            return back()->with(['passworderror' => 'Your password is not in incorrect']);
        }
     
    }

    //Check Validation system
    private function checkvalidation($request)
    {
        Validator::make($request->all(), [
            'gender' => 'required',
            'image' => ' mimes:jpg,png,jpeg,webp ,' . $request->userid,
        ])->validate();
    }

    //insert profile update data into database
    private function database($request)
    {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'image' => $request->image,
            'address' => $request->address,
        ];
    }

    //insert data to database
    private function getdata($request)
    {
        return [
            'user_id' => $request->user_id,
            'sentusermail' => $request->sentusermail,
            'subject' => $request->subject,
            'description' => $request->description,
            'img' => $request->img,
        ];
    }

    //Password Validation
    private function passwordvalidation($request)
    {
        Validator::make($request->all(), [
            'oldpassword' => 'required',
            'newpassword' => 'required | min:8 ',
            'comfirmpassword' => 'required | min:8 | same:newpassword',
        ])->validate();
    }

    //Need Validation  email 
    private function needValidation($request)
    {
        Validator::make($request->all(), [
            'img' => 'mimes:jpg,png.jpeg,webp'
        ])->validate();
    }
}
