<?php

/* TyreTyreBundle:Default:search.html.twig */
class __TwigTemplate_56d566b1b119c98c4a2a62efb6fe297b59e97188d3df6706d7fd4b53be55b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TyreTyreBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TyreTyreBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 400px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 37
    public function block_container($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"container\">
        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("tyre_tyre_search");
        echo "\" data-validate=\"parsley\">
            <h3 class=\"form-signin-heading\">
            <img src=\"http://imag.malavida.com/mvimgbig/download-s/visual-search-pony-9346-0.jpg\">
            Search your product</h3>
            <input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"search\" placeholder=\"Manufacturer, Product name\" required=\"required\">
            <br>
            
            <br>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Search</button>
          
        </form>
     
  


    </div> 
    
    ";
    }

    public function getTemplateName()
    {
        return "TyreTyreBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
