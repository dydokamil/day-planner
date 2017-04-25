<?php

/* user/show.html.twig */
class __TwigTemplate_4c94cee4fbec834b9e4dfcc9d250d9633bfed5399e63aca3edea0106fdd724a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_8e811d9ad8b9f10d22cd1109d0434ad04312191b20d67b0207b30732558201b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e811d9ad8b9f10d22cd1109d0434ad04312191b20d67b0207b30732558201b7->enter($__internal_8e811d9ad8b9f10d22cd1109d0434ad04312191b20d67b0207b30732558201b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_675f1312d29dffff312d71c8784775bc03c2e1a0d000c0281caa61e6e6ce211d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675f1312d29dffff312d71c8784775bc03c2e1a0d000c0281caa61e6e6ce211d->enter($__internal_675f1312d29dffff312d71c8784775bc03c2e1a0d000c0281caa61e6e6ce211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e811d9ad8b9f10d22cd1109d0434ad04312191b20d67b0207b30732558201b7->leave($__internal_8e811d9ad8b9f10d22cd1109d0434ad04312191b20d67b0207b30732558201b7_prof);

        
        $__internal_675f1312d29dffff312d71c8784775bc03c2e1a0d000c0281caa61e6e6ce211d->leave($__internal_675f1312d29dffff312d71c8784775bc03c2e1a0d000c0281caa61e6e6ce211d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d95d49e528edd4b51e36cb937044720d49746afaf47b1cbf520aa1c506ff588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d95d49e528edd4b51e36cb937044720d49746afaf47b1cbf520aa1c506ff588->enter($__internal_0d95d49e528edd4b51e36cb937044720d49746afaf47b1cbf520aa1c506ff588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe963e1af2e32f6a54be66a70c187312f0325507c0a14cd8282c4030512d406d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe963e1af2e32f6a54be66a70c187312f0325507c0a14cd8282c4030512d406d->enter($__internal_fe963e1af2e32f6a54be66a70c187312f0325507c0a14cd8282c4030512d406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fe963e1af2e32f6a54be66a70c187312f0325507c0a14cd8282c4030512d406d->leave($__internal_fe963e1af2e32f6a54be66a70c187312f0325507c0a14cd8282c4030512d406d_prof);

        
        $__internal_0d95d49e528edd4b51e36cb937044720d49746afaf47b1cbf520aa1c506ff588->leave($__internal_0d95d49e528edd4b51e36cb937044720d49746afaf47b1cbf520aa1c506ff588_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ user.login }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user.password }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "user/show.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/user/show.html.twig");
    }
}
