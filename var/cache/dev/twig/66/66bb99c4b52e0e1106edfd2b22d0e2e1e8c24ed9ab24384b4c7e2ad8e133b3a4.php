<?php

/* user/new.html.twig */
class __TwigTemplate_8726f0c3327f86f28073a64f0811290bbd3fa2cd708ba331fa9f13d826abec09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_f7b4356333f09beee3d72d307597f8d7840dfe002b6aee7a6e021d56cb762e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b4356333f09beee3d72d307597f8d7840dfe002b6aee7a6e021d56cb762e1b->enter($__internal_f7b4356333f09beee3d72d307597f8d7840dfe002b6aee7a6e021d56cb762e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_225dde498b198191d1dc14ec465f2e6c05f2bf93f0ec29b78c91a66f746e2241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225dde498b198191d1dc14ec465f2e6c05f2bf93f0ec29b78c91a66f746e2241->enter($__internal_225dde498b198191d1dc14ec465f2e6c05f2bf93f0ec29b78c91a66f746e2241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b4356333f09beee3d72d307597f8d7840dfe002b6aee7a6e021d56cb762e1b->leave($__internal_f7b4356333f09beee3d72d307597f8d7840dfe002b6aee7a6e021d56cb762e1b_prof);

        
        $__internal_225dde498b198191d1dc14ec465f2e6c05f2bf93f0ec29b78c91a66f746e2241->leave($__internal_225dde498b198191d1dc14ec465f2e6c05f2bf93f0ec29b78c91a66f746e2241_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86b262f7687f028f6b4d4cccb9f468a29d457b8a09475f1961318cb14af17535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b262f7687f028f6b4d4cccb9f468a29d457b8a09475f1961318cb14af17535->enter($__internal_86b262f7687f028f6b4d4cccb9f468a29d457b8a09475f1961318cb14af17535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23e0fbf29358183011967fe68f4d988a0b289f38786b525a029e5ce66df2e722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e0fbf29358183011967fe68f4d988a0b289f38786b525a029e5ce66df2e722->enter($__internal_23e0fbf29358183011967fe68f4d988a0b289f38786b525a029e5ce66df2e722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_23e0fbf29358183011967fe68f4d988a0b289f38786b525a029e5ce66df2e722->leave($__internal_23e0fbf29358183011967fe68f4d988a0b289f38786b525a029e5ce66df2e722_prof);

        
        $__internal_86b262f7687f028f6b4d4cccb9f468a29d457b8a09475f1961318cb14af17535->leave($__internal_86b262f7687f028f6b4d4cccb9f468a29d457b8a09475f1961318cb14af17535_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/user/new.html.twig");
    }
}
