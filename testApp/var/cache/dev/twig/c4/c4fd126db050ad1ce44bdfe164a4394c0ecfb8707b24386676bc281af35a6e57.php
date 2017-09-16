<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a727adb1283372f948a178b5998b1d8fc232f21959d7e93fda04f2843acf6c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_916ab946b345b0700011c4519cde3550de40656e36ce731c168a13a0e0c00782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_916ab946b345b0700011c4519cde3550de40656e36ce731c168a13a0e0c00782->enter($__internal_916ab946b345b0700011c4519cde3550de40656e36ce731c168a13a0e0c00782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_fea1e03c4f70fe4a5d821f0be244212e534d08ef796c042caa9bd5af80220001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea1e03c4f70fe4a5d821f0be244212e534d08ef796c042caa9bd5af80220001->enter($__internal_fea1e03c4f70fe4a5d821f0be244212e534d08ef796c042caa9bd5af80220001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_916ab946b345b0700011c4519cde3550de40656e36ce731c168a13a0e0c00782->leave($__internal_916ab946b345b0700011c4519cde3550de40656e36ce731c168a13a0e0c00782_prof);

        
        $__internal_fea1e03c4f70fe4a5d821f0be244212e534d08ef796c042caa9bd5af80220001->leave($__internal_fea1e03c4f70fe4a5d821f0be244212e534d08ef796c042caa9bd5af80220001_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
