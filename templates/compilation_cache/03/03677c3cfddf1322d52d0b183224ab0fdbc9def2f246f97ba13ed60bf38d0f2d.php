<?php

/* layouts/footer.html.twig */
class __TwigTemplate_0fbdd258fe4ef317a47277aa03e46ae8878e5cef43f2b30b05e9ac33831f3d23 extends Twig_Template
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
        echo "
<footer class=\"footer\">
    <div class=\"ftrtop\">
        <a href=\"/\"><img class=\"col-sm-2 mb-3\" src=\"/images/logo/logo.png\" alt=\"";
        // line 4
        if (array_key_exists("site_name", $context)) {
            echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        }
        echo "\"/></a>
        <div class=\"col-sm-8 mb-3\">
            <ul>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
                <li><a href=\"\">dasdsad</a></li>
            </ul>
        </div>
        <div class=\"col-sm-2 mb-3 social\">
            <a href=\"#\" class=\"fa fa-facebook\"></a>
            <a href=\"#\" class=\"fa fa-twitter\"></a>
            <a href=\"#\" class=\"fa fa-google\"></a>
            <a href=\"#\" class=\"fa fa-linkedin\"></a>
        </div>
    </div>
    <div class=\"col-sm-12 mb-3 ftrbtm\">
        <p>© ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Alle prijzen zijn inclusief BTW - Merknamen zijn alleen gebruikt om de toepasbaarheid van producten aan te geven en dienen verder niet te worden geassocieerd met ";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo "</p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "layouts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/footer.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\layouts\\footer.html.twig");
    }
}
