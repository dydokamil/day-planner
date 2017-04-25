<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39612aba63fe91804314b317646e71d2afc6850af066640a0f91c7a58927d792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39612aba63fe91804314b317646e71d2afc6850af066640a0f91c7a58927d792->enter($__internal_39612aba63fe91804314b317646e71d2afc6850af066640a0f91c7a58927d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9bd3e65a2a83c2e1fca527edfd40b1faf1cf5b0eef057f9b142ff81d7f30115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd3e65a2a83c2e1fca527edfd40b1faf1cf5b0eef057f9b142ff81d7f30115d->enter($__internal_9bd3e65a2a83c2e1fca527edfd40b1faf1cf5b0eef057f9b142ff81d7f30115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39612aba63fe91804314b317646e71d2afc6850af066640a0f91c7a58927d792->leave($__internal_39612aba63fe91804314b317646e71d2afc6850af066640a0f91c7a58927d792_prof);

        
        $__internal_9bd3e65a2a83c2e1fca527edfd40b1faf1cf5b0eef057f9b142ff81d7f30115d->leave($__internal_9bd3e65a2a83c2e1fca527edfd40b1faf1cf5b0eef057f9b142ff81d7f30115d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_555b678186fa1e8a54808714b9690aa14b6734eb1d8cfe72429aedee10fb02e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555b678186fa1e8a54808714b9690aa14b6734eb1d8cfe72429aedee10fb02e0->enter($__internal_555b678186fa1e8a54808714b9690aa14b6734eb1d8cfe72429aedee10fb02e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aecbd1b3e1ab303943801c653ee49069877dd84c0bbf712f340b823829b67667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecbd1b3e1ab303943801c653ee49069877dd84c0bbf712f340b823829b67667->enter($__internal_aecbd1b3e1ab303943801c653ee49069877dd84c0bbf712f340b823829b67667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_aecbd1b3e1ab303943801c653ee49069877dd84c0bbf712f340b823829b67667->leave($__internal_aecbd1b3e1ab303943801c653ee49069877dd84c0bbf712f340b823829b67667_prof);

        
        $__internal_555b678186fa1e8a54808714b9690aa14b6734eb1d8cfe72429aedee10fb02e0->leave($__internal_555b678186fa1e8a54808714b9690aa14b6734eb1d8cfe72429aedee10fb02e0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a7b814bcf024e1f893a42865d7a1c7e7b6c905b0cd79a3d27fd11a1a60d7e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7b814bcf024e1f893a42865d7a1c7e7b6c905b0cd79a3d27fd11a1a60d7e85->enter($__internal_1a7b814bcf024e1f893a42865d7a1c7e7b6c905b0cd79a3d27fd11a1a60d7e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d31629dcf475fad64073319494de08803a7de85eeb8a7ae9bcb1d8dd32794ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d31629dcf475fad64073319494de08803a7de85eeb8a7ae9bcb1d8dd32794ed->enter($__internal_7d31629dcf475fad64073319494de08803a7de85eeb8a7ae9bcb1d8dd32794ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d31629dcf475fad64073319494de08803a7de85eeb8a7ae9bcb1d8dd32794ed->leave($__internal_7d31629dcf475fad64073319494de08803a7de85eeb8a7ae9bcb1d8dd32794ed_prof);

        
        $__internal_1a7b814bcf024e1f893a42865d7a1c7e7b6c905b0cd79a3d27fd11a1a60d7e85->leave($__internal_1a7b814bcf024e1f893a42865d7a1c7e7b6c905b0cd79a3d27fd11a1a60d7e85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb91512ed5e54c2eff7f96d47db8b4c5a183935d55cb1f00bb428abf8f9edbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb91512ed5e54c2eff7f96d47db8b4c5a183935d55cb1f00bb428abf8f9edbd4->enter($__internal_bb91512ed5e54c2eff7f96d47db8b4c5a183935d55cb1f00bb428abf8f9edbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3946eacc18bf0baf414a39081fe6e1af5020bae56762c4e619b02c5822f945b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3946eacc18bf0baf414a39081fe6e1af5020bae56762c4e619b02c5822f945b->enter($__internal_a3946eacc18bf0baf414a39081fe6e1af5020bae56762c4e619b02c5822f945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a3946eacc18bf0baf414a39081fe6e1af5020bae56762c4e619b02c5822f945b->leave($__internal_a3946eacc18bf0baf414a39081fe6e1af5020bae56762c4e619b02c5822f945b_prof);

        
        $__internal_bb91512ed5e54c2eff7f96d47db8b4c5a183935d55cb1f00bb428abf8f9edbd4->leave($__internal_bb91512ed5e54c2eff7f96d47db8b4c5a183935d55cb1f00bb428abf8f9edbd4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kamil/symfony_projects/zaliczenie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
