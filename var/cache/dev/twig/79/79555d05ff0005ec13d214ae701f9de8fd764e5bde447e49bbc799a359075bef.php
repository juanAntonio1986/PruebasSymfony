<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ce5e298ea7c566ba912d0cb4d5695f690b63e95c6189996a45de6c3ac1516709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3062d06eb3da55ebdc20592fbfff2bb130278538cb90088a9292c4754f1f6aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3062d06eb3da55ebdc20592fbfff2bb130278538cb90088a9292c4754f1f6aef->enter($__internal_3062d06eb3da55ebdc20592fbfff2bb130278538cb90088a9292c4754f1f6aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_32511fbfc011f0fd6c00fd1ac98f0a0d587a52ac490aee6fd8a35d3dfcb6627f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32511fbfc011f0fd6c00fd1ac98f0a0d587a52ac490aee6fd8a35d3dfcb6627f->enter($__internal_32511fbfc011f0fd6c00fd1ac98f0a0d587a52ac490aee6fd8a35d3dfcb6627f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3062d06eb3da55ebdc20592fbfff2bb130278538cb90088a9292c4754f1f6aef->leave($__internal_3062d06eb3da55ebdc20592fbfff2bb130278538cb90088a9292c4754f1f6aef_prof);

        
        $__internal_32511fbfc011f0fd6c00fd1ac98f0a0d587a52ac490aee6fd8a35d3dfcb6627f->leave($__internal_32511fbfc011f0fd6c00fd1ac98f0a0d587a52ac490aee6fd8a35d3dfcb6627f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c44862308dc7e4bb01ad3bfdefd2e112ab60dc79d9f2433d6eb9515537539c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44862308dc7e4bb01ad3bfdefd2e112ab60dc79d9f2433d6eb9515537539c7d->enter($__internal_c44862308dc7e4bb01ad3bfdefd2e112ab60dc79d9f2433d6eb9515537539c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48aadde5da5408a44b9d2bdbd5510c9e92931b50bc5af1831e531d1feff2c1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48aadde5da5408a44b9d2bdbd5510c9e92931b50bc5af1831e531d1feff2c1d9->enter($__internal_48aadde5da5408a44b9d2bdbd5510c9e92931b50bc5af1831e531d1feff2c1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_48aadde5da5408a44b9d2bdbd5510c9e92931b50bc5af1831e531d1feff2c1d9->leave($__internal_48aadde5da5408a44b9d2bdbd5510c9e92931b50bc5af1831e531d1feff2c1d9_prof);

        
        $__internal_c44862308dc7e4bb01ad3bfdefd2e112ab60dc79d9f2433d6eb9515537539c7d->leave($__internal_c44862308dc7e4bb01ad3bfdefd2e112ab60dc79d9f2433d6eb9515537539c7d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a97f1489f99fb4687959107f3ffaf16a09daa817e9f031beaefd997a12275009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97f1489f99fb4687959107f3ffaf16a09daa817e9f031beaefd997a12275009->enter($__internal_a97f1489f99fb4687959107f3ffaf16a09daa817e9f031beaefd997a12275009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9f86a4da2eaa6330540260895906aa7f94b6cdbfb9c6d975d8a96b1eb3e33401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f86a4da2eaa6330540260895906aa7f94b6cdbfb9c6d975d8a96b1eb3e33401->enter($__internal_9f86a4da2eaa6330540260895906aa7f94b6cdbfb9c6d975d8a96b1eb3e33401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9f86a4da2eaa6330540260895906aa7f94b6cdbfb9c6d975d8a96b1eb3e33401->leave($__internal_9f86a4da2eaa6330540260895906aa7f94b6cdbfb9c6d975d8a96b1eb3e33401_prof);

        
        $__internal_a97f1489f99fb4687959107f3ffaf16a09daa817e9f031beaefd997a12275009->leave($__internal_a97f1489f99fb4687959107f3ffaf16a09daa817e9f031beaefd997a12275009_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_401c75e034ee7fb866910547c1c5b4c8471bb4c09e5040663ffa5a30977a3b63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401c75e034ee7fb866910547c1c5b4c8471bb4c09e5040663ffa5a30977a3b63->enter($__internal_401c75e034ee7fb866910547c1c5b4c8471bb4c09e5040663ffa5a30977a3b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4742cb78f6c1fbc2fcb7e85eba3debbb69a76875a0b5cbbc5abcf6396b7bc800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4742cb78f6c1fbc2fcb7e85eba3debbb69a76875a0b5cbbc5abcf6396b7bc800->enter($__internal_4742cb78f6c1fbc2fcb7e85eba3debbb69a76875a0b5cbbc5abcf6396b7bc800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4742cb78f6c1fbc2fcb7e85eba3debbb69a76875a0b5cbbc5abcf6396b7bc800->leave($__internal_4742cb78f6c1fbc2fcb7e85eba3debbb69a76875a0b5cbbc5abcf6396b7bc800_prof);

        
        $__internal_401c75e034ee7fb866910547c1c5b4c8471bb4c09e5040663ffa5a30977a3b63->leave($__internal_401c75e034ee7fb866910547c1c5b4c8471bb4c09e5040663ffa5a30977a3b63_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
