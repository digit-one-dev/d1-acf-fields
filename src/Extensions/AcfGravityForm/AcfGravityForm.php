<?php
/*
Plugin Name: Advanced Custom Fields: Gravity Forms Field
Plugin URI: https://github.com/stormuk/Gravity-Forms-ACF-Field
Description: ACF field to select one or many Gravity Forms
Version: 1.1.0
Author: @adam_pope of @stormuk
Author URI: http://www.stormconsultancy.co.uk
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

// $version = 5 and can be ignored until ACF6 exists
namespace DigitOne\Acf\Extensions\AcfGravityForm;

class AcfGravityForm
{
    private $version = 5;

    public function __construct($version)
    {
        $this->setVersion($version);
        $this->include_field_types_Gravity_Forms($this->version);
        add_action('acf/include_field_types', [ $this, 'include_field_types_Gravity_Forms' ]);
        //$this->register_fields_Gravity_Forms();
        //add_action('acf/register_fields',  [ $this, 'register_fields_Gravity_Forms' ]);
        $this->gff_activate();
        register_activation_hook(__FILE__, [ $this, 'gff_activate' ]);
    }

    public function include_field_types_Gravity_Forms($version)
    {
        include_once('gravity_forms-v5.php');
    }

    public function register_fields_Gravity_Forms()
    {
        include_once('gravity_forms-v4.php');
    }

    //Added to check if Gravity Forms is installed on activation.
    public function gff_activate()
    {
        if (class_exists('RGFormsModel')) {
            return true;
        } else {
            $html = '<div class="error">';
            $html .= '<p>';
            $html .= _e('Warning: Gravity Forms is not installed or activated. This plugin does not function without Gravity Forms!');
            $html .= '</p>';
            $html .= '</div>';
            echo $html;
        }
    }

    private function setVersion($version)
    {
        $this->version = $version;
    }
}
