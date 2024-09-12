<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Models\CategoryService;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public $email;
    public $typeSolicitation;
    public $name;    

    public function index()
    {
        $categoryService = CategoryService::all();

        $projects = Project::all();
        $products = Product::all();
        $statistic = Statistic::all();


        $name = ''; 
        $email = ''; 
        $selectCategoryService = ''; 
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
                $selectProduct = 'Produto Serviço'; 
                $subject = 'Assunto'; 
                $message = 'Mensagem'; 

                $selectCategoryService = "Selecionar categoria do serviço";
                $messageSuccess = 'Mensagem envida com sucesso';
                $messageError = 'Não foi possível enviar a mensgem';
                $btnText = 'Enviar Mensagem';
                break;
            case 'eng':
                $name = 'Your Name'; 
                $email = 'Your Email'; 
                $selectService = 'Select Service'; 
                $selectProduct = 'Select Product';
                $subject = 'Subject'; 
                $message = 'Message'; 

                $selectCategoryService = "Select service category";
                $messageSuccess = 'Message sent successfully';
                $messageError = 'Unable to send message';
                $btnText = 'Send Message';
                break;
            default:
                $name = 'Votre Nom'; 
                $email = 'Votre E-mail'; 
                $selectService = 'Sélectionnez un Service'; 
                $selectProduct = 'Sélectionner un produit';
                $subject = 'Sujet'; 
                $message = 'Message';
                
                $selectCategoryService = "Sélectionnez la catégorie de service";
                $messageSuccess = 'Message envoyé avec succès';
                $messageError = 'Impossible d`envoyer le message';
                $btnText = 'Envoyer le Message';
                break;
        }

        return View('site.index', [
            'projects' => $projects,
            'products' => $products,
            'statistic' => $statistic,
            'name' => $name, 
            'email' => $email, 
            'selectService' => $selectService, 
            'selectProduct' => $selectProduct, 
            'selectCategoryService' => $selectCategoryService,
            'categoryServices' => $categoryService,
            'subject' => $subject, 
            'message' => $message,
            'messageSuccess' => $messageSuccess,
            'messageError' => $messageError,
            'btnText' => $btnText
        ]);
    }

    public function storeSendEmail () {
        // Mail::raw('Esta é uma mensagem de teste!', function ($message) {
        //     $message->to('ricardomiguel190@gmail.com')
        //             ->subject('Teste de E-mail');
        // }); 

        Mail::send('welcome', [], function($message){ 
            $message->from('contact@brgroupe.com')->to('ricardomiguel190@gmail.com')->subject('laravel mail'); });
        
        return back();
    }

    public function store(Request $request)
    {
        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'service' => $request->service,
                'subject' => $request->subject,
                'description' => $request->description
            ]);
            
            $this->email = $request->input('email');
            $this->name = $request->input('name');
            $this->typeSolicitation = $request->input('typeSolicitation');
            
            if ($this->typeSolicitation == 'Service') {
                Mail::raw('Recebemos a solicitação de prestação de serviço do Sr.: ' . $this->name, function($message) { 
                    $message->from('contact@brgroupe.com')
                            ->to('services@brgroupe.com')
                            ->subject('BR Groupe');
                });
            } else {
                Mail::raw('Recebemos a solicitação de produto do Sr.: ' . $this->name, function($message) { 
                    $message->from('contact@brgroupe.com')
                            ->to('produits@brgroupe.com')
                            ->subject('BR Groupe');
                });
            }

            switch (session('locale')) {
                case 'pt':
                    Mail::raw('Recebemos a tua solicitação, entraremos em contacto o mais rápido possível.', function($message) { 
                        $message->from('contact@brgroupe.com')
                                ->to($this->email)
                                ->subject('BR Groupe');
                    });
                    break;
                case 'eng':
                    Mail::raw('We have received your request and will contact you as soon as possible.', function($message) { 
                        $message->from('contact@brgroupe.com')
                                ->to($this->email)
                                ->subject('BR Groupe');
                    });
                    break;
                default:
                    Mail::raw('Nous avons reçu votre demande, nous vous contacterons dans les plus brefs délais.', function($message) { 
                        $message->from('contact@brgroupe.com')
                                ->to($this->email)
                                ->subject('BR Groupe');
                    });
                    break;
            }

            // Mail::send('Email', [
            //     'title' => 'Título do E-mail',
            //     'heading' => 'Cabeçalho do E-mail',
            //     'message' => 'Este é o corpo do e-mail em HTML.'
            // ], function($message) { 
            //     $message->from('contact@brgroupe.com') 
            //             ->to('ricardomiguel190@gmail.com')
            //             ->subject('BR Groupe');});

            // Mail::send('welcome', [], function($message) { 
            //     $message->from('contact@brgroupe.com')
            //             ->to('ricardomiguel190@gmail.com')
            //             ->subject('BR Groupe');
            // });
            
            // Mail::to("ricardomiguel190@gmail.com")->send(new OrderShipped([
            //     'title' => 'The Title',
            //     'body' => 'The Body'
            // ]));
    
            return response()->json([
                'success' => 'Service criado com sucesso.'
            ]);
        } catch(\Exception $e) {
            return response()->json([
                'error' => $e
            ]);
        }   
    }

    public function services(string $detail)
    {
        return View('site.services-details', [
            'detail' => trim($detail) 
        ]);
    }

    public function catalog(string $serv)
    {
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
        
        switch ($serv) {
            case 'in':
                switch (session('locale')) {
                    case 'pt':
                        return response()->download(public_path('assets/catalogs/INDUSTRIAL - PT.pdf') , 'INDDUSTRIAL-PT.pdf', $headers);
                        break;
                    case 'fr':
                        return response()->download(public_path('assets/catalogs/INDUSTRIAL - FR.pdf') , 'INDDUSTRIAL-FR.pdf', $headers);
                        break;
                    case 'eng':
                        return response()->download(public_path('assets/catalogs/INDUSTRIAL - EN.pdf') , 'INDDUSTRIAL-EN.pdf', $headers);
                        break;                    
                }
                break;
                case 're':
                    switch (session('locale')) {
                        case 'pt':
                            return response()->download(public_path('assets/catalogs/RENOVATION - PT.pdf') , 'RENOVACAO-PT.pdf', $headers);
                            break;
                        case 'fr':
                            return response()->download(public_path('assets/catalogs/RENOVATION - FR.pdf') , 'RENOVATION-FR.pdf', $headers);
                            break;                    
                        case 'eng':
                            return response()->download(public_path('assets/catalogs/RENOVATION - EN.pdf') , 'RENOVACAO-EN.pdf', $headers);
                            break;                    
                    }
                    break;
                case 'ne':
                    switch (session('locale')) {
                        case 'pt':
                            return response()->download(public_path('assets/catalogs/LIMPEZA - PT.pdf') , 'LIMPEZA-PT.pdf', $headers);
                            break;
                        case 'fr':
                            return response()->download(public_path('assets/catalogs/LIMPEZA - FR.pdf') , 'LIMPEZA-FR.pdf', $headers);
                            break;                    
                        case 'eng':
                            return response()->download(public_path('assets/catalogs/LIMPEZA - PT.pdf') , 'LIMPEZA-EN.pdf', $headers);
                            break;                    
                    }
                    break;
            
        }
    }

    public function loadServices(string $id){
        $services = Service::where('idCategoryService', '=', $id)->get(); 
        $servicesReturned = collect([]);

        switch (session('locale')) {
            case 'pt':
                $servicesReturned->push([
                    'key'=> "",
                    'name'=> "Selecionar Serviço"
                ]);

                foreach ($services as $service) {
                    $servicesReturned->push([
                        'key'=> $service->title_pt,
                        'name'=> $service->title_pt
                    ]);
                }
                break;
            case 'eng':   
                $servicesReturned->push([
                    'key'=> "",
                    'name'=> "Select Service"
                ]);

                foreach ($services as $service) {
                    $servicesReturned->push([
                        'key'=> $service->title_en,
                        'name'=> $service->title_en
                    ]);
                }
                break;
            
            default:
                $servicesReturned->push([
                    'key'=> "",
                    'name'=> "Sélectionnez un Service"
                ]);

                foreach ($services as $service) {
                    $servicesReturned->push([
                        'key'=> $service->title_fr,
                        'name'=> $service->title_fr
                    ]);
                }
                break;
        }

        return response()->json($servicesReturned);
    }
}