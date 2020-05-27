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

/* @Evenement/Participant/RechercheP.html.twig */
class __TwigTemplate_bcf06d0315e374acca91bca242c09c2f49e1f2f0ee8440a8f0ca8a77b091589d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/RechercheP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Participant/RechercheP.html.twig"));

        $this->parent = $this->loadTemplate("Homepage.html.twig", "@Evenement/Participant/RechercheP.html.twig", 2);
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

    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Recherche des participants</h3>

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
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Evenement affécté</th>
                        <th>Modifier</th>
                        <th>supprimer</th>


                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participant"] ?? $this->getContext($context, "participant")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomP", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", []), "html", null, true);
            echo "</td>
                        <td> ";
            // line 44
            if (twig_test_empty($this->getAttribute($context["i"], "evenement", []))) {
                // line 45
                echo "                                pas d'evenement
                            ";
            } else {
                // line 47
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "evenement", []), "nomE", []), "html", null, true);
                echo "
                            ";
            }
            // line 48
            echo "</td>
                        <td> <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_ModifieP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"class=\"btn btn-default btn-sm\">Modifier</a></td>
                        <td> <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_SupprimeP", ["id" => $this->getAttribute($context["i"], "id", [])]), "html", null, true);
            echo "\"  class=\"btn btn-danger btn-sm\">Supprimer</a></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
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
        return "@Evenement/Participant/RechercheP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 53,  135 => 50,  131 => 49,  128 => 48,  122 => 47,  118 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  101 => 40,  97 => 39,  60 => 4,  51 => 3,  29 => 2,);
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


    </tr>

    </table>
    <div class=\"col-xs-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Recherche des participants</h3>

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
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>Evenement affécté</th>
                        <th>Modifier</th>
                        <th>supprimer</th>


                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                        {% for i in participant %}

                        <td>{{ i.id }}</td>
                        <td>{{i.nomP}}</td>
                        <td>{{i.prenom}}</td>
                        <td> {% if i.evenement is empty %}
                                pas d'evenement
                            {% else %}
                                {{i.evenement.nomE}}
                            {% endif %}</td>
                        <td> <a href=\"{{ path('evenement_ModifieP',{'id':i.id}) }}\"class=\"btn btn-default btn-sm\">Modifier</a></td>
                        <td> <a href=\"{{ path('evenement_SupprimeP',{'id':i.id}) }}\"  class=\"btn btn-danger btn-sm\">Supprimer</a></td>
                    </tr>
                    {% endfor %}
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

{% endblock %}", "@Evenement/Participant/RechercheP.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Participant\\RechercheP.html.twig");
    }
}
