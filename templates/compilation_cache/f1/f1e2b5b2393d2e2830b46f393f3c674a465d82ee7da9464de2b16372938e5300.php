<?php

/* blocks/shopping_cart.html.twig */
class __TwigTemplate_5aa60b431b68e68e8c5ad7afffea2d7673adc4e1a54b8127d3d9498aca77b9cf extends Twig_Template
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
        echo "<h3>
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart", array()), "html", null, true);
        echo "\" style=\"text-decoration: none;\">
        <span class=\"glyphicon glyphicon-shopping-cart\"></span> Winkelwagen
    </a>
</h3>
<div class=\"cart-content\">
    ";
        // line 7
        if ((array_key_exists("shopping_cart_overview", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_products", array()) > 0))) {
            // line 8
            echo "        <span class=\"cart-items\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_products", array()) . " artikel(en)"), "html", null, true);
            echo "</span>
        - <span class=\"cart-total\">&euro;&nbsp;<span class=\"cart-total-amount\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_price", array()), 2, ",", "."), "html", null, true);
            echo "</span></span>
    ";
        } else {
            // line 11
            echo "        <small><i>Geen producten</i></small>
    ";
        }
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "blocks/shopping_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  42 => 11,  37 => 9,  32 => 8,  30 => 7,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/shopping_cart.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\blocks\\shopping_cart.html.twig");
    }
}
