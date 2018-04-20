<?php

/* products.html.twig */
class __TwigTemplate_cea71fb03c709c60b83bad6024e7c78c26d88454a4115bf4a8dc5d59cc91736a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "products.html.twig", 1);
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
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, ((($context["page_title"] ?? null)) ? (($context["page_title"] ?? null)) : ("")), "html", null, true);
        echo "</h1>

    <div class=\"overview\">

    <div class=\"col-md-2 filter-box\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h5 class=\"panel-title\">Filter resultaten</h5>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["query_string"] ?? null), "html", null, true);
        echo "\" class=\"form-horizontal\">

                    <div class=\"form-group\">
                    <div class=\" col-sm-12\">

                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 21
            echo "                        <div class=\"checkbox\">
                            <label class=\"checkbox-custom\" id=\"brand-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), "html", null, true);
            echo "\">
                            <input name=\"brands[]\" type=\"checkbox\"
                            value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), "html", null, true);
            echo "\"";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()), ($context["selected_brands"] ?? null))) ? (" checked=\"checked\"") : (""));
            echo ">
                            <span class=\"checkbox-label\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "name", array()), "html", null, true);
            echo "</span>
                            </label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                    </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12\">
                            <div class=\"checkbox\">
                                <label class=\"checkbox-custom\" id=\"0\">
                                    <input name=\"show_unavailable_items\" type=\"checkbox\"
                                           value=\"true\" ";
        // line 38
        echo ((($context["show_unavailable"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo ">
                                    <span class=\"checkbox-label\">Toon ook niet voorraadige producten</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-12\">
                            <button type=\"submit\" class=\"btn btn-primary pull-left\">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"product-list col-md-10\">
        <!-- Search in category -->
        <form class=\"form-horizontal\">
            <!-- Save old selected brands input -->
            ";
        // line 59
        if (($context["selected_brands"] ?? null)) {
            // line 60
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
                // line 61
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
            // line 63
            echo "            ";
        }
        // line 64
        echo "            <div class=\"form-group\">
                <div class=\"col-sm-12\">
                    <h4>Zoeken binnen categorie</h4>
                    <div class=\"search-category input-group\" data-initialize=\"search\" role=\"search\">
                        <input id=\"query\" name=\"query\" class=\"form-control\" placeholder=\"Naam, beschrijving, EAN of SKU\"
                               type=\"search\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, ((($context["search_query"] ?? null)) ? (($context["search_query"] ?? null)) : ("")), "html", null, true);
        echo "\">
                        <span class=\"input-group-btn\">
\t\t        <button class=\"btn btn-default\" type=\"submit\">
\t\t          <span class=\"glyphicon glyphicon-search\"></span>
\t\t          <span class=\"sr-only\">Zoeken</span>
\t\t        </button>
\t\t        </span>
                    </div>

                </div>
            </div>
        </form>
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 82
            echo "            <!-- PRODUCT OVERVIEW -->
            <div class=\"row floating-box\">
                <!-- PRODUCT IMAGE -->
                <div class=\"col-md-3 center\">
                    <img src=\"";
            // line 86
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
            echo "\"
                         class=\"fill\">
                </div>

                <div class=\"col-md-7 color\">
                    <!-- PRODUCT TITLE -->
                    <h3><a class=\"product-link\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "product", array()) . twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()))) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo "</a></h3>

                    <!-- PRODUCT DESCRIPTION -->
                    <p class=\"pdesc\">";
            // line 95
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "description", array())) : ((((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()) . " wordt binnen 24 uur verzonden mits op voorraad. Dat is de service van ") . ($context["site_name"] ?? null)) . "!"))), "html", null, true);
            echo "</p>

                    <!-- PRODUCT INFO -->
                    <div class=\"float-right product-details\">
                        <table class=\"product-id-table\">
                            ";
            // line 101
            echo "                                ";
            // line 102
            echo "                                ";
            // line 103
            echo "                            ";
            // line 104
            echo "                            <tr>
                                <th>SKU</th>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "sku", array()), "html", null, true);
            echo "</td>
                            </tr>
                        </table>
                    </div>

                    <!-- PRODUCT STOCK -->
                    <div class=\"float-left stock-shipping-status\">
                        ";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "stock", array())) {
                // line 114
                echo "
                            ";
                // line 115
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "stock", array()) > 10)) {
                    // line 116
                    echo "                                <div class=\"label label-success\">Ruimschoots op voorraad</div>
                            ";
                } else {
                    // line 118
                    echo "                                <div class=\"label label-success\">Op voorraad</div>
                            ";
                }
                // line 120
                echo "
                            ";
                // line 121
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "shipping_details", array()), "shipping_days", array())) {
                    // line 122
                    echo "                                <div class=\"label label-info\">Levertijd ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "shipping_details", array()), "shipping_days", array()), "html", null, true);
                    echo " werkdag(en)</div>
                            ";
                } else {
                    // line 124
                    echo "                                <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                            ";
                }
                // line 126
                echo "                        ";
            } else {
                // line 127
                echo "                            <div class=\"label label-warning\">Niet op voorraad</div>
                        ";
            }
            // line 129
            echo "                    </div>
                    <div class=\"float-clear\"></div>
                </div>

                <!-- PRODUCT PRICE -->
                <div class=\"col-md-2 price-box\">

                    ";
            // line 136
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price_details", array())) {
                // line 137
                echo "                        <h3 class=\"price\">
                            &euro;&nbsp;";
                // line 138
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
                echo "
                            ";
                // line 140
                echo "                            ";
                // line 141
                echo "                            ";
                // line 142
                echo "                        </h3>
                        <p class=\"float-clear\">
                            <small><em>Inclusief BTW</em></small>
                        </p>
                        <div>
                            <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_add", array()) . twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "id", array())), "html", null, true);
                echo "/1\" class=\"btn btn btn-block btn-success order-link\">
                                In winkelwagen <span class=\"glyphicon glyphicon-shopping-cart\"></span>
                            </a>
                        </div>
                    ";
            }
            // line 152
            echo "
                </div>
            </div>
            <hr>
            ";
            // line 157
            echo "
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 159
            echo "            <div class=\"alert alert-info\">
                Geen producten beschikbaar
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </div>

    <div class=\"pagination-block\">
    <p class=\"info\">
    ";
        // line 167
        echo twig_escape_filter($this->env, (($context["per_page"] ?? null) . " resultaten op deze pagina"), "html", null, true);
        echo "
    ";
        // line 168
        echo twig_escape_filter($this->env, (("van de " . ($context["total"] ?? null)) . " in totaal."), "html", null, true);
        echo "
    </p>

    <ul class=\"pagination\">
    <!-- SELECTED BRAND PARAMETER URL (ADD URL PARAMETERS BELOW -->
    ";
        // line 174
        echo "    ";
        // line 175
        echo "    ";
        // line 176
        echo "    ";
        // line 177
        echo "    ";
        // line 178
        echo "    ";
        // line 179
        echo "
    ";
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        // line 183
        echo "    ";
        // line 184
        echo "    ";
        // line 185
        echo "    ";
        // line 186
        echo "
    <!-- PREVIOUS PAGE -->
    ";
        // line 188
        if (( !array_key_exists("current_page", $context) || (($context["current_page"] ?? null) < 2))) {
            // line 189
            echo "        <li class=\"disabled\"><span>Vorige</span></li>
    ";
        } else {
            // line 191
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null)) - 1)) : ((("?page=" . ($context["current_page"] ?? null)) - 1))), "html", null, true);
            echo "\" rel=\"previous\">Vorige</a></li>
    ";
        }
        // line 193
        echo "

    <!-- PAGES BEFORE CURRENT -->
    ";
        // line 196
        if ((($context["total_pages"] ?? null) == 1)) {
            // line 197
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == 1)) ? ("active") : (""));
            echo " disabled\"><a
        href=\"";
            // line 198
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((($context["query_string"] ?? null) . "&page=1")) : ("?page=1")), "html", null, true);
            echo "\">1</a></li>
    ";
        } else {
            // line 200
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == 1)) ? ("active") : (""));
            echo "\"><a
        href=\"";
            // line 201
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? ((($context["query_string"] ?? null) . "&page=1")) : ("?page=1")), "html", null, true);
            echo "\">1</a></li>
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if ((($context["current_page"] ?? null) > 1)) {
            // line 205
            echo "        ";
            if ((($context["current_page"] ?? null) > 3)) {
                // line 206
                echo "            <li class=\"disabled\"><span>...</span></li>
        ";
            }
            // line 208
            echo "
        ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(3, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                if (((($context["current_page"] ?? null) - $context["count"]) > 1)) {
                    // line 210
                    echo "            <li>
                <a href=\"";
                    // line 211
                    echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . (($context["current_page"] ?? null) - $context["count"]))) : (("?page=" . (($context["current_page"] ?? null) - $context["count"])))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($context["current_page"] ?? null) - $context["count"]), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "
        <!-- ACTIVE PAGE -->
        <li class=\"active\">
        <a href=\"";
            // line 217
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null))) : (("?page=" . ($context["current_page"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "</a>
        </li>

    ";
        }
        // line 221
        echo "
    ";
        // line 222
        if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
            // line 223
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((($context["current_page"] ?? null) + 1), (($context["current_page"] ?? null) + 3)));
            foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
                if (($context["count"] < ($context["total_pages"] ?? null))) {
                    // line 224
                    echo "            <li>
            <a href=\"";
                    // line 225
                    echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . $context["count"])) : (("?page=" . $context["count"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                    echo "</a>
            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "    ";
        }
        // line 229
        echo "
    ";
        // line 230
        if ((($context["current_page"] ?? null) < (($context["total_pages"] ?? null) - 2))) {
            // line 231
            echo "        <li class=\"disabled\"><span>...</span></li>
    ";
        }
        // line 233
        echo "
    ";
        // line 234
        if (((($context["total_pages"] ?? null) > 1) && (($context["current_page"] ?? null) < ($context["total_pages"] ?? null)))) {
            // line 235
            echo "        <li class=\"";
            echo (((($context["current_page"] ?? null) == ($context["total_pages"] ?? null))) ? ("active") : (""));
            echo "\"><a
        href=\"";
            // line 236
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["total_pages"] ?? null))) : (("?page=" . ($context["total_pages"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["total_pages"] ?? null), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        // line 239
        echo "
    ";
        // line 240
        if ((($context["current_page"] ?? null) < ($context["total_pages"] ?? null))) {
            // line 241
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, ((($context["query_string"] ?? null)) ? (((($context["query_string"] ?? null) . "&page=") . ($context["current_page"] ?? null))) : (("?page=" . ($context["current_page"] ?? null)))), "html", null, true);
            echo "\" rel=\"next\">Volgende</a></li>
    ";
        } else {
            // line 243
            echo "        <li class=\"disabled\"><span>Volgende</span></li>
    ";
        }
        // line 245
        echo "
    </ul>
    </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 245,  533 => 243,  527 => 241,  525 => 240,  522 => 239,  514 => 236,  509 => 235,  507 => 234,  504 => 233,  500 => 231,  498 => 230,  495 => 229,  492 => 228,  480 => 225,  477 => 224,  471 => 223,  469 => 222,  466 => 221,  457 => 217,  452 => 214,  440 => 211,  437 => 210,  432 => 209,  429 => 208,  425 => 206,  422 => 205,  420 => 204,  417 => 203,  412 => 201,  407 => 200,  402 => 198,  397 => 197,  395 => 196,  390 => 193,  384 => 191,  380 => 189,  378 => 188,  374 => 186,  372 => 185,  370 => 184,  368 => 183,  366 => 182,  364 => 181,  361 => 179,  359 => 178,  357 => 177,  355 => 176,  353 => 175,  351 => 174,  343 => 168,  339 => 167,  333 => 163,  324 => 159,  318 => 157,  312 => 152,  304 => 147,  297 => 142,  295 => 141,  293 => 140,  289 => 138,  286 => 137,  284 => 136,  275 => 129,  271 => 127,  268 => 126,  264 => 124,  258 => 122,  256 => 121,  253 => 120,  249 => 118,  245 => 116,  243 => 115,  240 => 114,  238 => 113,  228 => 106,  224 => 104,  222 => 103,  220 => 102,  218 => 101,  210 => 95,  202 => 92,  193 => 86,  187 => 82,  182 => 81,  167 => 69,  160 => 64,  157 => 63,  138 => 61,  120 => 60,  118 => 59,  94 => 38,  83 => 29,  73 => 25,  67 => 24,  62 => 22,  59 => 21,  55 => 20,  47 => 15,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "products.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\products.html.twig");
    }
}
