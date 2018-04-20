<?php

/* customer_details.html.twig */
class __TwigTemplate_0e9c15586a9bc3d340f35a9219b91ea8ce89a20f968bf0e9e7d58a2dee70e476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "customer_details.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'post_js' => array($this, 'block_post_js'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link href=\"/css/customer_details.html.css\" rel=\"stylesheet\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
        echo "</h1>

    <ul class=\"nav nav-tabs order-tabs\">
        <li>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "shopping_cart", array()), "html", null, true);
        echo "\">
                <strong>Stap 1 - </strong>
                Winkelwagen
            </a>
        </li>
        <li class=\"active\">
            <a href=\"javascript:void(0);\">
                <strong>Stap 2 - </strong>
                Uw gegevens
            </a>
        </li>
        <li class=\"";
        // line 26
        echo ((array_key_exists("transaction", $context)) ? ("") : ("disabled"));
        echo "\">
            <a href=\"";
        // line 27
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
        // line 40
        $this->loadTemplate("blocks/flash_messages.html.twig", "customer_details.html.twig", 40)->display($context);
        // line 41
        echo "
    ";
        // line 42
        if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["tansaction"] ?? null), "status", array()) == "CONFIRMED"))) {
            // line 43
            echo "        <div class=\"alert alert-warning\">
            De bestelling is al bevestigd. U kunt deze gegevens daarom niet meer aanpassen, maar alleen lezen: <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["lang"] ?? null), "url", array()), "checkout", array()), "html", null, true);
            echo "\">klik hier om te betalen</a>.
        </div>
    ";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 46
