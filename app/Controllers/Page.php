<?php namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function profil()
    {
        echo "Martha Dewi Wulandari <br>";
        echo "Jombang, 02 Maret 2005 <br>";
        echo "Perempuan <br>" ;
        echo "Islam <br>";
        echo "Paculgowang Jatirejo Diwek Jombang <br>";
    }
}
