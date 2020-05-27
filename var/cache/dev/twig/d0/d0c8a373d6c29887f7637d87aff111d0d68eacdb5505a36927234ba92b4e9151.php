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

/* @Evenement/Evenement/Mail.html.twig */
class __TwigTemplate_00de373dc2ec44106f3bffb79018f5c175eb17c26e4c7a0eab68f52135f9366e extends \Twig\Template
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
        return "Homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/Mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Evenement/Mail.html.twig"));

        $this->parent = $this->loadTemplate("Homepage.html.twig", "@Evenement/Evenement/Mail.html.twig", 1);
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
        echo "    <h3>Envoyer un Mail</h3>
    <div class=\"box-body\">
        <table id=\"doctors\" class=\"table table-bordered table-hover\">
            <thead>

            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo " ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </thead> </table> </div>
    <br>
    <br>


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

                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>

                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participant"] ?? $this->getContext($context, "participant")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 39
            echo "                        <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "nomP", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "prenom", []), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "Email", []), "html", null, true);
            echo "</td>

                            <td> ";
            // line 45
            if (twig_test_empty($this->getAttribute($context["i"], "evenement", []))) {
                // line 46
                echo "                                    pas d'evenement
                                ";
            } else {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "evenement", []), "nomE", []), "html", null, true);
                echo "

                                ";
            }
            // line 50
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tfoot>
                </table>
                <div class=\"navigation\">
                    ";
        // line 56
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
        return "@Evenement/Evenement/Mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  147 => 53,  139 => 50,  132 => 48,  128 => 46,  126 => 45,  121 => 43,  117 => 42,  113 => 41,  109 => 40,  106 => 39,  102 => 38,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Homepage.html.twig' %}
{% block body %}
    <h3>Envoyer un Mail</h3>
    <div class=\"box-body\">
        <table id=\"doctors\" class=\"table table-bordered table-hover\">
            <thead>

            {{ form_start(form) }} {{ form_end(form) }}

            </thead> </table> </div>
    <br>
    <br>


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

{% endblock %}", "@Evenement/Evenement/Mail.html.twig", "C:\\wamp64\\www\\PiEvenement\\src\\EvenementBundle\\Resources\\views\\Evenement\\Mail.html.twig");
    }
}
