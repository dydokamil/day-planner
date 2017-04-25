<?php

/* base.html.twig */
class __TwigTemplate_6f05d78eba1f6eca400f9419ad3a555b4e96748c7173ebf17f6bb62d7fa1c24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d96f52017fbf81087fbb94531669da1bf1049708a216f1a43718e66a0fdd6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d96f52017fbf81087fbb94531669da1bf1049708a216f1a43718e66a0fdd6ac->enter($__internal_5d96f52017fbf81087fbb94531669da1bf1049708a216f1a43718e66a0fdd6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_12abc201ac7c5d05711b010869bead4c7e980a55c849af22b0f9d8e83a4b0617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12abc201ac7c5d05711b010869bead4c7e980a55c849af22b0f9d8e83a4b0617->enter($__internal_12abc201ac7c5d05711b010869bead4c7e980a55c849af22b0f9d8e83a4b0617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 17
        echo "        </div>

        <div id=\"content\">
            ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "        </div>
    </body>
</html>
";
        
        $__internal_5d96f52017fbf81087fbb94531669da1bf1049708a216f1a43718e66a0fdd6ac->leave($__internal_5d96f52017fbf81087fbb94531669da1bf1049708a216f1a43718e66a0fdd6ac_prof);

        
        $__internal_12abc201ac7c5d05711b010869bead4c7e980a55c849af22b0f9d8e83a4b0617->leave($__internal_12abc201ac7c5d05711b010869bead4c7e980a55c849af22b0f9d8e83a4b0617_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e32658580b3c7d8bbee1d1c9aeb1bd7d2f7efb13bc30fc86afcc03d2fd817b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e32658580b3c7d8bbee1d1c9aeb1bd7d2f7efb13bc30fc86afcc03d2fd817b9->enter($__internal_2e32658580b3c7d8bbee1d1c9aeb1bd7d2f7efb13bc30fc86afcc03d2fd817b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b8411f54988a6625a87f528ff3a31d04ab9ccca9e609bdceca66e33e254a516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8411f54988a6625a87f528ff3a31d04ab9ccca9e609bdceca66e33e254a516->enter($__internal_7b8411f54988a6625a87f528ff3a31d04ab9ccca9e609bdceca66e33e254a516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Test Application";
        
        $__internal_7b8411f54988a6625a87f528ff3a31d04ab9ccca9e609bdceca66e33e254a516->leave($__internal_7b8411f54988a6625a87f528ff3a31d04ab9ccca9e609bdceca66e33e254a516_prof);

        
        $__internal_2e32658580b3c7d8bbee1d1c9aeb1bd7d2f7efb13bc30fc86afcc03d2fd817b9->leave($__internal_2e32658580b3c7d8bbee1d1c9aeb1bd7d2f7efb13bc30fc86afcc03d2fd817b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_311b14c10f4b85ed4e67021c7b69d55ddc52713f779b73ee3b9a3ed8b68575ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311b14c10f4b85ed4e67021c7b69d55ddc52713f779b73ee3b9a3ed8b68575ab->enter($__internal_311b14c10f4b85ed4e67021c7b69d55ddc52713f779b73ee3b9a3ed8b68575ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d942949538b090b3d628e0b8af6ee8612e8f9ba3b80dd2be3e0ae79e44c5e035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d942949538b090b3d628e0b8af6ee8612e8f9ba3b80dd2be3e0ae79e44c5e035->enter($__internal_d942949538b090b3d628e0b8af6ee8612e8f9ba3b80dd2be3e0ae79e44c5e035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d942949538b090b3d628e0b8af6ee8612e8f9ba3b80dd2be3e0ae79e44c5e035->leave($__internal_d942949538b090b3d628e0b8af6ee8612e8f9ba3b80dd2be3e0ae79e44c5e035_prof);

        
        $__internal_311b14c10f4b85ed4e67021c7b69d55ddc52713f779b73ee3b9a3ed8b68575ab->leave($__internal_311b14c10f4b85ed4e67021c7b69d55ddc52713f779b73ee3b9a3ed8b68575ab_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7c869d410be62baf2ac55c863c872d9e43d8971eb0886d68b23b4bc6b25f70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c869d410be62baf2ac55c863c872d9e43d8971eb0886d68b23b4bc6b25f70b->enter($__internal_e7c869d410be62baf2ac55c863c872d9e43d8971eb0886d68b23b4bc6b25f70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_0441c6356d8897f1a4cc5a096908d435a2b818f21afc845067ba94caeddb8e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0441c6356d8897f1a4cc5a096908d435a2b818f21afc845067ba94caeddb8e04->enter($__internal_0441c6356d8897f1a4cc5a096908d435a2b818f21afc845067ba94caeddb8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/user\">User</a></li>
                    <li><a href=\"/task\">Task</a></li>
                </ul>
            ";
        
        $__internal_0441c6356d8897f1a4cc5a096908d435a2b818f21afc845067ba94caeddb8e04->leave($__internal_0441c6356d8897f1a4cc5a096908d435a2b818f21afc845067ba94caeddb8e04_prof);

        
        $__internal_e7c869d410be62baf2ac55c863c872d9e43d8971eb0886d68b23b4bc6b25f70b->leave($__internal_e7c869d410be62baf2ac55c863c872d9e43d8971eb0886d68b23b4bc6b25f70b_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_8075dc33ca6bae1e2859a5fd9f60d766430a18fefa89b1d8218df37016667be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8075dc33ca6bae1e2859a5fd9f60d766430a18fefa89b1d8218df37016667be4->enter($__internal_8075dc33ca6bae1e2859a5fd9f60d766430a18fefa89b1d8218df37016667be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d00812ba90d44575d8253b6d1e92d9301c1d7a9861158ecf3886f55112c9e403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00812ba90d44575d8253b6d1e92d9301c1d7a9861158ecf3886f55112c9e403->enter($__internal_d00812ba90d44575d8253b6d1e92d9301c1d7a9861158ecf3886f55112c9e403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d00812ba90d44575d8253b6d1e92d9301c1d7a9861158ecf3886f55112c9e403->leave($__internal_d00812ba90d44575d8253b6d1e92d9301c1d7a9861158ecf3886f55112c9e403_prof);

        
        $__internal_8075dc33ca6bae1e2859a5fd9f60d766430a18fefa89b1d8218df37016667be4->leave($__internal_8075dc33ca6bae1e2859a5fd9f60d766430a18fefa89b1d8218df37016667be4_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a53551265380d514e17297976c5f7ccdce3096e409422cfe37c6fb2db8ab4ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53551265380d514e17297976c5f7ccdce3096e409422cfe37c6fb2db8ab4ec2->enter($__internal_a53551265380d514e17297976c5f7ccdce3096e409422cfe37c6fb2db8ab4ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f21aec403965bf92f6414dac275cb5b9d3ef23d929902fae6b4070916b453a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21aec403965bf92f6414dac275cb5b9d3ef23d929902fae6b4070916b453a14->enter($__internal_f21aec403965bf92f6414dac275cb5b9d3ef23d929902fae6b4070916b453a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f21aec403965bf92f6414dac275cb5b9d3ef23d929902fae6b4070916b453a14->leave($__internal_f21aec403965bf92f6414dac275cb5b9d3ef23d929902fae6b4070916b453a14_prof);

        
        $__internal_a53551265380d514e17297976c5f7ccdce3096e409422cfe37c6fb2db8ab4ec2->leave($__internal_a53551265380d514e17297976c5f7ccdce3096e409422cfe37c6fb2db8ab4ec2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 21,  131 => 20,  116 => 11,  107 => 10,  90 => 6,  72 => 5,  59 => 22,  56 => 21,  54 => 20,  49 => 17,  47 => 10,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Test Application{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <div id=\"sidebar\">
            {% block sidebar %}
                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/user\">User</a></li>
                    <li><a href=\"/task\">Task</a></li>
                </ul>
            {% endblock %}
        </div>

        <div id=\"content\">
            {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "/home/kamil/symfony_projects/zaliczenie/app/Resources/views/base.html.twig");
    }
}
