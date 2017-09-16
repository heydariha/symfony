<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_381891c981c9ce4cdeb2e68fb9bbd8652f3dad17e7d594e7f4c812f2aa2ef5c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c17e78922f92d5e404a440ddc08140ed2fcdebefe459d20e737060bdf73312d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17e78922f92d5e404a440ddc08140ed2fcdebefe459d20e737060bdf73312d1->enter($__internal_c17e78922f92d5e404a440ddc08140ed2fcdebefe459d20e737060bdf73312d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_fea8dd290cc2dc6c8f9801cb9f5e6ed5d1e46fc64e31e14c9c15ca51e27cca01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea8dd290cc2dc6c8f9801cb9f5e6ed5d1e46fc64e31e14c9c15ca51e27cca01->enter($__internal_fea8dd290cc2dc6c8f9801cb9f5e6ed5d1e46fc64e31e14c9c15ca51e27cca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17e78922f92d5e404a440ddc08140ed2fcdebefe459d20e737060bdf73312d1->leave($__internal_c17e78922f92d5e404a440ddc08140ed2fcdebefe459d20e737060bdf73312d1_prof);

        
        $__internal_fea8dd290cc2dc6c8f9801cb9f5e6ed5d1e46fc64e31e14c9c15ca51e27cca01->leave($__internal_fea8dd290cc2dc6c8f9801cb9f5e6ed5d1e46fc64e31e14c9c15ca51e27cca01_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a606d7459953ee80f8f15ab7cc1bccf3a611d692bff88051ff5eee70946e18f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a606d7459953ee80f8f15ab7cc1bccf3a611d692bff88051ff5eee70946e18f6->enter($__internal_a606d7459953ee80f8f15ab7cc1bccf3a611d692bff88051ff5eee70946e18f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bc6de6a8b2b1e79216214bdb0da969c7798d5c35ede633bd33d800effe53f4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6de6a8b2b1e79216214bdb0da969c7798d5c35ede633bd33d800effe53f4b5->enter($__internal_bc6de6a8b2b1e79216214bdb0da969c7798d5c35ede633bd33d800effe53f4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bc6de6a8b2b1e79216214bdb0da969c7798d5c35ede633bd33d800effe53f4b5->leave($__internal_bc6de6a8b2b1e79216214bdb0da969c7798d5c35ede633bd33d800effe53f4b5_prof);

        
        $__internal_a606d7459953ee80f8f15ab7cc1bccf3a611d692bff88051ff5eee70946e18f6->leave($__internal_a606d7459953ee80f8f15ab7cc1bccf3a611d692bff88051ff5eee70946e18f6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64b989e9736a14e10eed3efb793b3732e5626dd6bee142e9f2063f2ee8338cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b989e9736a14e10eed3efb793b3732e5626dd6bee142e9f2063f2ee8338cd7->enter($__internal_64b989e9736a14e10eed3efb793b3732e5626dd6bee142e9f2063f2ee8338cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddad50308f40d620bbe5f4d3105f1a663fd7cdb65aae8028149010f61800f10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddad50308f40d620bbe5f4d3105f1a663fd7cdb65aae8028149010f61800f10d->enter($__internal_ddad50308f40d620bbe5f4d3105f1a663fd7cdb65aae8028149010f61800f10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ddad50308f40d620bbe5f4d3105f1a663fd7cdb65aae8028149010f61800f10d->leave($__internal_ddad50308f40d620bbe5f4d3105f1a663fd7cdb65aae8028149010f61800f10d_prof);

        
        $__internal_64b989e9736a14e10eed3efb793b3732e5626dd6bee142e9f2063f2ee8338cd7->leave($__internal_64b989e9736a14e10eed3efb793b3732e5626dd6bee142e9f2063f2ee8338cd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
