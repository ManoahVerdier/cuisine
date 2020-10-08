<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Homepage;
use App\Models\Page;
use App\Models\PageProduit;
use App\Models\PageFonctionnalite;
use App\Models\PageIntervention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $hp = Homepage::first();
        return view('pages.home', compact('hp'));
    }

    public function page($slug)
    {
        $hp = Page::first($slug);
        return view('pages.home', compact('hp'));
    }

    public function produitMsErp()
    {
        $pageProduit = PageProduit::where('id', 2)->firstOrFail();
        return view('pages.produit', compact('pageProduit'));
    }

    public function produitApplication()
    {
        $pageProduit = PageProduit::where('id', 1)->firstOrFail();
        return view('pages.produit', compact('pageProduit'));
    }

    public function produitInterventions()
    {
        $pageInterventions = PageIntervention::where('id',1)->firstOrFail();
        return view('pages.interventions', compact('pageInterventions'));
    }

    public function fonctionMsErp()
    {
        $pageFonction = PageFonctionnalite::where('id', 2)->firstOrFail();
        return view('pages.fonctionnalites', compact('pageFonction'));
    }

    public function fonctionApplication()
    {
        $pageFonction = PageFonctionnalite::where('id', 1)->firstOrFail();
        return view('pages.fonctionnalites', compact('pageFonction'));
    }

    /**
     * Page contact
     * 
     * @param int   $id      l'id de formation concerné
     * @param mixed $session la session choisie
     * 
     * @return void
     */
    public function contact($demo=false)
    {
        return view(
            'pages.contact',
            compact('demo')
        );
    }

    /**
     * Recoit le formulaire de contact POST
     *
     * @param Request $request le formulaire
     * 
     * @return void
     */
    public function contactPost(Request $request)
    {
        $this->validate(
            $request, 
            [
                'nom' => 'required',
                'email' => 'required|email',
                'telephone' => 'required|regex:/(0)[0-9]{9}/',
                'entreprise' => 'required',
                /*'g-recaptcha-response' => 'required|captcha'*/
            ],
            [
                'required'=>"Le champ :attribute est requis",
                'g-recaptcha-response.required'=>"Merci de cocher le captcha"
            ]
        );

        Mail::send(
            'mails.email',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'telephone' => $request->get('telephone'),
                'entreprise' => $request->get('entreprise'),
                'nb_tech' => $request->get('nb_tech') ,
                'demo' => $request->get('demo')?"Oui":"Non",
                'message_ctc' => $request->get('message'),
            ), function ($message) {
                $message->from('contact@cyn-communication.fr');
                $message
                    //->to('vmogenet@cyn-communication.fr', 'Admin')
                    ->to('verdier.developpement@gmail.com', 'Admin')
                    ->subject('Contact '.env("APP_NAME"));
            }
        );
        
        return view('pages.contact')
            ->with(
                'success', 
                'Merci pour votre message !</br> Nous vous recontacterons sous peu'
            );
    }
}
