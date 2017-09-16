<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_10f95c5595e64c6f16abaaac935c74871ea06c6c60ecf1a66552b1a2ad059887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_0179e3ea4ca9091d5be710caa30acf3e877dbb19d8af5e7d6c630285afb38e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0179e3ea4ca9091d5be710caa30acf3e877dbb19d8af5e7d6c630285afb38e4a->enter($__internal_0179e3ea4ca9091d5be710caa30acf3e877dbb19d8af5e7d6c630285afb38e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_96757d664da25a1fa8576e5a54408f2ae181848c16a8b54e71ed5502bf034ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96757d664da25a1fa8576e5a54408f2ae181848c16a8b54e71ed5502bf034ead->enter($__internal_96757d664da25a1fa8576e5a54408f2ae181848c16a8b54e71ed5502bf034ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0179e3ea4ca9091d5be710caa30acf3e877dbb19d8af5e7d6c630285afb38e4a->leave($__internal_0179e3ea4ca9091d5be710caa30acf3e877dbb19d8af5e7d6c630285afb38e4a_prof);

        
        $__internal_96757d664da25a1fa8576e5a54408f2ae181848c16a8b54e71ed5502bf034ead->leave($__internal_96757d664da25a1fa8576e5a54408f2ae181848c16a8b54e71ed5502bf034ead_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66c81f48ec607c986fb190a8a008d2e2b1eec6a110635c5fe41b24024387f6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c81f48ec607c986fb190a8a008d2e2b1eec6a110635c5fe41b24024387f6ed->enter($__internal_66c81f48ec607c986fb190a8a008d2e2b1eec6a110635c5fe41b24024387f6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd3e31ecccbf8220e520696f77fa0239f2ead80273bc39b408a8204b51b32b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3e31ecccbf8220e520696f77fa0239f2ead80273bc39b408a8204b51b32b6e->enter($__internal_bd3e31ecccbf8220e520696f77fa0239f2ead80273bc39b408a8204b51b32b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bd3e31ecccbf8220e520696f77fa0239f2ead80273bc39b408a8204b51b32b6e->leave($__internal_bd3e31ecccbf8220e520696f77fa0239f2ead80273bc39b408a8204b51b32b6e_prof);

        
        $__internal_66c81f48ec607c986fb190a8a008d2e2b1eec6a110635c5fe41b24024387f6ed->leave($__internal_66c81f48ec607c986fb190a8a008d2e2b1eec6a110635c5fe41b24024387f6ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_714004b81b65454a378d0f27553e16df4586aa512006aa38d357e65c77914d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714004b81b65454a378d0f27553e16df4586aa512006aa38d357e65c77914d96->enter($__internal_714004b81b65454a378d0f27553e16df4586aa512006aa38d357e65c77914d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_42fe5ac01faeeadc42973b38cdc6ff8d487e97b96a8eefece17195d5197b6ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fe5ac01faeeadc42973b38cdc6ff8d487e97b96a8eefece17195d5197b6ef2->enter($__internal_42fe5ac01faeeadc42973b38cdc6ff8d487e97b96a8eefece17195d5197b6ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_42fe5ac01faeeadc42973b38cdc6ff8d487e97b96a8eefece17195d5197b6ef2->leave($__internal_42fe5ac01faeeadc42973b38cdc6ff8d487e97b96a8eefece17195d5197b6ef2_prof);

        
        $__internal_714004b81b65454a378d0f27553e16df4586aa512006aa38d357e65c77914d96->leave($__internal_714004b81b65454a378d0f27553e16df4586aa512006aa38d357e65c77914d96_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8b5d3a4d4faf5c8b04322382fffab3d173dd3c22a92a77f523c4f21af8c9f707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5d3a4d4faf5c8b04322382fffab3d173dd3c22a92a77f523c4f21af8c9f707->enter($__internal_8b5d3a4d4faf5c8b04322382fffab3d173dd3c22a92a77f523c4f21af8c9f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5f12c5b3d9f14b93710807cda19e048c9bee7d4470b42a83d283a4af7e7e61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f12c5b3d9f14b93710807cda19e048c9bee7d4470b42a83d283a4af7e7e61c->enter($__internal_d5f12c5b3d9f14b93710807cda19e048c9bee7d4470b42a83d283a4af7e7e61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d5f12c5b3d9f14b93710807cda19e048c9bee7d4470b42a83d283a4af7e7e61c->leave($__internal_d5f12c5b3d9f14b93710807cda19e048c9bee7d4470b42a83d283a4af7e7e61c_prof);

        
        $__internal_8b5d3a4d4faf5c8b04322382fffab3d173dd3c22a92a77f523c4f21af8c9f707->leave($__internal_8b5d3a4d4faf5c8b04322382fffab3d173dd3c22a92a77f523c4f21af8c9f707_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
