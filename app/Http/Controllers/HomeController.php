<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $projects = Project::all();
        $statistic = Statistic::all();

        $name = ''; 
        $email = ''; 
        $selectService = ''; 
        $subject = ''; 
        $message = ''; 
        $messageSuccess = ''; 
        $messageError = ''; 
        $btnText = '';

        switch (session('locale')) {
            case 'pt':
                $name = 'Nome'; 
                $email = 'Email'; 
                $selectService = 'Selecionar Serviço'; 
                $subject = 'Assunto'; 
                $message = 'Mensagem'; 

                $messageSuccess = 'Mensagem envida com sucesso';
                $messageError = 'Não foi possível enviar a mensgem';
                $btnText = 'Enviar Mensagem';
                break;
            case 'en':
                $name = 'Your Name'; 
                $email = 'Your Email'; 
                $selectService = 'Select Service'; 
                $subject = 'Subject'; 
                $message = 'Message'; 

                $messageSuccess = 'Message sent successfully';
                $messageError = 'Unable to send message';
                $btnText = 'Send Message';
                break;
            default:
                $name = 'Votre Nom'; 
                $email = 'Votre E-mail'; 
                $selectService = 'Sélectionnez un Service'; 
                $subject = 'Sujet'; 
                $message = 'Message';
                
                $messageSuccess = 'Message envoyé avec succès';
                $messageError = 'Impossible d`envoyer le message';
                $btnText = 'Envoyer le Message';
                break;
        }

        return View('site.index', [
            'services' => $services,
            'projects' => $projects,
            'statistic' => $statistic,
            'name' => $name, 
            'email' => $email, 
            'selectService' => $selectService, 
            'subject' => $subject, 
            'message' => $message,
            'messageSuccess' => $messageSuccess,
            'messageError' => $messageError,
            'btnText' => $btnText
        ]);
    }

    public function store(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'subject' => $request->subject,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => 'Service criado com sucesso.'
        ]);
    }
}
