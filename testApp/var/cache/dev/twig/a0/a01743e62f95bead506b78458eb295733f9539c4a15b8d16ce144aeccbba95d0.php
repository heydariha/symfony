<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d71835415ce597d312d6f6ddba2b5bfd71c0672dc36e3b2c75ae3d2b91f5ea2b extends Twig_Template
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
        $__internal_3e46b39d27106d929215b2b3cb4287b22a6a6c5fbcf31c46b40bd91eccc36fa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e46b39d27106d929215b2b3cb4287b22a6a6c5fbcf31c46b40bd91eccc36fa8->enter($__internal_3e46b39d27106d929215b2b3cb4287b22a6a6c5fbcf31c46b40bd91eccc36fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_98904c32e1ee772f7e284f1d07058a96a72b54abbc10d88fa20a5b8ba864f5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98904c32e1ee772f7e284f1d07058a96a72b54abbc10d88fa20a5b8ba864f5fb->enter($__internal_98904c32e1ee772f7e284f1d07058a96a72b54abbc10d88fa20a5b8ba864f5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3e46b39d27106d929215b2b3cb4287b22a6a6c5fbcf31c46b40bd91eccc36fa8->leave($__internal_3e46b39d27106d929215b2b3cb4287b22a6a6c5fbcf31c46b40bd91eccc36fa8_prof);

        
        $__internal_98904c32e1ee772f7e284f1d07058a96a72b54abbc10d88fa20a5b8ba864f5fb->leave($__internal_98904c32e1ee772f7e284f1d07058a96a72b54abbc10d88fa20a5b8ba864f5fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
