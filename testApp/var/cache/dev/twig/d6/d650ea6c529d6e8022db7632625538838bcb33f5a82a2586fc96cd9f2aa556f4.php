<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c32cfcbd6d9e5fb7b55576d6b25cc06f539402c92902d9d35e80c76a25d0b2a4 extends Twig_Template
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
        $__internal_9980aa4e3a907f55e172c2ba302efe31de09d4aa3f0343eceefc090d15fc14ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9980aa4e3a907f55e172c2ba302efe31de09d4aa3f0343eceefc090d15fc14ea->enter($__internal_9980aa4e3a907f55e172c2ba302efe31de09d4aa3f0343eceefc090d15fc14ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c3a37ade552f4db5a290f834f98ced934d655f9b63fca4092052562240947d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a37ade552f4db5a290f834f98ced934d655f9b63fca4092052562240947d41->enter($__internal_c3a37ade552f4db5a290f834f98ced934d655f9b63fca4092052562240947d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9980aa4e3a907f55e172c2ba302efe31de09d4aa3f0343eceefc090d15fc14ea->leave($__internal_9980aa4e3a907f55e172c2ba302efe31de09d4aa3f0343eceefc090d15fc14ea_prof);

        
        $__internal_c3a37ade552f4db5a290f834f98ced934d655f9b63fca4092052562240947d41->leave($__internal_c3a37ade552f4db5a290f834f98ced934d655f9b63fca4092052562240947d41_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
