<?php

/* PracticaBundle:Default:formsubtasca.html.twig */
class __TwigTemplate_4c6b36376a4fea9c3216db4e45b7d21904b1f76e5995e697ccd74fda07ee84a1 extends Twig_Template
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
        $__internal_4cc25a8cd5b6d1f1228da0e86756bb95a3ad0396830166950e080547945d9f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc25a8cd5b6d1f1228da0e86756bb95a3ad0396830166950e080547945d9f99->enter($__internal_4cc25a8cd5b6d1f1228da0e86756bb95a3ad0396830166950e080547945d9f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formsubtasca.html.twig"));

        $__internal_587c591d30e8a5e748b6890a99ceb074cc6738b8783604b8442be612e3fd1fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587c591d30e8a5e748b6890a99ceb074cc6738b8783604b8442be612e3fd1fe3->enter($__internal_587c591d30e8a5e748b6890a99ceb074cc6738b8783604b8442be612e3fd1fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formsubtasca.html.twig"));

        // line 1
        echo "Formulario Tasca

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_4cc25a8cd5b6d1f1228da0e86756bb95a3ad0396830166950e080547945d9f99->leave($__internal_4cc25a8cd5b6d1f1228da0e86756bb95a3ad0396830166950e080547945d9f99_prof);

        
        $__internal_587c591d30e8a5e748b6890a99ceb074cc6738b8783604b8442be612e3fd1fe3->leave($__internal_587c591d30e8a5e748b6890a99ceb074cc6738b8783604b8442be612e3fd1fe3_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundle:Default:formsubtasca.html.twig";
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
{{form_end(form)}}", "PracticaBundle:Default:formsubtasca.html.twig", "C:\\xampp\\htdocs\\symfony\\src\\PracticaBundle/Resources/views/Default/formsubtasca.html.twig");
    }
}
