<?php

namespace DC\Bundler\JSMin;

class JSMinTransformer implements \DC\Bundler\ITransformer {

    /**
     * @inheritdoc
     */
    function getName()
    {
        return "jsmin";
    }

    /**
     * @inheritdoc
     */
    function transform(\DC\Bundler\Content $content, $file = null)
    {
        return new \DC\Bundler\Content($this->getOutputContentType(), \JSMin::minify($content->getContent()));
    }

    /**
     * @inheritdoc
     */
    function getOutputContentType()
    {
        return "application/javascript";
    }

    /**
     * @inheritdoc
     */
    function runInDebugMode()
    {
        return false;
    }

    public static function registerWithContainer(\DC\IoC\Container $container) {
        $container
            ->register('\DC\Bundler\JSMin\JSMinTransformer')
            ->to('\DC\Bundler\ITransformer');
    }
}