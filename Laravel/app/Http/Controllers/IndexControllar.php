<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;
use App\Category;
use App\Consultancy;
use App\Contact;
use App\Csr;
use App\DyesChemicals;
use App\FibreYarns;
use App\FutureFashion;
use App\Management;
use App\Ourselves;
use App\Processes;
use App\ProductsServices;
use App\SiteSetting;
use App\Slider;
use App\SubCategory;
use App\Sustainability;
use App\SustainabilityOverview;
use App\TechnicalTextile;
use App\TopManagement;
use App\TrainingCenter;
use App\VisionMission;
use App\WovenFabrics;
use DB;
use App\Http\Controllers\Controller;

class IndexControllar extends Controller
{
    public function index()
    {
        
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $slider = Slider::orderBy('id','DESC')->get();
        $Contact = Contact::orderBy('id','DESC')->first();
        // dd($slider);
        return view('frontEnd.pages.index',
            [
                'SiteSetting'=>$SiteSetting,
                'slider'=>$slider,
                'Contact'=>$Contact
            ]
        );
    }
    public function ourselves()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $ourselves = Ourselves::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.ourselves',
            [
                'SiteSetting'=>$SiteSetting,
                'ourselves'=>$ourselves,
                'Contact'=>$Contact
            ]
        );
    }
    public function aboutus()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $AboutUs = AboutUs::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
    
        return view('frontEnd.pages.about_us',
            [
                'SiteSetting'=>$SiteSetting,
                'aboutUs'=>$AboutUs,
                'Contact'=>$Contact
            ]);
    }
    public function visionmission()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $VisionMission = VisionMission::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.vision_mission',
            [
                'SiteSetting'=>$SiteSetting,
                'VisionMission'=>$VisionMission,
                'Contact'=>$Contact
            ]);
    }
    public function topmanagement()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Management = Management::orderBy('id','DESC')->first();
        $TopManagement = TopManagement::orderBy('id','ASC')->get();
        $Contact = Contact::orderBy('id','DESC')->first();
        // dd($Management);
        return view('frontEnd.pages.top_management',
            [
                'SiteSetting'=>$SiteSetting,
                'Management'=>$Management,
                'TopManagement'=>$TopManagement,
                'Contact'=>$Contact
            ]);
    }
    public function futureFashion()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $FutureFashion = FutureFashion::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.futureFashion',
            [
                'SiteSetting'=>$SiteSetting,
                'FutureFashion'=>$FutureFashion,
                'Contact'=>$Contact
            ]);
    }
    public function productsservices()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $ProductsServices = ProductsServices::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.products_services',
            [
                'SiteSetting'=>$SiteSetting,
                'ProductsServices'=>$ProductsServices,
                'Contact'=>$Contact
            ]);
    }
    public function wovenfabrics()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $WovenFabrics = WovenFabrics::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.woven_fabrics',
            [
                'SiteSetting'=>$SiteSetting,
                'WovenFabrics'=>$WovenFabrics,
                'Contact'=>$Contact
            ]);
    }
    public function technicaltextile()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $TechnicalTextile = TechnicalTextile::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.technical_textile',
            [
                'SiteSetting'=>$SiteSetting,
                'TechnicalTextile'=>$TechnicalTextile,
                'Contact'=>$Contact
            ]);
    }
    public function trainingcenter()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $TrainingCenter = TrainingCenter::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.training_center',
            [
                'SiteSetting'=>$SiteSetting,
                'TrainingCenter'=>$TrainingCenter,
                'Contact'=>$Contact
            ]);
    }
    public function consultancy()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Consultancy = Consultancy::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.consultancy',
            [
                'SiteSetting'=>$SiteSetting,
                'Consultancy'=>$Consultancy,
                'Contact'=>$Contact
            ]);
    }
    public function sustainability()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Sustainability = Sustainability::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.sustainability',
            [
                'SiteSetting'=>$SiteSetting,
                'Sustainability'=>$Sustainability,
                'Contact'=>$Contact
            ]);
    }
    public function susoverview()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $SustainabilityOverview = SustainabilityOverview::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.sus_overview',
            [
                'SiteSetting'=>$SiteSetting,
                'SustainabilityOverview'=>$SustainabilityOverview,
                'Contact'=>$Contact
            ]);
    }
    public function fibreyarns()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $FibreYarns = FibreYarns::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.fibre_yarns',
            [
                'SiteSetting'=>$SiteSetting,
                'FibreYarns'=>$FibreYarns,
                'Contact'=>$Contact
            ]);
    }
    public function dyeschemicals()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $DyesChemicals = DyesChemicals::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.dyes_chemicals',
            [
                'SiteSetting'=>$SiteSetting,
                'DyesChemicals'=>$DyesChemicals,
                'Contact'=>$Contact
            ]);
    }
    public function processes()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Processes = Processes::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.processes',
            [
                'SiteSetting'=>$SiteSetting,
                'Processes'=>$Processes,
                'Contact'=>$Contact
            ]);
    }
    public function csr()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Csr = Csr::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.csr',
            [
                'SiteSetting'=>$SiteSetting,
                'Csr'=>$Csr,
                'Contact'=>$Contact
            ]);
    }
    public function contactus()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.contact-us',
            [
                'SiteSetting'=>$SiteSetting,
                'Contact'=>$Contact
            ]);
    }
    public function hgooglemaps()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.hgoogle_maps',
            [
                'SiteSetting'=>$SiteSetting,
                'Contact'=>$Contact
            ]);
    }
    public function mgooglemaps()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.mgoogle_maps',
            [
                'SiteSetting'=>$SiteSetting,
                'Contact'=>$Contact
            ]);
    }
    public function fgooglemaps()
    {
        $SiteSetting = SiteSetting::orderBy('id','DESC')->first();
        $Contact = Contact::orderBy('id','DESC')->first();
        return view('frontEnd.pages.fgoogle_maps',
            [
                'SiteSetting'=>$SiteSetting,
                'Contact'=>$Contact
            ]);
    }

    
}
