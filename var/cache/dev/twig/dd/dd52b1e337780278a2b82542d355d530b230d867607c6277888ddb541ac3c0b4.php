<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9db734c4125d43e83d90f148b93a9abc9244049908f5ea1ace446ec6bf09bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9db734c4125d43e83d90f148b93a9abc9244049908f5ea1ace446ec6bf09bc->enter($__internal_0d9db734c4125d43e83d90f148b93a9abc9244049908f5ea1ace446ec6bf09bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cc385ee1d54728aa012c4bb7d74dd1274a370f3b73ee631d94ff082e7c42152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc385ee1d54728aa012c4bb7d74dd1274a370f3b73ee631d94ff082e7c42152f->enter($__internal_cc385ee1d54728aa012c4bb7d74dd1274a370f3b73ee631d94ff082e7c42152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0d9db734c4125d43e83d90f148b93a9abc9244049908f5ea1ace446ec6bf09bc->leave($__internal_0d9db734c4125d43e83d90f148b93a9abc9244049908f5ea1ace446ec6bf09bc_prof);

        
        $__internal_cc385ee1d54728aa012c4bb7d74dd1274a370f3b73ee631d94ff082e7c42152f->leave($__internal_cc385ee1d54728aa012c4bb7d74dd1274a370f3b73ee631d94ff082e7c42152f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f928f814e92a61a6918460f574ff51f28d5e007db901d045d97f1b99455036f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f928f814e92a61a6918460f574ff51f28d5e007db901d045d97f1b99455036f->enter($__internal_5f928f814e92a61a6918460f574ff51f28d5e007db901d045d97f1b99455036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecb8026e9565ba589abcda4a678a3f50750ea6a0c34514d2885149b38cf8be65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb8026e9565ba589abcda4a678a3f50750ea6a0c34514d2885149b38cf8be65->enter($__internal_ecb8026e9565ba589abcda4a678a3f50750ea6a0c34514d2885149b38cf8be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ecb8026e9565ba589abcda4a678a3f50750ea6a0c34514d2885149b38cf8be65->leave($__internal_ecb8026e9565ba589abcda4a678a3f50750ea6a0c34514d2885149b38cf8be65_prof);

        
        $__internal_5f928f814e92a61a6918460f574ff51f28d5e007db901d045d97f1b99455036f->leave($__internal_5f928f814e92a61a6918460f574ff51f28d5e007db901d045d97f1b99455036f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_da0e70d1906fdf51e8d14483d5f685a0bac90445c4abd1f14e3a2d6358f0b09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0e70d1906fdf51e8d14483d5f685a0bac90445c4abd1f14e3a2d6358f0b09a->enter($__internal_da0e70d1906fdf51e8d14483d5f685a0bac90445c4abd1f14e3a2d6358f0b09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41ca734e26addcf2f69ec16bc3a72506b5149c06ff9df6d873c131851a3fdcab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ca734e26addcf2f69ec16bc3a72506b5149c06ff9df6d873c131851a3fdcab->enter($__internal_41ca734e26addcf2f69ec16bc3a72506b5149c06ff9df6d873c131851a3fdcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_41ca734e26addcf2f69ec16bc3a72506b5149c06ff9df6d873c131851a3fdcab->leave($__internal_41ca734e26addcf2f69ec16bc3a72506b5149c06ff9df6d873c131851a3fdcab_prof);

        
        $__internal_da0e70d1906fdf51e8d14483d5f685a0bac90445c4abd1f14e3a2d6358f0b09a->leave($__internal_da0e70d1906fdf51e8d14483d5f685a0bac90445c4abd1f14e3a2d6358f0b09a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbdc4740a54ef34f2e748970f87b9a149e65b5d7f16a236df97aac56a574b626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdc4740a54ef34f2e748970f87b9a149e65b5d7f16a236df97aac56a574b626->enter($__internal_dbdc4740a54ef34f2e748970f87b9a149e65b5d7f16a236df97aac56a574b626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fc6216940066c2bf2e548feabf3a2dab3f352b03a295397015795446e016451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc6216940066c2bf2e548feabf3a2dab3f352b03a295397015795446e016451->enter($__internal_1fc6216940066c2bf2e548feabf3a2dab3f352b03a295397015795446e016451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1fc6216940066c2bf2e548feabf3a2dab3f352b03a295397015795446e016451->leave($__internal_1fc6216940066c2bf2e548feabf3a2dab3f352b03a295397015795446e016451_prof);

        
        $__internal_dbdc4740a54ef34f2e748970f87b9a149e65b5d7f16a236df97aac56a574b626->leave($__internal_dbdc4740a54ef34f2e748970f87b9a149e65b5d7f16a236df97aac56a574b626_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
