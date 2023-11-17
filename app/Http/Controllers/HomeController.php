<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Demande;
use App\Models\Service;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home(){

        return view('listDemande');
    }

    public function service(){
        $datas = Service::all();
        return view('listService',compact('datas'));
        return view('listService');
    }

    public function createService(Request $request){

        $validator = Validator::make($request->all(), [
            'titre' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:50000',
        ]);
        
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        if ($request->hasFile('image')) {
            // Générer un nom aléatoire pour l'image
            $imageName = Str::random(10) . '.' . $request->image->getClientOriginalExtension();

            // Enregistrer l'image dans le dossier public/images
            $imagePath = $request->image->move(public_path('services'), $imageName);

            if ($imagePath) {
                Service::create([
                    'titre' => $request->titre,
                    'description' => $request->description,
                    'image' => 'services/' . $imageName,
                ]);
            }
        }
        $datas = Service::all();
        return view('listService',compact('datas'));
    }

    public function message(){
        $datas = Contact::all();
        return view('listMessage',compact('datas'));
    }

    public function deleteMessage($id){
        $contact = Contact::where("id",$id)->first();
        if($contact){
            $contact->delete();
        }
        return back();
    }

    public function deleteService($id){
        $data = Service::where("id",$id)->first();
        
        if($data){
            $data->delete();
        }

        return back();
    }

    public function deleteDemande($id){
        $data = Demande::where("id",$id)->first();
        if($data){
            $data->delete();
        }

        return back();
    }
}