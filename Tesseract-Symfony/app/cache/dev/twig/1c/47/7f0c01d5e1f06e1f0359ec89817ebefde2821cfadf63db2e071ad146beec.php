<?php

/* TesseractMOOCBundle::layoutwada.html.twig */
class __TwigTemplate_1c477f0c01d5e1f06e1f0359ec89817ebefde2821cfadf63db2e071ad146beec extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <!-- Character set configuration -->
        <meta charset=\"UTF-8\">

        <!-- Viewport configuration, scaling options -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">

        <!-- Hide the browser UI -->
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">

        <!-- MS tile icons -->
        <meta name=\"msapplication-TileColor\" content=\"#69f0ae\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/mstile-144x144.png"), "html", null, true);
        echo "\">

        <!-- Android toolbar color -->
        <meta name=\"theme-color\" content=\"#69f0ae\">

        <!-- Apple touch icons -->
        <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-57x57.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-60x60.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-72x72.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-76x76.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-114x114.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-120x120.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-144x144.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-152x152.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/apple-touch-icon-180x180.png"), "html", null, true);
        echo "\">

        <!-- Android touch icons -->
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/android-chrome-192x192.png"), "html", null, true);
        echo "\" sizes=\"192x192\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-96x96.png"), "html", null, true);
        echo "\" sizes=\"96x96\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">

        <!-- Web app manifest file -->
        <link rel=\"manifest\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/favicons/manifest.json"), "html", null, true);
        echo "\">

        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/libs/materialize/css/materialize.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/libs/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/wata.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/styles/css/wata.css"), "html", null, true);
        echo "\">

        <!-- Site title -->
        <title>Tesseract coding</title>
    </head>
    <body>
        <div id=\"wrapper\">

            <!-- The preloader we see before the whole site is loaded -->
            <div id=\"preloader\" class=\"valign-wrapper\">
                <div class=\"preloader-wrapper big active\">
                    <div class=\"spinner-layer spinner-blue-only actually-black\">
                        <div class=\"circle-clipper left\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"gap-patch\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"circle-clipper right\">
                            <div class=\"circle\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- A status spinner to indicate that some process is going on -->
            <div id=\"status\">
                <div class=\"preloader-wrapper small active\">
                    <div class=\"spinner-layer spinner-blue-only actually-green\">
                        <div class=\"circle-clipper left\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"gap-patch\">
                            <div class=\"circle\"></div>
                        </div>
                        <div class=\"circle-clipper right\">
                            <div class=\"circle\"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation bar -->
            <div class=\"navbar-fixed\" id=\"nav\">
                <nav>
                    <div class=\"nav-wrapper\">

                        <!-- Site name -->
                        <a href=\"/\" class=\"brand-logo\"><span class=\"tighter\">T</span>esseract <span class=\"tighter\">C</span>ooding</a>

                        <!-- Mobile menu button -->
                        <a href=\"#\" data-activates=\"mobile-menu\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>

                        <!-- Static menu -->
                        <ul class=\"right hide-on-med-and-down table-of-contents\">
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#services\">Services</a></li>
                            <li><a href=\"#works\">Works</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#prices\">Organisation</a></li>
                            <li><a href=\"#subscribe\">Sign in</a></li>
                            <li><a href=\"#blog\">Register</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>

                        <!-- Mobile menu, make sure it is equal to the statis menu -->
                        <ul class=\"side-nav\" id=\"mobile-menu\">
                            <li><a href=\"#triangles\">Home</a></li>
                            <li><a href=\"#services\">Services</a></li>
                            <li><a href=\"#works\">Works</a></li>
                            <li><a href=\"#about\">About</a></li>
                            <li><a href=\"#prices\">Organisation</a></li>
                            <li><a href=\"#blog\">Blog</a></li>
                            <li><a href=\"#contact\">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Triangles section -->
            <div id=\"triangles\" class=\"scrollspy\">
                <div id=\"output\">
                    <div class=\"h1-wrapper valign-wrapper\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col s12\">
                                    <!-- Your company's slogan, feel free to add more tags here -->
                                    <h1>Improve yourself and learn new technologies through free courses.</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Action button -->
                        <a class=\"btn-floating btn-large waves-effect waves-dark green accent-2\" id=\"explore\">
                            <i class=\"mdi-navigation-arrow-forward indigo-text text-darken-4\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Services section -->
            <div class=\"section scrollspy\" id=\"services\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>We are Tesseract</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                We're a small local company focused on crafting special and precise products that really help in
                                your everyday life. Feel free to check out our services and explore the gallery of our works.
                            </p>
                        </div>
                    </div>

                    <!-- Row with service icons -->
                    <div class=\"row services\">
                        <div class=\"col s12 l3\">
                            <i class=\"fa fa-5x fa-paint-brush animated-color\"></i>
                            <div class=\"divider\"></div>
                            <h5>Creative design</h5>
                            <p>Inspired by the latest trends of Material design, using cutting-edge technologies for a fresh and modern look. More design, all the time</p>
                            <a class=\"btn waves-effect waves-dark white black-text\">Learn more</a>
                        </div>
                        <div class=\"col s12 l3\">
                            <i class=\"fa fa-5x fa-desktop animated-color\"></i>
                            <div class=\"divider\"></div>
                            <h5>Fits all screens</h5>
                            <p>Designed as a mobile-first application, the grid scales to fit even the largest monitors. The content always looks nice and balanced.</p>
                            <a class=\"btn waves-effect waves-dark white black-text\">Discover</a>
                        </div>
                        <div class=\"col s12 l3\">
                            <i class=\"fa fa-5x fa-cog animated-color\"></i>
                            <div class=\"divider\"></div>
                            <h5>Easily customizable</h5>
                            <p>You are welcome to customize the elements to fit your needs. The proccess is simple and pleasant thanks for a Material color palette</p>
                            <a class=\"btn waves-effect waves-dark white black-text\">Try it</a>
                        </div>
                        <div class=\"col s12 l3\">
                            <i class=\"fa fa-5x fa-code animated-color\"></i>
                            <div class=\"divider\"></div>
                            <h5>Carefully coded</h5>
                            <p>Beautiful on the outside and smart on the inside. Our code is clean, extremely readable and no trouble to modify or maintain.</p>
                            <a class=\"btn waves-effect waves-dark white black-text\">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"divider\"></div>
            </div>

            <!-- Works section -->
            <div class=\"section scrollspy\" id=\"works\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Our works</h2>
                        <!-- Category filter buttons -->
                        <div class=\"filter-options\">
                            <a class=\"btn-flat waves-green-accent waves-effect active\" id=\"all\" data-group=\"all\">Everything</a>
                            <a class=\"btn-flat waves-green-accent waves-effect\" data-group=\"material\">Material</a>
                            <a class=\"btn-flat waves-green-accent waves-effect\" data-group=\"food\">Food</a>
                            <a class=\"btn-flat waves-green-accent waves-effect\" data-group=\"digital\">Digital</a>
                        </div>
                    </div>
                </div>
                <div class=\"wide-container\">
                    <!-- Shuffle grid -->
                    <div id=\"shuffle-grid\" class=\"row\">
                        <a href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/heisenberg-ice-cream.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"food\"]'>
                            <img src=\"images/works/ice-cream.png')}}\" class=\"responsive-img\" alt=\"Ice cream\">
                            <h5>Heisenberg ice-cream</h5>
                        </a>
                        <a href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/a-joe-book-cover.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"material\"]'>
                            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/works/books.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Book cover\">
                            <h5>A. Joe book cover</h5>
                        </a>
                        <a href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/wooden-series.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"digital\"]'>
                            <img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/works/clock.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Wooden clock\">
                            <h5>Wooden series</h5>
                        </a>
                        <a href=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/rubiks-triangle.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"digital\", \"material\"]'>
                            <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/works/object.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Rubik's triangle\">
                            <h5>Rubik's triangle</h5>
                        </a>
                        <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/old-fashioned.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"material\"]'>
                            <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/works/tape.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Tape\">
                            <h5>Old fashioned</h5>
                        </a>
                        <a href=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/works/parks-and-rec.html"), "html", null, true);
        echo "\" class=\"col s12 m6 l4 picture-item ajax-link\" data-groups='[\"food\", \"material\"]'>
                            <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/works/trees.png"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Trees\">
                            <h5>Parks and recreation</h5>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Get started section -->
            <div class=\"section grey-section\" id=\"get-started\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Like what you see?</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Let's start building your next project together. View our bundle <a href=\"#prices\">Organisation</a> or get started right away.
                            </p>
                            <p class=\"center-align\">
                                <a class=\"waves-effect waves-light btn-large green accent-2 indigo-text text-darken-4\">
                                    <i class=\"fa fa-rocket left\"></i>Get started
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About section -->
            <div class=\"section scrollspy\" id=\"about\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>The studio</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Meet the superheroes, the most dedicated team to ever walk the land of the web. We're always
                                available to suit your needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"wide-container\">
                    <div class=\"row team\">
                        <div class=\"col s12 m6\">
                            <div class=\"description-ball\"></div>
                            <div class=\"description center-align\">
                                <div class=\"row h4-row\">
                                    <h4>Ann Perkins<br><small>Art director and founder</small></h4>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s12 l4\">
                                        +1-800-56-89-11
                                    </div>
                                    <div class=\"col s12 l4\">
                                        <a href=\"mailto:ann@wata.com\">ann@wata.com</a>
                                    </div>
                                    <div class=\"col s12 l4 social\">
                                        <a role=\"button\"><i class=\"fa fa-facebook\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-behance\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-deviantart\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-google-plus\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/team/121H.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Ann Perkins\">
                        </div>
                        <div class=\"col s12 m6\">
                            <div class=\"description-ball\"></div>
                            <div class=\"description center-align\">
                                <div class=\"row h4-row\">
                                    <h4>Dick Cleverley<br><small>Senior developer</small></h4>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s12 l4\">
                                        +1-800-74-88-32
                                    </div>
                                    <div class=\"col s12 l4\">
                                        <a href=\"mailto:dick@wata.com\">dick@wata.com</a>
                                    </div>
                                    <div class=\"col s12 l4 social\">
                                        <a role=\"button\"><i class=\"fa fa-vk\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-github\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-bitbucket\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-tumblr\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/team/166H.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Dick Cleverley\">
                        </div>
                        <div class=\"col s12 m6\">
                            <div class=\"description-ball\"></div>
                            <div class=\"description center-align\">
                                <div class=\"row h4-row\">
                                    <h4>Jonathan Edgar Doe<br><small>System administrator</small></h4>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s12 l4\">
                                        +1-800-69-32-81
                                    </div>
                                    <div class=\"col s12 l4\">
                                        <a href=\"mailto:john.edgar@wata.com\">jonathan.edgar@wata.com</a>
                                    </div>
                                    <div class=\"col s12 l4 social\">
                                        <a role=\"button\"><i class=\"fa fa-facebook\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-github\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-bitbucket\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-stack-overflow\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/team/93H.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Jonathan Edgar Doe\">
                        </div>
                        <div class=\"col s12 m6\">
                            <div class=\"description-ball\"></div>
                            <div class=\"description center-align\">
                                <div class=\"row h4-row\">
                                    <h4>Eva Green<br><small>UI/UX designer</small></h4>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col s12 l4\">
                                        +1-800-78-53-02
                                    </div>
                                    <div class=\"col s12 l4\">
                                        <a href=\"mailto:eva@wata.com\">eva@wata.com</a>
                                    </div>
                                    <div class=\"col s12 l4 social\">
                                        <a role=\"button\"><i class=\"fa fa-facebook\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-behance\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-deviantart\"></i></a>
                                        <a role=\"button\"><i class=\"fa fa-pinterest\"></i></a>
                                    </div>
                                </div>
                            </div>
                            <img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/images/team/172H.jpg"), "html", null, true);
        echo "\" class=\"responsive-img\" alt=\"Eva Green\">
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"divider\"></div>
            </div>

            <!-- Prices section -->
            <div class=\"section scrollspy\" id=\"prices\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Organisation</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Start your own organisation by signing up here.
                            </p>
                        </div>
                       
                    </div>
                    <div class=\"row\">
                     </div>
                    <div class=\"row\">
                        <div class=\"col s8 offset-s2\">
                            <!-- Begin MailChimp Signup Form -->
                            <div id=\"mc_embed_signup\">
                                
                                ";
        // line 392
        $this->env->loadTemplate("TesseractMOOCBundle:Registration:registerorg.html.twig")->display($context);
        // line 393
        echo "                                
                               
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                 
            
             
                </div>
            </div>

            <!-- Subscribe section -->
            <div class=\"section grey-section scrollspy\" id=\"subscribe\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Login</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Welcome to Tesseract Conding please enter your information to sign in.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col s8 offset-s2\">
                            <!-- Begin MailChimp Signup Form -->
                            <div id=\"mc_embed_signup\">
                              
                                ";
        // line 421
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 422
        echo "                             
                               
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog section -->
            <div class=\"section scrollspy\" id=\"blog\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Register </h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Want to join tesseract coding? Read our courses, become a coach in the future
                              . Enter your information and become one of us.
                            </p>
                        </div>
                    </div>
                </div>
            
            </div>
