<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6e97e1a1efa5c479872a56c482c9510c381a38039a4fd43a66f27e564807af7a extends Twig_Template
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
        $__internal_616b251339fc2c51144048c1e763acc09adbfadbec21de17e435ed383911bf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_616b251339fc2c51144048c1e763acc09adbfadbec21de17e435ed383911bf5e->enter($__internal_616b251339fc2c51144048c1e763acc09adbfadbec21de17e435ed383911bf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_db7599746672d5e63a0ae3dcb228f6e6d79e67174aa51fec3347d9e419bd5f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7599746672d5e63a0ae3dcb228f6e6d79e67174aa51fec3347d9e419bd5f21->enter($__internal_db7599746672d5e63a0ae3dcb228f6e6d79e67174aa51fec3347d9e419bd5f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_616b251339fc2c51144048c1e763acc09adbfadbec21de17e435ed383911bf5e->leave($__internal_616b251339fc2c51144048c1e763acc09adbfadbec21de17e435ed383911bf5e_prof);

        
        $__internal_db7599746672d5e63a0ae3dcb228f6e6d79e67174aa51fec3347d9e419bd5f21->leave($__internal_db7599746672d5e63a0ae3dcb228f6e6d79e67174aa51fec3347d9e419bd5f21_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
