<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a205b48b361e5f36457eeb0b985669a60611672874e26300fa809852546cf42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a205b48b361e5f36457eeb0b985669a60611672874e26300fa809852546cf42a->enter($__internal_a205b48b361e5f36457eeb0b985669a60611672874e26300fa809852546cf42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_419a7e3700de61276189f8d215ab47aa1bc5a7a1c48f6e2e17432612c31e2de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419a7e3700de61276189f8d215ab47aa1bc5a7a1c48f6e2e17432612c31e2de9->enter($__internal_419a7e3700de61276189f8d215ab47aa1bc5a7a1c48f6e2e17432612c31e2de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a205b48b361e5f36457eeb0b985669a60611672874e26300fa809852546cf42a->leave($__internal_a205b48b361e5f36457eeb0b985669a60611672874e26300fa809852546cf42a_prof);

        
        $__internal_419a7e3700de61276189f8d215ab47aa1bc5a7a1c48f6e2e17432612c31e2de9->leave($__internal_419a7e3700de61276189f8d215ab47aa1bc5a7a1c48f6e2e17432612c31e2de9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b229bb104b4c9826dc261e9ef6afefbec0de401c6f7071547ed850ee094b4426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b229bb104b4c9826dc261e9ef6afefbec0de401c6f7071547ed850ee094b4426->enter($__internal_b229bb104b4c9826dc261e9ef6afefbec0de401c6f7071547ed850ee094b4426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_36303d81f681464cb0d2b291ac3d07a012cfebeed1cc123bf321a6597597008d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36303d81f681464cb0d2b291ac3d07a012cfebeed1cc123bf321a6597597008d->enter($__internal_36303d81f681464cb0d2b291ac3d07a012cfebeed1cc123bf321a6597597008d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_36303d81f681464cb0d2b291ac3d07a012cfebeed1cc123bf321a6597597008d->leave($__internal_36303d81f681464cb0d2b291ac3d07a012cfebeed1cc123bf321a6597597008d_prof);

        
        $__internal_b229bb104b4c9826dc261e9ef6afefbec0de401c6f7071547ed850ee094b4426->leave($__internal_b229bb104b4c9826dc261e9ef6afefbec0de401c6f7071547ed850ee094b4426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_763a25b224e2e2f47c16b7e49ff7ee2323ba92b9345da7fb8357d0f415423aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763a25b224e2e2f47c16b7e49ff7ee2323ba92b9345da7fb8357d0f415423aa5->enter($__internal_763a25b224e2e2f47c16b7e49ff7ee2323ba92b9345da7fb8357d0f415423aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_976b4145e1a601d34684063c5945cc24df543fd47c3eae1ce284e6b0491b94dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b4145e1a601d34684063c5945cc24df543fd47c3eae1ce284e6b0491b94dc->enter($__internal_976b4145e1a601d34684063c5945cc24df543fd47c3eae1ce284e6b0491b94dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_976b4145e1a601d34684063c5945cc24df543fd47c3eae1ce284e6b0491b94dc->leave($__internal_976b4145e1a601d34684063c5945cc24df543fd47c3eae1ce284e6b0491b94dc_prof);

        
        $__internal_763a25b224e2e2f47c16b7e49ff7ee2323ba92b9345da7fb8357d0f415423aa5->leave($__internal_763a25b224e2e2f47c16b7e49ff7ee2323ba92b9345da7fb8357d0f415423aa5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac6e4f34989d54e702aec5c1e408fed70d99d945507d73f464d149ba0edaa5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6e4f34989d54e702aec5c1e408fed70d99d945507d73f464d149ba0edaa5f3->enter($__internal_ac6e4f34989d54e702aec5c1e408fed70d99d945507d73f464d149ba0edaa5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b7c52c2fa4c7abc6d5a4e543e545784dd6d7a9fb48da8a8377b6a9e4478a7efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c52c2fa4c7abc6d5a4e543e545784dd6d7a9fb48da8a8377b6a9e4478a7efe->enter($__internal_b7c52c2fa4c7abc6d5a4e543e545784dd6d7a9fb48da8a8377b6a9e4478a7efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7c52c2fa4c7abc6d5a4e543e545784dd6d7a9fb48da8a8377b6a9e4478a7efe->leave($__internal_b7c52c2fa4c7abc6d5a4e543e545784dd6d7a9fb48da8a8377b6a9e4478a7efe_prof);

        
        $__internal_ac6e4f34989d54e702aec5c1e408fed70d99d945507d73f464d149ba0edaa5f3->leave($__internal_ac6e4f34989d54e702aec5c1e408fed70d99d945507d73f464d149ba0edaa5f3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
