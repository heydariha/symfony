<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3ff9034d3b534617cfe7f6dc5afc1ebed1d42e8492434eed31d1ab5dd8bf4dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_265583042837b33c6e68191a5da6251ff4fd6136f43da2e4684d7cc16c416fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265583042837b33c6e68191a5da6251ff4fd6136f43da2e4684d7cc16c416fc6->enter($__internal_265583042837b33c6e68191a5da6251ff4fd6136f43da2e4684d7cc16c416fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_959a08e8e83028f2c12527e533b398ac1d1683d6180b2aafd8a6bd07393d5213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959a08e8e83028f2c12527e533b398ac1d1683d6180b2aafd8a6bd07393d5213->enter($__internal_959a08e8e83028f2c12527e533b398ac1d1683d6180b2aafd8a6bd07393d5213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265583042837b33c6e68191a5da6251ff4fd6136f43da2e4684d7cc16c416fc6->leave($__internal_265583042837b33c6e68191a5da6251ff4fd6136f43da2e4684d7cc16c416fc6_prof);

        
        $__internal_959a08e8e83028f2c12527e533b398ac1d1683d6180b2aafd8a6bd07393d5213->leave($__internal_959a08e8e83028f2c12527e533b398ac1d1683d6180b2aafd8a6bd07393d5213_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b16ddc2a4c86f20d5b5619d8f0150f52d17c856e7ef40340d7d4baf82646b7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16ddc2a4c86f20d5b5619d8f0150f52d17c856e7ef40340d7d4baf82646b7fa->enter($__internal_b16ddc2a4c86f20d5b5619d8f0150f52d17c856e7ef40340d7d4baf82646b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2a156ab614e31b20203895d4ca113cdd931ee5292bb3c5d4e619f2f2a253717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a156ab614e31b20203895d4ca113cdd931ee5292bb3c5d4e619f2f2a253717->enter($__internal_a2a156ab614e31b20203895d4ca113cdd931ee5292bb3c5d4e619f2f2a253717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a2a156ab614e31b20203895d4ca113cdd931ee5292bb3c5d4e619f2f2a253717->leave($__internal_a2a156ab614e31b20203895d4ca113cdd931ee5292bb3c5d4e619f2f2a253717_prof);

        
        $__internal_b16ddc2a4c86f20d5b5619d8f0150f52d17c856e7ef40340d7d4baf82646b7fa->leave($__internal_b16ddc2a4c86f20d5b5619d8f0150f52d17c856e7ef40340d7d4baf82646b7fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
