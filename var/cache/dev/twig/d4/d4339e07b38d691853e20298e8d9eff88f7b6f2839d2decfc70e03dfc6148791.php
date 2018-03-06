<?php

/* PracticaBundle:Default:formtasca.html.twig */
class __TwigTemplate_f66a2ba857e7a2bbab54679cb103a6a205c9ac684c83b37b3f34c9bb3c7529f1 extends Twig_Template
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
        $__internal_b3f03bab5527600fa922a3d68b5abcf86d41351fdfd641ffec7ec9288998d487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f03bab5527600fa922a3d68b5abcf86d41351fdfd641ffec7ec9288998d487->enter($__internal_b3f03bab5527600fa922a3d68b5abcf86d41351fdfd641ffec7ec9288998d487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formtasca.html.twig"));

        $__internal_c5a71d60e5daf4126d126d9b07153814f1e37b1a612e26cc517ad75ee3e49577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a71d60e5daf4126d126d9b07153814f1e37b1a612e26cc517ad75ee3e49577->enter($__internal_c5a71d60e5daf4126d126d9b07153814f1e37b1a612e26cc517ad75ee3e49577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formtasca.html.twig"));

        // line 1
        echo "Formulario Tasca

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_b3f03bab5527600fa922a3d68b5abcf86d41351fdfd641ffec7ec9288998d487->leave($__internal_b3f03bab5527600fa922a3d68b5abcf86d41351fdfd641ffec7ec9288998d487_prof);

        
        $__internal_c5a71d60e5daf4126d126d9b07153814f1e37b1a612e26cc517ad75ee3e49577->leave($__internal_c5a71d60e5daf4126d126d9b07153814f1e37b1a612e26cc517ad75ee3e49577_prof);

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
{{form_end(form)}}", "PracticaBundle:Default:formtasca.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\PracticaBundle/Resources/views/Default/formtasca.html.twig");
    }
}
