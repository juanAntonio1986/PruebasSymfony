<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_a63cce76eb3f62a7ba603edd5171bb109741b4e3c03a21b3e05ff683069b456d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
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
        $__internal_15b104d93cd83a6e98f059f5d3ea662b1acab03ed5235c3cff07a255d70234ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b104d93cd83a6e98f059f5d3ea662b1acab03ed5235c3cff07a255d70234ce->enter($__internal_15b104d93cd83a6e98f059f5d3ea662b1acab03ed5235c3cff07a255d70234ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_2bf2356406f713d2d7462856b41b0c7963876ac275eb0b3149a1422e5cab9508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf2356406f713d2d7462856b41b0c7963876ac275eb0b3149a1422e5cab9508->enter($__internal_2bf2356406f713d2d7462856b41b0c7963876ac275eb0b3149a1422e5cab9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15b104d93cd83a6e98f059f5d3ea662b1acab03ed5235c3cff07a255d70234ce->leave($__internal_15b104d93cd83a6e98f059f5d3ea662b1acab03ed5235c3cff07a255d70234ce_prof);

        
        $__internal_2bf2356406f713d2d7462856b41b0c7963876ac275eb0b3149a1422e5cab9508->leave($__internal_2bf2356406f713d2d7462856b41b0c7963876ac275eb0b3149a1422e5cab9508_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04555753d27e2ff16aaa9a4b493a323f65077db00af06df04127b7f5c2ba3bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04555753d27e2ff16aaa9a4b493a323f65077db00af06df04127b7f5c2ba3bbe->enter($__internal_04555753d27e2ff16aaa9a4b493a323f65077db00af06df04127b7f5c2ba3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f9ffce016578f0c032e2bf0f5d4d7a880e74e40ec9c751c359561ce351da63c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ffce016578f0c032e2bf0f5d4d7a880e74e40ec9c751c359561ce351da63c2->enter($__internal_f9ffce016578f0c032e2bf0f5d4d7a880e74e40ec9c751c359561ce351da63c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : ("yellow"));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "counterrors", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "counterrors", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countwarnings", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countwarnings", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_f9ffce016578f0c032e2bf0f5d4d7a880e74e40ec9c751c359561ce351da63c2->leave($__internal_f9ffce016578f0c032e2bf0f5d4d7a880e74e40ec9c751c359561ce351da63c2_prof);

        
        $__internal_04555753d27e2ff16aaa9a4b493a323f65077db00af06df04127b7f5c2ba3bbe->leave($__internal_04555753d27e2ff16aaa9a4b493a323f65077db00af06df04127b7f5c2ba3bbe_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
        $__internal_22c79d82bda93c82c3e931ca89136a11f1b8aec180f62690b2874f65da8b8744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c79d82bda93c82c3e931ca89136a11f1b8aec180f62690b2874f65da8b8744->enter($__internal_22c79d82bda93c82c3e931ca89136a11f1b8aec180f62690b2874f65da8b8744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a7ed7caa4e016130d498777accdb0e0361f55e9cd9d513513ef024df7e65196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7ed7caa4e016130d498777accdb0e0361f55e9cd9d513513ef024df7e65196->enter($__internal_8a7ed7caa4e016130d498777accdb0e0361f55e9cd9d513513ef024df7e65196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : (((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array()))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_8a7ed7caa4e016130d498777accdb0e0361f55e9cd9d513513ef024df7e65196->leave($__internal_8a7ed7caa4e016130d498777accdb0e0361f55e9cd9d513513ef024df7e65196_prof);

        
        $__internal_22c79d82bda93c82c3e931ca89136a11f1b8aec180f62690b2874f65da8b8744->leave($__internal_22c79d82bda93c82c3e931ca89136a11f1b8aec180f62690b2874f65da8b8744_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b39809757279bfec6998552e5cb335f4967afd535eb2bc69f41c070d46a9328c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39809757279bfec6998552e5cb335f4967afd535eb2bc69f41c070d46a9328c->enter($__internal_b39809757279bfec6998552e5cb335f4967afd535eb2bc69f41c070d46a9328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_085233f36bc7e5d6ae04bda2a7d4badcb9ad07f19931986ca3280a194706b165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085233f36bc7e5d6ae04bda2a7d4badcb9ad07f19931986ca3280a194706b165->enter($__internal_085233f36bc7e5d6ae04bda2a7d4badcb9ad07f19931986ca3280a194706b165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            // line 55
            echo "        ";
            list($context["deprecation_logs"], $context["debug_logs"], $context["info_and_error_logs"], $context["silenced_logs"]) =             array(array(), array(), array(), array());
            // line 56
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 57
                echo "            ";
                if (($this->getAttribute($context["log"], "scream", array(), "any", true, true) &&  !$this->getAttribute($context["log"], "scream", array()))) {
                    // line 58
                    echo "                ";
                    $context["deprecation_logs"] = twig_array_merge(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), array(0 => $context["log"]));
                    // line 59
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "scream", array(), "any", true, true) && $this->getAttribute($context["log"], "scream", array()))) {
                    // line 60
                    echo "                ";
                    $context["silenced_logs"] = twig_array_merge(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), array(0 => $context["log"]));
                    // line 61
                    echo "            ";
                } elseif (($this->getAttribute($context["log"], "priorityName", array()) == "DEBUG")) {
                    // line 62
                    echo "                ";
                    $context["debug_logs"] = twig_array_merge(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), array(0 => $context["log"]));
                    // line 63
                    echo "            ";
                } else {
                    // line 64
                    echo "                ";
                    $context["info_and_error_logs"] = twig_array_merge(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), array(0 => $context["log"]));
                    // line 65
                    echo "            ";
                }
                // line 66
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-";
            // line 70
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countwarnings", array())) ? ("warning") : (""))));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) ? ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", array())) : (twig_length_filter($this->env, ($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs"))))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 74
            if (twig_test_empty(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")))) {
                // line 75
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 79
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["info_and_error_logs"] ?? $this->getContext($context, "info_and_error_logs")), "info", true);
                echo "
                    ";
            }
            // line 81
            echo "                </div>
            </div>

            <div class=\"tab\">
                ";
            // line 87
            echo "                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", array())) ? ("warning") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countdeprecations", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    ";
            // line 91
            if (twig_test_empty(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")))) {
                // line 92
                echo "                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    ";
            } else {
                // line 96
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["deprecation_logs"] ?? $this->getContext($context, "deprecation_logs")), "deprecation", false, true);
                echo "
                    ";
            }
            // line 98
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">";
            // line 102
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["debug_logs"] ?? $this->getContext($context, "debug_logs"))), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    ";
            // line 106
            if (twig_test_empty(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")))) {
                // line 107
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 111
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["debug_logs"] ?? $this->getContext($context, "debug_logs")), "debug");
                echo "
                    ";
            }
            // line 113
            echo "                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">";
            // line 117
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "countscreams", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "countscreams", array()), 0)) : (0)), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    ";
            // line 121
            if (twig_test_empty(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")))) {
                // line 122
                echo "                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    ";
            } else {
                // line 126
                echo "                        ";
                echo $context["helper"]->getrender_table(($context["silenced_logs"] ?? $this->getContext($context, "silenced_logs")), "silenced");
                echo "
                    ";
            }
            // line 128
            echo "                </div>
            </div>

            ";
            // line 131
            $context["compilerLogTotal"] = 0;
            // line 132
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
                // line 133
                echo "                ";
                $context["compilerLogTotal"] = (($context["compilerLogTotal"] ?? $this->getContext($context, "compilerLogTotal")) + twig_length_filter($this->env, $context["logs"]));
                // line 134
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">";
            // line 136
            echo twig_escape_filter($this->env, ($context["compilerLogTotal"] ?? $this->getContext($context, "compilerLogTotal")), "html", null, true);
            echo "</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    ";
            // line 140
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()))) {
                // line 141
                echo "                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    ";
            } else {
                // line 145
                echo "                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "compilerLogs", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                    // line 155
                    echo "                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            ";
                    // line 157
                    $context["context_id"] = ("context-compiler-" . $this->getAttribute($context["loop"], "index", array()));
                    // line 158
                    echo "
                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                    // line 159
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                    echo "\" data-toggle-alt-content=\"";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</a>

                                             <div id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["logs"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                        // line 164
                        echo "                                                    <li>";
                        echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute($context["log"], "message", array()));
                        echo "</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 166
                    echo "                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">";
                    // line 169
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 175
            echo "                </div>
            </div>

        </div>
    ";
        }
        
        $__internal_085233f36bc7e5d6ae04bda2a7d4badcb9ad07f19931986ca3280a194706b165->leave($__internal_085233f36bc7e5d6ae04bda2a7d4badcb9ad07f19931986ca3280a194706b165_prof);

        
        $__internal_b39809757279bfec6998552e5cb335f4967afd535eb2bc69f41c070d46a9328c->leave($__internal_b39809757279bfec6998552e5cb335f4967afd535eb2bc69f41c070d46a9328c_prof);

    }

    // line 182
    public function getrender_table($__logs__ = null, $__category__ = "", $__show_level__ = false, $__is_deprecation__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "logs" => $__logs__,
            "category" => $__category__,
            "show_level" => $__show_level__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e59127d01a89b80fea0a7ae39dd575fbe2a5b76ce7b23e5fdc43e55d47ebaedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e59127d01a89b80fea0a7ae39dd575fbe2a5b76ce7b23e5fdc43e55d47ebaedd->enter($__internal_e59127d01a89b80fea0a7ae39dd575fbe2a5b76ce7b23e5fdc43e55d47ebaedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_10b874464c1215d4762647c2cc2409e1124c5c818987c48d1180141ae320ad2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_10b874464c1215d4762647c2cc2409e1124c5c818987c48d1180141ae320ad2b->enter($__internal_10b874464c1215d4762647c2cc2409e1124c5c818987c48d1180141ae320ad2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 183
            echo "    ";
            $context["helper"] = $this;
            // line 184
            echo "    ";
            $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
            // line 185
            echo "
    <table class=\"logs\">
        <thead>
            <tr>
                <th>";
            // line 189
            echo ((($context["show_level"] ?? $this->getContext($context, "show_level"))) ? ("Level") : ("Time"));
            echo "</th>
                ";
            // line 190
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                echo "<th>Channel</th>";
            }
            // line 191
            echo "                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 197
                echo "                ";
                $context["css_class"] = ((($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) ? ("") : (((twig_in_filter($this->getAttribute(                // line 198
$context["log"], "priorityName", array()), array(0 => "CRITICAL", 1 => "ERROR", 2 => "ALERT", 3 => "EMERGENCY"))) ? ("status-error") : (((($this->getAttribute(                // line 199
$context["log"], "priorityName", array()) == "WARNING")) ? ("status-warning") : (""))))));
                // line 201
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, ($context["css_class"] ?? $this->getContext($context, "css_class")), "html", null, true);
                echo "\">
                    <td class=\"font-normal text-small\" nowrap>
                        ";
                // line 203
                if (($context["show_level"] ?? $this->getContext($context, "show_level"))) {
                    // line 204
                    echo "                            <span class=\"colored text-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 206
                echo "                        <span class=\"text-muted newline\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
                echo "</span>
                    </td>

                    ";
                // line 209
                if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                    // line 210
                    echo "                        <td class=\"font-normal text-small text-bold\" nowrap>
                            ";
                    // line 211
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                    echo "
                            ";
                    // line 212
                    if (($this->getAttribute($context["log"], "errorCount", array(), "any", true, true) && ($this->getAttribute($context["log"], "errorCount", array()) > 1))) {
                        // line 213
                        echo "                                <span class=\"text-muted\">(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "errorCount", array()), "html", null, true);
                        echo " times)</span>
                            ";
                    }
                    // line 215
                    echo "                        </td>

                    ";
                }
                // line 218
                echo "
                    <td class=\"font-normal\">";
                // line 219
                echo $context["helper"]->getrender_log_message(($context["category"] ?? $this->getContext($context, "category")), $this->getAttribute($context["loop"], "index", array()), $context["log"]);
                echo "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        </tbody>
    </table>
";
            
            $__internal_10b874464c1215d4762647c2cc2409e1124c5c818987c48d1180141ae320ad2b->leave($__internal_10b874464c1215d4762647c2cc2409e1124c5c818987c48d1180141ae320ad2b_prof);

            
            $__internal_e59127d01a89b80fea0a7ae39dd575fbe2a5b76ce7b23e5fdc43e55d47ebaedd->leave($__internal_e59127d01a89b80fea0a7ae39dd575fbe2a5b76ce7b23e5fdc43e55d47ebaedd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 226
    public function getrender_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_85bab8cbf88c5383aa36a72cbe1d10b1fa19ab0babeb60cd1c8b65ea29ac9863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_85bab8cbf88c5383aa36a72cbe1d10b1fa19ab0babeb60cd1c8b65ea29ac9863->enter($__internal_85bab8cbf88c5383aa36a72cbe1d10b1fa19ab0babeb60cd1c8b65ea29ac9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_e0c1e2c3891dac8b714c4ee031955805fbdc4415826719ed2d66dbcc7961f3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e0c1e2c3891dac8b714c4ee031955805fbdc4415826719ed2d66dbcc7961f3de->enter($__internal_e0c1e2c3891dac8b714c4ee031955805fbdc4415826719ed2d66dbcc7961f3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 227
            echo "    ";
            $context["has_context"] = ($this->getAttribute(($context["log"] ?? null), "context", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array())));
            // line 228
            echo "    ";
            $context["has_trace"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", array(), "any", false, true), "exception", array(), "any", false, true), "trace", array(), "any", true, true);
            // line 229
            echo "
    ";
            // line 230
            if ( !($context["has_context"] ?? $this->getContext($context, "has_context"))) {
                // line 231
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()));
                echo "
    ";
            } else {
                // line 233
                echo "        ";
                echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpLog($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", array()), $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()));
                echo "

        <div class=\"text-small font-normal\">
            ";
                // line 236
                $context["context_id"] = ((("context-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 237
                echo "            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>

            ";
                // line 239
                if (($context["has_trace"] ?? $this->getContext($context, "has_trace"))) {
                    // line 240
                    echo "                &nbsp;&nbsp;
                ";
                    // line 241
                    $context["trace_id"] = ((("trace-" . ($context["category"] ?? $this->getContext($context, "category"))) . "-") . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                    // line 242
                    echo "                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? $this->getContext($context, "trace_id")), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            ";
                }
                // line 244
                echo "        </div>

        <div id=\"";
                // line 246
                echo twig_escape_filter($this->env, ($context["context_id"] ?? $this->getContext($context, "context_id")), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
                // line 247
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), 1));
                echo "
        </div>

        ";
                // line 250
                if (($context["has_trace"] ?? $this->getContext($context, "has_trace"))) {
                    // line 251
                    echo "            <div id=\"";
                    echo twig_escape_filter($this->env, ($context["trace_id"] ?? $this->getContext($context, "trace_id")), "html", null, true);
                    echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                    // line 252
                    echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", array()), "exception", array()), "trace", array()), 1));
                    echo "
            </div>
        ";
                }
                // line 255
                echo "    ";
            }
            
            $__internal_e0c1e2c3891dac8b714c4ee031955805fbdc4415826719ed2d66dbcc7961f3de->leave($__internal_e0c1e2c3891dac8b714c4ee031955805fbdc4415826719ed2d66dbcc7961f3de_prof);

            
            $__internal_85bab8cbf88c5383aa36a72cbe1d10b1fa19ab0babeb60cd1c8b65ea29ac9863->leave($__internal_85bab8cbf88c5383aa36a72cbe1d10b1fa19ab0babeb60cd1c8b65ea29ac9863_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  738 => 255,  732 => 252,  727 => 251,  725 => 250,  719 => 247,  715 => 246,  711 => 244,  705 => 242,  703 => 241,  700 => 240,  698 => 239,  692 => 237,  690 => 236,  683 => 233,  677 => 231,  675 => 230,  672 => 229,  669 => 228,  666 => 227,  646 => 226,  623 => 222,  606 => 219,  603 => 218,  598 => 215,  592 => 213,  590 => 212,  586 => 211,  583 => 210,  581 => 209,  574 => 206,  568 => 204,  566 => 203,  560 => 201,  558 => 199,  557 => 198,  555 => 197,  538 => 196,  531 => 191,  527 => 190,  523 => 189,  517 => 185,  514 => 184,  511 => 183,  490 => 182,  475 => 175,  470 => 172,  453 => 169,  448 => 166,  439 => 164,  435 => 163,  430 => 161,  421 => 159,  418 => 158,  416 => 157,  412 => 155,  395 => 154,  384 => 145,  378 => 141,  376 => 140,  369 => 136,  366 => 135,  360 => 134,  357 => 133,  352 => 132,  350 => 131,  345 => 128,  339 => 126,  333 => 122,  331 => 121,  324 => 117,  318 => 113,  312 => 111,  306 => 107,  304 => 106,  297 => 102,  291 => 98,  285 => 96,  279 => 92,  277 => 91,  267 => 87,  261 => 81,  255 => 79,  249 => 75,  247 => 74,  238 => 70,  233 => 67,  227 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 62,  212 => 61,  209 => 60,  206 => 59,  203 => 58,  200 => 57,  195 => 56,  192 => 55,  190 => 54,  184 => 50,  182 => 49,  178 => 47,  169 => 46,  158 => 43,  152 => 40,  149 => 39,  147 => 38,  142 => 36,  135 => 35,  126 => 34,  113 => 30,  110 => 29,  102 => 26,  92 => 21,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  68 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : 'yellow' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'yellow' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countdeprecations or collector.countwarnings ? 'warning' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.logs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {# sort collected logs in groups #}
        {% set deprecation_logs, debug_logs, info_and_error_logs, silenced_logs = [], [], [], [] %}
        {% for log in collector.logs %}
            {% if log.scream is defined and not log.scream %}
                {% set deprecation_logs = deprecation_logs|merge([log]) %}
            {% elseif log.scream is defined and log.scream %}
                {% set silenced_logs = silenced_logs|merge([log]) %}
            {% elseif log.priorityName == 'DEBUG' %}
                {% set debug_logs = debug_logs|merge([log]) %}
            {% else %}
                {% set info_and_error_logs = info_and_error_logs|merge([log]) %}
            {% endif %}
        {% endfor %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Info. &amp; Errors <span class=\"badge status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' }}\">{{ collector.counterrors ?: info_and_error_logs|length }}</span></h3>
                <p class=\"text-muted\">Informational and error log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if info_and_error_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(info_and_error_logs, 'info', true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                {# 'deprecation_logs|length' is not used because deprecations are
                now grouped and the group count doesn't match the message count #}
                <h3 class=\"tab-title\">Deprecations <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by using features marked as deprecated.</p>

                <div class=\"tab-content\">
                    {% if deprecation_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages about deprecated features.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(deprecation_logs, 'deprecation', false, true) }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Debug <span class=\"badge\">{{ debug_logs|length }}</span></h3>
                <p class=\"text-muted\">Unimportant log messages generated during the execution of the application.</p>

                <div class=\"tab-content\">
                    {% if debug_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(debug_logs, 'debug') }}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">PHP Notices <span class=\"badge\">{{ collector.countscreams|default(0) }}</span></h3>
                <p class=\"text-muted\">Log messages generated by PHP notices silenced with the @ operator.</p>

                <div class=\"tab-content\">
                    {% if silenced_logs is empty %}
                        <div class=\"empty\">
                            <p>There are no log messages of this level.</p>
                        </div>
                    {% else %}
                        {{ helper.render_table(silenced_logs, 'silenced') }}
                    {% endif %}
                </div>
            </div>

            {% set compilerLogTotal = 0 %}
            {% for logs in collector.compilerLogs %}
                {% set compilerLogTotal = compilerLogTotal + logs|length %}
            {% endfor %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">Container <span class=\"badge\">{{ compilerLogTotal }}</span></h3>
                <p class=\"text-muted\">Log messages generated during the compilation of the service container.</p>

                <div class=\"tab-content\">
                    {% if collector.compilerLogs is empty %}
                        <div class=\"empty\">
                            <p>There are no compiler log messages.</p>
                        </div>
                    {% else %}
                        <table class=\"logs\">
                            <thead>
                                <tr>
                                    <th class=\"full-width\">Class</th>
                                    <th>Messages</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for class, logs in collector.compilerLogs %}
                                    <tr class=\"\">
                                        <td class=\"font-normal\">
                                            {% set context_id = 'context-compiler-' ~ loop.index %}

                                             <a class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</a>

                                             <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                                <ul>
                                                {% for log in logs %}
                                                    <li>{{ profiler_dump_log(log.message) }}</li>
                                                {% endfor %}
                                                </ul>
                                            </div>
                                        </td>
                                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                </div>
            </div>

        </div>
    {% endif %}
{% endblock %}

{% macro render_table(logs, category = '', show_level = false, is_deprecation = false) %}
    {% import _self as helper %}
    {% set channel_is_defined = (logs|first).channel is defined %}

    <table class=\"logs\">
        <thead>
            <tr>
                <th>{{ show_level ? 'Level' : 'Time' }}</th>
                {% if channel_is_defined %}<th>Channel</th>{% endif %}
                <th class=\"full-width\">Message</th>
            </tr>
        </thead>

        <tbody>
            {% for log in logs %}
                {% set css_class = is_deprecation ? ''
                    : log.priorityName in ['CRITICAL', 'ERROR', 'ALERT', 'EMERGENCY'] ? 'status-error'
                    : log.priorityName == 'WARNING' ? 'status-warning'
                %}
                <tr class=\"{{ css_class }}\">
                    <td class=\"font-normal text-small\" nowrap>
                        {% if show_level %}
                            <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                        {% endif %}
                        <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
                    </td>

                    {% if channel_is_defined %}
                        <td class=\"font-normal text-small text-bold\" nowrap>
                            {{ log.channel }}
                            {% if log.errorCount is defined and log.errorCount > 1 %}
                                <span class=\"text-muted\">({{ log.errorCount }} times)</span>
                            {% endif %}
                        </td>

                    {% endif %}

                    <td class=\"font-normal\">{{ helper.render_log_message(category, loop.index, log) }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}

        <div class=\"text-small font-normal\">
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>

            {% if has_trace %}
                &nbsp;&nbsp;
                {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
                <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
            {% endif %}
        </div>

        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(log.context, maxDepth=1) }}
        </div>

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/opt/lampp/htdocs/PruebasSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
