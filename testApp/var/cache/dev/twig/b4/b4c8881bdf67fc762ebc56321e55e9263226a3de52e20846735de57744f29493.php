<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45491dec442d3cd38ca54e618116e4503bda3b7204917248377e2fbfc0a7dea8 extends Twig_Template
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
        $__internal_b51499981ea10c73186c63004abdca40b73edc338d16ce9ced97fc473f973f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51499981ea10c73186c63004abdca40b73edc338d16ce9ced97fc473f973f15->enter($__internal_b51499981ea10c73186c63004abdca40b73edc338d16ce9ced97fc473f973f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a08b0142c530a4d03432b7a07c029f208dfc04b768a1dc6793eca01a61611a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08b0142c530a4d03432b7a07c029f208dfc04b768a1dc6793eca01a61611a6e->enter($__internal_a08b0142c530a4d03432b7a07c029f208dfc04b768a1dc6793eca01a61611a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_b51499981ea10c73186c63004abdca40b73edc338d16ce9ced97fc473f973f15->leave($__internal_b51499981ea10c73186c63004abdca40b73edc338d16ce9ced97fc473f973f15_prof);

        
        $__internal_a08b0142c530a4d03432b7a07c029f208dfc04b768a1dc6793eca01a61611a6e->leave($__internal_a08b0142c530a4d03432b7a07c029f208dfc04b768a1dc6793eca01a61611a6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
