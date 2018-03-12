<?php

/* PracticaBundle:Default:formusuari.html.twig */
class __TwigTemplate_9a43b7c0ad03860d927f7182beb3441eea556b58f2d2a6ce3ebed3423de812bf extends Twig_Template
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
        $__internal_1968a4d755eba258338331fc7d3a1eb9d7df3a30b67d39a60d07a3b3dfeb4565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1968a4d755eba258338331fc7d3a1eb9d7df3a30b67d39a60d07a3b3dfeb4565->enter($__internal_1968a4d755eba258338331fc7d3a1eb9d7df3a30b67d39a60d07a3b3dfeb4565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formusuari.html.twig"));

        $__internal_ca3e0422e4b143cdc93bf50d4083341d325a9f6c7658c7dc04faf8d159dca714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3e0422e4b143cdc93bf50d4083341d325a9f6c7658c7dc04faf8d159dca714->enter($__internal_ca3e0422e4b143cdc93bf50d4083341d325a9f6c7658c7dc04faf8d159dca714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PracticaBundle:Default:formusuari.html.twig"));

        // line 1
        echo "<h2>Formulario Usuario</h2>

";
        // line 3
        if (((($context["status"] ?? $this->getContext($context, "status")) != null) && (($context["data"] ?? $this->getContext($context, "data")) != null))) {
            // line 4
            echo "
\t<h3>";
            // line 5
            echo twig_escape_filter($this->env, ($context["status"] ?? $this->getContext($context, "status")), "html", null, true);
            echo "</h3>
\t";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["data"] ?? $this->getContext($context, "data")));
            echo "




";
        }
        // line 12
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "

<label>

Nombre: 

";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "

</label>




";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        
        $__internal_1968a4d755eba258338331fc7d3a1eb9d7df3a30b67d39a60d07a3b3dfeb4565->leave($__internal_1968a4d755eba258338331fc7d3a1eb9d7df3a30b67d39a60d07a3b3dfeb4565_prof);

        
        $__internal_ca3e0422e4b143cdc93bf50d4083341d325a9f6c7658c7dc04faf8d159dca714->leave($__internal_ca3e0422e4b143cdc93bf50d4083341d325a9f6c7658c7dc04faf8d159dca714_prof);

    }

    public function getTemplateName()
    {
        return "PracticaBundle:Default:formusuari.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  63 => 20,  59 => 19,  50 => 13,  47 => 12,  38 => 6,  34 => 5,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Formulario Usuario</h2>

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




{{form_end(form)}}", "PracticaBundle:Default:formusuari.html.twig", "/opt/lampp/htdocs/PruebasSymfony/src/PracticaBundle/Resources/views/Default/formusuari.html.twig");
    }
}
