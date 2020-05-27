<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Evenement/Evenement/fRechercheE.html.twig */
class __TwigTemplate_553ca8dc93f8da592006cd7f6210015830826375122bc29eda1866c7d80ad579 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "HomepageF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/fRechercheE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/fRechercheE.html.twig"));

        $this->parent = $this->loadTemplate("HomepageF.html.twig", "@Evenement/Evenement/fRechercheE.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Recherche d'evenement</h3>
                <form method=\"POST\">
                    <input align=\"left\" type=\"text\" name=\"nom\">
                    <input align=\"left\" type=\"submit\" value=\"rechercher\">
                </form>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <table id=\"doctors\" class=\"table table-bordered table-hover\">
                    <thead>

                    <tr>
                        <th>nom</th>
                        <th>type</th>
                        <th>Date Debut</th>
                        <th>Data Fin</th>
                        <th>Description</th>
                        <th>Nombre de Participants</th>
                        <th>Participer à l'evenement</th>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomE", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateDebut", []), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateFin", []), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 43
                echo "                                0
                            ";
            } else {
                // line 45
                echo "                                ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["i"], "nbrPlaces", []) - $this->getAttribute($context["i"], "nbrParticipants", [])), "html", null, true);
                echo "
                            ";
            }
            // line 47
            echo "                        </td>



                        <td>   ";
            // line 51
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 52
                echo "                            <p style=\"color:#ff0026\" class=\"btn btn-youtube btn-sm\" ;> pas de place disponible</p>

                            ";
            } else {
                // line 55
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_AjoutP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
                echo "\"class=\"btn btn-facebook btn-sm\">Participer</a></td>
                        ";
            }
            // line 56
            echo "                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/fRechercheE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 59,  152 => 56,  146 => 55,  141 => 52,  139 => 51,  133 => 47,  127 => 45,  123 => 43,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  98 => 36,  94 => 35,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'HomepageF.html.twig' %}
{% block body %}

    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Recherche d'evenement</h3>
                <form method=\"POST\">
                    <input align=\"left\" type=\"text\" name=\"nom\">
                    <input align=\"left\" type=\"submit\" value=\"rechercher\">
                </form>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <table id=\"doctors\" class=\"table table-bordered table-hover\">
                    <thead>

                    <tr>
                        <th>nom</th>
                        <th>type</th>
                        <th>Date Debut</th>
                        <th>Data Fin</th>
                        <th>Description</th>
                        <th>Nombre de Participants</th>
                        <th>Participer à l'evenement</th>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        {% for i in evenement %}

                        <td>{{i.nomE}}</td>
                        <td>{{i.type}}</td>
                        <td>{{i.dateDebut|date('d/m/Y')}}</td>
                        <td>{{i.dateFin|date('d/m/Y')}}</td>
                        <td>{{i.description}}</td>
                        <td>{% if i.nbrParticipants > i.nbrPlaces %}
                                0
                            {% else %}
                                {{ i.nbrPlaces-i.nbrParticipants}}
                            {% endif %}
                        </td>



                        <td>   {% if i.nbrParticipants > i.nbrPlaces %}
                            <p style=\"color:#ff0026\" class=\"btn btn-youtube btn-sm\" ;> pas de place disponible</p>

                            {% else%}
                            <a href=\"{{ path('participant_AjoutP',{'id':i.id})}}\"class=\"btn btn-facebook btn-sm\">Participer</a></td>
                        {% endif %}                    </tr>

                    {% endfor %}
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

{% endblock %}", "@Evenement/Evenement/fRechercheE.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Evenement\\fRechercheE.html.twig");
    }
}
