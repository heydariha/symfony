<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08eda9fd8f4586963fcd9b6037d2dd27f2cf59667da62654227fb0c8ec97dfd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a76e166bb21f85be33c9c56b523bdb6af4c2ec6db6ddaee5f52df9f3a055d160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76e166bb21f85be33c9c56b523bdb6af4c2ec6db6ddaee5f52df9f3a055d160->enter($__internal_a76e166bb21f85be33c9c56b523bdb6af4c2ec6db6ddaee5f52df9f3a055d160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_37f9078c8018201e94418280db6770092718566c9b44bbccc6177e709cc7b7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f9078c8018201e94418280db6770092718566c9b44bbccc6177e709cc7b7db->enter($__internal_37f9078c8018201e94418280db6770092718566c9b44bbccc6177e709cc7b7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76e166bb21f85be33c9c56b523bdb6af4c2ec6db6ddaee5f52df9f3a055d160->leave($__internal_a76e166bb21f85be33c9c56b523bdb6af4c2ec6db6ddaee5f52df9f3a055d160_prof);

        
        $__internal_37f9078c8018201e94418280db6770092718566c9b44bbccc6177e709cc7b7db->leave($__internal_37f9078c8018201e94418280db6770092718566c9b44bbccc6177e709cc7b7db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab1fe6293b963307ccd57aeee0081e3d8919ab1a0f1c78edca340e30c60b1291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1fe6293b963307ccd57aeee0081e3d8919ab1a0f1c78edca340e30c60b1291->enter($__internal_ab1fe6293b963307ccd57aeee0081e3d8919ab1a0f1c78edca340e30c60b1291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1059f3dadfe8ad20cce667dff4f92c2c796ea58f2ef2769c1b9acd4f265cb753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1059f3dadfe8ad20cce667dff4f92c2c796ea58f2ef2769c1b9acd4f265cb753->enter($__internal_1059f3dadfe8ad20cce667dff4f92c2c796ea58f2ef2769c1b9acd4f265cb753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1059f3dadfe8ad20cce667dff4f92c2c796ea58f2ef2769c1b9acd4f265cb753->leave($__internal_1059f3dadfe8ad20cce667dff4f92c2c796ea58f2ef2769c1b9acd4f265cb753_prof);

        
        $__internal_ab1fe6293b963307ccd57aeee0081e3d8919ab1a0f1c78edca340e30c60b1291->leave($__internal_ab1fe6293b963307ccd57aeee0081e3d8919ab1a0f1c78edca340e30c60b1291_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd2f10c02145b679e633abe258a1f955a5f961d2ebce938b0af51fa9c4851097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2f10c02145b679e633abe258a1f955a5f961d2ebce938b0af51fa9c4851097->enter($__internal_fd2f10c02145b679e633abe258a1f955a5f961d2ebce938b0af51fa9c4851097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2b23aada5b0246f47dfaa604dd5ed30f91ba768bd3235d1e8f89abff3adafeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b23aada5b0246f47dfaa604dd5ed30f91ba768bd3235d1e8f89abff3adafeb->enter($__internal_d2b23aada5b0246f47dfaa604dd5ed30f91ba768bd3235d1e8f89abff3adafeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2b23aada5b0246f47dfaa604dd5ed30f91ba768bd3235d1e8f89abff3adafeb->leave($__internal_d2b23aada5b0246f47dfaa604dd5ed30f91ba768bd3235d1e8f89abff3adafeb_prof);

        
        $__internal_fd2f10c02145b679e633abe258a1f955a5f961d2ebce938b0af51fa9c4851097->leave($__internal_fd2f10c02145b679e633abe258a1f955a5f961d2ebce938b0af51fa9c4851097_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cd00e6be695e4f2acc0d88905cefc4c7caa3fcda1249c5a096bc69f1b8840ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd00e6be695e4f2acc0d88905cefc4c7caa3fcda1249c5a096bc69f1b8840ed->enter($__internal_9cd00e6be695e4f2acc0d88905cefc4c7caa3fcda1249c5a096bc69f1b8840ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fba75099ddaf62290b66c99cec449a9a1f8f425baa796374e5734c9f235564c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba75099ddaf62290b66c99cec449a9a1f8f425baa796374e5734c9f235564c9->enter($__internal_fba75099ddaf62290b66c99cec449a9a1f8f425baa796374e5734c9f235564c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fba75099ddaf62290b66c99cec449a9a1f8f425baa796374e5734c9f235564c9->leave($__internal_fba75099ddaf62290b66c99cec449a9a1f8f425baa796374e5734c9f235564c9_prof);

        
        $__internal_9cd00e6be695e4f2acc0d88905cefc4c7caa3fcda1249c5a096bc69f1b8840ed->leave($__internal_9cd00e6be695e4f2acc0d88905cefc4c7caa3fcda1249c5a096bc69f1b8840ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
