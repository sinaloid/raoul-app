<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewLangServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        view()->composer('*', function ($view) {
            $lang = [
                'fr' => [
                    'accueil' => 'Accueil',
                    'service' => 'Services',
                    'formulaire' => 'Commande',
                    'contact' => 'Contact',
                    'connecter' => 'Se Connecter',

                    "Formulaire de demande" => "Formulaire de demande",
                    "Informations personnelles" => "Informations personnelles",
                    "Nom prénom" => "Nom prénom",
                    "Entrer votre nom et prénom" => "Entrer votre nom et prénom",
                    "Entrer le nom et prénom" => "Entrer le nom et prénom",
                    "Numéro de téléphone" => "Numéro de téléphone",
                    "Entrer votre numéro de téléphone" => "Entrer votre numéro de téléphone",
                    "Email" => "Email",
                    "Entrer votre adresse mail" => "Entrer votre adresse mail",
                    "Entrer l'adresse mail" => "Entrer l'adresse mail",
                    "Entreprise" => "Entreprise",
                    "Entrer votre nom de entreprise" => "Entrer votre nom de entreprise",
                    "Informations de l'exportateur" => "Informations de l'exportateur",
                    "Adresse" => "Adresse",
                    "Entrer l'adresse" => "Entrer l'adresse",
                    "Numéro de téléphone" => "Numéro de téléphone",
                    "Entrer le numéro de téléphone" => "Entrer le numéro de téléphone",
                    "CNI ou Passeport" => "CNI ou Passeport",
                    "Entrer le numéro du cni ou passeport" => "Entrer le numéro du cni ou passeport",
                    "Informations du receveur" => "Informations du receveur",
                    "Pays de destination" => "Pays de destination",
                    "Entrer le nom du pays" => "Entrer le nom du pays",
                    "Type d'expédition" => "Type d'expédition",
                    "Assurance" => "Assurance",
                    "Douane" => "Douane",
                    "Entrer les détails" => "Entrer les détails",
                    "Commentaire" => "Commentaire",
                    "Oui" => "Oui",
                    "Non" => "Non",
                    "Détails" => "Détails",

                    "agtl" => "AGTL est une entreprise spécialisée dans les services logistiques qui propose une gamme complète de solutions pour répondre à tous vos besoins de transport et de stockage. Avec notre expertise en fret maritime, aérien et roll on, roll off (RORO), nous assurons une gestion fluide et sécurisée de vos marchandises. 
                    Concernant les services de transport terrestre, AGTL vous offre des services fiables, avec un vaste réseau de transporteurs pour une livraison rapide et sûre. Nous vous offrons également des services de stockage de haute qualité grâce à nos entrepôts sécurisés, pour une gestion efficace de vos marchandises.
                    Faites confiance à AGTL pour des solutions logistiques fiables et professionnelles.
                    "

                ],
                'en' => [
                    'accueil' => 'Home',
                    'service' => 'Services',
                    'formulaire' => 'Order',
                    'contact' => 'Contact',
                    'connecter' => 'Login',

                    "Formulaire de demande" => "Request Form",
                    "Informations personnelles" => "Personal Information",
                    "Nom prénom" => "First and Last Name",
                    "Entrer votre nom et prénom" => "Enter your first and last name",
                    "Entrer le nom et prénom" => "Enter the first and last name",
                    "Numéro de téléphone" => "Phone Number",
                    "Entrer votre numéro de téléphone" => "Enter your phone number",
                    "Email" => "Email",
                    "Entrer votre adresse mail" => "Enter your email address",
                    "Entrer l'adresse mail" => "Enter the email address",
                    "Entreprise" => "Company",
                    "Entrer votre nom de entreprise" => "Enter your company name",
                    "Informations de l'exportateur" => "Exporter Information",
                    "Adresse" => "Address",
                    "Entrer l'adresse" => "Enter the address",
                    "Numéro de téléphone" => "Phone Number",
                    "Entrer le numéro de téléphone" => "Enter the phone number",
                    "CNI ou Passeport" => "ID Card or Passport",
                    "Entrer le numéro du cni ou passeport" => "Enter the ID card or passport number",
                    "Informations du receveur" => "Receiver Information",
                    "Pays de destination" => "Destination Country",
                    "Entrer le nom du pays" => "Enter the name of the country",
                    "Type d'expédition" => "Shipment Type",
                    "Assurance" => "Insurance",
                    "Douane" => "Customs",
                    "Entrer les détails" => "Enter the details",
                    "Commentaire" => "Comment",
                    "Oui" => "Yes",
                    "Non" => "No",
                    "Détails" => "Details",

                    "agtl" => "AGTL is a logistics services company that provides a comprehensive range of solutions to meet all your transportation and warehousing needs. Our expertise in maritime, air, and roll on, roll off (RORO) freight, allows us to ensure a smooth and secure management of your goods. 
                        For land transportation, AGTL offers reliable services, with a vast network of carriers for fast and safe delivery. We also offer high-quality warehousing services with our secure warehouses, for an efficient management of your goods.
                        Trust AGTL for reliable and professional logistics solutions."
                ],
            ];
            $view->with('lang', $lang);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}