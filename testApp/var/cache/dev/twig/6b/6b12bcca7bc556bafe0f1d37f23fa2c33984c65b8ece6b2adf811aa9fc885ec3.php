<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8226ae35a79d09b606d568168d34169edb79c36117d33d3468988682072f6703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8226ae35a79d09b606d568168d34169edb79c36117d33d3468988682072f6703->enter($__internal_8226ae35a79d09b606d568168d34169edb79c36117d33d3468988682072f6703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a7565188a718a89c3217e1512297d5fdea32d5610f3559210c75696368e19700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7565188a718a89c3217e1512297d5fdea32d5610f3559210c75696368e19700->enter($__internal_a7565188a718a89c3217e1512297d5fdea32d5610f3559210c75696368e19700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8226ae35a79d09b606d568168d34169edb79c36117d33d3468988682072f6703->leave($__internal_8226ae35a79d09b606d568168d34169edb79c36117d33d3468988682072f6703_prof);

        
        $__internal_a7565188a718a89c3217e1512297d5fdea32d5610f3559210c75696368e19700->leave($__internal_a7565188a718a89c3217e1512297d5fdea32d5610f3559210c75696368e19700_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d5c7a685ed4515fe09e6dde1ca74660ddcab1ce6e9375bfd6663b7435b7216d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5c7a685ed4515fe09e6dde1ca74660ddcab1ce6e9375bfd6663b7435b7216d->enter($__internal_1d5c7a685ed4515fe09e6dde1ca74660ddcab1ce6e9375bfd6663b7435b7216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_93279a60509b3ff6b5617aa6cd45a79788f01afbf44e31dc6bd8cc8c4e9ceecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93279a60509b3ff6b5617aa6cd45a79788f01afbf44e31dc6bd8cc8c4e9ceecc->enter($__internal_93279a60509b3ff6b5617aa6cd45a79788f01afbf44e31dc6bd8cc8c4e9ceecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_93279a60509b3ff6b5617aa6cd45a79788f01afbf44e31dc6bd8cc8c4e9ceecc->leave($__internal_93279a60509b3ff6b5617aa6cd45a79788f01afbf44e31dc6bd8cc8c4e9ceecc_prof);

        
        $__internal_1d5c7a685ed4515fe09e6dde1ca74660ddcab1ce6e9375bfd6663b7435b7216d->leave($__internal_1d5c7a685ed4515fe09e6dde1ca74660ddcab1ce6e9375bfd6663b7435b7216d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f28a75f4787575f6d01fc411c88bcfab38e3661c59b233ee600e61132b41a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f28a75f4787575f6d01fc411c88bcfab38e3661c59b233ee600e61132b41a62->enter($__internal_0f28a75f4787575f6d01fc411c88bcfab38e3661c59b233ee600e61132b41a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27c4fd1600f36b31950f2e27b284d940e9b8c96aa74daa9e2ea62a23df61099d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c4fd1600f36b31950f2e27b284d940e9b8c96aa74daa9e2ea62a23df61099d->enter($__internal_27c4fd1600f36b31950f2e27b284d940e9b8c96aa74daa9e2ea62a23df61099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_27c4fd1600f36b31950f2e27b284d940e9b8c96aa74daa9e2ea62a23df61099d->leave($__internal_27c4fd1600f36b31950f2e27b284d940e9b8c96aa74daa9e2ea62a23df61099d_prof);

        
        $__internal_0f28a75f4787575f6d01fc411c88bcfab38e3661c59b233ee600e61132b41a62->leave($__internal_0f28a75f4787575f6d01fc411c88bcfab38e3661c59b233ee600e61132b41a62_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1100f1eb5ed0cacbc9f52dd5615b39e936bf93dd1899bc12d180dfa16d761861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1100f1eb5ed0cacbc9f52dd5615b39e936bf93dd1899bc12d180dfa16d761861->enter($__internal_1100f1eb5ed0cacbc9f52dd5615b39e936bf93dd1899bc12d180dfa16d761861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5cb7349ada3513d94eb5caeecdcddc629b5f6a635dbca42c2857517d91814a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cb7349ada3513d94eb5caeecdcddc629b5f6a635dbca42c2857517d91814a5->enter($__internal_e5cb7349ada3513d94eb5caeecdcddc629b5f6a635dbca42c2857517d91814a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e5cb7349ada3513d94eb5caeecdcddc629b5f6a635dbca42c2857517d91814a5->leave($__internal_e5cb7349ada3513d94eb5caeecdcddc629b5f6a635dbca42c2857517d91814a5_prof);

        
        $__internal_1100f1eb5ed0cacbc9f52dd5615b39e936bf93dd1899bc12d180dfa16d761861->leave($__internal_1100f1eb5ed0cacbc9f52dd5615b39e936bf93dd1899bc12d180dfa16d761861_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
