<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
   public function submit(ContactRequest $req){
       $request = new Contact();
       $request->email = $req->email;
       $request->name = $req->name;
       $request->textarea = $req->textarea;
       $request->save();
       return redirect()->route('home')->with('success', 'Сообщение было добавлено');
//       $this->validate($req, [
//           'name' => 'required',
//           'textarea' => 'required',
//       ]);
   }
   public function allData(){
       $data = new Contact();
       return view('messages',['data'=> $data->all()]);
   }
    public function oneData($id){
        $data = new Contact();
        return view('message',['data'=> $data->find($id)]);
    }
    public function update($id){
        $data = new Contact();
        return view('update-message',['data'=> $data->find($id)]);
    }
    public function updateSubmit($id, ContactRequest $req){
        $request = Contact::find($id);
        $request->email = $req->email;
        $request->name = $req->name;
        $request->textarea = $req->textarea;
        $request->save();
        return redirect()->route('one-data', $id)->with('success', 'Сообщение успешно обновлено');
    }
    public function deleteSubmit($id){
        Contact::find($id)->delete();;
        return redirect()->route('all-data')->with('success', 'Сообщение удалено');
    }
}
