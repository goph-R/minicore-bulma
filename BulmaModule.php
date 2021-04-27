<?php

class BulmaModule extends Module {
    
    const CONFIG_FONTAWESOME_URL = 'bulma.fontawesome_url';
    const DEFAULT_FONTAWESOME_URL = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css';
    const CONFIG_URL = 'bulma.url';
    const DEFAULT_URL = 'https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css';

    protected $id = 'minicore-bulma';

    public function __construct() {
        $framework = Framework::instance();
        $framework->changeClass('Form', 'BulmaForm');
        $framework->changeClass('SelectInput', 'BulmaSelectInput');
        $framework->changeClass('FileInput', 'BulmaFileInput');
    }
    
    public function init() {
        parent::init();
        $framework = Framework::instance();
        /** @var Router $router */
        //$router = $framework->get('router');
        /** @var View $view */
        $view = $framework->get('view');
        /** @var Translation $translation */
        $translation = $framework->get('translation');
        $translation->add('bulma', $this->getFolder().'translation');
        /** @var Config $config */
        $config = $framework->get('config');
        $view->addStyle($config->get(self::CONFIG_FONTAWESOME_URL, self::DEFAULT_FONTAWESOME_URL));
        $view->addStyle($config->get(self::CONFIG_URL, self::DEFAULT_URL));
        $view->addFolder(':form', $this->getFolder().'templates/form');
    }

}