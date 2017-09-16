<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c0d02a7d69967e2e3366a7ebb84ff4c889dd0ded0eaf73db49ab057b1bfa5a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_9831a0420d9825446de27c0153909e9413f863601aafbf3956f449ec175784b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9831a0420d9825446de27c0153909e9413f863601aafbf3956f449ec175784b6->enter($__internal_9831a0420d9825446de27c0153909e9413f863601aafbf3956f449ec175784b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_817f561db2cbc9b3acccc6dcc836c61660258fb894c1845a69856287aef48391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817f561db2cbc9b3acccc6dcc836c61660258fb894c1845a69856287aef48391->enter($__internal_817f561db2cbc9b3acccc6dcc836c61660258fb894c1845a69856287aef48391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9831a0420d9825446de27c0153909e9413f863601aafbf3956f449ec175784b6->leave($__internal_9831a0420d9825446de27c0153909e9413f863601aafbf3956f449ec175784b6_prof);

        
        $__internal_817f561db2cbc9b3acccc6dcc836c61660258fb894c1845a69856287aef48391->leave($__internal_817f561db2cbc9b3acccc6dcc836c61660258fb894c1845a69856287aef48391_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ffcd81e64461bdf0eea3de610e3c38acfd0d1d898a69437dbfb8b28be28a1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffcd81e64461bdf0eea3de610e3c38acfd0d1d898a69437dbfb8b28be28a1f3->enter($__internal_5ffcd81e64461bdf0eea3de610e3c38acfd0d1d898a69437dbfb8b28be28a1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9911c4a35f2836d4bfb62625a6e23ab02e52e6336b9c6fcaa3751cb82a89e8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9911c4a35f2836d4bfb62625a6e23ab02e52e6336b9c6fcaa3751cb82a89e8f8->enter($__internal_9911c4a35f2836d4bfb62625a6e23ab02e52e6336b9c6fcaa3751cb82a89e8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9911c4a35f2836d4bfb62625a6e23ab02e52e6336b9c6fcaa3751cb82a89e8f8->leave($__internal_9911c4a35f2836d4bfb62625a6e23ab02e52e6336b9c6fcaa3751cb82a89e8f8_prof);

        
        $__internal_5ffcd81e64461bdf0eea3de610e3c38acfd0d1d898a69437dbfb8b28be28a1f3->leave($__internal_5ffcd81e64461bdf0eea3de610e3c38acfd0d1d898a69437dbfb8b28be28a1f3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_53c8f29688a1b2728dca96282820ff092d1a36936dce6382eb2dfd50b700a7d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c8f29688a1b2728dca96282820ff092d1a36936dce6382eb2dfd50b700a7d6->enter($__internal_53c8f29688a1b2728dca96282820ff092d1a36936dce6382eb2dfd50b700a7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23be18c489ce94fabe79d2d886112feeae9d445bdbd22444be7389c394205f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23be18c489ce94fabe79d2d886112feeae9d445bdbd22444be7389c394205f9a->enter($__internal_23be18c489ce94fabe79d2d886112feeae9d445bdbd22444be7389c394205f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23be18c489ce94fabe79d2d886112feeae9d445bdbd22444be7389c394205f9a->leave($__internal_23be18c489ce94fabe79d2d886112feeae9d445bdbd22444be7389c394205f9a_prof);

        
        $__internal_53c8f29688a1b2728dca96282820ff092d1a36936dce6382eb2dfd50b700a7d6->leave($__internal_53c8f29688a1b2728dca96282820ff092d1a36936dce6382eb2dfd50b700a7d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
