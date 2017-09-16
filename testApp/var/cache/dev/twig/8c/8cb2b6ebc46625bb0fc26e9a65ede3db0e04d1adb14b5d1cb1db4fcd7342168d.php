<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_18cb62751a647ab21cf36348c09ff029a1cce9ef2c8cb082dc2cf1827cd8bd6f extends Twig_Template
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
        $__internal_e719e5d8b96de11d587625b1b559f05c8d4651dd3ed8e7695d9455d8198341d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e719e5d8b96de11d587625b1b559f05c8d4651dd3ed8e7695d9455d8198341d5->enter($__internal_e719e5d8b96de11d587625b1b559f05c8d4651dd3ed8e7695d9455d8198341d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e81a54b5c5801ffc04480c7185cdd480ee23a84f89dab263898f15801201772f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81a54b5c5801ffc04480c7185cdd480ee23a84f89dab263898f15801201772f->enter($__internal_e81a54b5c5801ffc04480c7185cdd480ee23a84f89dab263898f15801201772f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e719e5d8b96de11d587625b1b559f05c8d4651dd3ed8e7695d9455d8198341d5->leave($__internal_e719e5d8b96de11d587625b1b559f05c8d4651dd3ed8e7695d9455d8198341d5_prof);

        
        $__internal_e81a54b5c5801ffc04480c7185cdd480ee23a84f89dab263898f15801201772f->leave($__internal_e81a54b5c5801ffc04480c7185cdd480ee23a84f89dab263898f15801201772f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
