<?php

/* blocks/flash_messages.html.twig */
class __TwigTemplate_b5ae662be43d0d4863e12660e7f102e8590a88e169a6c910ddc7d864c2c11e87 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "success_messages", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "success_messages", array())) > 0))) {
            // line 2
            echo "    <div class=\"alert alert-dismissable alert-success\">
        <ul>
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "success_messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
                // line 5
                echo "                <li>";
                echo $context["success_message"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </ul>
    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "warning_messages", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "warning_messages", array())) > 0))) {
            // line 12
            echo "    <div class=\"alert alert-dismissable alert-warning\">
        <ul>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "warning_messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["warning_message"]) {
                // line 15
                echo "                <li>";
                echo $context["warning_message"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    </div>
";
        }
        // line 20
        echo "
";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "error_messages", array(), "any", true, true) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "error_messages", array())) > 0))) {
            // line 22
            echo "    <div class=\"alert alert-dismissable alert-danger\">
        <ul>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash_messages"] ?? null), "error_messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
                // line 25
                echo "                <li>";
                echo $context["error_message"];
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "blocks/flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  83 => 25,  79 => 24,  75 => 22,  73 => 21,  70 => 20,  65 => 17,  56 => 15,  52 => 14,  48 => 12,  46 => 11,  43 => 10,  38 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/flash_messages.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\blocks\\flash_messages.html.twig");
    }
}
