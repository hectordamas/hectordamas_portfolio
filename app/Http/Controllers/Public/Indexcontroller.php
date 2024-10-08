<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Mail;
use Exception;

class IndexController extends Controller
{
    public function index(){

        $experiences = collect([
            (object)[
                'position' => 'Chief Technology Officer (CTO)',
                'company' => 'CiudadGPS',
                'start_date' => 'Ene 2023',
                'end_date' => 'Jul 2024',
                'description' => 'Lideré el desarrollo del MVP (web y móvil), seleccioné tecnologías clave, formé el equipo inicial, y diseñé campañas de marketing digital.',
            ],
            (object)[
                'position' => 'Full Stack Developer',
                'company' => 'Grupo Empresarial Frelat',
                'start_date' => 'Jul 2022',
                'end_date' => 'Ene 2023',
                'description' => 'Desarrollé software de gestión empresarial, incluyendo herramientas de inventario y manejo de proyectos.',
            ],
            (object)[
                'position' => 'Full Stack Developer',
                'company' => 'Comercializadora GrupoPlus+',
                'start_date' => 'Mar 2019',
                'end_date' => 'Jul 2022',
                'description' => 'Mantenimiento de la web, app móvil y sistema administrativo, además del diseño de landing pages comerciales.',
            ],
            (object)[
                'position' => 'Full Stack Developer',
                'company' => 'Servicios Logísticos Trex',
                'start_date' => 'Sept 2020',
                'end_date' => 'Dic 2020',
                'description' => 'Desarrollé un sistema de control de transporte para maquinaria electoral.',
            ],
            (object)[
                'position' => 'Full Stack Developer',
                'company' => 'Imagen361°',
                'start_date' => 'Sept 2018',
                'end_date' => 'Mar 2019',
                'description' => 'Desarrollo de tiendas en línea y páginas personalizadas para clientes.',
            ],
            (object)[
                'position' => 'Técnico Electrónico',
                'company' => 'SUPERCABLE ALK INTERNACIONAL S.A.',
                'start_date' => 'Mar 2018',
                'end_date' => 'Jul 2018',
                'description' => 'Reparación de equipos electrónicos en laboratorio.',
            ],
        ]);

        $projects = collect([
            [
                'name' => 'CiudadGPS - Directorio de Comercios.',
                'image' => asset('projectImages/ciudadgps.jpg'),
                'description' => 'Es una plataforma web / mobile que permite a usuarios encontrar comercios cercanos a su ubicación. las empresas afilidadas a la plataforma tenian acceso a crear su tienda en línea vinculada a whatsapp y a subir anuncios a la bolsa de empleos de la comunidad. En este proyecto fue puesto en funcionamiento el consumo y distribución de una API Rest con JWT para autenticación de usuarios',
                'link' => 'https://ciudadgps.com',
                'github_page' => 'https://github.com/hectordamas/ciudadgps-laravel',
                'stack' => [
                    'Laravel', 'React Native', 'MySQL'
                ],
            ],
            [
                'name' => 'PlusControl - App para monitorear y controlar el consumo de agua.',
                'image' => asset('projectImages/pluscontrol.jpg'),
                'description' => 'Es un sistema IOT que permite medir el nivel de agua, presión y consumo de tanques residenciales. Además permite racionar de forma automatizada y remota el suministro de agua por medio de cronogramas de racionamiento. Todas estas características son monitoreadas y controladas por medio de una app móvil.',
                'link' => 'https://pluscontrolve.com',
                'github_page' => 'https://github.com/hectordamas/pluscontrol-laravel',
                'stack' => [
                    'Laravel', 'React Native', 'C++'
                ]    
            ],
            [
                'name' => 'CA3 - Sistema de Control de envíos internacionales.',
                'image' => asset('projectImages/ca3.jpg'),
                'description' => 'Este sitio web a su vez sistema de control para courier tenía por objetivo monitorear y registrar el proceso de logística envíos internacionales puerta a puerta.',
                'stack' => [
                    'Laravel', 'Javascript'
                ],
                'link' => 'https://ca3teamcargo.com',
            ],
            [
                'name' => 'Fibersolutions - Tienda en línea de productos de redes e iluminación.',
                'image' => asset('projectImages/fibersolutions.jpg'),
                'description' => 'Esta plataforma permite realizar compras en línea por parte del cliente y por parte del administrador gestionar productos, mensajes y órdenes.',
                'stack' => [
                    'Laravel', 'Javascript'
                ],
                'link' => 'https://fibersolutions.com.ve',
            ],
            [
                'name' => 'Airanza Sex Shop - Tienda en línea de juquetes para adultos.',
                'image' => asset('projectImages/airanzasexshop.jpg'),
                'description' => 'Esta plataforma permite realizar compras en línea por parte del cliente y por parte del administrador gestionar productos, mensajes y órdenes.',
                'stack' => [
                    'Laravel', 'Javascript'
                ],
                'link' => 'https://airanzasexshop.elearnigve.site',
            ],
            [
                'name' => 'Andrade Sports Group - Página corporativa en WordPress.',
                'image' => asset('projectImages/andradesportsgroup.jpg'),
                'description' => 'Esta plataforma permite realizar compras en línea por parte del cliente y por parte del administrador gestionar productos, mensajes y órdenes.',
                'stack' => [
                    'WordPress', 'Elementor',
                ],
                'link' => 'https://andradesportsgroup.com',
            ],

        ])->map(function ($project) {
            return (object) $project;
        });

        $certifications = collect([
            [
                'name' => 'Curso de Introducción al Desarrollo Web - Google Actívate', 
                'url' => 'Certificados/certificado-desarrollo-web.pdf'
            ],
            [
                'name' => 'Curso Básico de Marketing Digital - Google Actívate', 
                'url' => 'Certificados/certificado-marketing-digital.pdf'
            ],
            [
                'name' => 'Curso de Productividad en La Era Digital - Google Actívate', 
                'url' => 'Certificados/Curso de Productividad Personal en la Era Digital.pdf'
            ],
            [
                'name' => 'Curso de Comercio Electrónico - Google Actívate', 
                'url' => 'Certificados/Curso E-Commerce.pdf'
            ],
            [
                'name' => 'Carrera de Backend con Ruby - Platzi', 
                'url' => 'Certificados/diploma-backend-ruby.pdf'
            ],
            [
                'name' => 'Carrera de Backend Profesional - Platzi', 
                'url' => 'Certificados/diploma-backend.pdf'
            ],
            [
                'name' => 'Carrera de Bases de Datos - Platzi', 
                'url' => 'Certificados/diploma-base-de-datos.pdf'
            ],
            [
                'name' => 'Curso de CSS Grid Layout - Platzi', 
                'url' => 'Certificados/diploma-css-grid-layout.pdf'
            ],
            [
                'name' => 'Curso de PHP con Laravel - Platzi', 
                'url' => 'Certificados/diploma-curso-php-laravel-2017.pdf'
            ],
            [
                'name' => 'Carrera de Desarrollo con PHP - Platzi', 
                'url' => 'Certificados/diploma-desarrollo-php.pdf'
            ],
            [
                'name' => 'Carrera de Desarrollo con React - Platzi', 
                'url' => 'Certificados/diploma-desarrollo-react.pdf'
            ],
            [
                'name' => 'Carrera de Desarrollo con Wordpress - Platzi', 
                'url' => 'Certificados/diploma-desarrollo-wordpress.pdf'
            ],
            [

                'name' => 'Curso de Fundamentos de JavaScript - Platzi', 
                'url' => 'Certificados/diploma-fundamentos-javascript-2017.pdf'
            ],
            [

                'name' => 'Curso de Git y GitHub - Platzi', 
                'url' => 'Certificados/diploma-git-github.pdf'
            ],
            [

                'name' => 'Curso de Desarrollo Web - Platzi', 
                'url' => 'Certificados/diploma-html5-css3-2016.pdf'
            ],
            [

                'name' => 'Curso de JQuery - Platzi', 
                'url' => 'Certificados/diploma-javascript-jquery-2015.pdf'
            ],
            [

                'name' => 'Curso de Marca Personal - Platzi', 
                'url' => 'Certificados/diploma-marca-personal.pdf'
            ],
            [

                'name' => 'Curso de Marketing Voz a Voz - Platzi', 
                'url' => 'Certificados/diploma-marketing-voz.pdf'
            ],
            [

                'name' => 'Curso Básico de Photoshop - Platzi', 
                'url' => 'Certificados/diploma-photoshop-basico-2015.pdf'
            ],
            [

                'name' => 'Curso de PHP - Platzi', 
                'url' => 'Certificados/diploma-php-2017.pdf'
            ],
            [

                'name' => 'Curso de Postgresql - Platzi', 
                'url' => 'Certificados/diploma-postgresql-2017.pdf'
            ],
            [

                'name' => 'Curso de Programación Básica - Platzi', 
                'url' => 'Certificados/diploma-programacion-basica.pdf'
            ],
            [

                'name' => 'Curso de React - Platzi', 
                'url' => 'Certificados/diploma-react.pdf'
            ],
            [

                'name' => 'Curso de Redux - Platzi', 
                'url' => 'Certificados/diploma-redux.pdf'
            ],
            [

                'name' => 'Curso de Ruby - Platzi', 
                'url' => 'Certificados/diploma-ruby-2017.pdf'
            ],
            [

                'name' => 'Curso de Ruby Básico - Platzi', 
                'url' => 'Certificados/diploma-ruby-basico-2015.pdf'
            ],
            [

                'name' => 'Curso de Ruby on Rails - Platzi', 
                'url' => 'Certificados/diploma-ruby-on-rails-2017.pdf'
            ],
            [

                'name' => 'Curso de SQL y MySQL - Platzi', 
                'url' => 'Certificados/diploma-sql-mysql-2016.pdf'
            ],
            [

                'name' => 'Curso de WordPress - Platzi', 
                'url' => 'Certificados/diploma-wordpress.pdf'
            ],
            [

                'name' => 'Curso de WordPress - Platzi', 
                'url' => 'Certificados/diploma-wordpress2016.pdf'
            ],
            [

                'name' => 'Curso de Inglés Básico - Platzi', 
                'url' => 'Certificados/diploma-ingles-basico-principiantes.pdf'
            ],
        ])->map(function ($c) {
            return (object) $c;
        });

        return view('welcome', [
            'projects' => $projects,
            'experiences' => $experiences,
            'certifications' => $certifications

        ]);

    }

    public function sendMessage(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);

        $data = $request->all();

        try{
            Mail::to(env('MAIL_TO_ADDRESS'))->send(ContactFormMail($request->all()));
        }catch(Exception $e){
            Log::error('Error enviando correo: ' . $e->getMessage());
        }
        
        return redirect()->back()->with('message', 'Tu mensaje ha sido enviado.');
    }
}
