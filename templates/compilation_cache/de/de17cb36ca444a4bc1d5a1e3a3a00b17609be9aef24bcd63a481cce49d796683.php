<?php

/* layouts/layout.html.twig */
class __TwigTemplate_274306694ff26e8953cee532a76b47a10e09b4b26388455b1c860e2c0a6e9582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'pre_js' => array($this, 'block_pre_js'),
            'content' => array($this, 'block_content'),
            'post_js' => array($this, 'block_post_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"index,follow\">

    <title>
        ";
        // line 10
        if (array_key_exists("page_title", $context)) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
            echo " -
        ";
        } elseif (        // line 12
array_key_exists("title", $context)) {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo " -
        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if (array_key_exists("site_name", $context)) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
            echo "
        ";
        } else {
            // line 19
            echo "            Een Dropcart webshop
        ";
        }
        // line 21
        echo "    </title>

    <!-- STYLES -->
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
    <!-- PRE JS SCRIPTS -->
    ";
        // line 29
        $this->displayBlock('pre_js', $context, $blocks);
        // line 32
        echo "</head>

<body onscroll=\"stickyHeader()\">

<div class=\"colorgraph\"></div>

<!-- CONTAINER -->
";
        // line 40
        echo "
    <div class=\"body\">
        <div class=\"container\">
            <!-- Include header.html.twig -->
            ";
        // line 44
        $this->loadTemplate("layouts/header.html.twig", "layouts/layout.html.twig", 44)->display($context);
        // line 45
        echo "
            <!-- Content block -->
            <div id=\"content\">
                ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            </div>
        </div>

        <div class=\"push\"></div>
    </div>

    <div class=\"container\">
        ";
        // line 57
        $this->loadTemplate("layouts/footer.html.twig", "layouts/layout.html.twig", 57)->display($context);
        // line 58
        echo "    </div>

";
        // line 61
        echo "<!-- / CONTAINER -->

<!-- POST JS SCRIPTS -->
";
        // line 64
        $this->displayBlock('post_js', $context, $blocks);
        // line 67
        echo "
</body>
</html>";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->loadTemplate("dynamic/styles.html.twig", "layouts/layout.html.twig", 25)->display($context);
        // line 26
        echo "    ";
    }

    // line 29
    public function block_pre_js($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->loadTemplate("dynamic/pre_js.html.twig", "layouts/layout.html.twig", 30)->display($context);
        // line 31
        echo "    ";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "                ";
    }

    // line 64
    public function block_post_js($context, array $blocks = array())
    {
        // line 65
        echo "    ";
        $this->loadTemplate("dynamic/post_js.html.twig", "layouts/layout.html.twig", 65)->display($context);
    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 65,  156 => 64,  152 => 49,  149 => 48,  145 => 31,  142 => 30,  139 => 29,  135 => 26,  132 => 25,  129 => 24,  123 => 67,  121 => 64,  116 => 61,  112 => 58,  110 => 57,  101 => 50,  99 => 48,  94 => 45,  92 => 44,  86 => 40,  77 => 32,  75 => 29,  71 => 27,  69 => 24,  64 => 21,  60 => 19,  54 => 17,  52 => 16,  49 => 15,  43 => 13,  41 => 12,  36 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/layout.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\layouts\\layout.html.twig");
    }
}
