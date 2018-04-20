<?php

/* blocks/pages_menu.html.twig */
class __TwigTemplate_e9ac9809535f435ad8dc357c376b4efd6e195dff64be1566bcefbacf2836f976 extends Twig_Template
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
        echo "<nav class=\"float-right\">
    <ul class=\"nav nav-pills\">
        <li><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "contact", array()), "html", null, true);
        echo "\">Contact</a></li>
        <li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "about_us", array()), "html", null, true);
        echo "\">Over ons</a></li>
        <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "support", array()), "html", null, true);
        echo "\">Support en FAQ</a></li>
        <!--<li><a href=\"<?= route('account', ['locale' => loc()]); ?>\"></a></li>-->
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "blocks/pages_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/pages_menu.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\blocks\\pages_menu.html.twig");
    }
}
