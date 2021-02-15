<?php namespace Dmrch\Lgpd\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'dmrch_lgpd_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';


    public function initSettingsData(){
        $this->text = "<p>Utilizamos cookies essenciais e tecnologias semelhantes de acordo com a nossa <a href='politica-de-privacidade'>Política de Privacidade</a> e <a href='termos-de-uso'>Termos de Uso</a> e, ao continuar navegando, você concorda com estas condições.</p>";

        $this->btn_label = 'ACEITAR';

        $this->css = '.dmrch-lgpd {
        position: fixed !important;
        padding: 20px;
        width: 100%;
        bottom: 0;
        z-index: 99999;
    }

    .dmrch-lgpd .content {
        width: 100%;
        margin: auto;
        font-size: 13px;
        background: rgba(0,0,0,.8);
        color: #fff;
        display: flex;
        justify-content: space-around;      
    }

    .dmrch-lgpd .content p {
        display: inline-block;
        padding: 15px 5px;
        margin: 0;
    }

    .dmrch-lgpd .content a {
        color: #fff;
        text-decoration: underline;
        display: inline-block;
    }

    .dmrch-lgpd .content .btn {
        text-decoration: none;
        background: #fff;
        border-radius: 0;
        color: #333;
        font-weight: bold;
        font-size: 16px;
        height: 27px;
        margin: 12px 10px;
        padding: 0px 30px;
        opacity: .6;
    }

    @media screen and (max-width: 991px) {

        .dmrch-lgpd {
            padding: 10px;
        }

        .dmrch-lgpd .content {
            text-align: center; 
            display: block; 
            font-size: 12px;
        } 

        .dmrch-lgpd .content p {
            padding: 10px;
        }

        .dmrch-lgpd .content .btn {
            margin: 5px 5px 10px 5px;
        }
    }';
    }
}