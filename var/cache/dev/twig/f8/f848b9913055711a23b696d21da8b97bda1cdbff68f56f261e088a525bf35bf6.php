<?php

/* user/index.html.twig */
class __TwigTemplate_41f2e5d3cb266aa1aaf31b2379be813bd0163f150f07a431ef96644b6649ae8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_b708d70c9de0841bb210eb89e998a5a573275812a2619a704ef442c1b4d759cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b708d70c9de0841bb210eb89e998a5a573275812a2619a704ef442c1b4d759cb->enter($__internal_b708d70c9de0841bb210eb89e998a5a573275812a2619a704ef442c1b4d759cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_31b4826f64b276efbb11d03e095826514f39bce873539e88a8baba110a8f87d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b4826f64b276efbb11d03e095826514f39bce873539e88a8baba110a8f87d9->enter($__internal_31b4826f64b276efbb11d03e095826514f39bce873539e88a8baba110a8f87d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b708d70c9de0841bb210eb89e998a5a573275812a2619a704ef442c1b4d759cb->leave($__internal_b708d70c9de0841bb210eb89e998a5a573275812a2619a704ef442c1b4d759cb_prof);

        
        $__internal_31b4826f64b276efbb11d03e095826514f39bce873539e88a8baba110a8f87d9->leave($__internal_31b4826f64b276efbb11d03e095826514f39bce873539e88a8baba110a8f87d9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55a62660d1435ed6d9b70172e096cb443ede94504d0487a6c93de7cbae837cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55a62660d1435ed6d9b70172e096cb443ede94504d0487a6c93de7cbae837cca->enter($__internal_55a62660d1435ed6d9b70172e096cb443ede94504d0487a6c93de7cbae837cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8218e7cda57da88fc9069fb8559c68a85d818e8585e9bd97106ba589922d7710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8218e7cda57da88fc9069fb8559c68a85d818e8585e9bd97106ba589922d7710->enter($__internal_8218e7cda57da88fc9069fb8559c68a85d818e8585e9bd97106ba589922d7710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "login", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_8218e7cda57da88fc9069fb8559c68a85d818e8585e9bd97106ba589922d7710->leave($__internal_8218e7cda57da88fc9069fb8559c68a85d818e8585e9bd97106ba589922d7710_prof);

        
        $__internal_55a62660d1435ed6d9b70172e096cb443ede94504d0487a6c93de7cbae837cca->leave($__internal_55a62660d1435ed6d9b70172e096cb443ede94504d0487a6c93de7cbae837cca_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.login }}</td>
                <td>{{ user.password }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/user/index.html.twig");
    }
}
