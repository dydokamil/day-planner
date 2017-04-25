<?php

/* priority/show.html.twig */
class __TwigTemplate_498962e4e1125f2fc6410583eb14f6da58a6aa9dafd804aa2f9db42a7e4caa5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "priority/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adbc9bbe9cbc5ad311ffcdbc616a81e426715a58d1b0a7278496217655b03c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adbc9bbe9cbc5ad311ffcdbc616a81e426715a58d1b0a7278496217655b03c0a->enter($__internal_adbc9bbe9cbc5ad311ffcdbc616a81e426715a58d1b0a7278496217655b03c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/show.html.twig"));

        $__internal_803a079e73c56346582a4d9cfab436d98e3fbed2c927c481ff5fc3be845c566f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803a079e73c56346582a4d9cfab436d98e3fbed2c927c481ff5fc3be845c566f->enter($__internal_803a079e73c56346582a4d9cfab436d98e3fbed2c927c481ff5fc3be845c566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adbc9bbe9cbc5ad311ffcdbc616a81e426715a58d1b0a7278496217655b03c0a->leave($__internal_adbc9bbe9cbc5ad311ffcdbc616a81e426715a58d1b0a7278496217655b03c0a_prof);

        
        $__internal_803a079e73c56346582a4d9cfab436d98e3fbed2c927c481ff5fc3be845c566f->leave($__internal_803a079e73c56346582a4d9cfab436d98e3fbed2c927c481ff5fc3be845c566f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a232120659243b0e4eb085cccbd5129fa80533976e4cc5da620542c1153845f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a232120659243b0e4eb085cccbd5129fa80533976e4cc5da620542c1153845f5->enter($__internal_a232120659243b0e4eb085cccbd5129fa80533976e4cc5da620542c1153845f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04a9cd876505df908229f0640c8f1137aa587e7bc6d9a5ad338fcbabc98ea54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a9cd876505df908229f0640c8f1137aa587e7bc6d9a5ad338fcbabc98ea54d->enter($__internal_04a9cd876505df908229f0640c8f1137aa587e7bc6d9a5ad338fcbabc98ea54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Priority</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priority"] ?? $this->getContext($context, "priority")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["priority"] ?? $this->getContext($context, "priority")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_edit", array("id" => $this->getAttribute(($context["priority"] ?? $this->getContext($context, "priority")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_04a9cd876505df908229f0640c8f1137aa587e7bc6d9a5ad338fcbabc98ea54d->leave($__internal_04a9cd876505df908229f0640c8f1137aa587e7bc6d9a5ad338fcbabc98ea54d_prof);

        
        $__internal_a232120659243b0e4eb085cccbd5129fa80533976e4cc5da620542c1153845f5->leave($__internal_a232120659243b0e4eb085cccbd5129fa80533976e4cc5da620542c1153845f5_prof);

    }

    public function getTemplateName()
    {
        return "priority/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Priority</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ priority.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ priority.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('priority_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('priority_edit', { 'id': priority.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "priority/show.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/priority/show.html.twig");
    }
}
