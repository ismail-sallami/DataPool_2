<?php

/* TyreTyreBundle:Default:index.html.twig */
class __TwigTemplate_761cdb773ae097b713968a75519090c5e20b67ddeb2b92b27157bf0911d844c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Tyre24</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tyretyre/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tyretyre/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tyretyre/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        </head>

        <body>

";
        // line 19
        $this->displayBlock('container', $context, $blocks);
        // line 21
        echo "
        </body>
    </html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 19
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TyreTyreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  60 => 13,  54 => 21,  52 => 19,  46 => 15,  44 => 13,  40 => 12,  36 => 11,  21 => 1,  75 => 39,  72 => 38,  69 => 37,  32 => 10,  29 => 2,);
    }
}
