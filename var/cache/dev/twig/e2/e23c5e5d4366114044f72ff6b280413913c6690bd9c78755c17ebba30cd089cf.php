<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e2d81854e0f2b4224b6fa5b73e4718848477fea0e157b9426de63eb5e51e4dae extends Twig_Template
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
        $__internal_52809a5c067545255d1c133a82811d5c46d2c4af87e1b16c8e6e0fd4a5be0df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52809a5c067545255d1c133a82811d5c46d2c4af87e1b16c8e6e0fd4a5be0df8->enter($__internal_52809a5c067545255d1c133a82811d5c46d2c4af87e1b16c8e6e0fd4a5be0df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6c1d68f7d8cf746e34f9d807d93c776e0f06e1ee61c6fc82fd8375dca8ec3245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1d68f7d8cf746e34f9d807d93c776e0f06e1ee61c6fc82fd8375dca8ec3245->enter($__internal_6c1d68f7d8cf746e34f9d807d93c776e0f06e1ee61c6fc82fd8375dca8ec3245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52809a5c067545255d1c133a82811d5c46d2c4af87e1b16c8e6e0fd4a5be0df8->leave($__internal_52809a5c067545255d1c133a82811d5c46d2c4af87e1b16c8e6e0fd4a5be0df8_prof);

        
        $__internal_6c1d68f7d8cf746e34f9d807d93c776e0f06e1ee61c6fc82fd8375dca8ec3245->leave($__internal_6c1d68f7d8cf746e34f9d807d93c776e0f06e1ee61c6fc82fd8375dca8ec3245_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b802cd02a489a24ba208b9a82fd97f8061852cc84943f6c7e8b42e72536c0a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b802cd02a489a24ba208b9a82fd97f8061852cc84943f6c7e8b42e72536c0a27->enter($__internal_b802cd02a489a24ba208b9a82fd97f8061852cc84943f6c7e8b42e72536c0a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_089004a7f7f7520335c7ae88865c45f5b01eacc30daf1e9f82834a0362870e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089004a7f7f7520335c7ae88865c45f5b01eacc30daf1e9f82834a0362870e8c->enter($__internal_089004a7f7f7520335c7ae88865c45f5b01eacc30daf1e9f82834a0362870e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_089004a7f7f7520335c7ae88865c45f5b01eacc30daf1e9f82834a0362870e8c->leave($__internal_089004a7f7f7520335c7ae88865c45f5b01eacc30daf1e9f82834a0362870e8c_prof);

        
        $__internal_b802cd02a489a24ba208b9a82fd97f8061852cc84943f6c7e8b42e72536c0a27->leave($__internal_b802cd02a489a24ba208b9a82fd97f8061852cc84943f6c7e8b42e72536c0a27_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc264fe29b250a6c533fde9d5cd98906d134b9a3677ca434947bf8e303ba7e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc264fe29b250a6c533fde9d5cd98906d134b9a3677ca434947bf8e303ba7e6d->enter($__internal_cc264fe29b250a6c533fde9d5cd98906d134b9a3677ca434947bf8e303ba7e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29e004d5da0f4486fbace8ccb9465d096a028df369b81ec821f24fabbf760306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e004d5da0f4486fbace8ccb9465d096a028df369b81ec821f24fabbf760306->enter($__internal_29e004d5da0f4486fbace8ccb9465d096a028df369b81ec821f24fabbf760306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_29e004d5da0f4486fbace8ccb9465d096a028df369b81ec821f24fabbf760306->leave($__internal_29e004d5da0f4486fbace8ccb9465d096a028df369b81ec821f24fabbf760306_prof);

        
        $__internal_cc264fe29b250a6c533fde9d5cd98906d134b9a3677ca434947bf8e303ba7e6d->leave($__internal_cc264fe29b250a6c533fde9d5cd98906d134b9a3677ca434947bf8e303ba7e6d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_70a003895b37776675d1a6b5b9768c620722380125e35080cffe8ad789bf359d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a003895b37776675d1a6b5b9768c620722380125e35080cffe8ad789bf359d->enter($__internal_70a003895b37776675d1a6b5b9768c620722380125e35080cffe8ad789bf359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa5dbb649a67b0ce96a46a019d1f3d0286f813eca6d0d0f781134e1dfc4f79c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5dbb649a67b0ce96a46a019d1f3d0286f813eca6d0d0f781134e1dfc4f79c7->enter($__internal_aa5dbb649a67b0ce96a46a019d1f3d0286f813eca6d0d0f781134e1dfc4f79c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_aa5dbb649a67b0ce96a46a019d1f3d0286f813eca6d0d0f781134e1dfc4f79c7->leave($__internal_aa5dbb649a67b0ce96a46a019d1f3d0286f813eca6d0d0f781134e1dfc4f79c7_prof);

        
        $__internal_70a003895b37776675d1a6b5b9768c620722380125e35080cffe8ad789bf359d->leave($__internal_70a003895b37776675d1a6b5b9768c620722380125e35080cffe8ad789bf359d_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
