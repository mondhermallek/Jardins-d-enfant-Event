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

/* @Evenement/Participant/AfficheP.html.twig */
class __TwigTemplate_e21e953b365e2ae8db2fdef3586d899ef7d83afcf2147a42fd7c57481b70ad6d extends \Twig\Template
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
        // line 2
        return "Homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/AfficheP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/AfficheP.html.twig"));

        $this->parent = $this->loadTemplate("Homepage.html.twig", "@Evenement/Participant/AfficheP.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Liste des Participants</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <table id=\"doctors\" class=\"table table-bordered table-hover\">
                    <thead>

                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Email</th>
                        <th>Evenement affécté</th>
                        <th>supprimer</th>
                        <th>Modifier</th></tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participant"] ?? $this->getContext($context, "participant")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 32
            echo "                   <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomP", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", []), "html", null, true);
            echo "</td>
                       <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "Email", []), "html", null, true);
            echo "</td>

                    <td> ";
            // line 38
            if (twig_test_empty($this->getAttribute($context["i"], "evenement", []))) {
                // line 39
                echo "                            pas d'evenement
                        ";
            } else {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "evenement", []), "nomE", []), "html", null, true);
                echo "

                        ";
            }
            // line 43
            echo "</td>
                    <td> <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_SupprimeP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"class=\"btn btn-danger btn-sm\">Supprimer</a></td>
                    <td> <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_ModifieP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"class=\"btn btn-default btn-sm\">Modifier</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 51
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["participant"] ?? $this->getContext($context, "participant")));
        echo "
                </div>
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
        return "@Evenement/Participant/AfficheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 51,  142 => 48,  133 => 45,  129 => 44,  126 => 43,  119 => 41,  115 => 39,  113 => 38,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  93 => 32,  89 => 31,  60 => 4,  51 => 3,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'Homepage.html.twig' %}
{% block body %}


    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Liste des Participants</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                <table id=\"doctors\" class=\"table table-bordered table-hover\">
                    <thead>

                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Email</th>
                        <th>Evenement affécté</th>
                        <th>supprimer</th>
                        <th>Modifier</th></tr>

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

                        {% for i in participant %}
                   <tr>
                    <td>{{i.id}}</td>
                    <td>{{i.nomP}}</td>
                    <td>{{i.prenom}}</td>
                       <td>{{ i.Email }}</td>

                    <td> {% if i.evenement is empty %}
                            pas d'evenement
                        {% else %}
                            {{i.evenement.nomE}}

                        {% endif %}</td>
                    <td> <a href=\"{{ path('evenement_SupprimeP',{'id':i.id})}}\"class=\"btn btn-danger btn-sm\">Supprimer</a></td>
                    <td> <a href=\"{{ path('evenement_ModifieP',{'id':i.id}) }}\"class=\"btn btn-default btn-sm\">Modifier</a></td>
                    </tr>
                    {% endfor %}
                    </tfoot>
                </table>
                <div class=\"navigation\">
                    {{ knp_pagination_render(participant) }}
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

{% endblock %}", "@Evenement/Participant/AfficheP.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Participant\\AfficheP.html.twig");
    }
}
