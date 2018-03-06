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
        $__internal_3beb6ed87c8c0aec390f6b53a60971d49c6f5415fd920d3b6dc21115b28945ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3beb6ed87c8c0aec390f6b53a60971d49c6f5415fd920d3b6dc21115b28945ac->enter($__internal_3beb6ed87c8c0aec390f6b53a60971d49c6f5415fd920d3b6dc21115b28945ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8436da74de1bb6084b3e32b2c3de18a6604bf34f96fba280d5cb544a14455246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8436da74de1bb6084b3e32b2c3de18a6604bf34f96fba280d5cb544a14455246->enter($__internal_8436da74de1bb6084b3e32b2c3de18a6604bf34f96fba280d5cb544a14455246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3beb6ed87c8c0aec390f6b53a60971d49c6f5415fd920d3b6dc21115b28945ac->leave($__internal_3beb6ed87c8c0aec390f6b53a60971d49c6f5415fd920d3b6dc21115b28945ac_prof);

        
        $__internal_8436da74de1bb6084b3e32b2c3de18a6604bf34f96fba280d5cb544a14455246->leave($__internal_8436da74de1bb6084b3e32b2c3de18a6604bf34f96fba280d5cb544a14455246_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b91f396a546cdd71b2e6bae6a83cc419cc3ef1f5a8d488787ead5e3e70d395d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b91f396a546cdd71b2e6bae6a83cc419cc3ef1f5a8d488787ead5e3e70d395d->enter($__internal_5b91f396a546cdd71b2e6bae6a83cc419cc3ef1f5a8d488787ead5e3e70d395d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba79426cff8ff9efcb2eb34cf4b5b8087434c1871f13b66fd3b183ddbd5b9f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba79426cff8ff9efcb2eb34cf4b5b8087434c1871f13b66fd3b183ddbd5b9f8b->enter($__internal_ba79426cff8ff9efcb2eb34cf4b5b8087434c1871f13b66fd3b183ddbd5b9f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba79426cff8ff9efcb2eb34cf4b5b8087434c1871f13b66fd3b183ddbd5b9f8b->leave($__internal_ba79426cff8ff9efcb2eb34cf4b5b8087434c1871f13b66fd3b183ddbd5b9f8b_prof);

        
        $__internal_5b91f396a546cdd71b2e6bae6a83cc419cc3ef1f5a8d488787ead5e3e70d395d->leave($__internal_5b91f396a546cdd71b2e6bae6a83cc419cc3ef1f5a8d488787ead5e3e70d395d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_795ef903672ea5726cff6bbb765318c5afa05269e06003877e7eb230e0070c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795ef903672ea5726cff6bbb765318c5afa05269e06003877e7eb230e0070c10->enter($__internal_795ef903672ea5726cff6bbb765318c5afa05269e06003877e7eb230e0070c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5315be333ea6883eaf405b6d63e7f1f394df60538174dd0679a57720ab820873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5315be333ea6883eaf405b6d63e7f1f394df60538174dd0679a57720ab820873->enter($__internal_5315be333ea6883eaf405b6d63e7f1f394df60538174dd0679a57720ab820873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5315be333ea6883eaf405b6d63e7f1f394df60538174dd0679a57720ab820873->leave($__internal_5315be333ea6883eaf405b6d63e7f1f394df60538174dd0679a57720ab820873_prof);

        
        $__internal_795ef903672ea5726cff6bbb765318c5afa05269e06003877e7eb230e0070c10->leave($__internal_795ef903672ea5726cff6bbb765318c5afa05269e06003877e7eb230e0070c10_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d5e5be69dc56168657d46205772d757f1f23dfc2e2d08617cbbe40e941e4557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5e5be69dc56168657d46205772d757f1f23dfc2e2d08617cbbe40e941e4557->enter($__internal_3d5e5be69dc56168657d46205772d757f1f23dfc2e2d08617cbbe40e941e4557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f141d59f36e13331e21894d701537c2b1c1bafe8ef2555f2825bcc48272348f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f141d59f36e13331e21894d701537c2b1c1bafe8ef2555f2825bcc48272348f->enter($__internal_4f141d59f36e13331e21894d701537c2b1c1bafe8ef2555f2825bcc48272348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f141d59f36e13331e21894d701537c2b1c1bafe8ef2555f2825bcc48272348f->leave($__internal_4f141d59f36e13331e21894d701537c2b1c1bafe8ef2555f2825bcc48272348f_prof);

        
        $__internal_3d5e5be69dc56168657d46205772d757f1f23dfc2e2d08617cbbe40e941e4557->leave($__internal_3d5e5be69dc56168657d46205772d757f1f23dfc2e2d08617cbbe40e941e4557_prof);

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
