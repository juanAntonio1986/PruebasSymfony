<?php

/* PracticaBundle:Default:formsubtasca.html.twig */
class __TwigTemplate_5092c5e9093ecc13ee19a3439935d143b2e4b440a1ce6c355e60ea8249cbc1b9 extends Twig_Template
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
        $__internal_6a939575ba2798300ac4cd69a503c47d400473fe37a5aef2e3c884b64a8f7b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a939575ba2798300ac4cd69a503c47d400473fe37a5aef2e3c884b64a8f7b8e->enter($__internal_6a939575ba2798300ac4cd69a503c47d400473fe37a5aef2e3c884b64a8f7b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formsubtasca.html.twig"));

        $__internal_94929a5ad074ed1333d152e86cec74a55553b67429da66eaa9392b17d2bf7ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94929a5ad074ed1333d152e86cec74a55553b67429da66eaa9392b17d2bf7ae1->enter($__internal_94929a5ad074ed1333d152e86cec74a55553b67429da66eaa9392b17d2bf7ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formsubtasca.html.twig"));

        // line 1
        echo "Formulario SubTasca


";
        // line 4
        if (((($context["status"] ?? $this->getContext($context, "status")) != null) && (($context["data"] ?? $this->getContext($context, "data")) != null))) {
            // line 5
            echo "
\t<h3>";
            // line 6
            echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
            echo "</h3>
\t";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["data"] ?? $this->getContext($context, "data")));
            echo "




";
        }
        // line 13
        echo "



";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "


<label>

Nombre: 

";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

</label>



";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_6a939575ba2798300ac4cd69a503c47d400473fe37a5aef2e3c884b64a8f7b8e->leave($__internal_6a939575ba2798300ac4cd69a503c47d400473fe37a5aef2e3c884b64a8f7b8e_prof);

        
        $__internal_94929a5ad074ed1333d152e86cec74a55553b67429da66eaa9392b17d2bf7ae1->leave($__internal_94929a5ad074ed1333d152e86cec74a55553b67429da66eaa9392b17d2bf7ae1_prof);

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
        return array (  77 => 31,  68 => 25,  64 => 24,  54 => 17,  48 => 13,  39 => 7,  35 => 6,  32 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Formulario SubTasca


{% if (status !=null) and (data !=null)  %}

\t<h3>{{status}}</h3>
\t{{dump(data)}}




{% endif %}




{{form_start(form,{'action':'','method':'POST'})}}


<label>

Nombre: 

{{form_errors(form.nom)}}
{{form_widget(form.nom)}}

</label>



{{form_end(form)}}", "PracticaBundle:Default:formsubtasca.html.twig", "/opt/lampp/htdocs/PruebasSymfony/src/PracticaBundle/Resources/views/Default/formsubtasca.html.twig");
    }
}
