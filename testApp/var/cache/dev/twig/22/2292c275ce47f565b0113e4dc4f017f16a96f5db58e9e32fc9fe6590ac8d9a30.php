<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_92b5add0d24ca0ad8c7a5440a2fd9b588025f39b146480613a48550b9ca2694d extends Twig_Template
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
        $__internal_259dcf45c88ce9a77fe64531afaf62686f73dc58017ed88a9357de7fe115b8b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259dcf45c88ce9a77fe64531afaf62686f73dc58017ed88a9357de7fe115b8b3->enter($__internal_259dcf45c88ce9a77fe64531afaf62686f73dc58017ed88a9357de7fe115b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2a51fac6e6354b2feb0916230b60a009c4a2f44c10fe260a38b9626538b59342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a51fac6e6354b2feb0916230b60a009c4a2f44c10fe260a38b9626538b59342->enter($__internal_2a51fac6e6354b2feb0916230b60a009c4a2f44c10fe260a38b9626538b59342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_259dcf45c88ce9a77fe64531afaf62686f73dc58017ed88a9357de7fe115b8b3->leave($__internal_259dcf45c88ce9a77fe64531afaf62686f73dc58017ed88a9357de7fe115b8b3_prof);

        
        $__internal_2a51fac6e6354b2feb0916230b60a009c4a2f44c10fe260a38b9626538b59342->leave($__internal_2a51fac6e6354b2feb0916230b60a009c4a2f44c10fe260a38b9626538b59342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
