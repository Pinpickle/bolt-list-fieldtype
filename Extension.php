<?php

namespace Bolt\Extension\Pinpickle\ListType;

use Bolt\Application;
use Bolt\BaseExtension;


class Extension extends BaseExtension
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->getFields()->addField(new ListField());

        if ($this->app['config']->getWhichEnd()=='backend') {
            $this->app['htmlsnippets'] = true;
            $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
        }
    }


    public function initialize() {
        $this->addCss('assets/extension.css');
        $this->addJavascript('assets/start.js', true);
    }

    public function getName()
    {
        return "List Fieldtype";
    }

}






