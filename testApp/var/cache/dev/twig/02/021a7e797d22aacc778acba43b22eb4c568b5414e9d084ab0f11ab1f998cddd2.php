<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1c27116b5537d65766696e93e3934eaffa5bcd37f61d29d60ec33808aac35695 extends Twig_Template
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
        $__internal_15425c7b0505363cc8dc6fef95e74925dd97e96004c40bfb9a97b521b9f48c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15425c7b0505363cc8dc6fef95e74925dd97e96004c40bfb9a97b521b9f48c29->enter($__internal_15425c7b0505363cc8dc6fef95e74925dd97e96004c40bfb9a97b521b9f48c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_776f1f5516264068ea113b5887bdaf0a4f1b7d2a8569332d454722ac6ed4e10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776f1f5516264068ea113b5887bdaf0a4f1b7d2a8569332d454722ac6ed4e10b->enter($__internal_776f1f5516264068ea113b5887bdaf0a4f1b7d2a8569332d454722ac6ed4e10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_15425c7b0505363cc8dc6fef95e74925dd97e96004c40bfb9a97b521b9f48c29->leave($__internal_15425c7b0505363cc8dc6fef95e74925dd97e96004c40bfb9a97b521b9f48c29_prof);

        
        $__internal_776f1f5516264068ea113b5887bdaf0a4f1b7d2a8569332d454722ac6ed4e10b->leave($__internal_776f1f5516264068ea113b5887bdaf0a4f1b7d2a8569332d454722ac6ed4e10b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
