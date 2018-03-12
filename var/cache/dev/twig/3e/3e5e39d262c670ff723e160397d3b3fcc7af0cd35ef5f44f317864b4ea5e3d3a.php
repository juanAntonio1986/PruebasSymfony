<?php

/* base.html.twig */
class __TwigTemplate_70f2ea4d9ba6befff2419e33e81e4263a6a39804101f8049eb9b3bfd1f26a548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1488175b03fb084393003d7bc00340b26ab56b2ba193f60b7659d27f82fcdf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1488175b03fb084393003d7bc00340b26ab56b2ba193f60b7659d27f82fcdf1c->enter($__internal_1488175b03fb084393003d7bc00340b26ab56b2ba193f60b7659d27f82fcdf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8c4824c785bfd5e84847103b5fe786dd06acee9c73b17e0102ee9b389444ea79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4824c785bfd5e84847103b5fe786dd06acee9c73b17e0102ee9b389444ea79->enter($__internal_8c4824c785bfd5e84847103b5fe786dd06acee9c73b17e0102ee9b389444ea79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1488175b03fb084393003d7bc00340b26ab56b2ba193f60b7659d27f82fcdf1c->leave($__internal_1488175b03fb084393003d7bc00340b26ab56b2ba193f60b7659d27f82fcdf1c_prof);

        
        $__internal_8c4824c785bfd5e84847103b5fe786dd06acee9c73b17e0102ee9b389444ea79->leave($__internal_8c4824c785bfd5e84847103b5fe786dd06acee9c73b17e0102ee9b389444ea79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5113ea19cf71fca91894e249ce3ab829cb8ff58b65b77a08f3560927ff307898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5113ea19cf71fca91894e249ce3ab829cb8ff58b65b77a08f3560927ff307898->enter($__internal_5113ea19cf71fca91894e249ce3ab829cb8ff58b65b77a08f3560927ff307898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6ef2c10617fb207a91780e2b78b6652114cdb5a7ee0f1456f7b58466f8b35bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ef2c10617fb207a91780e2b78b6652114cdb5a7ee0f1456f7b58466f8b35bf->enter($__internal_f6ef2c10617fb207a91780e2b78b6652114cdb5a7ee0f1456f7b58466f8b35bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f6ef2c10617fb207a91780e2b78b6652114cdb5a7ee0f1456f7b58466f8b35bf->leave($__internal_f6ef2c10617fb207a91780e2b78b6652114cdb5a7ee0f1456f7b58466f8b35bf_prof);

        
        $__internal_5113ea19cf71fca91894e249ce3ab829cb8ff58b65b77a08f3560927ff307898->leave($__internal_5113ea19cf71fca91894e249ce3ab829cb8ff58b65b77a08f3560927ff307898_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cf33f0aa1b751f7a13c0b142d4c4ae69571c8d5e2da45e5260d597c33208895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf33f0aa1b751f7a13c0b142d4c4ae69571c8d5e2da45e5260d597c33208895->enter($__internal_2cf33f0aa1b751f7a13c0b142d4c4ae69571c8d5e2da45e5260d597c33208895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_553bc488cbc0c0c2f7b749b101f8d219e0c22725eabbd19c82c9f604e661906e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553bc488cbc0c0c2f7b749b101f8d219e0c22725eabbd19c82c9f604e661906e->enter($__internal_553bc488cbc0c0c2f7b749b101f8d219e0c22725eabbd19c82c9f604e661906e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_553bc488cbc0c0c2f7b749b101f8d219e0c22725eabbd19c82c9f604e661906e->leave($__internal_553bc488cbc0c0c2f7b749b101f8d219e0c22725eabbd19c82c9f604e661906e_prof);

        
        $__internal_2cf33f0aa1b751f7a13c0b142d4c4ae69571c8d5e2da45e5260d597c33208895->leave($__internal_2cf33f0aa1b751f7a13c0b142d4c4ae69571c8d5e2da45e5260d597c33208895_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b1604cd29ecd79f9de39c4398b6f8f6d17be0fd770a183f63e60fb1c821d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b1604cd29ecd79f9de39c4398b6f8f6d17be0fd770a183f63e60fb1c821d5d->enter($__internal_99b1604cd29ecd79f9de39c4398b6f8f6d17be0fd770a183f63e60fb1c821d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_626f3b4c631dc2e95ed9cf86fcbb892fa5705bbde0fa90912c01af9534f46167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626f3b4c631dc2e95ed9cf86fcbb892fa5705bbde0fa90912c01af9534f46167->enter($__internal_626f3b4c631dc2e95ed9cf86fcbb892fa5705bbde0fa90912c01af9534f46167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_626f3b4c631dc2e95ed9cf86fcbb892fa5705bbde0fa90912c01af9534f46167->leave($__internal_626f3b4c631dc2e95ed9cf86fcbb892fa5705bbde0fa90912c01af9534f46167_prof);

        
        $__internal_99b1604cd29ecd79f9de39c4398b6f8f6d17be0fd770a183f63e60fb1c821d5d->leave($__internal_99b1604cd29ecd79f9de39c4398b6f8f6d17be0fd770a183f63e60fb1c821d5d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_39c02750a685b18564f682e247678f3216df6de80587fb617c4027e3667042ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c02750a685b18564f682e247678f3216df6de80587fb617c4027e3667042ad->enter($__internal_39c02750a685b18564f682e247678f3216df6de80587fb617c4027e3667042ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_921b5417188984494bd38d3c867eece6ac90e9d55dc7f464e47650f341e8c988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921b5417188984494bd38d3c867eece6ac90e9d55dc7f464e47650f341e8c988->enter($__internal_921b5417188984494bd38d3c867eece6ac90e9d55dc7f464e47650f341e8c988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_921b5417188984494bd38d3c867eece6ac90e9d55dc7f464e47650f341e8c988->leave($__internal_921b5417188984494bd38d3c867eece6ac90e9d55dc7f464e47650f341e8c988_prof);

        
        $__internal_39c02750a685b18564f682e247678f3216df6de80587fb617c4027e3667042ad->leave($__internal_39c02750a685b18564f682e247678f3216df6de80587fb617c4027e3667042ad_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/opt/lampp/htdocs/PruebasSymfony/app/Resources/views/base.html.twig");
    }
}
