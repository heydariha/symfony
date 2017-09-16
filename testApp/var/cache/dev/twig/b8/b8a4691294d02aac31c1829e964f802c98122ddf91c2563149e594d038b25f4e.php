<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fa6056848138aeead5fff0a5aa5d68e6c2dd84bd00bf4b7f75ffcc782e427fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_edeba6c9d325a7cc301189c00b8d9ea0a6ca762c0d28d7d09238cefefb7ed052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edeba6c9d325a7cc301189c00b8d9ea0a6ca762c0d28d7d09238cefefb7ed052->enter($__internal_edeba6c9d325a7cc301189c00b8d9ea0a6ca762c0d28d7d09238cefefb7ed052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1fb20fbd6498bf239414cc64e27f6f974df37bb0ed8d34a5510b36d8653fbb13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb20fbd6498bf239414cc64e27f6f974df37bb0ed8d34a5510b36d8653fbb13->enter($__internal_1fb20fbd6498bf239414cc64e27f6f974df37bb0ed8d34a5510b36d8653fbb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edeba6c9d325a7cc301189c00b8d9ea0a6ca762c0d28d7d09238cefefb7ed052->leave($__internal_edeba6c9d325a7cc301189c00b8d9ea0a6ca762c0d28d7d09238cefefb7ed052_prof);

        
        $__internal_1fb20fbd6498bf239414cc64e27f6f974df37bb0ed8d34a5510b36d8653fbb13->leave($__internal_1fb20fbd6498bf239414cc64e27f6f974df37bb0ed8d34a5510b36d8653fbb13_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_112f2320b75bc595001045d29580af87130024885720ea05f4774200cc57bb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112f2320b75bc595001045d29580af87130024885720ea05f4774200cc57bb4d->enter($__internal_112f2320b75bc595001045d29580af87130024885720ea05f4774200cc57bb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c58a989356b55c4a09744920907a335d74487fbb8d759ab76b8eb3cee6338e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58a989356b55c4a09744920907a335d74487fbb8d759ab76b8eb3cee6338e3b->enter($__internal_c58a989356b55c4a09744920907a335d74487fbb8d759ab76b8eb3cee6338e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c58a989356b55c4a09744920907a335d74487fbb8d759ab76b8eb3cee6338e3b->leave($__internal_c58a989356b55c4a09744920907a335d74487fbb8d759ab76b8eb3cee6338e3b_prof);

        
        $__internal_112f2320b75bc595001045d29580af87130024885720ea05f4774200cc57bb4d->leave($__internal_112f2320b75bc595001045d29580af87130024885720ea05f4774200cc57bb4d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47d33128c5b6a7538e59784d5217cc6e339d272423a8f437d253e25a5394b06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d33128c5b6a7538e59784d5217cc6e339d272423a8f437d253e25a5394b06c->enter($__internal_47d33128c5b6a7538e59784d5217cc6e339d272423a8f437d253e25a5394b06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5df6601ac569f31f87cf8454b72755192273f60def283e6540153fc56c36800e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df6601ac569f31f87cf8454b72755192273f60def283e6540153fc56c36800e->enter($__internal_5df6601ac569f31f87cf8454b72755192273f60def283e6540153fc56c36800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_5df6601ac569f31f87cf8454b72755192273f60def283e6540153fc56c36800e->leave($__internal_5df6601ac569f31f87cf8454b72755192273f60def283e6540153fc56c36800e_prof);

        
        $__internal_47d33128c5b6a7538e59784d5217cc6e339d272423a8f437d253e25a5394b06c->leave($__internal_47d33128c5b6a7538e59784d5217cc6e339d272423a8f437d253e25a5394b06c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
