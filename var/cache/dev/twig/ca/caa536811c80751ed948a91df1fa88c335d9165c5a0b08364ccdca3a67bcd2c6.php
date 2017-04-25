<?php

/* task/edit.html.twig */
class __TwigTemplate_1b7652e4fcb3559f0711a9f1b5a2b05b645f4cf94a8dc8327c431ca4ad6de86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
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
        $__internal_22018ae9e75df4c736149e1ad69699dd94da5a1b546c6fbf23142aeedecbd0de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22018ae9e75df4c736149e1ad69699dd94da5a1b546c6fbf23142aeedecbd0de->enter($__internal_22018ae9e75df4c736149e1ad69699dd94da5a1b546c6fbf23142aeedecbd0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $__internal_b0e75c7a54d784fdb35c9de7f22bb0f8db97b6c4d30a0a1ac084ce0c05273409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e75c7a54d784fdb35c9de7f22bb0f8db97b6c4d30a0a1ac084ce0c05273409->enter($__internal_b0e75c7a54d784fdb35c9de7f22bb0f8db97b6c4d30a0a1ac084ce0c05273409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22018ae9e75df4c736149e1ad69699dd94da5a1b546c6fbf23142aeedecbd0de->leave($__internal_22018ae9e75df4c736149e1ad69699dd94da5a1b546c6fbf23142aeedecbd0de_prof);

        
        $__internal_b0e75c7a54d784fdb35c9de7f22bb0f8db97b6c4d30a0a1ac084ce0c05273409->leave($__internal_b0e75c7a54d784fdb35c9de7f22bb0f8db97b6c4d30a0a1ac084ce0c05273409_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada53481f5460c4a75e6a0899aa145808af68f6d56a3b19553b985e2b8e4dbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada53481f5460c4a75e6a0899aa145808af68f6d56a3b19553b985e2b8e4dbe8->enter($__internal_ada53481f5460c4a75e6a0899aa145808af68f6d56a3b19553b985e2b8e4dbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bb3be54386bf455c82403f2054b9f1a5eabb61b50e9c6eeda6dcf351f302be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb3be54386bf455c82403f2054b9f1a5eabb61b50e9c6eeda6dcf351f302be1->enter($__internal_6bb3be54386bf455c82403f2054b9f1a5eabb61b50e9c6eeda6dcf351f302be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6bb3be54386bf455c82403f2054b9f1a5eabb61b50e9c6eeda6dcf351f302be1->leave($__internal_6bb3be54386bf455c82403f2054b9f1a5eabb61b50e9c6eeda6dcf351f302be1_prof);

        
        $__internal_ada53481f5460c4a75e6a0899aa145808af68f6d56a3b19553b985e2b8e4dbe8->leave($__internal_ada53481f5460c4a75e6a0899aa145808af68f6d56a3b19553b985e2b8e4dbe8_prof);

    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Task edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "task/edit.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/task/edit.html.twig");
    }
}
