<?php

/* album/album.html.twig */
class __TwigTemplate_49cc1a1c46b4794e4103ac259cca69b3a25e57f9e81c664091f98d77b5b8934c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "album/album.html.twig", 1);
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
        $__internal_4f1281f89ff866736ffbe85eefd041690d74a2116b0c9f0fccb2d933a1ff4dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1281f89ff866736ffbe85eefd041690d74a2116b0c9f0fccb2d933a1ff4dde->enter($__internal_4f1281f89ff866736ffbe85eefd041690d74a2116b0c9f0fccb2d933a1ff4dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $__internal_634566de68b279c7abef3e5c18e752cdbef5b7c3551ab2b1f136705a582b6931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634566de68b279c7abef3e5c18e752cdbef5b7c3551ab2b1f136705a582b6931->enter($__internal_634566de68b279c7abef3e5c18e752cdbef5b7c3551ab2b1f136705a582b6931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "album/album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1281f89ff866736ffbe85eefd041690d74a2116b0c9f0fccb2d933a1ff4dde->leave($__internal_4f1281f89ff866736ffbe85eefd041690d74a2116b0c9f0fccb2d933a1ff4dde_prof);

        
        $__internal_634566de68b279c7abef3e5c18e752cdbef5b7c3551ab2b1f136705a582b6931->leave($__internal_634566de68b279c7abef3e5c18e752cdbef5b7c3551ab2b1f136705a582b6931_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7058e0a7d8bcdbdda6f4634ea16414d98863f81e6a460c6e54c1cafc609f7318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7058e0a7d8bcdbdda6f4634ea16414d98863f81e6a460c6e54c1cafc609f7318->enter($__internal_7058e0a7d8bcdbdda6f4634ea16414d98863f81e6a460c6e54c1cafc609f7318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29ba37b39be5281eff57de10bd2c5f9ae819b9d373c3d977bc2509cfd2e044d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ba37b39be5281eff57de10bd2c5f9ae819b9d373c3d977bc2509cfd2e044d2->enter($__internal_29ba37b39be5281eff57de10bd2c5f9ae819b9d373c3d977bc2509cfd2e044d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name", array()) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artists", array()), 0, array(), "array"), "name", array())), "html", null, true);
        
        $__internal_29ba37b39be5281eff57de10bd2c5f9ae819b9d373c3d977bc2509cfd2e044d2->leave($__internal_29ba37b39be5281eff57de10bd2c5f9ae819b9d373c3d977bc2509cfd2e044d2_prof);

        
        $__internal_7058e0a7d8bcdbdda6f4634ea16414d98863f81e6a460c6e54c1cafc609f7318->leave($__internal_7058e0a7d8bcdbdda6f4634ea16414d98863f81e6a460c6e54c1cafc609f7318_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb8a5ca2b743966ffbdd426362ffe9d327309e33cc9c57e79b139b0339859f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8a5ca2b743966ffbdd426362ffe9d327309e33cc9c57e79b139b0339859f48->enter($__internal_bb8a5ca2b743966ffbdd426362ffe9d327309e33cc9c57e79b139b0339859f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2c581f8e59aa8d3758d0d2068d566e5de4977f716e1ea68043ae4a1d92e4fd34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c581f8e59aa8d3758d0d2068d566e5de4977f716e1ea68043ae4a1d92e4fd34->enter($__internal_2c581f8e59aa8d3758d0d2068d566e5de4977f716e1ea68043ae4a1d92e4fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "images", array()), 0, array(), "array"), "url", array()), "html", null, true);
        echo "')\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div>
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "images", array()), 1, array(), "array"), "url", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <h3><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name", array()), "html", null, true);
        echo "</strong></h3>
                    <h4>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "artists", array()));
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
            // line 20
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("showArtist", array("id_artist" => $this->getAttribute($context["artist"], "id", array()))), "html", null, true);
            echo "\" class=\"link-music\">
                                ";
            // line 21
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 22
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo ",
                                ";
            } else {
                // line 24
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["artist"], "name", array()), "html", null, true);
                echo "
                                ";
            }
            // line 26
            echo "                            </a>
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
        // line 28
        echo "                    </h4>
                    <small>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "label", array()), "html", null, true);
        echo "</small>
                    <p class=\"mt-2\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "tracks", array()), "items", array())), "html", null, true);
        echo " Morceaux </p>
                    <p>Sortie : ";
        // line 31
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "release_date", array()), "d-m-Y") != "01-01-1970")) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "release_date", array()), "d-m-Y"), "html", null, true);
            echo "
                        ";
        } else {
            // line 34
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "release_date", array()), "html", null, true);
            echo "
                        ";
        }
        // line 35
        echo "</p>
                </div>
                <div class=\"col-sm-8\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th colspan=\"2\">#</th>
                                <th>Titre</th>
                                <th colspan=\"2\">Durée</th>
                                <th class=\"text-center\">Ajouter</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "tracks", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 49
            echo "                            <tr>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "track_number", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-lg\" aria-hidden=\"true\"></i></button>
                                    <audio >
                                        <source src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "preview_url", array()), "html", null, true);
            echo "\" type=\"audio/mp3\">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "name", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (int) floor(($this->getAttribute($context["track"], "duration_ms", array()) / 1000)), "i:s"), "html", null, true);
            echo "</td>
                                <td class=\"text-center\"><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["track"], "external_urls", array()), "spotify", array()), "html", null, true);
            echo "\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a></td>
                                <td class=\"text-center\"><button class=\"addToLibrary\" data-id=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["track"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_2c581f8e59aa8d3758d0d2068d566e5de4977f716e1ea68043ae4a1d92e4fd34->leave($__internal_2c581f8e59aa8d3758d0d2068d566e5de4977f716e1ea68043ae4a1d92e4fd34_prof);

        
        $__internal_bb8a5ca2b743966ffbdd426362ffe9d327309e33cc9c57e79b139b0339859f48->leave($__internal_bb8a5ca2b743966ffbdd426362ffe9d327309e33cc9c57e79b139b0339859f48_prof);

    }

    public function getTemplateName()
    {
        return "album/album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 64,  216 => 61,  212 => 60,  208 => 59,  204 => 58,  197 => 54,  190 => 50,  187 => 49,  183 => 48,  168 => 35,  162 => 34,  156 => 32,  154 => 31,  150 => 30,  146 => 29,  143 => 28,  128 => 26,  122 => 24,  116 => 22,  114 => 21,  109 => 20,  92 => 19,  87 => 17,  82 => 15,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title  album.name ~ ' - ' ~ album.artists[0].name  %}

{% block content %}
    <div class=\"wrapper\">
        <div class=\"page-header page-header-xs\" style=\"background-image: url('{{ album.images[0].url }}')\">
            <div class=\"filter\">
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div>
                        <img src=\"{{ album.images[1].url }}\" alt=\"\" class=\"img-fluid\">
                    </div>
                    <h3><strong>{{ album.name }}</strong></h3>
                    <h4>
                        {% for artist in album.artists %}
                            <a href=\"{{ path('showArtist', {'id_artist' : artist.id}) }}\" class=\"link-music\">
                                {% if not loop.last %}
                                    {{ artist.name }},
                                {% else %}
                                    {{ artist.name }}
                                {% endif %}
                            </a>
                        {% endfor %}
                    </h4>
                    <small>{{ album.label }}</small>
                    <p class=\"mt-2\">{{ album.tracks.items|length }} Morceaux </p>
                    <p>Sortie : {% if album.release_date|date('d-m-Y') != '01-01-1970' %}
                            {{ album.release_date|date('d-m-Y')  }}
                        {% else %}
                            {{ album.release_date }}
                        {% endif %}</p>
                </div>
                <div class=\"col-sm-8\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th colspan=\"2\">#</th>
                                <th>Titre</th>
                                <th colspan=\"2\">Durée</th>
                                <th class=\"text-center\">Ajouter</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for track in album.tracks.items %}
                            <tr>
                                <td>{{ track.track_number  }}</td>
                                <td>
                                    <button class=\"play\"><i class=\"fa fa-play-circle fa-lg\" aria-hidden=\"true\"></i></button>
                                    <audio >
                                        <source src=\"{{ track.preview_url }}\" type=\"audio/mp3\">
                                        Your browser does not support the audio element.
                                    </audio>
                                </td>
                                <td>{{ track.name  }}</td>
                                <td>{{ ( track.duration_ms//1000 )|date('i:s') }}</td>
                                <td class=\"text-center\"><a href=\"{{ track.external_urls.spotify }}\" target=\"blank\"><i class=\"fa fa-spotify fa-2x text-success\" aria-hidden=\"true\"></i></a></td>
                                <td class=\"text-center\"><button class=\"addToLibrary\" data-id=\"{{ track.id }}\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i></button></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "album/album.html.twig", "C:\\xampp\\htdocs\\music_match\\music_match\\templates\\album\\album.html.twig");
    }
}