<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d9b96ce23200d12f0042b91405cfdfd46fb6c9050a3a9e9f4fd477334b604b86 extends Twig_Template
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
        $__internal_6bb54b037489f1521676d51d31c06b1b9756d9dc0cf3ef331e8cb5d0de6ae90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb54b037489f1521676d51d31c06b1b9756d9dc0cf3ef331e8cb5d0de6ae90e->enter($__internal_6bb54b037489f1521676d51d31c06b1b9756d9dc0cf3ef331e8cb5d0de6ae90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_53d66844f9f1bafff1aea513cccaa7505d8a0874b20f2e9f3a811e8a55df7cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d66844f9f1bafff1aea513cccaa7505d8a0874b20f2e9f3a811e8a55df7cdd->enter($__internal_53d66844f9f1bafff1aea513cccaa7505d8a0874b20f2e9f3a811e8a55df7cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6bb54b037489f1521676d51d31c06b1b9756d9dc0cf3ef331e8cb5d0de6ae90e->leave($__internal_6bb54b037489f1521676d51d31c06b1b9756d9dc0cf3ef331e8cb5d0de6ae90e_prof);

        
        $__internal_53d66844f9f1bafff1aea513cccaa7505d8a0874b20f2e9f3a811e8a55df7cdd->leave($__internal_53d66844f9f1bafff1aea513cccaa7505d8a0874b20f2e9f3a811e8a55df7cdd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