($context["post"] ?? null), "submit", array(), "any", true, true)) {
            // line 47
            echo "        <div class=\"alert alert-info\">
            Vergeet niet onderaan de pagina op de knop \"Opslaan\" te drukken na het bewerken van de gegevens.
        </div>
    ";
        }
        // line 51
        echo "
    <form class=\"form-horizontal register-form bv-form\" role=\"form\" method=\"post\">
        <input type=\"hidden\" name=\"submitting\" value=\"1\" />
        <fieldset>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"email\">E-mailadres</label>
                <div class=\"col-sm-8\">
                    <input type=\"email\"";
        // line 59
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "email", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-emailaddress=\"true\" data-bv-field=\"email\">
                    <p class=\"help-block\">
                        Op dit e-mailadres ontvangt u het besteloverzicht, het betalingsbewijs en de verzendingsinformatie.
                    </p>
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"telephone\">Telefoonnummer</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 69
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control\" name=\"telephone\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "telephone", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"telephone\">
                    <p class=\"help-block\">
                        Met dit telefoonnummer nemen wij contact op als wij u dringend willen spreken over uw bestelling.
                    </p>
                </div>
            </div>

            <hr>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_company\">Bedrijf</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 81
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"billing_company\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "company", array()), "html", null, true);
        echo "\" data-bv-notempty=\"false\" data-bv-field=\"billing_company\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_first_name\">Voornaam</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 88
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"billing_first_name\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "first_name", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"billing_first_name\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_last_name\">Achternaam</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 95
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"billing_last_name\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "last_name", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"billing_last_name\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_postcode\">Postcode</label>
                <div class=\"col-sm-2\">
                    <input type=\"text\"";
        // line 102
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"1234AB\" class=\"form-control billing_postcode\" name=\"billing_postcode\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "postcode", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"billing_postcode\">
                </div>
                <label class=\"col-sm-3 control-label\" for=\"billing_house_nr\">Huisnummer</label>
                <div class=\"col-sm-3\">
                    <input type=\"text\"";
        // line 106
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control billing_house_nr\" name=\"billing_house_nr\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_house_nr", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"billing_house_nr\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_address_1\">Adres</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 113
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control billing_address_1\" name=\"billing_address_1\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_1", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" autocomplete=\"off\" data-bv-field=\"billing_address_1\" /><br />
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_address_2\">Extra adres regel</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 120
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control billing_address_2\" name=\"billing_address_2\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "address_2", array()), "html", null, true);
        echo "\" data-bv-notempty=\"false\" autocomplete=\"off\" data-bv-field=\"billing_address_2\" /><br />
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"billing_city\">Woonplaats</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 127
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control billing_city\" name=\"billing_city\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "city", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" autocomplete=\"off\" data-bv-field=\"billing_city\" /><br />
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"billing_country\">Land</label>
                <div class=\"col-sm-8\">
                    <select class=\"form-control\"";
        // line 134
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " name=\"billing_country\">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 136
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "country_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                    </select>
                </div>
            </div>

        </fieldset>

        <div class=\"form-group checkbox\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-8\">
                <label><input type=\"checkbox\"";
        // line 147
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " name=\"has_delivery\" id=\"deliveryAddress\"";
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array()) == false))) ? (" checked") : (""));
        echo " value=\"1\"> Mijn bestelling op een ander adres afleveren.</label>
            </div>
        </div>

        <fieldset class=\"delivery\" data-toggle=\"\">

            <legend>Afleveradres</legend>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_company\">Bedrijf</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 158
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"shipping_company\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "company", array()), "html", null, true);
        echo "\" data-bv-notempty=\"false\" data-bv-field=\"shipping_company\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_first_name\">Voornaam</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 165
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"shipping_first_name\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "first_name", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"shipping_first_name\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_last_name\">Achternaam</label>
                <div class=\"col-sm-4\">
                    <input type=\"text\"";
        // line 172
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"\" class=\"form-control\" name=\"shipping_last_name\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "last_name", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"shipping_last_name\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_postcode\">Postcode</label>
                <div class=\"col-sm-2\">
                    <input type=\"text\"";
        // line 179
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " placeholder=\"1234AB\" class=\"form-control shipping_postcode\" name=\"shipping_postcode\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "postcode", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"shipping_postcode\">
                </div>
                <label class=\"col-sm-3 control-label\" for=\"shipping_house_nr\">Huisnummer</label>
                <div class=\"col-sm-3\">
                    <input type=\"text\"";
        // line 183
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control shipping_house_nr\" name=\"shipping_house_nr\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_house_nr", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" data-bv-field=\"shipping_house_nr\">
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_address_1\">Adres</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 190
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control shipping_address_1\" name=\"shipping_address_1\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_1", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" autocomplete=\"off\" data-bv-field=\"shipping_address_1\" /><br />
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_address_2\">Extra adres regel</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 197
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control shipping_address_2\" name=\"shipping_address_2\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "address_2", array()), "html", null, true);
        echo "\" data-bv-notempty=\"false\" autocomplete=\"off\" data-bv-field=\"shipping_address_2\" /><br />
                </div>
            </div>

            <div class=\"form-group has-feedback\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_city\">Woonplaats</label>
                <div class=\"col-sm-8\">
                    <input type=\"text\"";
        // line 204
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " class=\"form-control shipping_city\" name=\"shipping_city\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_address", array()), "city", array()), "html", null, true);
        echo "\" data-bv-notempty=\"true\" autocomplete=\"off\" data-bv-field=\"shipping_city\" /><br />
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\" for=\"shipping_country\">Land</label>
                <div class=\"col-sm-8\">
                    <select class=\"form-control\"";
        // line 211
        echo (((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) ? (" disabled=\"disabled\"") : (""));
        echo " name=\"shipping_country\">
                        ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 213
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "billing_address", array()), "country_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                    </select>
                </div>
            </div>

        </fieldset>

        <hr />

        <div class=\"shopping-bag\"></div>

        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-8\">
                <div class=\"next-step\">
                    ";
        // line 228
        if ((array_key_exists("transaction", $context) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()) == "CONFIRMED"))) {
            // line 229
            echo "                        <button type=\"submit\" class=\"btn btn btn-block btn-primary quote-link\">Naar stap 3 - Afrekenen</button>
                    ";
        } else {
            // line 231
            echo "                        <button type=\"submit\" class=\"btn btn btn-block btn-primary quote-link\">Opslaan en naar stap 3 - Afrekenen</button>
                    ";
        }
        // line 233
        echo "                </div>
            </div>
        </div>

    </form>

