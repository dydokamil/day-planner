<?php

/* task/show.html.twig */
class __TwigTemplate_52318c437f34a947202d03d1f33bab5428226eebb42b4c488b0005d858183e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/show.html.twig", 1);
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
        $__internal_efb119c3a960b2c260dfdba26ad3a88d75f59324f203d99654e98b3d5a2a8f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb119c3a960b2c260dfdba26ad3a88d75f59324f203d99654e98b3d5a2a8f99->enter($__internal_efb119c3a960b2c260dfdba26ad3a88d75f59324f203d99654e98b3d5a2a8f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $__internal_aab7283489f8ad50c4aa2c1d1921f12e0c33d8a168912bcb075996e287f505c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab7283489f8ad50c4aa2c1d1921f12e0c33d8a168912bcb075996e287f505c3->enter($__internal_aab7283489f8ad50c4aa2c1d1921f12e0c33d8a168912bcb075996e287f505c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb119c3a960b2c260dfdba26ad3a88d75f59324f203d99654e98b3d5a2a8f99->leave($__internal_efb119c3a960b2c260dfdba26ad3a88d75f59324f203d99654e98b3d5a2a8f99_prof);

        
        $__internal_aab7283489f8ad50c4aa2c1d1921f12e0c33d8a168912bcb075996e287f505c3->leave($__internal_aab7283489f8ad50c4aa2c1d1921f12e0c33d8a168912bcb075996e287f505c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_774a88340d627310b7554325ca75ccb8b4c98f06bb257f62165af7cda476002a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774a88340d627310b7554325ca75ccb8b4c98f06bb257f62165af7cda476002a->enter($__internal_774a88340d627310b7554325ca75ccb8b4c98f06bb257f62165af7cda476002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34c16e11032ce48c1e4274efe23c853aba7f505a228ef2aee6f7fa11374cd77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c16e11032ce48c1e4274efe23c853aba7f505a228ef2aee6f7fa11374cd77d->enter($__internal_34c16e11032ce48c1e4274efe23c853aba7f505a228ef2aee6f7fa11374cd77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "start", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "start", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Finish</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "finish", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "finish", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_34c16e11032ce48c1e4274efe23c853aba7f505a228ef2aee6f7fa11374cd77d->leave($__internal_34c16e11032ce48c1e4274efe23c853aba7f505a228ef2aee6f7fa11374cd77d_prof);

        
        $__internal_774a88340d627310b7554325ca75ccb8b4c98f06bb257f62165af7cda476002a->leave($__internal_774a88340d627310b7554325ca75ccb8b4c98f06bb257f62165af7cda476002a_prof);

    }

    public function getTemplateName()
    {
        return "task/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  104 => 35,  98 => 32,  92 => 29,  80 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Task</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ task.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ task.name }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{% if task.start %}{{ task.start|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Finish</th>
                <td>{% if task.finish %}{{ task.finish|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('task_edit', { 'id': task.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "task/show.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/task/show.html.twig");
    }
}
