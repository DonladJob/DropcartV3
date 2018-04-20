<?php

/* dynamic/post_js.html.twig */
class __TwigTemplate_7d43a701014c7f616177c9f141faee6fb40c5fddd46bd20a7e87a0f48ec93b2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'post_js' => array($this, 'block_post_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('post_js', $context, $blocks);
    }

    public function block_post_js($context, array $blocks = array())
    {
        // line 2
        echo "    <script>

        var header = document.getElementById(\"fixedheader\");
        var search = document.getElementById(\"search\");
        var content = document.getElementById(\"content\");
        var sticky = header.offsetTop;

        function stickyHeader() {
            if (window.pageYOffset >= sticky) {
                header.classList.add(\"sticky\");
                content.classList.add(\"content\");
                search.classList.remove(\"hidden\");
            } else {
                header.classList.remove(\"sticky\");
                content.classList.remove(\"content\");
                search.classList.add(\"hidden\");
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "dynamic/post_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "dynamic/post_js.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\dynamic\\post_js.html.twig");
    }
}
