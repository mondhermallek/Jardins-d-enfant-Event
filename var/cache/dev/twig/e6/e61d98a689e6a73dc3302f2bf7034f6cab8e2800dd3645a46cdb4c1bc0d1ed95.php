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

/* @Evenement/Participant/Mail.html.twig */
class __TwigTemplate_ca95c1450abb5190df9c54c0add59cfe4863183a8b402ee629cb58ae7a85a9a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/Mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/Mail.html.twig"));

        $this->parent = $this->loadTemplate("HomepageF.html.twig", "@Evenement/Participant/Mail.html.twig", 1);
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
    <h3>Envoyer un Mail</h3>
    <div class=\"box-body\">
        <table id=\"doctors\" class=\"table table-bordered table-hover\">
            <thead>

            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </thead> </table> </div>
    <br>
    <br>

    <br>
    <br>
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

                        <th>id</th>
                        <th>nom</th>
                        <th>type</th>
                        <th>Date Debut</th>
                        <th>Data Fin</th>
                        <th>Description</th>
                        <th>Nombre de Participants</th>
                        <th>nombre de Places</th>

                    </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenement"] ?? $this->getContext($context, "evenement")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 48
            echo "                        <tr>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomE", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "type", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateDebut", []), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateFin", []), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "description", []), "html", null, true);
            echo "</td>
                            ";
            // line 55
            if (($this->getAttribute($context["i"], "nbrParticipants", []) > $this->getAttribute($context["i"], "nbrPlaces", []))) {
                // line 56
                echo "                                ";
                $context["nbrParticipants"] = $this->getAttribute($context["i"], "nbrPlaces", []);
                // line 57
                echo "                                <td>";
                echo twig_escape_filter($this->env, ($context["nbrParticipants"] ?? $this->getContext($context, "nbrParticipants")), "html", null, true);
                echo "</td>

                            ";
            } else {
                // line 60
                echo "                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrParticipants", []), "html", null, true);
                echo "</td>

                            ";
            }
            // line 63
            echo "
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nbrPlaces", []), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                    </tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 71
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["evenement"] ?? $this->getContext($context, "evenement")));
        echo "
                </div>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
        <!-- /.box -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Evenement/Participant/Mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  173 => 67,  164 => 64,  161 => 63,  154 => 60,  147 => 57,  144 => 56,  142 => 55,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  118 => 49,  115 => 48,  111 => 47,  68 => 9,  60 => 3,  51 => 2,  29 => 1,);
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

    <h3>Envoyer un Mail</h3>
    <div class=\"box-body\">
        <table id=\"doctors\" class=\"table table-bordered table-hover\">
            <thead>

            {{ form_start(form) }} {{ form_end(form) }}

            </thead> </table> </div>
    <br>
    <br>

    <br>
    <br>
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

                        <th>id</th>
                        <th>nom</th>
                        <th>type</th>
                        <th>Date Debut</th>
                        <th>Data Fin</th>
                        <th>Description</th>
                        <th>Nombre de Participants</th>
                        <th>nombre de Places</th>

                    </tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    {% for i in evenement %}
                        <tr>
                            <td>{{i.id}}</td>
                            <td>{{i.nomE}}</td>
                            <td>{{i.type}}</td>
                            <td>{{i.dateDebut|date('d/m/Y')}}</td>
                            <td>{{i.dateFin|date('d/m/Y')}}</td>
                            <td>{{i.description}}</td>
                            {% if i.nbrParticipants > i.nbrPlaces %}
                                {%  set nbrParticipants =  i.nbrPlaces %}
                                <td>{{ nbrParticipants }}</td>

                            {% else %}
                                <td>{{i.nbrParticipants}}</td>

                            {% endif %}

                            <td>{{ i.nbrPlaces }}</td>
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
        <!-- /.box -->

{% endblock %}", "@Evenement/Participant/Mail.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Participant\\Mail.html.twig");
    }
}
