<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e7f5e605df04de92dab17961c753b0276cbc293b92e7209e5bbd6dbeebe82ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7f5e605df04de92dab17961c753b0276cbc293b92e7209e5bbd6dbeebe82ab->enter($__internal_6e7f5e605df04de92dab17961c753b0276cbc293b92e7209e5bbd6dbeebe82ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_726d4a899fa701b8e2c142b2e4793941f495b67e24076e587d35d6c507e5efbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726d4a899fa701b8e2c142b2e4793941f495b67e24076e587d35d6c507e5efbe->enter($__internal_726d4a899fa701b8e2c142b2e4793941f495b67e24076e587d35d6c507e5efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e7f5e605df04de92dab17961c753b0276cbc293b92e7209e5bbd6dbeebe82ab->leave($__internal_6e7f5e605df04de92dab17961c753b0276cbc293b92e7209e5bbd6dbeebe82ab_prof);

        
        $__internal_726d4a899fa701b8e2c142b2e4793941f495b67e24076e587d35d6c507e5efbe->leave($__internal_726d4a899fa701b8e2c142b2e4793941f495b67e24076e587d35d6c507e5efbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0647c75f6ff60094e38938a8c8c4fb468339ce0bfc7e7853a354b56f8477f505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0647c75f6ff60094e38938a8c8c4fb468339ce0bfc7e7853a354b56f8477f505->enter($__internal_0647c75f6ff60094e38938a8c8c4fb468339ce0bfc7e7853a354b56f8477f505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c2df96d1ac9a8fce9b6884515573237456341a4ca26576e17f25e14c2a5148c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2df96d1ac9a8fce9b6884515573237456341a4ca26576e17f25e14c2a5148c3->enter($__internal_c2df96d1ac9a8fce9b6884515573237456341a4ca26576e17f25e14c2a5148c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c2df96d1ac9a8fce9b6884515573237456341a4ca26576e17f25e14c2a5148c3->leave($__internal_c2df96d1ac9a8fce9b6884515573237456341a4ca26576e17f25e14c2a5148c3_prof);

        
        $__internal_0647c75f6ff60094e38938a8c8c4fb468339ce0bfc7e7853a354b56f8477f505->leave($__internal_0647c75f6ff60094e38938a8c8c4fb468339ce0bfc7e7853a354b56f8477f505_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c3b99cd5c7e184e27393a05d527e74a69d95d12c2456646dfa0470a44e026e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3b99cd5c7e184e27393a05d527e74a69d95d12c2456646dfa0470a44e026e6->enter($__internal_3c3b99cd5c7e184e27393a05d527e74a69d95d12c2456646dfa0470a44e026e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_50e7045f3510f2ab5011d782429cb82b5bdb761b483fef13803404fb35c9e58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e7045f3510f2ab5011d782429cb82b5bdb761b483fef13803404fb35c9e58e->enter($__internal_50e7045f3510f2ab5011d782429cb82b5bdb761b483fef13803404fb35c9e58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_50e7045f3510f2ab5011d782429cb82b5bdb761b483fef13803404fb35c9e58e->leave($__internal_50e7045f3510f2ab5011d782429cb82b5bdb761b483fef13803404fb35c9e58e_prof);

        
        $__internal_3c3b99cd5c7e184e27393a05d527e74a69d95d12c2456646dfa0470a44e026e6->leave($__internal_3c3b99cd5c7e184e27393a05d527e74a69d95d12c2456646dfa0470a44e026e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5012934976af7391280556baf1cdc152d509b7221b32d36d126c0ca8c3eb193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5012934976af7391280556baf1cdc152d509b7221b32d36d126c0ca8c3eb193->enter($__internal_f5012934976af7391280556baf1cdc152d509b7221b32d36d126c0ca8c3eb193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f73319127f2389e342cc79b3a4e4cb3bcc8eab15ad0be14c6d71390da9c53261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73319127f2389e342cc79b3a4e4cb3bcc8eab15ad0be14c6d71390da9c53261->enter($__internal_f73319127f2389e342cc79b3a4e4cb3bcc8eab15ad0be14c6d71390da9c53261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f73319127f2389e342cc79b3a4e4cb3bcc8eab15ad0be14c6d71390da9c53261->leave($__internal_f73319127f2389e342cc79b3a4e4cb3bcc8eab15ad0be14c6d71390da9c53261_prof);

        
        $__internal_f5012934976af7391280556baf1cdc152d509b7221b32d36d126c0ca8c3eb193->leave($__internal_f5012934976af7391280556baf1cdc152d509b7221b32d36d126c0ca8c3eb193_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kamil/symfony_projects/zaliczenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
