<?php

/* shopping_cart_overview.html.twig */
class __TwigTemplate_2b83d51937e52404e7152a9a10e5a6968ed6687a97264fd75d39a103328aa02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "shopping_cart_overview.html.twig", 1);
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
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h1>

    <ul class=\"nav nav-tabs order-tabs\">
        <li class=\"active\">
            <a href=\"javascript:void(0);\">
                <strong>Stap 1 - </strong>
                Winkelwagen
            </a>
        </li>
        <li class=\"";
        // line 14
        echo (((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) <= 0)) ? ("disabled") : (""));
        echo "\">
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) >= 1)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array())) : ("javascript:void(0);")), "html", null, true);
        echo "\">
                <strong>Stap 2 - </strong>
                Uw gegevens
            </a>
        </li>
        <li class=\"";
        // line 20
        echo ((array_key_exists("transaction", $context)) ? ("") : ("disabled"));
        echo "\">
            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("transaction", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array())) : ("javascript:void(0);")), "html", null, true);
        echo "\">
                <strong>Stap 3 - </strong>
                Bevestigen en betalen
            </a>
        </li>
        <li class=\"disabled\">
            <a href=\"javascript:void(0);\">
                <strong>Stap 4 - </strong>
                Bestelling geplaatst
            </a>
        </li>
    </ul>

    ";
        // line 34
        $this->loadTemplate("blocks/flash_messages.html.twig", "shopping_cart_overview.html.twig", 34)->display($context);
        // line 35
        echo "
    ";
        // line 36
        if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) {
            // line 37
            echo "        <div class=\"alert alert-warning\">
            De bestelling is al bevestigd. U kunt deze gegevens daarom niet meer aanpassen, maar alleen lezen: <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array()), "html", null, true);
            echo "\">klik hier om te betalen</a>.
        </div>
    ";
        }
        // line 41
        echo "
    <table class=\"shopping-bag table\">

        ";
        // line 44
        if ((twig_length_filter($this->env, ($context["shopping_cart"] ?? null)) < 1)) {
            // line 45
            echo "            <tbody>
            <td>
                <div class=\"alert alert-info center\">
                    <h5>Uw winkelwagen is leeg</h5>
                </div>
            </td>
            </tbody>
        ";
        } else {
            // line 53
            echo "            <thead>
            <tr>
                <th width=\"10%\"></th>
                <th>Product</th>
                <th width=\"14%\">Aantal</th>
                <th width=\"12%\" class=\"align-right\">Stukprijs</th>
                <th width=\"12%\" class=\"align-right\">Prijs</th>
            </tr>
            </thead>
            <tbody>

            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shopping_cart"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 65
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array()), "html", null, true);
                echo "\">
                    <td>
                        <img src=\"";
                // line 67
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array())) > 0)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "images", array()), 0, array(), "array"), "url", array())) : ("/img/no_image.gif")), "html", null, true);
                echo "\"
                             class=\"fill\">
                    </td>
                    <td>
                        <strong><a href=\"";
                // line 71
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "product", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array())) . "/") . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "name", array()), "html", null, true);
                echo "</a></strong>
                        <br>

                        ";
                // line 74
                if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array(), "any", false, true), "stock", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 0))) {
                    // line 75
                    echo "
                            ";
                    // line 76
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()) > twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()))) {
                        // line 77
                        echo "                                <div class=\"label label-warning\">Niet genoeg op voorraad, langere levertijd</div>
                            ";
                    } else {
                        // line 79
                        echo "                                <div class=\"label label-success\">
                                    ";
                        // line 80
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "stock", array()) > 10)) {
                            // line 81
                            echo "                                        <div class=\"label label-success\">Ruimschoots op voorraad</div>
                                    ";
                        } else {
                            // line 83
                            echo "                                        <div class=\"label label-success\">Op voorraad</div>
                                    ";
                        }
                        // line 85
                        echo "                                </div>
                            ";
                    }
                    // line 87
                    echo "
                            ";
                    // line 88
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array())) {
                        // line 89
                        echo "                                <div class=\"label label-info\">Levertijd ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["product"] ?? null), "shipping_details", array()), "shipping_days", array()), "html", null, true);
                        echo "
                                    werkdag(en)
                                </div>
                            ";
                    } else {
                        // line 93
                        echo "                                <div class=\"label label-info\">Levertijd 1-3 werkdag(en)</div>
                            ";
                    }
                    // line 95
                    echo "                        ";
                } else {
                    // line 96
                    echo "                            <div class=\"label label-warning\">Dit product is niet op voorraad</div>
                        ";
                }
                // line 98
                echo "
                        <table class=\"product-id-table\">
                            <tr>
                                <th>EAN</th>
                                <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "ean", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <th>SKU</th>
                                <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "sku", array()), "html", null, true);
                echo "</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <input class=\"product-quantity\" type=\"text\" data-truevalue=\"";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()), "html", null, true);
                echo "\"
                               value=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array()), "html", null, true);
                echo "\" disabled/>

                        ";
                // line 114
                if (( !array_key_exists("transaction", $context) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) != "CONFIRMED"))) {
                    // line 115
                    echo "
                            <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_add", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())) . "/1"), "html", null, true);
                    echo "\"><span
                                        class=\"glyphicon glyphicon-plus\"></span></a>
                            <a href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart_remove", array()) . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "id", array())) . "/1"), "html", null, true);
                    echo "\"><span
                                        class=\"glyphicon glyphicon-minus\"></span></a>

                        ";
                }
                // line 122
                echo "
                    </td>
                    <td align=\"right\">
                        &euro;&nbsp;<span
                                class=\"product_piece\">";
                // line 126
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                    <td align=\"right\">
                        &euro;&nbsp;<span
                                class=\"product_subtotal\">";
                // line 130
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "product", array()), "price_details", array()), "piece_price", array()), "in", array()) * twig_get_attribute($this->env, $this->getSourceContext(), $context["order_product"], "quantity", array())), 2, ",", "."), "html", null, true);
                echo "</span>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "
            </tbody>
            <tfoot>
            <tr class=\"subtotal\">
                <td colspan=\"2\"></td>
                <td colspan=\"2\" class=\"totals-column\" align=\"left\">Subtotaal (incl. BTW)</td>
                <td colspan=\"1\" class=\"totals-column\" align=\"right\">
                    <p>
                        &euro;&nbsp;<span class=\"shopping-bag-total\">";
            // line 142
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "subtotal_price", array()), 2, ",", "."), "html", null, true);
            echo "</span>
                    </p>
                </td>
            </tr>
            <tr class=\"shipping-costs\">
                <td colspan=\"2\"></td>
                <td colspan=\"2\" class=\"totals-column\" align=\"left\">Verzendkosten</td>
                <td colspan=\"1\" class=\"totals-column\" align=\"right\">
                    <p>
                        &euro;&nbsp;<span class=\"shopping-bag-total\">";
            // line 151
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "shipping_costs", array()), 2, ",", "."), "html", null, true);
            echo "</span>
                    </p>
                </td>
            </tr>
            <tr class=\"total\">
                <td colspan=\"2\"></td>
                <td colspan=\"2\" class=\"\" align=\"left\">
                    <p class=\"totals-paragraph\">
                        Totaal
                    </p>
                </td>
                <td colspan=\"1\" class=\"\" align=\"right\">
                    <h4 class=\"totals-h4\">
                        &euro;&nbsp;<span class=\"shopping-bag-total\">";
            // line 164
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["shopping_cart_overview"] ?? null), "total_price", array()), 2, ",", "."), "html", null, true);
            echo "</span>
                    </h4>
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" align=\"center\">
                    <div class=\"next-step\">
                        ";
            // line 171
            if ((array_key_exists("transaction", $context) && ($context["transaction"] ?? null))) {
                // line 172
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array()), "html", null, true);
                echo "\" class=\"btn btn btn-block btn-primary\">Naar afrekenen <span
                                        class=\"glyphicon glyphicon-shopping-cart\"></span></a>
                        ";
            } else {
                // line 175
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "customer_details", array()), "html", null, true);
                echo "\" class=\"btn btn btn-block btn-primary customer-link\">Naar klantgegevens <span
                                        class=\"glyphicon glyphicon-shopping-cart\"></span></a>
                        ";
            }
            // line 178
            echo "                    </div>
                </td>
            </tr>
            </tfoot>
        ";
        }
        // line 183
        echo "        <!-- END IF HAS PRODUCTS -->
    </table>

";
    }

    public function getTemplateName()
    {
        return "shopping_cart_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 183,  335 => 178,  328 => 175,  321 => 172,  319 => 171,  309 => 164,  293 => 151,  281 => 142,  271 => 134,  261 => 130,  254 => 126,  248 => 122,  241 => 118,  236 => 116,  233 => 115,  231 => 114,  226 => 112,  222 => 111,  214 => 106,  207 => 102,  201 => 98,  197 => 96,  194 => 95,  190 => 93,  182 => 89,  180 => 88,  177 => 87,  173 => 85,  169 => 83,  165 => 81,  163 => 80,  160 => 79,  156 => 77,  154 => 76,  151 => 75,  149 => 74,  141 => 71,  134 => 67,  128 => 65,  124 => 64,  111 => 53,  101 => 45,  99 => 44,  94 => 41,  88 => 38,  85 => 37,  83 => 36,  80 => 35,  78 => 34,  62 => 21,  58 => 20,  50 => 15,  46 => 14,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "shopping_cart_overview.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\shopping_cart_overview.html.twig");
    }
}
