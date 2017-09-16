<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_765d92e4f2378ac8f160167b5c9d732c1ca1b0a150c1eee8d34d81d61385fd5c extends Twig_Template
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
        $__internal_433cebd6b718d1351d9adb935bd7f2796488bb39a3be2f72ceb34d01995311c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433cebd6b718d1351d9adb935bd7f2796488bb39a3be2f72ceb34d01995311c1->enter($__internal_433cebd6b718d1351d9adb935bd7f2796488bb39a3be2f72ceb34d01995311c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_73d963b2d5b1c714ec7b8119b8269c69316e4ce9eae6139ba18b4854a355601b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d963b2d5b1c714ec7b8119b8269c69316e4ce9eae6139ba18b4854a355601b->enter($__internal_73d963b2d5b1c714ec7b8119b8269c69316e4ce9eae6139ba18b4854a355601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_433cebd6b718d1351d9adb935bd7f2796488bb39a3be2f72ceb34d01995311c1->leave($__internal_433cebd6b718d1351d9adb935bd7f2796488bb39a3be2f72ceb34d01995311c1_prof);

        
        $__internal_73d963b2d5b1c714ec7b8119b8269c69316e4ce9eae6139ba18b4854a355601b->leave($__internal_73d963b2d5b1c714ec7b8119b8269c69316e4ce9eae6139ba18b4854a355601b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
