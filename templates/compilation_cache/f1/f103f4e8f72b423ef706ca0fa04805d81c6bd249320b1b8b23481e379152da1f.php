<?php

/* blocks/main_menu.html.twig */
class __TwigTemplate_c8cddecd0bf35f732776a32958fc994abf148a8c763c576e64c5f48d11b3a24d extends Twig_Template
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
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        // line 5
        echo "        ";
        // line 6
        echo "            ";
        // line 7
        echo "                ";
        // line 8
        echo "            ";
        // line 9
        echo "        ";
        // line 10
        echo "
        ";
        // line 12
        echo "            ";
        // line 13
        echo "                ";
        // line 14
        echo "            ";
        // line 15
        echo "        ";
        // line 16
        echo "            ";
        // line 17
        echo "        ";
        // line 18
        echo "
        ";
        // line 20
        echo "        ";
        // line 21
        echo "            ";
        // line 22
        echo "                ";
        // line 23
        echo "                   ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "                    ";
        // line 27
        echo "                        ";
        // line 28
        echo "                            ";
        // line 29
        echo "                                ";
        // line 30
        echo "                            ";
        // line 31
        echo "                        ";
        // line 32
        echo "                    ";
        // line 33
        echo "                ";
        // line 34
        echo "            ";
        // line 35
        echo "        ";
        // line 36
        echo "    ";
        // line 38
        echo "
        <!-- ---------------------------------------------------------------------------- -->

<!-- Category menu 2 -->
";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "        ";
        // line 46
        echo "            ";
        // line 47
        echo "                ";
        // line 48
        echo "            ";
        // line 49
        echo "        ";
        // line 50
        echo "        ";
        // line 51
        echo "            ";
        // line 52
        echo "                ";
        // line 53
        echo "            ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "
        ";
        // line 59
        echo "        ";
        // line 60
        echo "            ";
        // line 61
        echo "                ";
        // line 62
        echo "                   ";
        // line 63
        echo "                ";
        // line 64
        echo "                ";
        // line 65
        echo "                    ";
        // line 66
        echo "                        ";
        // line 67
        echo "                            ";
        // line 68
        echo "                                ";
        // line 69
        echo "                            ";
        // line 70
        echo "                        ";
        // line 71
        echo "                    ";
        // line 72
        echo "                ";
        // line 73
        echo "            ";
        // line 74
        echo "        ";
        // line 75
        echo "        ";
        // line 76
        echo "
            ";
        // line 78
        echo "                ";
        // line 79
        echo "                    ";
        // line 80
        echo "                ";
        // line 81
        echo "            ";
        // line 82
        echo "
            ";
        // line 84
        echo "                ";
        // line 85
        echo "                    ";
        // line 86
        echo "                        ";
        // line 87
        echo "                               ";
        // line 88
        echo "                        ";
        // line 89
        echo "                            ";
        // line 90
        echo "                                ";
        // line 91
        echo "                                ";
        // line 92
        echo "                            ";
        // line 93
        echo "                        ";
        // line 94
        echo "                    ";
        // line 95
        echo "                ";
        // line 96
        echo "            ";
        // line 97
        echo "        ";
        // line 98
        echo "    ";
        // line 100
        echo "
        <!-- ---------------------------------------------------------------------------- -->

<!-- Category menu 3 -->
<nav id=\"fixedheader\" class=\"navbar navbar-default nav-3\">
    <!-- NAV STYLES -->
    <ul class=\"nav nav-justified nav-plain\">
        <li class=\"no-stretch\">
            <a href=\"/\">
                <b class=\"glyphicon glyphicon-home\"></b>
            </a>
        </li>
        ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["categories"] ?? null), 0, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 113
            echo "            <li>
                <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "category_products", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</a>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "            <li style=\"text-align: center; font-weight: bold\">Geen categorieën</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
        <!-- Add additional categories to a dropdown -->
        ";
        // line 121
        if ((twig_length_filter($this->env, ($context["categories"] ?? null)) > 2)) {
            // line 122
            echo "            <li role=\"presentation\" class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">Meer<span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["categories"] ?? null), 2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 128
                echo "                        <li>
                            <a href=\"";
                // line 129
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "category_products", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array())), "html", null, true);
                echo "\">
                                ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                </ul>
            </li>
        ";
        }
        // line 137
        echo "        <li id=\"search\" class=\"hidden\">
            <form class=\"form-horizontal search-products\" method=\"get\" action=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "products", array()), "html", null, true);
        echo "\">

                ";
        // line 140
        if (array_key_exists("selected_brands", $context)) {
            // line 141
            echo "                    ";
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
                // line 142
                echo "                        <input type=\"hidden\" name=\"brands[";
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
            // line 144
            echo "                ";
        }
        // line 145
        echo "
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <div class=\"search input-group\" data-initialize=\"search\" role=\"search\">
                            <input id=\"query\" name=\"query\" class=\"form-control\"
                                   placeholder=\"Naam, beschrijving, EAN of SKU\" type=\"search\" value=\"\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\">
                                    <span class=\"glyphicon glyphicon-search\"></span>
                                    <span class=\"sr-only\">Zoeken</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "blocks/main_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 145,  325 => 144,  306 => 142,  288 => 141,  286 => 140,  281 => 138,  278 => 137,  273 => 134,  263 => 130,  259 => 129,  256 => 128,  252 => 127,  245 => 122,  243 => 121,  239 => 119,  232 => 117,  222 => 114,  219 => 113,  214 => 112,  200 => 100,  198 => 98,  196 => 97,  194 => 96,  192 => 95,  190 => 94,  188 => 93,  186 => 92,  184 => 91,  182 => 90,  180 => 89,  178 => 88,  176 => 87,  174 => 86,  172 => 85,  170 => 84,  167 => 82,  165 => 81,  163 => 80,  161 => 79,  159 => 78,  156 => 76,  154 => 75,  152 => 74,  150 => 73,  148 => 72,  146 => 71,  144 => 70,  142 => 69,  140 => 68,  138 => 67,  136 => 66,  134 => 65,  132 => 64,  130 => 63,  128 => 62,  126 => 61,  124 => 60,  122 => 59,  119 => 57,  117 => 56,  115 => 55,  113 => 54,  111 => 53,  109 => 52,  107 => 51,  105 => 50,  103 => 49,  101 => 48,  99 => 47,  97 => 46,  95 => 45,  93 => 44,  91 => 43,  85 => 38,  83 => 36,  81 => 35,  79 => 34,  77 => 33,  75 => 32,  73 => 31,  71 => 30,  69 => 29,  67 => 28,  65 => 27,  63 => 26,  61 => 25,  59 => 24,  57 => 23,  55 => 22,  53 => 21,  51 => 20,  48 => 18,  46 => 17,  44 => 16,  42 => 15,  40 => 14,  38 => 13,  36 => 12,  33 => 10,  31 => 9,  29 => 8,  27 => 7,  25 => 6,  23 => 5,  21 => 4,  19 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blocks/main_menu.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\blocks\\main_menu.html.twig");
    }
}
