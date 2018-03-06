<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db626e4d4071185852b269fa0c9626603923f4fce601db084dc3a72d2b750380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db626e4d4071185852b269fa0c9626603923f4fce601db084dc3a72d2b750380->enter($__internal_db626e4d4071185852b269fa0c9626603923f4fce601db084dc3a72d2b750380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_93cba0a2db7e1b2046b9024c4ee822c5fae8684bd46bd2ca1551a74eb2c1d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cba0a2db7e1b2046b9024c4ee822c5fae8684bd46bd2ca1551a74eb2c1d560->enter($__internal_93cba0a2db7e1b2046b9024c4ee822c5fae8684bd46bd2ca1551a74eb2c1d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db626e4d4071185852b269fa0c9626603923f4fce601db084dc3a72d2b750380->leave($__internal_db626e4d4071185852b269fa0c9626603923f4fce601db084dc3a72d2b750380_prof);

        
        $__internal_93cba0a2db7e1b2046b9024c4ee822c5fae8684bd46bd2ca1551a74eb2c1d560->leave($__internal_93cba0a2db7e1b2046b9024c4ee822c5fae8684bd46bd2ca1551a74eb2c1d560_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2395e0cdcc4893114faf764b0c1e6f4e36f67f078032877d22a7c97656d3664d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2395e0cdcc4893114faf764b0c1e6f4e36f67f078032877d22a7c97656d3664d->enter($__internal_2395e0cdcc4893114faf764b0c1e6f4e36f67f078032877d22a7c97656d3664d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f53b3c60a0010cd732fd247954237e9c13e5545385a45b6430b2ae4ff77d544a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53b3c60a0010cd732fd247954237e9c13e5545385a45b6430b2ae4ff77d544a->enter($__internal_f53b3c60a0010cd732fd247954237e9c13e5545385a45b6430b2ae4ff77d544a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f53b3c60a0010cd732fd247954237e9c13e5545385a45b6430b2ae4ff77d544a->leave($__internal_f53b3c60a0010cd732fd247954237e9c13e5545385a45b6430b2ae4ff77d544a_prof);

        
        $__internal_2395e0cdcc4893114faf764b0c1e6f4e36f67f078032877d22a7c97656d3664d->leave($__internal_2395e0cdcc4893114faf764b0c1e6f4e36f67f078032877d22a7c97656d3664d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
