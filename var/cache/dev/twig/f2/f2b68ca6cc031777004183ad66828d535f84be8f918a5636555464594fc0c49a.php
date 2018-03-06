<?php

/* PracticaBundle:Default:form.html.twig */
class __TwigTemplate_b49ddcc3b475b6f8b04572d52573ca052503f4197c94e8ad00a9889740411423 extends Twig_Template
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
        $__internal_89c20cc700505e96c1bd9eae3348289852587941af5161a34a728559db1d6b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c20cc700505e96c1bd9eae3348289852587941af5161a34a728559db1d6b8e->enter($__internal_89c20cc700505e96c1bd9eae3348289852587941af5161a34a728559db1d6b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:form.html.twig"));

        $__internal_a9aa859edd09adf59abe61fa65e1fb456aa7bb556780094886e0736a68ae08d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9aa859edd09adf59abe61fa65e1fb456aa7bb556780094886e0736a68ae08d2->enter($__internal_a9aa859edd09adf59abe61fa65e1fb456aa7bb556780094886e0736a68ae08d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:form.html.twig"));

        // line 1
        echo "Formulario Usuario

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_89c20cc700505e96c1bd9eae3348289852587941af5161a34a728559db1d6b8e->leave($__internal_89c20cc700505e96c1bd9eae3348289852587941af5161a34a728559db1d6b8e_prof);

        
        $__internal_a9aa859edd09adf59abe61fa65e1fb456aa7bb556780094886e0736a68ae08d2->leave($__internal_a9aa859edd09adf59abe61fa65e1fb456aa7bb556780094886e0736a68ae08d2_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundle:Default:form.html.twig";
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
        return new Twig_Source("Formulario Usuario

{{form_start(form,{'action':'','method':'POST'})}}
{{form_end(form)}}", "PracticaBundle:Default:form.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\PracticaBundle/Resources/views/Default/form.html.twig");
    }
}
