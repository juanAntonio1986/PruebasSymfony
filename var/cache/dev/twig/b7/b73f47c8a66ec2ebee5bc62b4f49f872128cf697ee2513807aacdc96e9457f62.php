<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c90c635dc75b7be14e501a18a88de31e1da2920e2104a84ee79128cd18df06ce extends Twig_Template
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
        $__internal_dc7a8beece626c0bfc2a4ac375eafd951e7dd9f2d2aebbaf783c931bc27ddd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7a8beece626c0bfc2a4ac375eafd951e7dd9f2d2aebbaf783c931bc27ddd52->enter($__internal_dc7a8beece626c0bfc2a4ac375eafd951e7dd9f2d2aebbaf783c931bc27ddd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_49833a527cc2b7426d6464d52b98211957afd5c26a8b278c989fa0b58048a365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49833a527cc2b7426d6464d52b98211957afd5c26a8b278c989fa0b58048a365->enter($__internal_49833a527cc2b7426d6464d52b98211957afd5c26a8b278c989fa0b58048a365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7a8beece626c0bfc2a4ac375eafd951e7dd9f2d2aebbaf783c931bc27ddd52->leave($__internal_dc7a8beece626c0bfc2a4ac375eafd951e7dd9f2d2aebbaf783c931bc27ddd52_prof);

        
        $__internal_49833a527cc2b7426d6464d52b98211957afd5c26a8b278c989fa0b58048a365->leave($__internal_49833a527cc2b7426d6464d52b98211957afd5c26a8b278c989fa0b58048a365_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9076270c7adcc8f248327deb7e00a989673cf5a35fd4d993916e6c0d824794c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9076270c7adcc8f248327deb7e00a989673cf5a35fd4d993916e6c0d824794c6->enter($__internal_9076270c7adcc8f248327deb7e00a989673cf5a35fd4d993916e6c0d824794c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf617f2adda8e5eceb7110dcc47165be64229a5df34f0fdb733cc12c8568f99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf617f2adda8e5eceb7110dcc47165be64229a5df34f0fdb733cc12c8568f99e->enter($__internal_cf617f2adda8e5eceb7110dcc47165be64229a5df34f0fdb733cc12c8568f99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cf617f2adda8e5eceb7110dcc47165be64229a5df34f0fdb733cc12c8568f99e->leave($__internal_cf617f2adda8e5eceb7110dcc47165be64229a5df34f0fdb733cc12c8568f99e_prof);

        
        $__internal_9076270c7adcc8f248327deb7e00a989673cf5a35fd4d993916e6c0d824794c6->leave($__internal_9076270c7adcc8f248327deb7e00a989673cf5a35fd4d993916e6c0d824794c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82a2ebb5fb0ebfa8f416788ef889cda8009b80c0dbc07d41bb1323fd132b0bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a2ebb5fb0ebfa8f416788ef889cda8009b80c0dbc07d41bb1323fd132b0bed->enter($__internal_82a2ebb5fb0ebfa8f416788ef889cda8009b80c0dbc07d41bb1323fd132b0bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6390284d9d87e61434e6d0fd3856571db85b484004fff5b7cdf6c82242f159f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6390284d9d87e61434e6d0fd3856571db85b484004fff5b7cdf6c82242f159f4->enter($__internal_6390284d9d87e61434e6d0fd3856571db85b484004fff5b7cdf6c82242f159f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6390284d9d87e61434e6d0fd3856571db85b484004fff5b7cdf6c82242f159f4->leave($__internal_6390284d9d87e61434e6d0fd3856571db85b484004fff5b7cdf6c82242f159f4_prof);

        
        $__internal_82a2ebb5fb0ebfa8f416788ef889cda8009b80c0dbc07d41bb1323fd132b0bed->leave($__internal_82a2ebb5fb0ebfa8f416788ef889cda8009b80c0dbc07d41bb1323fd132b0bed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eaad92159414321f84a3e893bd303f21c3ae9bc691777d226ee51ee330b99b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eaad92159414321f84a3e893bd303f21c3ae9bc691777d226ee51ee330b99b3->enter($__internal_4eaad92159414321f84a3e893bd303f21c3ae9bc691777d226ee51ee330b99b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fc62088fcba70859a44802ee04f5e5170f8afa972f804d81122ee1c834e38ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc62088fcba70859a44802ee04f5e5170f8afa972f804d81122ee1c834e38ba->enter($__internal_5fc62088fcba70859a44802ee04f5e5170f8afa972f804d81122ee1c834e38ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5fc62088fcba70859a44802ee04f5e5170f8afa972f804d81122ee1c834e38ba->leave($__internal_5fc62088fcba70859a44802ee04f5e5170f8afa972f804d81122ee1c834e38ba_prof);

        
        $__internal_4eaad92159414321f84a3e893bd303f21c3ae9bc691777d226ee51ee330b99b3->leave($__internal_4eaad92159414321f84a3e893bd303f21c3ae9bc691777d226ee51ee330b99b3_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
