<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_fa3f3e7b0dea8da648885b15fc3832503e4d347825baad2fba538506c62a877d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fc5b73289d642851390fd2a99fedff5ef83647a144f6d3e49995f41f877b832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc5b73289d642851390fd2a99fedff5ef83647a144f6d3e49995f41f877b832->enter($__internal_7fc5b73289d642851390fd2a99fedff5ef83647a144f6d3e49995f41f877b832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b9a7fdcb76dc4a01c75e98474e86b6e47555ec5f6f6c583fc7dc51a4cfc078d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a7fdcb76dc4a01c75e98474e86b6e47555ec5f6f6c583fc7dc51a4cfc078d3->enter($__internal_b9a7fdcb76dc4a01c75e98474e86b6e47555ec5f6f6c583fc7dc51a4cfc078d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7fc5b73289d642851390fd2a99fedff5ef83647a144f6d3e49995f41f877b832->leave($__internal_7fc5b73289d642851390fd2a99fedff5ef83647a144f6d3e49995f41f877b832_prof);

        
        $__internal_b9a7fdcb76dc4a01c75e98474e86b6e47555ec5f6f6c583fc7dc51a4cfc078d3->leave($__internal_b9a7fdcb76dc4a01c75e98474e86b6e47555ec5f6f6c583fc7dc51a4cfc078d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/kamil/symfony_projects/zaliczenie/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
