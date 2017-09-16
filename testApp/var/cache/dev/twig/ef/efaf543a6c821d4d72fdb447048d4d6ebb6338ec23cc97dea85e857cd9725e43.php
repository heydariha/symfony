<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_35c315a7fe70822b9ac9fc30197f5dadd28a745917234858869690570edb585c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d925b4c569b5d756223671ed0264270e54a71dd63c0bb576c3230e99c00f4f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d925b4c569b5d756223671ed0264270e54a71dd63c0bb576c3230e99c00f4f6c->enter($__internal_d925b4c569b5d756223671ed0264270e54a71dd63c0bb576c3230e99c00f4f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3b1245a39070cf86c40c709a9fcbcb74362caa9813aeb787d021e38f2c95aaac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1245a39070cf86c40c709a9fcbcb74362caa9813aeb787d021e38f2c95aaac->enter($__internal_3b1245a39070cf86c40c709a9fcbcb74362caa9813aeb787d021e38f2c95aaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d925b4c569b5d756223671ed0264270e54a71dd63c0bb576c3230e99c00f4f6c->leave($__internal_d925b4c569b5d756223671ed0264270e54a71dd63c0bb576c3230e99c00f4f6c_prof);

        
        $__internal_3b1245a39070cf86c40c709a9fcbcb74362caa9813aeb787d021e38f2c95aaac->leave($__internal_3b1245a39070cf86c40c709a9fcbcb74362caa9813aeb787d021e38f2c95aaac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6266894895da8445fed3cb16fa7ad7f0e4270dfa90c0b8ea0ea24bc1a8a03cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6266894895da8445fed3cb16fa7ad7f0e4270dfa90c0b8ea0ea24bc1a8a03cd1->enter($__internal_6266894895da8445fed3cb16fa7ad7f0e4270dfa90c0b8ea0ea24bc1a8a03cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_63d7a9e3a1403344b517b7e324eea04aa111b3485e44fb03dbe69f6205318a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d7a9e3a1403344b517b7e324eea04aa111b3485e44fb03dbe69f6205318a49->enter($__internal_63d7a9e3a1403344b517b7e324eea04aa111b3485e44fb03dbe69f6205318a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_63d7a9e3a1403344b517b7e324eea04aa111b3485e44fb03dbe69f6205318a49->leave($__internal_63d7a9e3a1403344b517b7e324eea04aa111b3485e44fb03dbe69f6205318a49_prof);

        
        $__internal_6266894895da8445fed3cb16fa7ad7f0e4270dfa90c0b8ea0ea24bc1a8a03cd1->leave($__internal_6266894895da8445fed3cb16fa7ad7f0e4270dfa90c0b8ea0ea24bc1a8a03cd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f579e942a57a1272b95b59e3a08c998faee2eec71815aec2d95102d3c74208d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f579e942a57a1272b95b59e3a08c998faee2eec71815aec2d95102d3c74208d->enter($__internal_4f579e942a57a1272b95b59e3a08c998faee2eec71815aec2d95102d3c74208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c37653b67936277ee91c3ac8e0e80b861a965a96c166b7729a684f95e125115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c37653b67936277ee91c3ac8e0e80b861a965a96c166b7729a684f95e125115->enter($__internal_4c37653b67936277ee91c3ac8e0e80b861a965a96c166b7729a684f95e125115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c37653b67936277ee91c3ac8e0e80b861a965a96c166b7729a684f95e125115->leave($__internal_4c37653b67936277ee91c3ac8e0e80b861a965a96c166b7729a684f95e125115_prof);

        
        $__internal_4f579e942a57a1272b95b59e3a08c998faee2eec71815aec2d95102d3c74208d->leave($__internal_4f579e942a57a1272b95b59e3a08c998faee2eec71815aec2d95102d3c74208d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6487a2a9511c84cc6b7b639d6fa4cd325a4271345537e1cb43908129dada0379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6487a2a9511c84cc6b7b639d6fa4cd325a4271345537e1cb43908129dada0379->enter($__internal_6487a2a9511c84cc6b7b639d6fa4cd325a4271345537e1cb43908129dada0379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9f92248fab4c986af027f4ac0d9e47c16cb8cd04f044680174bf0cdc6b5f1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f92248fab4c986af027f4ac0d9e47c16cb8cd04f044680174bf0cdc6b5f1b0->enter($__internal_c9f92248fab4c986af027f4ac0d9e47c16cb8cd04f044680174bf0cdc6b5f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9f92248fab4c986af027f4ac0d9e47c16cb8cd04f044680174bf0cdc6b5f1b0->leave($__internal_c9f92248fab4c986af027f4ac0d9e47c16cb8cd04f044680174bf0cdc6b5f1b0_prof);

        
        $__internal_6487a2a9511c84cc6b7b639d6fa4cd325a4271345537e1cb43908129dada0379->leave($__internal_6487a2a9511c84cc6b7b639d6fa4cd325a4271345537e1cb43908129dada0379_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
