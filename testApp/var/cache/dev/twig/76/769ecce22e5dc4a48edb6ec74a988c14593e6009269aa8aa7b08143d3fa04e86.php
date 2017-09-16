<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c67818556a4512d0dccbd4d42c7ab7bb34200511f30ca0e3741d125103a79061 extends Twig_Template
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
        $__internal_958813739f24e1ada34e941d3ce0bcaf65dce74c96220002e11d3f711641f3e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958813739f24e1ada34e941d3ce0bcaf65dce74c96220002e11d3f711641f3e7->enter($__internal_958813739f24e1ada34e941d3ce0bcaf65dce74c96220002e11d3f711641f3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_130a49c5ded70a8afc6ae2fda4e435b1f53656a9c0c7f2aeff22e6d647d92e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130a49c5ded70a8afc6ae2fda4e435b1f53656a9c0c7f2aeff22e6d647d92e7a->enter($__internal_130a49c5ded70a8afc6ae2fda4e435b1f53656a9c0c7f2aeff22e6d647d92e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_958813739f24e1ada34e941d3ce0bcaf65dce74c96220002e11d3f711641f3e7->leave($__internal_958813739f24e1ada34e941d3ce0bcaf65dce74c96220002e11d3f711641f3e7_prof);

        
        $__internal_130a49c5ded70a8afc6ae2fda4e435b1f53656a9c0c7f2aeff22e6d647d92e7a->leave($__internal_130a49c5ded70a8afc6ae2fda4e435b1f53656a9c0c7f2aeff22e6d647d92e7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
