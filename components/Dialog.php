<?php namespace Dmrch\Lgpd\Components;

use Cms\Classes\ComponentBase;
use Dmrch\Lgpd\Models\Settings;

class Dialog extends ComponentBase
{

    public $text;
    public $btn_label;
    public $css;


    public function componentDetails()
    {
        return [
            'name'        => 'Dialog Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->text = Settings::get('text');
        $this->btn_label = Settings::get('btn_label');
        $this->css = Settings::get('css');
    }
}
