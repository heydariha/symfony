<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_69d351f20ffd94816e2e88a71f4252fcd05557b24f387403955b8741e2c3bdaf extends Twig_Template
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
        $__internal_8995452ca84b09d3dc7d37ddcb131f61cb631245ef06f9c3caa5854ce645169a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8995452ca84b09d3dc7d37ddcb131f61cb631245ef06f9c3caa5854ce645169a->enter($__internal_8995452ca84b09d3dc7d37ddcb131f61cb631245ef06f9c3caa5854ce645169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_97c1d03fd51714598fc2ccdf34d7193bc61810ee267e90d1be87738a6da7956b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c1d03fd51714598fc2ccdf34d7193bc61810ee267e90d1be87738a6da7956b->enter($__internal_97c1d03fd51714598fc2ccdf34d7193bc61810ee267e90d1be87738a6da7956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8995452ca84b09d3dc7d37ddcb131f61cb631245ef06f9c3caa5854ce645169a->leave($__internal_8995452ca84b09d3dc7d37ddcb131f61cb631245ef06f9c3caa5854ce645169a_prof);

        
        $__internal_97c1d03fd51714598fc2ccdf34d7193bc61810ee267e90d1be87738a6da7956b->leave($__internal_97c1d03fd51714598fc2ccdf34d7193bc61810ee267e90d1be87738a6da7956b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
