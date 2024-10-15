<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use thiagoalessio\TesseractOCR\TesseractOCR;

class VaModTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://va-mod.ru')
                ->pause(3000)

                ->click('#open_menu')
                ->pause(500)

                ->click('#strelki_procent')
                ->pause(500)

                ->click('#strelki_check')
                ->pause(500)

                ->click('#open_menu')
                ->pause(500)

                ->select('#size', '60') // Seleccionando la opción M1
                ->pause(15000);

            // Capturar la data URL del canvas
            $canvasDataUrl = $browser->script('return document.getElementById("valx").toDataURL("image/png");')[0];

            // Extraer la parte base64 de la data URL
            $base64 = explode(',', $canvasDataUrl)[1]; // Obtén solo la parte base64

            // Decodificar la imagen desde base64
            $imageData = base64_decode($base64);

            // Procesar la imagen con Tesseract OCR
            $text = (new TesseractOCR($imageData))
                ->lang('eng') // Establecer el idioma
                ->run();

            echo $text;

            // Aquí puedes añadir lógica para notificar si el porcentaje es mayor al 89%
            if (strpos($text, '89%') !== false) {
                echo "Notificación: El porcentaje es mayor al 89%.";
            }
        });
    }
}
