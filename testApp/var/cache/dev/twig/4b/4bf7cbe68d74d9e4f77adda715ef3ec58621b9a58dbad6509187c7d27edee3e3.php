<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_85b555113ae4d252c00beaeaed9569c3879ec276ab2350707bfdd6f5a301d468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7370d2329088480b9716c46f2a82a6dc85fa481967e7bcf97506f1901613bc51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7370d2329088480b9716c46f2a82a6dc85fa481967e7bcf97506f1901613bc51->enter($__internal_7370d2329088480b9716c46f2a82a6dc85fa481967e7bcf97506f1901613bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_941fbed3dca4a9403c498b62c6cabd302fa152c5d5f5ac61259f19f7035e1f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941fbed3dca4a9403c498b62c6cabd302fa152c5d5f5ac61259f19f7035e1f91->enter($__internal_941fbed3dca4a9403c498b62c6cabd302fa152c5d5f5ac61259f19f7035e1f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7370d2329088480b9716c46f2a82a6dc85fa481967e7bcf97506f1901613bc51->leave($__internal_7370d2329088480b9716c46f2a82a6dc85fa481967e7bcf97506f1901613bc51_prof);

        
        $__internal_941fbed3dca4a9403c498b62c6cabd302fa152c5d5f5ac61259f19f7035e1f91->leave($__internal_941fbed3dca4a9403c498b62c6cabd302fa152c5d5f5ac61259f19f7035e1f91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cd2cb596f12aabcf04df532d27ec39ef362916e778e760d850b60c2d5a1794e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd2cb596f12aabcf04df532d27ec39ef362916e778e760d850b60c2d5a1794e->enter($__internal_2cd2cb596f12aabcf04df532d27ec39ef362916e778e760d850b60c2d5a1794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6072867b06717fdfa38f762ced7378b2bc2986c933fa10d4e16d53dc27aacc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6072867b06717fdfa38f762ced7378b2bc2986c933fa10d4e16d53dc27aacc9->enter($__internal_e6072867b06717fdfa38f762ced7378b2bc2986c933fa10d4e16d53dc27aacc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e6072867b06717fdfa38f762ced7378b2bc2986c933fa10d4e16d53dc27aacc9->leave($__internal_e6072867b06717fdfa38f762ced7378b2bc2986c933fa10d4e16d53dc27aacc9_prof);

        
        $__internal_2cd2cb596f12aabcf04df532d27ec39ef362916e778e760d850b60c2d5a1794e->leave($__internal_2cd2cb596f12aabcf04df532d27ec39ef362916e778e760d850b60c2d5a1794e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ee2f915bbf15ab85d22af3974e65d50cbd824bf0d978022a4b9ec37a2282fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ee2f915bbf15ab85d22af3974e65d50cbd824bf0d978022a4b9ec37a2282fe->enter($__internal_56ee2f915bbf15ab85d22af3974e65d50cbd824bf0d978022a4b9ec37a2282fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b30fd8d3b959dc3ddb0198ef0d914738ad0534fd9e44da68ee74c6781229bd41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30fd8d3b959dc3ddb0198ef0d914738ad0534fd9e44da68ee74c6781229bd41->enter($__internal_b30fd8d3b959dc3ddb0198ef0d914738ad0534fd9e44da68ee74c6781229bd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b30fd8d3b959dc3ddb0198ef0d914738ad0534fd9e44da68ee74c6781229bd41->leave($__internal_b30fd8d3b959dc3ddb0198ef0d914738ad0534fd9e44da68ee74c6781229bd41_prof);

        
        $__internal_56ee2f915bbf15ab85d22af3974e65d50cbd824bf0d978022a4b9ec37a2282fe->leave($__internal_56ee2f915bbf15ab85d22af3974e65d50cbd824bf0d978022a4b9ec37a2282fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
