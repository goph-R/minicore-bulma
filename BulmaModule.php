<?php

class BulmaModule extends Module {
    
    const CONFIG_FONTAWESOME_URL = 'bulma.fontawesome_url';
    const DEFAULT_FONTAWESOME_URL = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css';
    const CONFIG_URL = 'bulma.url';
    const DEFAULT_URL = 'https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css';

    /** @var Framework */
    protected $framework;
    protected $id = 'minicore-bulma';

    public function __construct(Framework $framework) {
        parent::__construct($framework);
        $framework->changeClass('Form', 'BulmaForm');
        $framework->changeClass('SelectInput', 'BulmaSelectInput');
        $this->framework = $framework;
    }
    
    public function init() {
        /** @var Router $router */
        $router = $this->framework->get('router');
        /** @var View $view */
        $view = $this->framework->get('view');
        /** @var Config $config */
        $config = $this->framework->get('config');
        $view->addStyle($config->get(self::CONFIG_FONTAWESOME_URL, self::DEFAULT_FONTAWESOME_URL));
        $view->addStyle($config->get(self::CONFIG_URL, self::DEFAULT_URL));
        $view->addFolder(':form', 'modules/minicore-bulma/templates/form');
    }

}