<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_4ae58e4abb7b221792705807f15a587ffc7a2d44293b47ceaad29949820ddf6b extends Twig_Template
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
        $__internal_4281d2157c4c7d81bde746b1211ad204fbf710d402f8e2e2500cbaa905dd7e52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4281d2157c4c7d81bde746b1211ad204fbf710d402f8e2e2500cbaa905dd7e52->enter($__internal_4281d2157c4c7d81bde746b1211ad204fbf710d402f8e2e2500cbaa905dd7e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_74c6694308ae36c44ad8f68ca78a5c62d6fb694f0469520ea87b7b68860bea07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c6694308ae36c44ad8f68ca78a5c62d6fb694f0469520ea87b7b68860bea07->enter($__internal_74c6694308ae36c44ad8f68ca78a5c62d6fb694f0469520ea87b7b68860bea07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_4281d2157c4c7d81bde746b1211ad204fbf710d402f8e2e2500cbaa905dd7e52->leave($__internal_4281d2157c4c7d81bde746b1211ad204fbf710d402f8e2e2500cbaa905dd7e52_prof);

        
        $__internal_74c6694308ae36c44ad8f68ca78a5c62d6fb694f0469520ea87b7b68860bea07->leave($__internal_74c6694308ae36c44ad8f68ca78a5c62d6fb694f0469520ea87b7b68860bea07_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
