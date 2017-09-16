<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c840dc43023b4170bbdcb4d7e476e6b8f043e251a68c73881f59f929c8870486 extends Twig_Template
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
        $__internal_41e2760ecaafc16fb4c8e8be94f1c395dfa4f425d7d139a33e1674fa253c3f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e2760ecaafc16fb4c8e8be94f1c395dfa4f425d7d139a33e1674fa253c3f81->enter($__internal_41e2760ecaafc16fb4c8e8be94f1c395dfa4f425d7d139a33e1674fa253c3f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1ae9957e2e6b09b8eb7b9b3618e0a4643d97a669825e30e33fe890d77226d2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9957e2e6b09b8eb7b9b3618e0a4643d97a669825e30e33fe890d77226d2c2->enter($__internal_1ae9957e2e6b09b8eb7b9b3618e0a4643d97a669825e30e33fe890d77226d2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_41e2760ecaafc16fb4c8e8be94f1c395dfa4f425d7d139a33e1674fa253c3f81->leave($__internal_41e2760ecaafc16fb4c8e8be94f1c395dfa4f425d7d139a33e1674fa253c3f81_prof);

        
        $__internal_1ae9957e2e6b09b8eb7b9b3618e0a4643d97a669825e30e33fe890d77226d2c2->leave($__internal_1ae9957e2e6b09b8eb7b9b3618e0a4643d97a669825e30e33fe890d77226d2c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
