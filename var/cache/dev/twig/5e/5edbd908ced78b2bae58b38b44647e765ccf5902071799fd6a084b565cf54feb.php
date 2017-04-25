<?php

/* task/new.html.twig */
class __TwigTemplate_7edf24e61b52e543721af1639888081a507f5eee3652257bf90900e365472b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
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
        $__internal_bda69d3b67a033ca86c1206f02afb6d2a23d711c51cb958ad70fcb97856da4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bda69d3b67a033ca86c1206f02afb6d2a23d711c51cb958ad70fcb97856da4a1->enter($__internal_bda69d3b67a033ca86c1206f02afb6d2a23d711c51cb958ad70fcb97856da4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_f5985001b51355d325382bde5850c38c6090cfc10f6c17165ea1d7cc845b6be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5985001b51355d325382bde5850c38c6090cfc10f6c17165ea1d7cc845b6be4->enter($__internal_f5985001b51355d325382bde5850c38c6090cfc10f6c17165ea1d7cc845b6be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bda69d3b67a033ca86c1206f02afb6d2a23d711c51cb958ad70fcb97856da4a1->leave($__internal_bda69d3b67a033ca86c1206f02afb6d2a23d711c51cb958ad70fcb97856da4a1_prof);

        
        $__internal_f5985001b51355d325382bde5850c38c6090cfc10f6c17165ea1d7cc845b6be4->leave($__internal_f5985001b51355d325382bde5850c38c6090cfc10f6c17165ea1d7cc845b6be4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0418293236e74cc0a1a55207dfc3ca77ae0bf38fc533e554b32c9119c1e02396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0418293236e74cc0a1a55207dfc3ca77ae0bf38fc533e554b32c9119c1e02396->enter($__internal_0418293236e74cc0a1a55207dfc3ca77ae0bf38fc533e554b32c9119c1e02396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7010cc5f30ac941c1f89374ef2d5f9c99da817784f87143ee1418469f082f7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7010cc5f30ac941c1f89374ef2d5f9c99da817784f87143ee1418469f082f7de->enter($__internal_7010cc5f30ac941c1f89374ef2d5f9c99da817784f87143ee1418469f082f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7010cc5f30ac941c1f89374ef2d5f9c99da817784f87143ee1418469f082f7de->leave($__internal_7010cc5f30ac941c1f89374ef2d5f9c99da817784f87143ee1418469f082f7de_prof);

        
        $__internal_0418293236e74cc0a1a55207dfc3ca77ae0bf38fc533e554b32c9119c1e02396->leave($__internal_0418293236e74cc0a1a55207dfc3ca77ae0bf38fc533e554b32c9119c1e02396_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Task creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('task_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "task/new.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/task/new.html.twig");
    }
}
