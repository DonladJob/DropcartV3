<?php

/* product.html.twig */
class __TwigTemplate_dc4d8a65c0a67362b02c79066fd74c80f1031654124466b44ee3c4ad0f317229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "product.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"row\" style=\"margin-top: 50px\">
        <div class=\"col-md-4 center\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
        echo "\" class=\"fill\">
        </div>
        <div class=\"col-md-6\">
            <h3>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "name", array()), "html", null, true);
        echo "</h3>

            <!-- PRODUCT DESCRIPTION -->
            <p >";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "description", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "description", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "name", array()) . " wordt binnen 24 uur verzonden mits op voorraad. Dat is de service van ") . ($context["site_name"] ?? null)) . "!"))), "html", null, true);
        echo "</p>

            <!-- PRODUCT STOCK -->
            <div class=\"float-left stock-shipping-status\">
                ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "stock", array())) {
            // line 19
            echo "
                    ";
            // line 20
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "stock", array()) > 10)) {
                // line 21
                echo "                        <div class=\"label label-success\">Ruimschoots op voorraad</div>
                    ";
            } else {
                // line 23
                echo "                        <div class=\"label label-success\">Op voorraad</div>
                    ";
            }
            // line 25
            echo "
                    ";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array())) {
                // line 27
                echo "                        <div class=\"label label-info\">Levertijd ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array()), "html", null, true);
                echo " werkdag(en)</div>
                    ";
            } else {
                // line 29
                echo "                        <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                    ";
            }
            // line 31
            echo "                ";
        } else {
            // line 32
            echo "                    <div class=\"label label-warning\">Niet op voorraad</div>
                ";
        }
        // line 34
        echo "            </div>

            <div class=\"clearfix\"></div>
        </div>

        <!-- PRODUCT PRICE -->
        <div class=\"col-md-2\" style=\"height: 243px;\">

            ";
        // line 42
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "price_details", array())) {
            // line 43
            echo "                <h3 class=\"price\">
                    &euro;&nbsp;";
            // line 44
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
            echo "
                    ";
            // line 46
            echo "                    ";
            // line 47
            echo "                    ";
            // line 48
            echo "                </h3>
                <p class=\"float-clear\">
                    <small><em>Inclusief BTW</em></small>
                </p>
                <div>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_add", array()) . twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "id", array())), "html", null, true);
            echo "/1\" class=\"btn btn btn-block btn-success order-link\">
                        Bestellen <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                    </a>
                </div>

                <!-- PRODUCT INFO -->
                <div class=\"product-details\">
                    <table class=\"product-id-table\">
                        <tr>
                            <th>EAN</th>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "ean", array()), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <th>SKU</th>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "sku", array()), "html", null, true);
            echo "</td>
                        </tr>
                    </table>
                </div>
            ";
        }
        // line 72
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 72,  143 => 67,  136 => 63,  123 => 53,  116 => 48,  114 => 47,  112 => 46,  108 => 44,  105 => 43,  103 => 42,  93 => 34,  89 => 32,  86 => 31,  82 => 29,  76 => 27,  74 => 26,  71 => 25,  67 => 23,  63 => 21,  61 => 20,  58 => 19,  56 => 18,  49 => 14,  43 => 11,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\product.html.twig");
    }
}
