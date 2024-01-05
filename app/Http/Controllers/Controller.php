<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Demande;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index($id = "") {
        $datas = Service::all();
        return view('pages.index',compact('datas'));
    }

    public function createMessage (Request $request){

        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'description' => 'required|string|max:50000',
        ]);
        
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        //dd($request->all());
        Contact::create($request->all());
        $message  = "Nous vous remercions d'avoir pris contact avec nous ! 
        Votre message a été reçu avec succès, 
        et nous nous engageons à vous répondre dans les plus brefs délais. 
        Merci de votre patience et à très bientôt !";
        return view('success',compact('message'));

    }
    public function createDemande(Request $request){

        //dd($request->all());

        $validator = Validator::make($request->all(), [
            'demandeur_nom' => 'required|string|max:255',
            'demandeur_adresse' => 'required|string|max:255',
            'demandeur_telephone' => 'required|string|max:255',
            'demandeur_email' => 'required|string|max:255',
            'demandeur_entreprise' => 'required|string|max:255',
            'exportateur_nom' => 'required|string|max:255',
            'exportateur_adresse' => 'required|string|max:255',
            'exportateur_telephone' => 'required|string|max:255',
            'exportateur_email' => 'required|string|max:255',
            'exportateur_passport' => 'required|string|max:255',
            'receveur_nom' => 'required|string|max:255',
            'receveur_adresse' => 'required|string|max:255',
            'receveur_telephone' => 'required|string|max:255',
            'receveur_email' => 'required|string|max:255',
            'receveur_pays' => 'required|string|max:255',
            'type_expedition' => 'required|string|max:255',
            'assurance' => 'required|string|max:255',
            'douane' => 'required|string|max:255',
            'description' => 'required|string|max:50000',
        ]);

        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        Demande::create($request->all());
        $message  = "Nous vous remercions d'avoir pris contact avec nous ! 
        Votre demande a été reçu avec succès, 
        et nous nous engageons à vous répondre dans les plus brefs délais. 
        Merci de votre patience et à très bientôt !";
        return view('success',compact('message'));
    }

    public function services(){
        $datas = Service::all();
        return view('pages.services',compact('datas'));
    }

    public function detailService($slug){

        //$data = Service::where('id',$slug)->first();
        $data = $slug;

        return view('pages.serviceDetail', compact('data'));
    }
}