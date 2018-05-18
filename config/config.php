<?php
/**
 * =========================================================
 * DROPCART
 * =========================================================
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
 * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * ---------------------------------------------------------
 *
 * File: config.php.example
 * Date: 27-02-18 12:00
 *
 * @author Dropcart <info@dropcart.nl>
 * @copyright © [2016 - 2018] Dropcart - All rights reserved.
 * @license MIT (https://opensource.org/licenses/MIT)
 * @version 3.0.0
 *
 * =========================================================
 */

return [

    // App config
    "APP_ENV" => "live",
    "APP_DEBUG" => true,
    "APP_TIMEZONE" => "CET",
    "APP_LOCALE" => "NL",

    // Dropcart config
    "DROPCART_KEY" => "6ffe17ff3eeb3d1fcb17bb8f9d301f8c0bdad0cc9ec830c754cfdf0e9ca6e354",
    "DROPCART_SECRET" => "4d9867f815f860b1d4c626eb99c1bc6f2f726463015d9104cf392e642da6c5a3",
    "DROPCART_ENDPOINT" => "https://rest-api.sandbox.dropcart.nl/v3",
    "TIMEOUT" => 10,

    // Site global config
    "SITE_NAME" => "Dropcart",
    "SITE_SLUG" => "Slug",
    "BASE_URL" => "/",
    "MULTILINGUAL" => false,
    "COUNTRIES" => "Nederland",
    "FULL_WIDTH" => false,

    // Navbar config


    // Twig config
    // Note: set the path relative from the public folder
    "TEMPLATE_PATH" => "../templates",
    "CACHE_PATH" => "../templates/compilation_cache",
    "AUTO_RELOAD" => true,

];