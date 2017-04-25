<?php

/* priority/index.html.twig */
class __TwigTemplate_7a6fd3311c45b81e08de9694ecacb74116b011da06b123ca3b3dea6c9d377f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "priority/index.html.twig", 1);
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
        $__internal_dc72b4ff96e68eabb449546178530e54ccf3e36ae1a119c57be5684e2a3c80ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc72b4ff96e68eabb449546178530e54ccf3e36ae1a119c57be5684e2a3c80ec->enter($__internal_dc72b4ff96e68eabb449546178530e54ccf3e36ae1a119c57be5684e2a3c80ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/index.html.twig"));

        $__internal_17f202f81c11a1b78363f2148fe4432a806e4cb42c523f1a8c83a459be981b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f202f81c11a1b78363f2148fe4432a806e4cb42c523f1a8c83a459be981b11->enter($__internal_17f202f81c11a1b78363f2148fe4432a806e4cb42c523f1a8c83a459be981b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc72b4ff96e68eabb449546178530e54ccf3e36ae1a119c57be5684e2a3c80ec->leave($__internal_dc72b4ff96e68eabb449546178530e54ccf3e36ae1a119c57be5684e2a3c80ec_prof);

        
        $__internal_17f202f81c11a1b78363f2148fe4432a806e4cb42c523f1a8c83a459be981b11->leave($__internal_17f202f81c11a1b78363f2148fe4432a806e4cb42c523f1a8c83a459be981b11_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b06fa688bf2b13ce8103b3fb791a6ff456bdd1dcc0e64278ec09a7daca26bcbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06fa688bf2b13ce8103b3fb791a6ff456bdd1dcc0e64278ec09a7daca26bcbb->enter($__internal_b06fa688bf2b13ce8103b3fb791a6ff456bdd1dcc0e64278ec09a7daca26bcbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab0d526052055ebe96a93054c53d2553cdf15fbc57b83fc8f1853828a8e038fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0d526052055ebe96a93054c53d2553cdf15fbc57b83fc8f1853828a8e038fa->enter($__internal_ab0d526052055ebe96a93054c53d2553cdf15fbc57b83fc8f1853828a8e038fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Priorities list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["priorities"] ?? $this->getContext($context, "priorities")));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_show", array("id" => $this->getAttribute($context["priority"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["priority"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_show", array("id" => $this->getAttribute($context["priority"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_edit", array("id" => $this->getAttribute($context["priority"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priority'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_new");
        echo "\">Create a new priority</a>
        </li>
    </ul>
";
        
        $__internal_ab0d526052055ebe96a93054c53d2553cdf15fbc57b83fc8f1853828a8e038fa->leave($__internal_ab0d526052055ebe96a93054c53d2553cdf15fbc57b83fc8f1853828a8e038fa_prof);

        
        $__internal_b06fa688bf2b13ce8103b3fb791a6ff456bdd1dcc0e64278ec09a7daca26bcbb->leave($__internal_b06fa688bf2b13ce8103b3fb791a6ff456bdd1dcc0e64278ec09a7daca26bcbb_prof);

    }

    public function getTemplateName()
    {
        return "priority/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Priorities list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for priority in priorities %}
            <tr>
                <td><a href=\"{{ path('priority_show', { 'id': priority.id }) }}\">{{ priority.id }}</a></td>
                <td>{{ priority.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('priority_show', { 'id': priority.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('priority_edit', { 'id': priority.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('priority_new') }}\">Create a new priority</a>
        </li>
    </ul>
{% endblock %}
", "priority/index.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/priority/index.html.twig");
    }
}
