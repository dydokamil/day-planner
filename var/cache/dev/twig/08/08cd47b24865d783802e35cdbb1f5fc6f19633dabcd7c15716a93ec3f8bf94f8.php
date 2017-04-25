<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_696bdd7898d6c529d5af6414342d6f114c67f0ad6e7bd1494ab9cbd712738ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696bdd7898d6c529d5af6414342d6f114c67f0ad6e7bd1494ab9cbd712738ab6->enter($__internal_696bdd7898d6c529d5af6414342d6f114c67f0ad6e7bd1494ab9cbd712738ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_be7c629cc7e155bb545f9d75b6a8e09f61ec405a4e7e92175694012ea7f4ee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7c629cc7e155bb545f9d75b6a8e09f61ec405a4e7e92175694012ea7f4ee96->enter($__internal_be7c629cc7e155bb545f9d75b6a8e09f61ec405a4e7e92175694012ea7f4ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696bdd7898d6c529d5af6414342d6f114c67f0ad6e7bd1494ab9cbd712738ab6->leave($__internal_696bdd7898d6c529d5af6414342d6f114c67f0ad6e7bd1494ab9cbd712738ab6_prof);

        
        $__internal_be7c629cc7e155bb545f9d75b6a8e09f61ec405a4e7e92175694012ea7f4ee96->leave($__internal_be7c629cc7e155bb545f9d75b6a8e09f61ec405a4e7e92175694012ea7f4ee96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_070a458267507c77cf4d3b482cabb797209794ef27f7822d50866fc7766d319a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070a458267507c77cf4d3b482cabb797209794ef27f7822d50866fc7766d319a->enter($__internal_070a458267507c77cf4d3b482cabb797209794ef27f7822d50866fc7766d319a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46a55463f51bec563f9eb54baa086e5bd745d845973a96ef2d08235dfbcd6874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a55463f51bec563f9eb54baa086e5bd745d845973a96ef2d08235dfbcd6874->enter($__internal_46a55463f51bec563f9eb54baa086e5bd745d845973a96ef2d08235dfbcd6874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46a55463f51bec563f9eb54baa086e5bd745d845973a96ef2d08235dfbcd6874->leave($__internal_46a55463f51bec563f9eb54baa086e5bd745d845973a96ef2d08235dfbcd6874_prof);

        
        $__internal_070a458267507c77cf4d3b482cabb797209794ef27f7822d50866fc7766d319a->leave($__internal_070a458267507c77cf4d3b482cabb797209794ef27f7822d50866fc7766d319a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0031ec23c16f582a583d50911cafba0f7dd3a7da3a174076ade3c53de6567ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0031ec23c16f582a583d50911cafba0f7dd3a7da3a174076ade3c53de6567ed->enter($__internal_a0031ec23c16f582a583d50911cafba0f7dd3a7da3a174076ade3c53de6567ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a74596cd81af9420489449c2fd62a97f00cfd50b52dcb371d22d73d3dbb2a479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74596cd81af9420489449c2fd62a97f00cfd50b52dcb371d22d73d3dbb2a479->enter($__internal_a74596cd81af9420489449c2fd62a97f00cfd50b52dcb371d22d73d3dbb2a479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a74596cd81af9420489449c2fd62a97f00cfd50b52dcb371d22d73d3dbb2a479->leave($__internal_a74596cd81af9420489449c2fd62a97f00cfd50b52dcb371d22d73d3dbb2a479_prof);

        
        $__internal_a0031ec23c16f582a583d50911cafba0f7dd3a7da3a174076ade3c53de6567ed->leave($__internal_a0031ec23c16f582a583d50911cafba0f7dd3a7da3a174076ade3c53de6567ed_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce9031bc8586afc15e27026e41fc4a536c410c05aaca903a2eef9e634c06540a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9031bc8586afc15e27026e41fc4a536c410c05aaca903a2eef9e634c06540a->enter($__internal_ce9031bc8586afc15e27026e41fc4a536c410c05aaca903a2eef9e634c06540a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99a88efa0a300787064c962096a59397b5497d67b15cd180461e00292fa33939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a88efa0a300787064c962096a59397b5497d67b15cd180461e00292fa33939->enter($__internal_99a88efa0a300787064c962096a59397b5497d67b15cd180461e00292fa33939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_99a88efa0a300787064c962096a59397b5497d67b15cd180461e00292fa33939->leave($__internal_99a88efa0a300787064c962096a59397b5497d67b15cd180461e00292fa33939_prof);

        
        $__internal_ce9031bc8586afc15e27026e41fc4a536c410c05aaca903a2eef9e634c06540a->leave($__internal_ce9031bc8586afc15e27026e41fc4a536c410c05aaca903a2eef9e634c06540a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/kamil/symfony_projects/zaliczenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