<div class=\"container\">
                    
                    <div class=\"row\">
                        <div class=\"col s8 offset-s2\">
                            <!-- Begin MailChimp Signup Form -->
                            <div id=\"mc_embed_signup\">
                             ";
        // line 452
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_registration_register"), array());
        // line 453
        echo "                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                    </div>
                </div>

            <!-- Contact form section -->
            <div class=\"section scrollspy\" id=\"contact\">
                <div class=\"container\">
                    <div class=\"row\">
                        <h2>Contact us</h2>
                        <div class=\"col s12 m10 offset-m1 l8 offset-l2\">
                            <p class=\"flow-text center-align\">
                                Let us know if you want to work on your project with us or just drop a line to say hello. We're
                                always glad to receive your messages.
                            </p>
                            <p class=\"right-align\">
                                <i class=\"fa fa-info-circle\"></i> Last name is not required.
                            </p>
                        </div>
                    </div>
                    <div class=\"row\">
                     
                            <!-- This field helps us avoid spam bots, don't remove it -->
                            <div class=\"cant-touch-this\">
                                <input type=\"text\" name=\"hammertime\" tabindex=\"-1\" value=\"\">
                            </div>
                            <!-- End of anti-spam field -->
                            <div class=\"row\">
                                <div class=\"input-field col s6\">
                                    <input id=\"first-name\" name=\"first-name\" type=\"text\" class=\"required\">
                                    <label for=\"first-name\">First name</label>
                                </div>
                                <div class=\"input-field col s6\">
                                    <input id=\"last-name\" name=\"last-name\" type=\"text\">
                                    <label for=\"last-name\">Last name</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <input id=\"email\" name=\"email\" type=\"email\" class=\"required\">
                                    <label for=\"email\">Email</label>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"input-field col s12\">
                                    <textarea id=\"message\" name=\"message\" class=\"materialize-textarea required\"></textarea>
                                    <label for=\"message\">Message</label>
                                </div>
                            </div>
                            <div class=\"center-align\">
                                <button type=\"submit\" name=\"send\" class=\"btn-large disabled\">
                                    Send
                                </button>
                            </div>
                       
                    </div>
                </div>
                <div class=\"wide-container\">
                    <div class=\"row\">
                        <div class=\"col s12\">
                            <!-- Google map container -->
                            <div id=\"map-canvas\" class=\"map\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"container contact-details\">
                    <div class=\"row\">
                        <div class=\"col s12 m6 l4\">
                            <h5>Headquarters</h5>
                            <div class=\"divider\"></div>
                            <address>
                                
                                Tunisia<br>
                                Tunis-Ariana<br>
                            </address>
                        </div>
                        <div class=\"col s12 m6 l4\">
                            <h5>Reach us</h5>
                            <div class=\"divider\"></div>
                            <p>
                                0000<br>
                                <a href=\"tesseract@esprit.com\">tesseract@esprit.com</a>
                            </p>
                        </div>
                        <div class=\"col s12 m6 l4 modern-connect\">
                            <h5>Modern connect</h5>
                            <div class=\"divider\"></div>
                            <p>
                                <!-- Add your Skype link here -->
                                <a href=\"skype:wata?chat\"><i class=\"fa fa-skype\"></i> tesseract.skype</a><br>
                                <i class=\"fa fa-whatsapp\"></i> tesseract.linekdin<br>
                                <i class=\"fa fa-wechat\"></i> tesseract.twitter
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer section -->
            <footer class=\"page-footer\">
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2016 tesseract | <a href=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/ajax/pages/privacy-policy.html"), "html", null, true);
        echo "\" class=\"ajax-link\">Privacy policy</a>

                        <!-- Social icons -->
                        <span class=\"social right\">
                            <a href=\"#!\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-vk\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-github\"></i></a>
                            <a href=\"#!\"><i class=\"fa fa-deviantart\"></i></a>
                        </span>
                    </div>
                </div>
            </footer>

        </div>

        <!-- Ajax box container, waiting for its turn -->
        <div id=\"ajax-box\" class=\"translate\"></div>

        <!-- Scripts -->
        <script src=\"https://maps.googleapis.com/maps/api/js\"></script>
        <script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/config.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/build.js"), "html", null, true);
        echo "\"></script>
              <script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mooc/scripts/mooc.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "TesseractMOOCBundle::layoutwada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 579,  715 => 578,  711 => 577,  687 => 556,  582 => 453,  580 => 452,  548 => 422,  546 => 421,  516 => 393,  514 => 392,  482 => 363,  456 => 340,  430 => 317,  404 => 294,  339 => 232,  335 => 231,  329 => 228,  325 => 227,  319 => 224,  315 => 223,  309 => 220,  305 => 219,  299 => 216,  295 => 215,  288 => 211,  118 => 44,  114 => 43,  110 => 42,  106 => 41,  100 => 38,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  48 => 22,  44 => 21,  35 => 15,  19 => 1,);
    }
}
