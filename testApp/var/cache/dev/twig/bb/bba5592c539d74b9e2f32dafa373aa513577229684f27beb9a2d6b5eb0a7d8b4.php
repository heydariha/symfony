<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_472b00460ec97d26e855e0f559bbd8c03f97d0288ba99d9dea8817ea652bcb2a extends Twig_Template
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
        $__internal_8c81cc6a98f62c37c377f5f5ece4c7e608d3109b2efac3dc640de3ee012be886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c81cc6a98f62c37c377f5f5ece4c7e608d3109b2efac3dc640de3ee012be886->enter($__internal_8c81cc6a98f62c37c377f5f5ece4c7e608d3109b2efac3dc640de3ee012be886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b63df48e64d5249363eb158ab637070ab1b25048d5b04cc1f46a1130ae0afea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63df48e64d5249363eb158ab637070ab1b25048d5b04cc1f46a1130ae0afea5->enter($__internal_b63df48e64d5249363eb158ab637070ab1b25048d5b04cc1f46a1130ae0afea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8c81cc6a98f62c37c377f5f5ece4c7e608d3109b2efac3dc640de3ee012be886->leave($__internal_8c81cc6a98f62c37c377f5f5ece4c7e608d3109b2efac3dc640de3ee012be886_prof);

        
        $__internal_b63df48e64d5249363eb158ab637070ab1b25048d5b04cc1f46a1130ae0afea5->leave($__internal_b63df48e64d5249363eb158ab637070ab1b25048d5b04cc1f46a1130ae0afea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
