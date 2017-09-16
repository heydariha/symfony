<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_67f1a80dcd22a9c5a3b1e727e18659ceb16ff2d03f369079be7ad57887e7b122 extends Twig_Template
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
        $__internal_3c3506fe29aa76c96ce774d1320b99fe11b70e800599d1c0803028f3ce60716a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3506fe29aa76c96ce774d1320b99fe11b70e800599d1c0803028f3ce60716a->enter($__internal_3c3506fe29aa76c96ce774d1320b99fe11b70e800599d1c0803028f3ce60716a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_60acc8f5010aa42e3d7cff17cd40e54a2cea35d6380dcfb71c6415e24d63db73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60acc8f5010aa42e3d7cff17cd40e54a2cea35d6380dcfb71c6415e24d63db73->enter($__internal_60acc8f5010aa42e3d7cff17cd40e54a2cea35d6380dcfb71c6415e24d63db73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3c3506fe29aa76c96ce774d1320b99fe11b70e800599d1c0803028f3ce60716a->leave($__internal_3c3506fe29aa76c96ce774d1320b99fe11b70e800599d1c0803028f3ce60716a_prof);

        
        $__internal_60acc8f5010aa42e3d7cff17cd40e54a2cea35d6380dcfb71c6415e24d63db73->leave($__internal_60acc8f5010aa42e3d7cff17cd40e54a2cea35d6380dcfb71c6415e24d63db73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
