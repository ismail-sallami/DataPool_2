<?php

/* TyreTyreBundle:Default:detail.html.twig */
class __TwigTemplate_4f60e5efadcf16ea282dd642979c88737dc02c230b95137630bed409aa0bf7da extends Twig_Template
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

        .table {
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
        .image-product {
            height: 100px;
        }
    .container{
        background-color: white;
        padding: 0px 15px 0px 15px !important
    }
    .new-search{
        float: right;
        margin: -45px 25px 15px 11px;
    }
    .new-search > a img{
        width: 40px;
    }
       
        

    </style>
";
    }

    // line 41
    public function block_container($context, array $blocks = array())
    {
        // line 42
        echo "
<div class=\"container\" >
    <h2>Product details</h2>

    <div class=\"new-search\">
                <a style=\"font-size:18px;\"href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("tyre_tyre_search");
        echo "\">
                    <img src=\"http://imag.malavida.com/mvimgbig/download-s/visual-search-pony-9346-0.jpg\">
                    New Search
                </a>
            </div>

    ";
        // line 53
        if (((twig_length_filter($this->env, (isset($context["results"]) ? $context["results"] : $this->getContext($context, "results"))) == 0) && (twig_length_filter($this->env, (isset($context["xml_result"]) ? $context["xml_result"] : $this->getContext($context, "xml_result"))) == 0))) {
            // line 54
            echo "        <tr>
            <div class=\"alert alert-danger\">
                No matching results found!
            </div>
        </tr>
    ";
        } else {
            // line 60
            echo "        <table class=\"table\">
            <tr>
                <th style=\"text-align:center\">Product Title</th>
                <th style=\"text-align:center\">Product Name</th>
                <th style=\"text-align:center\">Product Image</th>
                <th style=\"text-align:center\">Product Price</th>
            </tr>
           ";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "                    <tr>
                        <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getManufacturer"), "html", null, true);
                echo "</td>
                        <td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getName"), "html", null, true);
                echo "</td>
                        <td style=\"text-align:center\"><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getProductImage"), "html", null, true);
                echo "\">
                                <img class=\"image-product\" src=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getProductImage"), "html", null, true);
                echo "\">
                            </a></td>
                        <td style=\"text-align:center\">";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPrice"), "html", null, true);
                echo "</td>
                    </tr>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "

            ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["xml_result"]) ? $context["xml_result"] : $this->getContext($context, "xml_result")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "                <tr>
                    <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "manufacturer"), "html", null, true);
                echo "</td>
                    <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "</td>
                    <td style=\"text-align:center\"><a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "product_image"), "html", null, true);
                echo "\">
                            <img class=\"image-product\"  src=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "product_image"), "html", null, true);
                echo "\">
                        </a></td>
                    <td style=\"text-align:center\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        </table>
    ";
        }
        // line 91
        echo "</div>
        ";
    }

    public function getTemplateName()
    {
        return "TyreTyreBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 91,  181 => 89,  172 => 86,  167 => 84,  163 => 83,  159 => 82,  155 => 81,  152 => 80,  148 => 79,  144 => 77,  135 => 74,  130 => 72,  126 => 71,  122 => 70,  118 => 69,  115 => 68,  111 => 67,  102 => 60,  94 => 54,  92 => 53,  83 => 47,  76 => 42,  73 => 41,  32 => 3,  29 => 2,);
    }
}
