<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
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
        $__internal_ffccf4a3536c584fa71f7001c4397bd79d9c1612e730cf5f5f6d99c6084f1491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffccf4a3536c584fa71f7001c4397bd79d9c1612e730cf5f5f6d99c6084f1491->enter($__internal_ffccf4a3536c584fa71f7001c4397bd79d9c1612e730cf5f5f6d99c6084f1491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f50bcc824e8c7fc00863b3a50f3347ffb9d70bdfa1709c9a4eaea117e8eae196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50bcc824e8c7fc00863b3a50f3347ffb9d70bdfa1709c9a4eaea117e8eae196->enter($__internal_f50bcc824e8c7fc00863b3a50f3347ffb9d70bdfa1709c9a4eaea117e8eae196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffccf4a3536c584fa71f7001c4397bd79d9c1612e730cf5f5f6d99c6084f1491->leave($__internal_ffccf4a3536c584fa71f7001c4397bd79d9c1612e730cf5f5f6d99c6084f1491_prof);

        
        $__internal_f50bcc824e8c7fc00863b3a50f3347ffb9d70bdfa1709c9a4eaea117e8eae196->leave($__internal_f50bcc824e8c7fc00863b3a50f3347ffb9d70bdfa1709c9a4eaea117e8eae196_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4541d08ef0a5c02e9bb0df8fe6527e2fc1f5137287d9652d3f83645879ffe487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4541d08ef0a5c02e9bb0df8fe6527e2fc1f5137287d9652d3f83645879ffe487->enter($__internal_4541d08ef0a5c02e9bb0df8fe6527e2fc1f5137287d9652d3f83645879ffe487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0993e8a946f79676e601b61c7df313c23e673ec0228b889cdc499bb02ea683e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0993e8a946f79676e601b61c7df313c23e673ec0228b889cdc499bb02ea683e->enter($__internal_b0993e8a946f79676e601b61c7df313c23e673ec0228b889cdc499bb02ea683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b0993e8a946f79676e601b61c7df313c23e673ec0228b889cdc499bb02ea683e->leave($__internal_b0993e8a946f79676e601b61c7df313c23e673ec0228b889cdc499bb02ea683e_prof);

        
        $__internal_4541d08ef0a5c02e9bb0df8fe6527e2fc1f5137287d9652d3f83645879ffe487->leave($__internal_4541d08ef0a5c02e9bb0df8fe6527e2fc1f5137287d9652d3f83645879ffe487_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1bf8dff65ffb83eac5c8e6069398dd77988b4b44c33ef5983d9f1ea9a51682f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bf8dff65ffb83eac5c8e6069398dd77988b4b44c33ef5983d9f1ea9a51682f->enter($__internal_b1bf8dff65ffb83eac5c8e6069398dd77988b4b44c33ef5983d9f1ea9a51682f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_883c78a95525a18a628b3c4b521ef585c170ebb3b0e15f270083d336ac4dc836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883c78a95525a18a628b3c4b521ef585c170ebb3b0e15f270083d336ac4dc836->enter($__internal_883c78a95525a18a628b3c4b521ef585c170ebb3b0e15f270083d336ac4dc836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_883c78a95525a18a628b3c4b521ef585c170ebb3b0e15f270083d336ac4dc836->leave($__internal_883c78a95525a18a628b3c4b521ef585c170ebb3b0e15f270083d336ac4dc836_prof);

        
        $__internal_b1bf8dff65ffb83eac5c8e6069398dd77988b4b44c33ef5983d9f1ea9a51682f->leave($__internal_b1bf8dff65ffb83eac5c8e6069398dd77988b4b44c33ef5983d9f1ea9a51682f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb2ae7035a2ae75ca3be092f0239b7b1a63e586cfbeabaa5b4e666b9c598b794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2ae7035a2ae75ca3be092f0239b7b1a63e586cfbeabaa5b4e666b9c598b794->enter($__internal_bb2ae7035a2ae75ca3be092f0239b7b1a63e586cfbeabaa5b4e666b9c598b794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a08c77b3eff1d6e0008b6d678a7189d780f1cceb0efc7e02981b849ca439911d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08c77b3eff1d6e0008b6d678a7189d780f1cceb0efc7e02981b849ca439911d->enter($__internal_a08c77b3eff1d6e0008b6d678a7189d780f1cceb0efc7e02981b849ca439911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a08c77b3eff1d6e0008b6d678a7189d780f1cceb0efc7e02981b849ca439911d->leave($__internal_a08c77b3eff1d6e0008b6d678a7189d780f1cceb0efc7e02981b849ca439911d_prof);

        
        $__internal_bb2ae7035a2ae75ca3be092f0239b7b1a63e586cfbeabaa5b4e666b9c598b794->leave($__internal_bb2ae7035a2ae75ca3be092f0239b7b1a63e586cfbeabaa5b4e666b9c598b794_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
