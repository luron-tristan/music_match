<?php

/* dashboard/library.html.twig */
class __TwigTemplate_87d34244843d3fb67e742237a91abbc386a8c67eee6e84b53627fa289ad81b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "dashboard/library.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4008e65ef64542c8d8aab651b2a66e6845866508f751953f12f11ed69d67b937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4008e65ef64542c8d8aab651b2a66e6845866508f751953f12f11ed69d67b937->enter($__internal_4008e65ef64542c8d8aab651b2a66e6845866508f751953f12f11ed69d67b937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $__internal_943234118aa6b70e6187b3c62ede58af6ced4ca3414146c11bd3ec06e044ca43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_943234118aa6b70e6187b3c62ede58af6ced4ca3414146c11bd3ec06e044ca43->enter($__internal_943234118aa6b70e6187b3c62ede58af6ced4ca3414146c11bd3ec06e044ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dashboard/library.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4008e65ef64542c8d8aab651b2a66e6845866508f751953f12f11ed69d67b937->leave($__internal_4008e65ef64542c8d8aab651b2a66e6845866508f751953f12f11ed69d67b937_prof);

        
        $__internal_943234118aa6b70e6187b3c62ede58af6ced4ca3414146c11bd3ec06e044ca43->leave($__internal_943234118aa6b70e6187b3c62ede58af6ced4ca3414146c11bd3ec06e044ca43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d916199256897962154f9a9f7593ee58faea8843ed256c7366e093f62e0eff6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d916199256897962154f9a9f7593ee58faea8843ed256c7366e093f62e0eff6a->enter($__internal_d916199256897962154f9a9f7593ee58faea8843ed256c7366e093f62e0eff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6bc0e3c60e3f8f8bd0584dab1b1eb86c515544d9fb272e734fb5b5c04bf35f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bc0e3c60e3f8f8bd0584dab1b1eb86c515544d9fb272e734fb5b5c04bf35f0->enter($__internal_a6bc0e3c60e3f8f8bd0584dab1b1eb86c515544d9fb272e734fb5b5c04bf35f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bibliotheque";
        
        $__internal_a6bc0e3c60e3f8f8bd0584dab1b1eb86c515544d9fb272e734fb5b5c04bf35f0->leave($__internal_a6bc0e3c60e3f8f8bd0584dab1b1eb86c515544d9fb272e734fb5b5c04bf35f0_prof);

        
        $__internal_d916199256897962154f9a9f7593ee58faea8843ed256c7366e093f62e0eff6a->leave($__internal_d916199256897962154f9a9f7593ee58faea8843ed256c7366e093f62e0eff6a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_37b22670490abce627f37377bb8128c4d4e2ec56d277dc02a9ac612a2f0b3b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b22670490abce627f37377bb8128c4d4e2ec56d277dc02a9ac612a2f0b3b2b->enter($__internal_37b22670490abce627f37377bb8128c4d4e2ec56d277dc02a9ac612a2f0b3b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42b96f0d81843ac7dd48b3e924c3e8cdd3c58ce0eab6840dfa25b8547e447392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b96f0d81843ac7dd48b3e924c3e8cdd3c58ce0eab6840dfa25b8547e447392->enter($__internal_42b96f0d81843ac7dd48b3e924c3e8cdd3c58ce0eab6840dfa25b8547e447392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"";
        // line 15
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array())) {
            // line 16
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("photo/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 18
            echo "                            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_gravatar')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), 80, "retro")), "html", null, true);
            echo "
                            ";
        }
        // line 19
        echo "\" class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliothèque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    ";
        // line 34
        if ((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser"))) {
            // line 35
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tracksUser"]) ? $context["tracksUser"] : $this->getContext($context, "tracksUser")), "tracks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
                // line 36
                echo "                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 image\">
                                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["track"], "album", array()), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
                echo "\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
                echo "\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
                echo "</a><br/>
                                                            <small>
                                                                Artiste :
                                                                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["track"], "artists", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
                    // line 55
                    echo "                                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
                    echo "\" class=\"link-music\">
                                                                        ";
                    // line 56
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 57
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo "
                                                                        ";
                    } else {
                        // line 59
                        echo "                                                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                        echo ",
                                                                        ";
                    }
                    // line 61
                    echo "                                                                    </a>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showAlbum", array("id_album" => $this->getAttribute($this->getAttribute($context["track"], "album", array()), "id", array()))), "html", null, true);
                echo "\" class=\"link-music\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "album", array()), "name", array()), "html", null, true);
                echo "</a>
                                                            </small><br/>
                                                        </h6>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
                echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    ";
        } else {
            // line 84
            echo "                                        <li>
                                            <p><strong>Votre bibliothèque est vide</strong></p>
                                            <h3 class=\"text-muted\">Aucun morceau ajouté à votre bibliothèque pour le moment :(</h3>
                                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardDisplay", array("username" => $this->getAttribute($this->getAttribute((isset($context["user_manager"]) ? $context["user_manager"] : $this->getContext($context, "user_manager")), "user", array()), "username", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-success btn-round\">Pour en trouver, c'est par ici !</button></a>
                                        </li>
                                    ";
        }
        // line 90
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_42b96f0d81843ac7dd48b3e924c3e8cdd3c58ce0eab6840dfa25b8547e447392->leave($__internal_42b96f0d81843ac7dd48b3e924c3e8cdd3c58ce0eab6840dfa25b8547e447392_prof);

        
        $__internal_37b22670490abce627f37377bb8128c4d4e2ec56d277dc02a9ac612a2f0b3b2b->leave($__internal_37b22670490abce627f37377bb8128c4d4e2ec56d277dc02a9ac612a2f0b3b2b_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/library.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 90,  250 => 87,  245 => 84,  242 => 83,  229 => 76,  221 => 71,  210 => 65,  206 => 63,  191 => 61,  185 => 59,  179 => 57,  177 => 56,  172 => 55,  155 => 54,  147 => 51,  139 => 46,  130 => 40,  126 => 39,  121 => 36,  116 => 35,  114 => 34,  97 => 20,  94 => 19,  88 => 18,  81 => 16,  79 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block title 'Bibliotheque' %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs img-responsive\" data-parallax=\"true\" style=\"background-image: url('http://admin.traxmag.com/uploads/images/size800x1200/2017/01/justice-woman-cd-3_5880bd06b146e.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"section profile-content\">
            <div class=\"container\">
                <div class=\"owner\">
                    <div class=\"name\">
                        <img src=\"{% if user.picture %}
                            {{ asset('photo/') }}{{ user.picture }}
                            {% else %}
                            {{ get_gravatar(user.email, 80, 'retro') }}
                            {% endif %}\" class='rounded-circle profil' width='150' height='150'>
                        <h4 class=\"title\">{{ user.username}}<br /></h4>
                    </div>
                    <div class=\"container flex\">
                        <div class=\"flexItem\">
                            <h2>Bibliothèque</h2>
                        </div>
                    </div>
                </div>

                <div class=\"tab-content following mt-3\">
                    <div class=\"tab-pane active\" id=\"follows\" role=\"tabpanel\">
                        <div class=\"row\">
                            <div class=\"col-md-10 offset-md-1\">
                                <ul class=\"list-unstyled follows\">
                                    {% if tracksUser %}
                                        {% for track in tracksUser.tracks %}
                                            <li>
                                                <div class=\"row\">
                                                    <div class=\"col-md-1 offset-md-0 image\">
                                                        <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\">
                                                            <img src=\"{{ track.album.images[0].url }}\" alt=\"Circle Image\" class=\" img-responsive\">
                                                        </a>
                                                    </div>
                                                    <div class=\"col-md-1 mt-3 text-center playbutton\">
                                                        <button class=\"play\"><i class=\"fa fa-play-circle fa-2x\" aria-hidden=\"true\"></i></button>
                                                        <audio >
                                                            <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </div>
                                                    <div class=\"col-md-7 col-xs-4 track\">
                                                        <h6><a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.name }}</a><br/>
                                                            <small>
                                                                Artiste :
                                                                {% for artist in track.artists %}
                                                                    <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                                                        {% if loop.last %}
                                                                            {{ artist.name }}
                                                                        {% else %}
                                                                            {{ artist.name }},
                                                                        {% endif %}
                                                                    </a>
                                                                {% endfor %}
                                                            </small><br/>
                                                            <small>
                                                                Album : <a href=\"{{ path('showAlbum', {'id_album' : track.album.id}) }}\" class=\"link-music\">{{ track.album.name }}</a>
                                                            </small><br/>
                                                        </h6>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 offset-sm-1 lien_spotify\">
                                                        <div class=\"py-3\" >
                                                            <a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-1 col-xs-2 library \">
                                                        <div class=\"mt-3\" >
                                                            <button class=\"removeToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                        {% endfor %}
                                    {% else %}
                                        <li>
                                            <p><strong>Votre bibliothèque est vide</strong></p>
                                            <h3 class=\"text-muted\">Aucun morceau ajouté à votre bibliothèque pour le moment :(</h3>
                                            <a href=\"{{ path('dashboardDisplay', { username : user_manager.user.username }) }}\"><button class=\"btn btn-success btn-round\">Pour en trouver, c'est par ici !</button></a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "dashboard/library.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\dashboard\\library.html.twig");
    }
}