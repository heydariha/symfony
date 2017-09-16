<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00f0f74f70f37ffe99edf32da5d30433001f890ec59660b91eb0d1b8a0006943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb4de53bd371ac72e2ac2fb6a863e93fa02071d0affa4c527b7ed22172817071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4de53bd371ac72e2ac2fb6a863e93fa02071d0affa4c527b7ed22172817071->enter($__internal_eb4de53bd371ac72e2ac2fb6a863e93fa02071d0affa4c527b7ed22172817071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1ec14104d52485811bc4f2895c3d5e7e662bde52f4edee9012a3bb151e91721c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec14104d52485811bc4f2895c3d5e7e662bde52f4edee9012a3bb151e91721c->enter($__internal_1ec14104d52485811bc4f2895c3d5e7e662bde52f4edee9012a3bb151e91721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4de53bd371ac72e2ac2fb6a863e93fa02071d0affa4c527b7ed22172817071->leave($__internal_eb4de53bd371ac72e2ac2fb6a863e93fa02071d0affa4c527b7ed22172817071_prof);

        
        $__internal_1ec14104d52485811bc4f2895c3d5e7e662bde52f4edee9012a3bb151e91721c->leave($__internal_1ec14104d52485811bc4f2895c3d5e7e662bde52f4edee9012a3bb151e91721c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd5c05c31c94bb059b1c232c6b561be948ab8117badccf191b56c31bac00af5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd5c05c31c94bb059b1c232c6b561be948ab8117badccf191b56c31bac00af5f->enter($__internal_fd5c05c31c94bb059b1c232c6b561be948ab8117badccf191b56c31bac00af5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8ae828b3207ce4be2b771d47be7508136c14025770c78ab6246edf0c1711175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ae828b3207ce4be2b771d47be7508136c14025770c78ab6246edf0c1711175->enter($__internal_a8ae828b3207ce4be2b771d47be7508136c14025770c78ab6246edf0c1711175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8ae828b3207ce4be2b771d47be7508136c14025770c78ab6246edf0c1711175->leave($__internal_a8ae828b3207ce4be2b771d47be7508136c14025770c78ab6246edf0c1711175_prof);

        
        $__internal_fd5c05c31c94bb059b1c232c6b561be948ab8117badccf191b56c31bac00af5f->leave($__internal_fd5c05c31c94bb059b1c232c6b561be948ab8117badccf191b56c31bac00af5f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_11c84d81f4b1919d9c0460929a82400820fa63e2410abce4f6ff7ffd6b6199ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c84d81f4b1919d9c0460929a82400820fa63e2410abce4f6ff7ffd6b6199ea->enter($__internal_11c84d81f4b1919d9c0460929a82400820fa63e2410abce4f6ff7ffd6b6199ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14a762db6fb56787de045d2a8491635bd440cea59cd813186c93ac6c408a86fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a762db6fb56787de045d2a8491635bd440cea59cd813186c93ac6c408a86fb->enter($__internal_14a762db6fb56787de045d2a8491635bd440cea59cd813186c93ac6c408a86fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_14a762db6fb56787de045d2a8491635bd440cea59cd813186c93ac6c408a86fb->leave($__internal_14a762db6fb56787de045d2a8491635bd440cea59cd813186c93ac6c408a86fb_prof);

        
        $__internal_11c84d81f4b1919d9c0460929a82400820fa63e2410abce4f6ff7ffd6b6199ea->leave($__internal_11c84d81f4b1919d9c0460929a82400820fa63e2410abce4f6ff7ffd6b6199ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
