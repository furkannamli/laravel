<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('desktop/index');
    }

    public function getSkills()
    {
        $skills = array('name' => array('HTML', 'CSS', 'JavaScript', 'Unity', 'C', 'C#', 'Laravel', 'Vue', 'PHP'),
            'media' => array('https://img.icons8.com/dusk/64/000000/html-5.png', 'https://img.icons8.com/dusk/64/000000/css3.png',
                'https://img.icons8.com/color/48/000000/javascript.png', 'https://img.icons8.com/ios-filled/50/000000/unity.png',
                'https://img.icons8.com/dusk/64/000000/c.png', 'https://img.icons8.com/color/48/000000/c-sharp-logo.png',
                'https://img.icons8.com/windows/32/000000/laravel.png', 'https://img.icons8.com/color/48/000000/vue-js.png',
                'https://img.icons8.com/dusk/48/000000/php-logo.png'));
        return view('desktop/skills', ['skills' => $skills]);
    }

    public function getSocialMedia()
    {
        $links = array('media' =>  array('https://image.flaticon.com/icons/svg/174/174855.svg', 'https://image.flaticon.com/icons/svg/174/174876.svg',
            'https://image.flaticon.com/icons/svg/174/174848.svg', 'https://image.flaticon.com/icons/svg/174/174857.svg'),
        'profile' => array('https://www.instagram.com/furkannamli/', 'https://www.twitter.com/namlifurkan', 'https://www.facebook.com/namlifurkan',
            'https://www.linkedin.com/in/furkan-naml%C4%B1-484323b4/'));
        return view('desktop/social', ['links' => $links]);
    }
}
