<?php

/* priority/new.html.twig */
class __TwigTemplate_544e70065b38639c41b439a11d29be6ba72283084f71cf98f6331697662cc993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "priority/new.html.twig", 1);
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
        $__internal_485392c4d64f140cf88484b3131d9bd1b5a149fa52e93b60366a9745a821dc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485392c4d64f140cf88484b3131d9bd1b5a149fa52e93b60366a9745a821dc5d->enter($__internal_485392c4d64f140cf88484b3131d9bd1b5a149fa52e93b60366a9745a821dc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/new.html.twig"));

        $__internal_c3d46a1465b65669e4a0fd72cb3c34ac665e29d60a0594701e20b7b2a660a3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d46a1465b65669e4a0fd72cb3c34ac665e29d60a0594701e20b7b2a660a3f1->enter($__internal_c3d46a1465b65669e4a0fd72cb3c34ac665e29d60a0594701e20b7b2a660a3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "priority/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_485392c4d64f140cf88484b3131d9bd1b5a149fa52e93b60366a9745a821dc5d->leave($__internal_485392c4d64f140cf88484b3131d9bd1b5a149fa52e93b60366a9745a821dc5d_prof);

        
        $__internal_c3d46a1465b65669e4a0fd72cb3c34ac665e29d60a0594701e20b7b2a660a3f1->leave($__internal_c3d46a1465b65669e4a0fd72cb3c34ac665e29d60a0594701e20b7b2a660a3f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319958934b0cdd01e08ba9e50d7148a33fac908e96bd88643c3e708aed3822b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319958934b0cdd01e08ba9e50d7148a33fac908e96bd88643c3e708aed3822b8->enter($__internal_319958934b0cdd01e08ba9e50d7148a33fac908e96bd88643c3e708aed3822b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db4681de8a3cf99045c6941eb1a588fb46fd53c9fc8760a679a14c4e3336fe09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4681de8a3cf99045c6941eb1a588fb46fd53c9fc8760a679a14c4e3336fe09->enter($__internal_db4681de8a3cf99045c6941eb1a588fb46fd53c9fc8760a679a14c4e3336fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Priority creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("priority_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_db4681de8a3cf99045c6941eb1a588fb46fd53c9fc8760a679a14c4e3336fe09->leave($__internal_db4681de8a3cf99045c6941eb1a588fb46fd53c9fc8760a679a14c4e3336fe09_prof);

        
        $__internal_319958934b0cdd01e08ba9e50d7148a33fac908e96bd88643c3e708aed3822b8->leave($__internal_319958934b0cdd01e08ba9e50d7148a33fac908e96bd88643c3e708aed3822b8_prof);

    }

    public function getTemplateName()
    {
        return "priority/new.html.twig";
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
    <h1>Priority creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('priority_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "priority/new.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/priority/new.html.twig");
    }
}
