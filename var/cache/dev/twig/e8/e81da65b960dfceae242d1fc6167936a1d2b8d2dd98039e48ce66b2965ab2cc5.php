<?php

/* PracticaBundle:Default:formtasca.html.twig */
class __TwigTemplate_2d5f96d1094d427a0e4cc09e00897ff73c0bf7cbaf1edcabe3a207c1803867ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26bf759bb5e73701739bd463784922155ad72d7fe6d4ade074a7873441b888cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bf759bb5e73701739bd463784922155ad72d7fe6d4ade074a7873441b888cc->enter($__internal_26bf759bb5e73701739bd463784922155ad72d7fe6d4ade074a7873441b888cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formtasca.html.twig"));

        $__internal_554f0bc764237509bdbcdf0c728826ccd0e72e2ce9e9cfd97b8cdbaffbe3e00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554f0bc764237509bdbcdf0c728826ccd0e72e2ce9e9cfd97b8cdbaffbe3e00d->enter($__internal_554f0bc764237509bdbcdf0c728826ccd0e72e2ce9e9cfd97b8cdbaffbe3e00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formtasca.html.twig"));

        // line 1
        echo "Formulario Tasca

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_26bf759bb5e73701739bd463784922155ad72d7fe6d4ade074a7873441b888cc->leave($__internal_26bf759bb5e73701739bd463784922155ad72d7fe6d4ade074a7873441b888cc_prof);

        
        $__internal_554f0bc764237509bdbcdf0c728826ccd0e72e2ce9e9cfd97b8cdbaffbe3e00d->leave($__internal_554f0bc764237509bdbcdf0c728826ccd0e72e2ce9e9cfd97b8cdbaffbe3e00d_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundle:Default:formtasca.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Formulario Tasca

{{form_start(form,{'action':'','method':'POST'})}}
{{form_end(form)}}", "PracticaBundle:Default:formtasca.html.twig", "/opt/lampp/htdocs/PruebasSymfony/src/PracticaBundle/Resources/views/Default/formtasca.html.twig");
    }
}
