<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_58c4679a7f5365ff9f08ac70de857d66386d26934acb20f6c0eaf5006a7a16c8 extends Twig_Template
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
        $__internal_8768e470c203dd114cc819e52a98ec9668ffd4da831a2c31daf8589a53f7ae81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8768e470c203dd114cc819e52a98ec9668ffd4da831a2c31daf8589a53f7ae81->enter($__internal_8768e470c203dd114cc819e52a98ec9668ffd4da831a2c31daf8589a53f7ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b8f9dd2941818d054cd6a49e9c49cc236f0f90809f434c602d9f1e34c3ce5c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f9dd2941818d054cd6a49e9c49cc236f0f90809f434c602d9f1e34c3ce5c51->enter($__internal_b8f9dd2941818d054cd6a49e9c49cc236f0f90809f434c602d9f1e34c3ce5c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8768e470c203dd114cc819e52a98ec9668ffd4da831a2c31daf8589a53f7ae81->leave($__internal_8768e470c203dd114cc819e52a98ec9668ffd4da831a2c31daf8589a53f7ae81_prof);

        
        $__internal_b8f9dd2941818d054cd6a49e9c49cc236f0f90809f434c602d9f1e34c3ce5c51->leave($__internal_b8f9dd2941818d054cd6a49e9c49cc236f0f90809f434c602d9f1e34c3ce5c51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
