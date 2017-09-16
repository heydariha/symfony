<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c23d05f837059f824ecce0e062ccba97781d166ebf8c415ddcdd12ca00dbad2e extends Twig_Template
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
        $__internal_7571325dddc46c88fe9de76bcb35900290e9485b3f35a370e11a916e4c5df9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7571325dddc46c88fe9de76bcb35900290e9485b3f35a370e11a916e4c5df9cb->enter($__internal_7571325dddc46c88fe9de76bcb35900290e9485b3f35a370e11a916e4c5df9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9012ba63319ee8ee2e0a4d11f7685c6869106cf7b7fb53cff8c4791bc41f60ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9012ba63319ee8ee2e0a4d11f7685c6869106cf7b7fb53cff8c4791bc41f60ee->enter($__internal_9012ba63319ee8ee2e0a4d11f7685c6869106cf7b7fb53cff8c4791bc41f60ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7571325dddc46c88fe9de76bcb35900290e9485b3f35a370e11a916e4c5df9cb->leave($__internal_7571325dddc46c88fe9de76bcb35900290e9485b3f35a370e11a916e4c5df9cb_prof);

        
        $__internal_9012ba63319ee8ee2e0a4d11f7685c6869106cf7b7fb53cff8c4791bc41f60ee->leave($__internal_9012ba63319ee8ee2e0a4d11f7685c6869106cf7b7fb53cff8c4791bc41f60ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
