<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
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
        $__internal_9b8676bd0aa35926d19e3ff3e03f3cf6483d7bb5d3ee31c5fe63c54a906e0048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8676bd0aa35926d19e3ff3e03f3cf6483d7bb5d3ee31c5fe63c54a906e0048->enter($__internal_9b8676bd0aa35926d19e3ff3e03f3cf6483d7bb5d3ee31c5fe63c54a906e0048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e88d7e38037ce6cfc984977d2d325941500c0a528f8a4349d259d7ad04030ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88d7e38037ce6cfc984977d2d325941500c0a528f8a4349d259d7ad04030ee6->enter($__internal_e88d7e38037ce6cfc984977d2d325941500c0a528f8a4349d259d7ad04030ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b8676bd0aa35926d19e3ff3e03f3cf6483d7bb5d3ee31c5fe63c54a906e0048->leave($__internal_9b8676bd0aa35926d19e3ff3e03f3cf6483d7bb5d3ee31c5fe63c54a906e0048_prof);

        
        $__internal_e88d7e38037ce6cfc984977d2d325941500c0a528f8a4349d259d7ad04030ee6->leave($__internal_e88d7e38037ce6cfc984977d2d325941500c0a528f8a4349d259d7ad04030ee6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44b6999256e89d3ab1ad0dcc34cee2b3e99c87f141e298a5f157c53a11b0d58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b6999256e89d3ab1ad0dcc34cee2b3e99c87f141e298a5f157c53a11b0d58a->enter($__internal_44b6999256e89d3ab1ad0dcc34cee2b3e99c87f141e298a5f157c53a11b0d58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab0ed91124006a75da5e6b90b11b55ef4cf344790140180466d9189c5d789bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0ed91124006a75da5e6b90b11b55ef4cf344790140180466d9189c5d789bdb->enter($__internal_ab0ed91124006a75da5e6b90b11b55ef4cf344790140180466d9189c5d789bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ab0ed91124006a75da5e6b90b11b55ef4cf344790140180466d9189c5d789bdb->leave($__internal_ab0ed91124006a75da5e6b90b11b55ef4cf344790140180466d9189c5d789bdb_prof);

        
        $__internal_44b6999256e89d3ab1ad0dcc34cee2b3e99c87f141e298a5f157c53a11b0d58a->leave($__internal_44b6999256e89d3ab1ad0dcc34cee2b3e99c87f141e298a5f157c53a11b0d58a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af7e29b3e5cc8c0f93009b2cc905135d8646f766eb66d213dda38d6ee48e9a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7e29b3e5cc8c0f93009b2cc905135d8646f766eb66d213dda38d6ee48e9a79->enter($__internal_af7e29b3e5cc8c0f93009b2cc905135d8646f766eb66d213dda38d6ee48e9a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1f987b7315f72008154a592dc43d304f475f0bf4025b07d77193c00fcb952ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f987b7315f72008154a592dc43d304f475f0bf4025b07d77193c00fcb952ca->enter($__internal_a1f987b7315f72008154a592dc43d304f475f0bf4025b07d77193c00fcb952ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a1f987b7315f72008154a592dc43d304f475f0bf4025b07d77193c00fcb952ca->leave($__internal_a1f987b7315f72008154a592dc43d304f475f0bf4025b07d77193c00fcb952ca_prof);

        
        $__internal_af7e29b3e5cc8c0f93009b2cc905135d8646f766eb66d213dda38d6ee48e9a79->leave($__internal_af7e29b3e5cc8c0f93009b2cc905135d8646f766eb66d213dda38d6ee48e9a79_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a41f4c6ec9d37424eeb97d8c181fbd5c2c114f26a0ac0ae414fadb25508ce5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a41f4c6ec9d37424eeb97d8c181fbd5c2c114f26a0ac0ae414fadb25508ce5c->enter($__internal_5a41f4c6ec9d37424eeb97d8c181fbd5c2c114f26a0ac0ae414fadb25508ce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c9a4e27d27b8e02c640941e84826321e92b026f2c5936b89a509a86b5122f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9a4e27d27b8e02c640941e84826321e92b026f2c5936b89a509a86b5122f5a->enter($__internal_4c9a4e27d27b8e02c640941e84826321e92b026f2c5936b89a509a86b5122f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4c9a4e27d27b8e02c640941e84826321e92b026f2c5936b89a509a86b5122f5a->leave($__internal_4c9a4e27d27b8e02c640941e84826321e92b026f2c5936b89a509a86b5122f5a_prof);

        
        $__internal_5a41f4c6ec9d37424eeb97d8c181fbd5c2c114f26a0ac0ae414fadb25508ce5c->leave($__internal_5a41f4c6ec9d37424eeb97d8c181fbd5c2c114f26a0ac0ae414fadb25508ce5c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
