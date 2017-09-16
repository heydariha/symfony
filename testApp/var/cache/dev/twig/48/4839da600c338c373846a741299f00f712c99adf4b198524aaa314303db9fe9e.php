<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_580342ba5d8e36206cfb8dfd9a291e3ec13c68540f404a883ff71e893e36f332 extends Twig_Template
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
        $__internal_70c4ef97b303e080fa7230320fa0ffc44d7730e63cf15986f6bbd9d855c589a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c4ef97b303e080fa7230320fa0ffc44d7730e63cf15986f6bbd9d855c589a6->enter($__internal_70c4ef97b303e080fa7230320fa0ffc44d7730e63cf15986f6bbd9d855c589a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ffc906d57876f4c29b7b010a4dc3ade3c5553f71045ef2f9421f45f42d4e8d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc906d57876f4c29b7b010a4dc3ade3c5553f71045ef2f9421f45f42d4e8d3a->enter($__internal_ffc906d57876f4c29b7b010a4dc3ade3c5553f71045ef2f9421f45f42d4e8d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_70c4ef97b303e080fa7230320fa0ffc44d7730e63cf15986f6bbd9d855c589a6->leave($__internal_70c4ef97b303e080fa7230320fa0ffc44d7730e63cf15986f6bbd9d855c589a6_prof);

        
        $__internal_ffc906d57876f4c29b7b010a4dc3ade3c5553f71045ef2f9421f45f42d4e8d3a->leave($__internal_ffc906d57876f4c29b7b010a4dc3ade3c5553f71045ef2f9421f45f42d4e8d3a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
