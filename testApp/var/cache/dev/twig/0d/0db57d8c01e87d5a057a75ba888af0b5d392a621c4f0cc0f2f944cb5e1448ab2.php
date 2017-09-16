<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c6bcb25bc64029199b697338b5611ac0863b002411388b69b61549bc56dcd9c extends Twig_Template
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
        $__internal_f0db2a708782085b0f1e6a322508c65c14d15d22a14993c5094e62f986a7dee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0db2a708782085b0f1e6a322508c65c14d15d22a14993c5094e62f986a7dee0->enter($__internal_f0db2a708782085b0f1e6a322508c65c14d15d22a14993c5094e62f986a7dee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c67fe658d32c1ee3f577fc77a99fec26375d341e0127a3ef45a2e1637c58f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67fe658d32c1ee3f577fc77a99fec26375d341e0127a3ef45a2e1637c58f7be->enter($__internal_c67fe658d32c1ee3f577fc77a99fec26375d341e0127a3ef45a2e1637c58f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f0db2a708782085b0f1e6a322508c65c14d15d22a14993c5094e62f986a7dee0->leave($__internal_f0db2a708782085b0f1e6a322508c65c14d15d22a14993c5094e62f986a7dee0_prof);

        
        $__internal_c67fe658d32c1ee3f577fc77a99fec26375d341e0127a3ef45a2e1637c58f7be->leave($__internal_c67fe658d32c1ee3f577fc77a99fec26375d341e0127a3ef45a2e1637c58f7be_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d6f3f6aae89b839d0c3464508468aae393219444877290330311842b1a1e5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6f3f6aae89b839d0c3464508468aae393219444877290330311842b1a1e5f9->enter($__internal_3d6f3f6aae89b839d0c3464508468aae393219444877290330311842b1a1e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0652b59761f7079493fefe1a610cacb674b4497343cd7de87244c0c89e58412e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0652b59761f7079493fefe1a610cacb674b4497343cd7de87244c0c89e58412e->enter($__internal_0652b59761f7079493fefe1a610cacb674b4497343cd7de87244c0c89e58412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0652b59761f7079493fefe1a610cacb674b4497343cd7de87244c0c89e58412e->leave($__internal_0652b59761f7079493fefe1a610cacb674b4497343cd7de87244c0c89e58412e_prof);

        
        $__internal_3d6f3f6aae89b839d0c3464508468aae393219444877290330311842b1a1e5f9->leave($__internal_3d6f3f6aae89b839d0c3464508468aae393219444877290330311842b1a1e5f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
