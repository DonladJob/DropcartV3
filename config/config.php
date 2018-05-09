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
    "DROPCART_KEY" => "baa822a20f43ddc6ff25264f5dd086476216550b2d78fedc77c95b6ec7ae392b",
    "DROPCART_SECRET" => "ccf2086301c90c129296fc6c356efd52f41b532ab850500d1823af1d43633eb8",
    "DROPCART_ENDPOINT" => "https://rest-api.sandbox.dropcart.nl/v3",
    "TIMEOUT" => 10,

    // Site global config
    "SITE_NAME" => "",
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