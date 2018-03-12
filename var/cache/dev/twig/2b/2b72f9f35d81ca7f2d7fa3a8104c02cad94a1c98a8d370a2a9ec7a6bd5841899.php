<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_03c357f76355ffc204dc587f7bae37380ecb1dab3ef290e7e4d3a97bc4ce0ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c357f76355ffc204dc587f7bae37380ecb1dab3ef290e7e4d3a97bc4ce0ebd->enter($__internal_03c357f76355ffc204dc587f7bae37380ecb1dab3ef290e7e4d3a97bc4ce0ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_24cc6cb7185b9f21975e13774df211dae3c5156e244d24061839d8fc99c91a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cc6cb7185b9f21975e13774df211dae3c5156e244d24061839d8fc99c91a90->enter($__internal_24cc6cb7185b9f21975e13774df211dae3c5156e244d24061839d8fc99c91a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c357f76355ffc204dc587f7bae37380ecb1dab3ef290e7e4d3a97bc4ce0ebd->leave($__internal_03c357f76355ffc204dc587f7bae37380ecb1dab3ef290e7e4d3a97bc4ce0ebd_prof);

        
        $__internal_24cc6cb7185b9f21975e13774df211dae3c5156e244d24061839d8fc99c91a90->leave($__internal_24cc6cb7185b9f21975e13774df211dae3c5156e244d24061839d8fc99c91a90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6976f76cafd26d21be861f5d37f00a308ebe3e15b51602e5fc5d8d5665eebbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6976f76cafd26d21be861f5d37f00a308ebe3e15b51602e5fc5d8d5665eebbd9->enter($__internal_6976f76cafd26d21be861f5d37f00a308ebe3e15b51602e5fc5d8d5665eebbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6e1abad966992002d24c48df056f75123901429b4701b0b22c3cbfbb2fa019d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e1abad966992002d24c48df056f75123901429b4701b0b22c3cbfbb2fa019d->enter($__internal_e6e1abad966992002d24c48df056f75123901429b4701b0b22c3cbfbb2fa019d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6e1abad966992002d24c48df056f75123901429b4701b0b22c3cbfbb2fa019d->leave($__internal_e6e1abad966992002d24c48df056f75123901429b4701b0b22c3cbfbb2fa019d_prof);

        
        $__internal_6976f76cafd26d21be861f5d37f00a308ebe3e15b51602e5fc5d8d5665eebbd9->leave($__internal_6976f76cafd26d21be861f5d37f00a308ebe3e15b51602e5fc5d8d5665eebbd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b12c016a1cbdc00ad8f2751d2c50c888203def98980906ab73731d9cabc72588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12c016a1cbdc00ad8f2751d2c50c888203def98980906ab73731d9cabc72588->enter($__internal_b12c016a1cbdc00ad8f2751d2c50c888203def98980906ab73731d9cabc72588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_affcc42a8b2e90444b9c793e48ca8043f6fc32421c91c78f7accf4434950b1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affcc42a8b2e90444b9c793e48ca8043f6fc32421c91c78f7accf4434950b1a1->enter($__internal_affcc42a8b2e90444b9c793e48ca8043f6fc32421c91c78f7accf4434950b1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_affcc42a8b2e90444b9c793e48ca8043f6fc32421c91c78f7accf4434950b1a1->leave($__internal_affcc42a8b2e90444b9c793e48ca8043f6fc32421c91c78f7accf4434950b1a1_prof);

        
        $__internal_b12c016a1cbdc00ad8f2751d2c50c888203def98980906ab73731d9cabc72588->leave($__internal_b12c016a1cbdc00ad8f2751d2c50c888203def98980906ab73731d9cabc72588_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c6608e8731e6c08427836289cd36ece2b80faf83d67cf46d552960f34b37a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6608e8731e6c08427836289cd36ece2b80faf83d67cf46d552960f34b37a89->enter($__internal_0c6608e8731e6c08427836289cd36ece2b80faf83d67cf46d552960f34b37a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bc96581eb6b18c201bb6a42d933b4ef4670cab0b6463e10647cb2a0ab2cd389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc96581eb6b18c201bb6a42d933b4ef4670cab0b6463e10647cb2a0ab2cd389->enter($__internal_3bc96581eb6b18c201bb6a42d933b4ef4670cab0b6463e10647cb2a0ab2cd389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bc96581eb6b18c201bb6a42d933b4ef4670cab0b6463e10647cb2a0ab2cd389->leave($__internal_3bc96581eb6b18c201bb6a42d933b4ef4670cab0b6463e10647cb2a0ab2cd389_prof);

        
        $__internal_0c6608e8731e6c08427836289cd36ece2b80faf83d67cf46d552960f34b37a89->leave($__internal_0c6608e8731e6c08427836289cd36ece2b80faf83d67cf46d552960f34b37a89_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
