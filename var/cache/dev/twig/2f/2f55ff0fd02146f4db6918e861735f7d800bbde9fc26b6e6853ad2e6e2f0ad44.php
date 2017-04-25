<?php

/* task/index.html.twig */
class __TwigTemplate_dc17e974616f09ca9693132783ccc60088eecab4954a85109587ea78456f69d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
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
        $__internal_de524250ae50788a765f410408b29f4cd12dec79f98998678eec01fd425fa97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de524250ae50788a765f410408b29f4cd12dec79f98998678eec01fd425fa97a->enter($__internal_de524250ae50788a765f410408b29f4cd12dec79f98998678eec01fd425fa97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_b31f631e8f3f177b2a71bc6193daf8ffbee264e0e5455ae6b44a191c3c4b4b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31f631e8f3f177b2a71bc6193daf8ffbee264e0e5455ae6b44a191c3c4b4b9d->enter($__internal_b31f631e8f3f177b2a71bc6193daf8ffbee264e0e5455ae6b44a191c3c4b4b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de524250ae50788a765f410408b29f4cd12dec79f98998678eec01fd425fa97a->leave($__internal_de524250ae50788a765f410408b29f4cd12dec79f98998678eec01fd425fa97a_prof);

        
        $__internal_b31f631e8f3f177b2a71bc6193daf8ffbee264e0e5455ae6b44a191c3c4b4b9d->leave($__internal_b31f631e8f3f177b2a71bc6193daf8ffbee264e0e5455ae6b44a191c3c4b4b9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_744b551d94563792eb262a993649c38435b86ab75d820dce8bdd4223c7f5c918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744b551d94563792eb262a993649c38435b86ab75d820dce8bdd4223c7f5c918->enter($__internal_744b551d94563792eb262a993649c38435b86ab75d820dce8bdd4223c7f5c918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04cbc333c719dffc474c629632f60a5c02751a24cc86e71c41fc8c9a4227f826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04cbc333c719dffc474c629632f60a5c02751a24cc86e71c41fc8c9a4227f826->enter($__internal_04cbc333c719dffc474c629632f60a5c02751a24cc86e71c41fc8c9a4227f826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tasks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Start</th>
                <th>Finish</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["task"], "start", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "start", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["task"], "finish", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "finish", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_show", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\">Create a new task</a>
        </li>
    </ul>
";
        
        $__internal_04cbc333c719dffc474c629632f60a5c02751a24cc86e71c41fc8c9a4227f826->leave($__internal_04cbc333c719dffc474c629632f60a5c02751a24cc86e71c41fc8c9a4227f826_prof);

        
        $__internal_744b551d94563792eb262a993649c38435b86ab75d820dce8bdd4223c7f5c918->leave($__internal_744b551d94563792eb262a993649c38435b86ab75d820dce8bdd4223c7f5c918_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  114 => 35,  102 => 29,  96 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tasks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Start</th>
                <th>Finish</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
            <tr>
                <td><a href=\"{{ path('task_show', { 'id': task.id }) }}\">{{ task.id }}</a></td>
                <td>{{ task.name }}</td>
                <td>{% if task.start %}{{ task.start|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if task.finish %}{{ task.finish|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('task_show', { 'id': task.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('task_new') }}\">Create a new task</a>
        </li>
    </ul>
{% endblock %}
", "task/index.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/task/index.html.twig");
    }
}
