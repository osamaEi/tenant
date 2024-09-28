<?php

namespace Plugins\WidgetBuilder\Widgets;

use App\Facades\GlobalLanguage;
use App\Helpers\LanguageHelper;
use App\Helpers\SanitizeInput;
use App\PageBuilder\Traits\LanguageFallbackForPageBuilder;
use Plugins\PageBuilder\Fields\Repeater;
use Plugins\PageBuilder\Fields\Text;
use Plugins\PageBuilder\Helpers\RepeaterField;
use Plugins\WidgetBuilder\WidgetBase;
use Mews\Purifier\Facades\Purifier;

class ContactInfoWidget extends WidgetBase
{

    public function admin_render()
    {
        $output = $this->admin_form_before();
        $output .= $this->admin_form_start();
        $output .= $this->default_fields();

        $widget_saved_values = $this->get_settings();

        $output .= Text::get([
            'name' => 'title',
            'label' => __('Title'),
            'value' => $widget_saved_values['title'] ?? null
        ]);


        //repeater
        $output .= Repeater::get([
            'settings' => $widget_saved_values,
            'id' => 'footer_contact_info_landlord',
            'fields' => [
                [
                    'type' => RepeaterField::TEXT,
                    'name' => 'repeater_title',
                    'label' => __('Info')
                ],

                [
                    'type' => RepeaterField::ICON_PICKER,
                    'name' => 'repeater_icon',
                    'label' => __('Icon')
                ],
            ]
        ]);


        $output .= $this->admin_form_submit_button();
        $output .= $this->admin_form_end();
        $output .= $this->admin_form_after();

        return $output;
    }

    public function frontend_render()
    {
        // TODO: Implement frontend_render() method.
        $widget_saved_values = $this->get_settings();
        $widget_title = SanitizeInput::esc_html($widget_saved_values['title'] ?? '');

        $repeater_data = $widget_saved_values['footer_contact_info_landlord'] ?? [];

        $repeater_markup = '';
        if (array_key_exists('repeater_title_', $repeater_data))
        {
            foreach ($repeater_data['repeater_title_'] as $key => $url) {
                $r_title_url = SanitizeInput::esc_url($url) ?? '';
                $r_icon = array_key_exists('repeater_icon_', $repeater_data) ? $repeater_data['repeater_icon_'][$key] : '';

                $repeater_markup .= <<<SOCIALITEM
        <li class="list">
              <span class="address"> <i class="{$r_icon}"></i> {$r_title_url}</span>
        </li>
SOCIALITEM;

            }
        }


        return <<<HTML
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="footer-widget widget">
            <h6 class="widget-title">{$widget_title}</h6>
            <div class="footer-inner">
                <ul class="footer-link-address">
                    {$repeater_markup}
                </ul>

            </div>
        </div>
    </div>
HTML;


    }

    public function widget_title()
    {
        return __('Contact Info');
    }

    public function enable(): bool
    {
        return is_null(tenant()); // TODO: Change the autogenerated stub
    }

}
