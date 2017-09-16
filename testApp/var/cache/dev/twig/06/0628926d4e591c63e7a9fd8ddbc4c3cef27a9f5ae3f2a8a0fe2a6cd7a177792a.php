<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a5e9a2548982c5219f7a508f6e3634abeb61eaa0b1949553c202d5fb1af35a8f extends Twig_Template
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
        $__internal_110052e2d92353ac902ae3f0c369bd65781b8dceabf3a550d9e53b86e5184005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110052e2d92353ac902ae3f0c369bd65781b8dceabf3a550d9e53b86e5184005->enter($__internal_110052e2d92353ac902ae3f0c369bd65781b8dceabf3a550d9e53b86e5184005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_e1684451417ef2f843ce94e94e89e6186b43984d8fa9251931f7cb372a16dec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1684451417ef2f843ce94e94e89e6186b43984d8fa9251931f7cb372a16dec2->enter($__internal_e1684451417ef2f843ce94e94e89e6186b43984d8fa9251931f7cb372a16dec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_110052e2d92353ac902ae3f0c369bd65781b8dceabf3a550d9e53b86e5184005->leave($__internal_110052e2d92353ac902ae3f0c369bd65781b8dceabf3a550d9e53b86e5184005_prof);

        
        $__internal_e1684451417ef2f843ce94e94e89e6186b43984d8fa9251931f7cb372a16dec2->leave($__internal_e1684451417ef2f843ce94e94e89e6186b43984d8fa9251931f7cb372a16dec2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