";
    }

    // line 241
    public function block_post_js($context, array $blocks = array())
    {
        // line 242
        echo "
    ";
        // line 243
        $this->displayParentBlock("post_js", $context, $blocks);
        echo "

    <script src=\"/js/bv.js\" language=\"javascript\"></script>
    <script type=\"text/javascript\">

        function pwd_to_text() {
            \$(\".pwd\").replaceWith(\$('.pwd').clone().attr('type', 'text'));
            \$(\".reveal\").on('mouseout.dropcart', text_to_pwd);
        }

        function text_to_pwd() {
            \$(\".pwd\").replaceWith(\$('.pwd').clone().attr('type', 'password'));
            \$(\".reveal\").off('mouseout.dropcart');
        }

        \$(\".reveal\").mousedown(pwd_to_text).mouseup(text_to_pwd);

        \$('#deliveryAddress').click(function() {
            \$('.delivery').slideToggle();
        });

        \$('.zipcode, .houseNr, .houseNrAdd').focusout(function() {
            var curThis\t\t\t\t\t= \$(this);
            var input_zipcode\t\t\t= \$(curThis).parent().parent().find('.zipcode').val();
            var input_houseNr\t\t\t= \$(curThis).parent().parent().find('.houseNr').val();
            var input_houseNrAdd\t\t= \$(curThis).parent().parent().find('.houseNrAdd').val();

            if(input_zipcode != '' && input_houseNr != '') {
                \$.get( \"/includes/json/validateZipcode.php\", {
                    zipcode\t\t: input_zipcode,
                    houseNr\t\t: input_houseNr,
                    houseNrAdd\t: input_houseNrAdd
                }, function(data) {
                    var street\t\t\t= data.street;
                    var houseNr\t\t\t= data.houseNumber;
                    var houseNumberAdd\t= data.houseNumberAdd;
                    var zipcode \t\t= data.postcode;
                    var city\t\t\t= data.city;

                    jQuery(curThis).parent().parent().next().find('.address').val(street);
                    jQuery(curThis).parent().parent().next().next().find('.city').val(city);
                }, 'json');
            }
        });

        \$(window).load(function() {

            \$('.register-form').bootstrapValidator({
                message: 'Dit is een verplicht veld',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                }
            });

            if (\"";
        // line 299
        echo twig_escape_filter($this->env, ($context["transaction"] ?? null), "html", null, true);
        echo "\" && \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["transaction"] ?? null), "status", array()), "html", null, true);
        echo "\" == \"CONFIRMED\") {
                \$('.register-form').data('bootstrapValidator').validate();
            }

            if (\"";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array()), "html", null, true);
        echo "\" && \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer_details"] ?? null), "shipping_is_billing", array()), "html", null, true);
        echo "\" == false) {
                //\$('.delivery').toggle();
            }

        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "customer_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 303,  509 => 299,  450 => 243,  447 => 242,  444 => 241,  434 => 233,  430 => 231,  426 => 229,  424 => 228,  409 => 215,  396 => 213,  392 => 212,  388 => 211,  376 => 204,  364 => 197,  352 => 190,  340 => 183,  331 => 179,  319 => 172,  307 => 165,  295 => 158,  279 => 147,  268 => 138,  255 => 136,  251 => 135,  247 => 134,  235 => 127,  223 => 120,  211 => 113,  199 => 106,  190 => 102,  178 => 95,  166 => 88,  154 => 81,  137 => 69,  122 => 59,  112 => 51,  106 => 47,  104 => 46,  99 => 44,  96 => 43,  94 => 42,  91 => 41,  89 => 40,  73 => 27,  69 => 26,  55 => 15,  48 => 11,  45 => 10,  42 => 9,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "customer_details.html.twig", "C:\\xampp\\htdocs\\Dropcart_v3\\webshop-frontend-master\\templates\\customer_details.html.twig");
    }
}
