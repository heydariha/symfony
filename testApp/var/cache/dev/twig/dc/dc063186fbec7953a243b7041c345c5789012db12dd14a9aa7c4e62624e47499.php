<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_45b33dfe01eb19332e88ed5fbfb3c7741313c13cc35bf6df0c62877e6ed675fc extends Twig_Template
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
        $__internal_1008bde0d09cfee051bc50818a9fc1338105ad83ad9eff06eca6e41893feba3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1008bde0d09cfee051bc50818a9fc1338105ad83ad9eff06eca6e41893feba3f->enter($__internal_1008bde0d09cfee051bc50818a9fc1338105ad83ad9eff06eca6e41893feba3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7eef6cf560fc6e681d83430c87432fe295ed8b592dacb9c0dabdd8631f78671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eef6cf560fc6e681d83430c87432fe295ed8b592dacb9c0dabdd8631f78671a->enter($__internal_7eef6cf560fc6e681d83430c87432fe295ed8b592dacb9c0dabdd8631f78671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1008bde0d09cfee051bc50818a9fc1338105ad83ad9eff06eca6e41893feba3f->leave($__internal_1008bde0d09cfee051bc50818a9fc1338105ad83ad9eff06eca6e41893feba3f_prof);

        
        $__internal_7eef6cf560fc6e681d83430c87432fe295ed8b592dacb9c0dabdd8631f78671a->leave($__internal_7eef6cf560fc6e681d83430c87432fe295ed8b592dacb9c0dabdd8631f78671a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
