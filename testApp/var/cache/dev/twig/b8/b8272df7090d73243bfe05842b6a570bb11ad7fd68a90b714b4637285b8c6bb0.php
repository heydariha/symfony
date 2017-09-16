<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cc4566b22a94cdb61bcf886d5a9c1e4a9352ed39bf8fd66e89a9cab28636bc6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247e77e34305857769da884b0307b8dfa38813cc757ea9250a19cc3584c9f9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247e77e34305857769da884b0307b8dfa38813cc757ea9250a19cc3584c9f9ad->enter($__internal_247e77e34305857769da884b0307b8dfa38813cc757ea9250a19cc3584c9f9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_46e8235f4c381145f9239159c9451fa83639f94b8291c43fa5e7c7d8f3eeaa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e8235f4c381145f9239159c9451fa83639f94b8291c43fa5e7c7d8f3eeaa56->enter($__internal_46e8235f4c381145f9239159c9451fa83639f94b8291c43fa5e7c7d8f3eeaa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_247e77e34305857769da884b0307b8dfa38813cc757ea9250a19cc3584c9f9ad->leave($__internal_247e77e34305857769da884b0307b8dfa38813cc757ea9250a19cc3584c9f9ad_prof);

        
        $__internal_46e8235f4c381145f9239159c9451fa83639f94b8291c43fa5e7c7d8f3eeaa56->leave($__internal_46e8235f4c381145f9239159c9451fa83639f94b8291c43fa5e7c7d8f3eeaa56_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1428d615d5654378386e9fc5a65e6d03ea8cb99234b5c8c2fbf705f6bc535ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1428d615d5654378386e9fc5a65e6d03ea8cb99234b5c8c2fbf705f6bc535ff6->enter($__internal_1428d615d5654378386e9fc5a65e6d03ea8cb99234b5c8c2fbf705f6bc535ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d2f4babc1710e195c41dc644990095ceebfbeed6a828496eb3f68ea5e4ca96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2f4babc1710e195c41dc644990095ceebfbeed6a828496eb3f68ea5e4ca96e->enter($__internal_0d2f4babc1710e195c41dc644990095ceebfbeed6a828496eb3f68ea5e4ca96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0d2f4babc1710e195c41dc644990095ceebfbeed6a828496eb3f68ea5e4ca96e->leave($__internal_0d2f4babc1710e195c41dc644990095ceebfbeed6a828496eb3f68ea5e4ca96e_prof);

        
        $__internal_1428d615d5654378386e9fc5a65e6d03ea8cb99234b5c8c2fbf705f6bc535ff6->leave($__internal_1428d615d5654378386e9fc5a65e6d03ea8cb99234b5c8c2fbf705f6bc535ff6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
