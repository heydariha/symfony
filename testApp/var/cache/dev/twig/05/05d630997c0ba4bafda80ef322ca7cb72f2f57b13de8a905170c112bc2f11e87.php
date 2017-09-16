<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ca57e6366926e051b4ceb7738f9793bf6cc69e4e3d9172170e9fd0acf8a7ed05 extends Twig_Template
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
        $__internal_6dfc9df8702449680dba2037010f1d0d4690c2341e61a586b06c7532bb198f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfc9df8702449680dba2037010f1d0d4690c2341e61a586b06c7532bb198f5d->enter($__internal_6dfc9df8702449680dba2037010f1d0d4690c2341e61a586b06c7532bb198f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bbd2f7682b46a2cb9c9df5f2dcbfc884c27325df9d510d1a0873331c9686e4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd2f7682b46a2cb9c9df5f2dcbfc884c27325df9d510d1a0873331c9686e4c4->enter($__internal_bbd2f7682b46a2cb9c9df5f2dcbfc884c27325df9d510d1a0873331c9686e4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6dfc9df8702449680dba2037010f1d0d4690c2341e61a586b06c7532bb198f5d->leave($__internal_6dfc9df8702449680dba2037010f1d0d4690c2341e61a586b06c7532bb198f5d_prof);

        
        $__internal_bbd2f7682b46a2cb9c9df5f2dcbfc884c27325df9d510d1a0873331c9686e4c4->leave($__internal_bbd2f7682b46a2cb9c9df5f2dcbfc884c27325df9d510d1a0873331c9686e4c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
