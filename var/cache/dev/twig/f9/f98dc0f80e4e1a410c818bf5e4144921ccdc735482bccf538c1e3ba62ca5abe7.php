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
        $__internal_991aad455d7567b65493356987455bedbbeae210bf3cf041bc9b8eb36994a9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991aad455d7567b65493356987455bedbbeae210bf3cf041bc9b8eb36994a9a3->enter($__internal_991aad455d7567b65493356987455bedbbeae210bf3cf041bc9b8eb36994a9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a880dbf438123d5cb8282998840e3098239d9b5927a7fa9dfad3ad85703ac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a880dbf438123d5cb8282998840e3098239d9b5927a7fa9dfad3ad85703ac7e->enter($__internal_3a880dbf438123d5cb8282998840e3098239d9b5927a7fa9dfad3ad85703ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991aad455d7567b65493356987455bedbbeae210bf3cf041bc9b8eb36994a9a3->leave($__internal_991aad455d7567b65493356987455bedbbeae210bf3cf041bc9b8eb36994a9a3_prof);

        
        $__internal_3a880dbf438123d5cb8282998840e3098239d9b5927a7fa9dfad3ad85703ac7e->leave($__internal_3a880dbf438123d5cb8282998840e3098239d9b5927a7fa9dfad3ad85703ac7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e76a8becfc1ee86a59501094cec2ac64fef76798b7558da2b3aa4b6118b1dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e76a8becfc1ee86a59501094cec2ac64fef76798b7558da2b3aa4b6118b1dc5->enter($__internal_2e76a8becfc1ee86a59501094cec2ac64fef76798b7558da2b3aa4b6118b1dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9d797c7df141195bf8fe5320dfad91f3dffaf1fca717774c50d81aba13440a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d797c7df141195bf8fe5320dfad91f3dffaf1fca717774c50d81aba13440a4->enter($__internal_e9d797c7df141195bf8fe5320dfad91f3dffaf1fca717774c50d81aba13440a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e9d797c7df141195bf8fe5320dfad91f3dffaf1fca717774c50d81aba13440a4->leave($__internal_e9d797c7df141195bf8fe5320dfad91f3dffaf1fca717774c50d81aba13440a4_prof);

        
        $__internal_2e76a8becfc1ee86a59501094cec2ac64fef76798b7558da2b3aa4b6118b1dc5->leave($__internal_2e76a8becfc1ee86a59501094cec2ac64fef76798b7558da2b3aa4b6118b1dc5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a2b744b02208cc407baec5a431514b75b3e614f49e082d366053d6097a472240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b744b02208cc407baec5a431514b75b3e614f49e082d366053d6097a472240->enter($__internal_a2b744b02208cc407baec5a431514b75b3e614f49e082d366053d6097a472240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_923ff855d7da683984d56fa5fd1d9ff81d60bae9531efe3773d8fd2c9437c7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923ff855d7da683984d56fa5fd1d9ff81d60bae9531efe3773d8fd2c9437c7b1->enter($__internal_923ff855d7da683984d56fa5fd1d9ff81d60bae9531efe3773d8fd2c9437c7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_923ff855d7da683984d56fa5fd1d9ff81d60bae9531efe3773d8fd2c9437c7b1->leave($__internal_923ff855d7da683984d56fa5fd1d9ff81d60bae9531efe3773d8fd2c9437c7b1_prof);

        
        $__internal_a2b744b02208cc407baec5a431514b75b3e614f49e082d366053d6097a472240->leave($__internal_a2b744b02208cc407baec5a431514b75b3e614f49e082d366053d6097a472240_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f3200cd28a3555aa2e0bedd947bf5a858ff23fd9b593f5939603c97eab7341b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3200cd28a3555aa2e0bedd947bf5a858ff23fd9b593f5939603c97eab7341b->enter($__internal_7f3200cd28a3555aa2e0bedd947bf5a858ff23fd9b593f5939603c97eab7341b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1347e95be22bfefca5064ad6268e2fcae80014046b1eebeb18bfbd51b5aa2b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1347e95be22bfefca5064ad6268e2fcae80014046b1eebeb18bfbd51b5aa2b3f->enter($__internal_1347e95be22bfefca5064ad6268e2fcae80014046b1eebeb18bfbd51b5aa2b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1347e95be22bfefca5064ad6268e2fcae80014046b1eebeb18bfbd51b5aa2b3f->leave($__internal_1347e95be22bfefca5064ad6268e2fcae80014046b1eebeb18bfbd51b5aa2b3f_prof);

        
        $__internal_7f3200cd28a3555aa2e0bedd947bf5a858ff23fd9b593f5939603c97eab7341b->leave($__internal_7f3200cd28a3555aa2e0bedd947bf5a858ff23fd9b593f5939603c97eab7341b_prof);

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
