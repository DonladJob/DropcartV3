<?php

/* layouts/header.html.twig */
class __TwigTemplate_7d7561ddffd34737790e5668a2f0f02b7dbc4733c0283dbff616cabfa7005a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">

    <div class=\"col-md-3\">
        <span style=\"height:10px; display: block\" aria-hidden=\"true\">&nbsp;</span>
        <div class=\"push-left\">
            ";
        // line 6
        if (($context["site_slug"] ?? null)) {
            // line 7
            echo "                <h4 class=\"slogan\" style=\"height: 40px\">";
            echo twig_escape_filter($this->env, ($context["site_slug"] ?? null), "html", null, true);
            echo "</h4>
            ";
        } else {
            // line 9
            echo "                <div style=\"height: 39px;\"></div>
            ";
        }
        // line 11
        echo "            <a href=\"/\"><img style=\"max-height: 94px; max-width: 275px;\"
                             src=\"/images/logo/logo.png\"
                             alt=\"";
        // line 13
        if (array_key_exists("site_name", $context)) {
            echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        }
        echo "\"/></a>
        </div>
    </div>

    <div class=\"col-md-5\">
        <form class=\"form-horizontal search-products\" method=\"get\"
              action=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "products", array()), "html", null, true);
        echo "\">

            ";
        // line 21
        if (array_key_exists("selected_brands", $context)) {
            // line 22
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["selected_brands"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 23
                echo "                    <input type=\"hidden\" name=\"brands[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), "html", null, true);
                echo "]\" value=\"";
                echo twig_escape_filter($this->env, $context["brand"], "html", null, true);
                echo "\"/>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
        }
        // line 26
        echo "
            <div class=\"form-group\">
                <div class=\"col-sm-12\">
                    <h5 class=\"global-search-title\">Zoek binnen assortiment</h5>
                    <div class=\"search input-group\" data-initialize=\"search\" role=\"search\">
                        <input id=\"query\" name=\"query\" class=\"form-control\"
                               placeholder=\"Naam, beschrijving, EAN of SKU\" type=\"search\" value=\"\">
                        <span class=\"input-group-btn\">
\t\t                        <button class=\"btn btn-default\" type=\"submit\">
\t\t                            <span class=\"glyphicon glyphicon-search\"></span>
\t\t                            <span class=\"sr-only\">Zoeken</span>
\t\t                        </button>
\t\t                    </span>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div class=\"col-md-4\">
        <div class=\"social\">
            <a href=\"#\" class=\"fa fa-facebook\"></a>
            <a href=\"#\" class=\"fa fa-twitter\"></a>
            <a href=\"#\" class=\"fa fa-google\"></a>
            <a href=\"#\" class=\"fa fa-linkedin\"></a>
        </div>
        <div class=\"push-right\">
            <!-- Pages menu -->
            ";
        // line 55
        $this->loadTemplate("blocks/pages_menu.html.twig", "layouts/header.html.twig", 55)->display($context);
        // line 56
        echo "            <div class=\"float-clear\"></div>

            <div id=\"cart\">
                <!-- Shopping cart -->
                ";
        // line 60
        $this->loadTemplate("blocks/shopping_cart.html.twig", "layouts/header.html.twig", 60)->display($context);
        // line 61
        echo "            </div>
        </div>
    </div>

</div>
<!-- Main menu -->
<div class=\"masthead\">
    ";
        // line 68
        $this->loadTemplate("blocks/main_menu.html.twig", "layouts/header.html.twig", 68)->display($context);
        // line 69
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 69,  150 => 68,  141 => 61,  139 => 60,  133 => 56,  131 => 55,  100 => 26,  97 => 25,  78 => 23,  60 => 22,  58 => 21,  53 => 19,  42 => 13,  38 => 11,  34 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/header.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\layouts\\header.html.twig");
    }
}
