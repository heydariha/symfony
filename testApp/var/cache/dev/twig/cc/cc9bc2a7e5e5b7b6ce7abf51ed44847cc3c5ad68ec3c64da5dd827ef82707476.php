<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_788503598b325b0fe2db2d8fd4714b14560fef35ee8d1454c80d66842efb3ce5 extends Twig_Template
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
        $__internal_6968c7d7861d7c0faf0d54d92ab77c7dc1c4a9f1d55e81a29674b7c655affa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6968c7d7861d7c0faf0d54d92ab77c7dc1c4a9f1d55e81a29674b7c655affa94->enter($__internal_6968c7d7861d7c0faf0d54d92ab77c7dc1c4a9f1d55e81a29674b7c655affa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_35cb3b37d4f1bbe3dd0512977c74996d9ef01c33a5b90037f273f9e786be15d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35cb3b37d4f1bbe3dd0512977c74996d9ef01c33a5b90037f273f9e786be15d9->enter($__internal_35cb3b37d4f1bbe3dd0512977c74996d9ef01c33a5b90037f273f9e786be15d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6968c7d7861d7c0faf0d54d92ab77c7dc1c4a9f1d55e81a29674b7c655affa94->leave($__internal_6968c7d7861d7c0faf0d54d92ab77c7dc1c4a9f1d55e81a29674b7c655affa94_prof);

        
        $__internal_35cb3b37d4f1bbe3dd0512977c74996d9ef01c33a5b90037f273f9e786be15d9->leave($__internal_35cb3b37d4f1bbe3dd0512977c74996d9ef01c33a5b90037f273f9e786be15d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
