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

/* @Evenement/Evenement/fAfficheE.html.twig */
class __TwigTemplate_d7b2cb05501de66e6ca9483c855ff9c27cdef5f3c110301036843b8264beaff0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/fAfficheE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/fAfficheE.html.twig"));

        $this->parent = $this->loadTemplate("HomepageF.html.twig", "@Evenement/Evenement/fAfficheE.html.twig", 1);
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
        echo "<html>
    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Liste des Evenements</h3>


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
                        <th>Places restantes</th>
                        <th>Participer </th>
                    </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

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
                        ";
            // line 42
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 43
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrPlaces", []), "html", null, true);
                echo "</td>

                        ";
            } else {
                // line 46
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrParticipants", []), "html", null, true);
                echo "</td>

                        ";
            }
            // line 49
            echo "                        <td>";
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 50
                echo "                                0
                            ";
            } else {
                // line 52
                echo "                         ";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["i"], "nbrPlaces", []) - $this->getAttribute($context["i"], "nbrParticipants", [])), "html", null, true);
                echo "
                            ";
            }
            // line 54
            echo "                        </td>



                        <td>   ";
            // line 58
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 59
                echo "                        <p style=\"color:#ff0026\" class=\"btn btn-youtube btn-sm\" ;> pas de place disponible</p>

                    ";
            } else {
                // line 62
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participant_AjoutP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
                echo "\"class=\"btn btn-facebook btn-sm\">Participer</a></td>
                    ";
            }
            // line 64
            echo "
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 70
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["evenement"] ?? $this->getContext($context, "evenement")));
        echo "
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Evenement/fAfficheE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 70,  177 => 67,  169 => 64,  163 => 62,  158 => 59,  156 => 58,  150 => 54,  144 => 52,  140 => 50,  137 => 49,  130 => 46,  123 => 43,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  98 => 36,  94 => 35,  60 => 3,  51 => 2,  29 => 1,);
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
<html>
    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Liste des Evenements</h3>


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
                        <th>Places restantes</th>
                        <th>Participer </th>
                    </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

                    {% for i in evenement %}

                        <td>{{i.nomE}}</td>
                        <td>{{i.type}}</td>
                        <td>{{i.dateDebut|date('d/m/Y')}}</td>
                        <td>{{i.dateFin|date('d/m/Y')}}</td>
                        <td>{{i.description}}</td>
                        {% if i.nbrParticipants > i.nbrPlaces %}
                            <td>{{ i.nbrPlaces}}</td>

                        {% else %}
                            <td>{{i.nbrParticipants}}</td>

                        {% endif %}
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
                    {% endif %}

                        </tr>
                    {% endfor %}
                    </tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(evenement) }}
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</html>

{% endblock %}
", "@Evenement/Evenement/fAfficheE.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Evenement\\fAfficheE.html.twig");
    }
}
