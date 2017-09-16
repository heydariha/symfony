<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5dc4fa9c0d9f981e7d355d75f82d9a8258f8735362b4f39c0cf722608947d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_f392493cc32fd04292d3c29e45f5349b6e1415faffecbf990e5e58daff0c5e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f392493cc32fd04292d3c29e45f5349b6e1415faffecbf990e5e58daff0c5e51->enter($__internal_f392493cc32fd04292d3c29e45f5349b6e1415faffecbf990e5e58daff0c5e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_6da8c25ae6648064b9fa73caffda09f7661ec3c1e32dc4562802b02c48e9e9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da8c25ae6648064b9fa73caffda09f7661ec3c1e32dc4562802b02c48e9e9ba->enter($__internal_6da8c25ae6648064b9fa73caffda09f7661ec3c1e32dc4562802b02c48e9e9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f392493cc32fd04292d3c29e45f5349b6e1415faffecbf990e5e58daff0c5e51->leave($__internal_f392493cc32fd04292d3c29e45f5349b6e1415faffecbf990e5e58daff0c5e51_prof);

        
        $__internal_6da8c25ae6648064b9fa73caffda09f7661ec3c1e32dc4562802b02c48e9e9ba->leave($__internal_6da8c25ae6648064b9fa73caffda09f7661ec3c1e32dc4562802b02c48e9e9ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6030cff8357865f1f5567e832db28423539de8daff53ca7da124cdb6046c60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6030cff8357865f1f5567e832db28423539de8daff53ca7da124cdb6046c60d->enter($__internal_c6030cff8357865f1f5567e832db28423539de8daff53ca7da124cdb6046c60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98f303cdaa0a4472a7e050b70b6cad2097d96b64e9fc3ad2487ae476a8a04ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98f303cdaa0a4472a7e050b70b6cad2097d96b64e9fc3ad2487ae476a8a04ada->enter($__internal_98f303cdaa0a4472a7e050b70b6cad2097d96b64e9fc3ad2487ae476a8a04ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_98f303cdaa0a4472a7e050b70b6cad2097d96b64e9fc3ad2487ae476a8a04ada->leave($__internal_98f303cdaa0a4472a7e050b70b6cad2097d96b64e9fc3ad2487ae476a8a04ada_prof);

        
        $__internal_c6030cff8357865f1f5567e832db28423539de8daff53ca7da124cdb6046c60d->leave($__internal_c6030cff8357865f1f5567e832db28423539de8daff53ca7da124cdb6046c60d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_07dc2b6ca27e72254ccee60105ee36fd206adeeab1dfc988f6a99a27cb35009c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dc2b6ca27e72254ccee60105ee36fd206adeeab1dfc988f6a99a27cb35009c->enter($__internal_07dc2b6ca27e72254ccee60105ee36fd206adeeab1dfc988f6a99a27cb35009c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3e0e876df9937c39cdc95698b854ece4fd5b4be2318797b4cbae89131fd1507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e0e876df9937c39cdc95698b854ece4fd5b4be2318797b4cbae89131fd1507->enter($__internal_f3e0e876df9937c39cdc95698b854ece4fd5b4be2318797b4cbae89131fd1507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3e0e876df9937c39cdc95698b854ece4fd5b4be2318797b4cbae89131fd1507->leave($__internal_f3e0e876df9937c39cdc95698b854ece4fd5b4be2318797b4cbae89131fd1507_prof);

        
        $__internal_07dc2b6ca27e72254ccee60105ee36fd206adeeab1dfc988f6a99a27cb35009c->leave($__internal_07dc2b6ca27e72254ccee60105ee36fd206adeeab1dfc988f6a99a27cb35009c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
